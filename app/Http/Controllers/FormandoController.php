<?php

namespace App\Http\Controllers;

use App\Models\Formando\Formando;
use App\Http\Requests\StoreFormandoRequest;
use App\Http\Requests\UpdateFormandoRequest;
use App\Models\Contacto\Contacto;
use App\Models\Endereco\Endereco;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class FormandoController extends Controller
{

    public function index()
    {
        $formandos = Formando::orderBy('nome')->get();
        return view('admin.Formando.index', compact('formandos'));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        $client = new Client();
        $response = $client->get('https://restcountries.com/v3.1/all');
        $countries = json_decode($response->getBody(), true);

        // Ordenar os países por nome
        usort($countries, function ($a, $b) {
            return strcmp($a['name']['common'], $b['name']['common']);
        });

        return view('admin.Formando.create', compact('countries'));
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreFormandoRequest $request)
    {

        try {

            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }

            $endereco = Endereco::create($request->all());
            $contacto = Contacto::create($request->all());

            formando::create(
                [
                    "endereco_id" => $contacto->id,
                    "contacto_id" => $endereco->id,
                    'id_us' => Auth::id(),
                    'foto' => $image_name,
                    'num_formando' => rand(1000, 9000) . "UE" . Auth::id(),
                    'provincia' => $request->input("provincia2"),
                    'municipio' => $request->input("municipio2")
                ] + $request->all()
            );

            return back()->with('sucesso', 'formando "' . $request->input("nome") . '" criado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar o formando. "' . $request->input("nome") . '"');
        }
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Formando $formando)
    {
        return view('admin.Formando.show', compact('formando'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Formando $formando)
    {
        $client = new Client();
        $response = $client->get('https://restcountries.com/v3.1/all');
        $countries = json_decode($response->getBody(), true);

        // Ordenar os países por nome
        usort($countries, function ($a, $b) {
            return strcmp($a['name']['common'], $b['name']['common']);
        });
        return view('admin.Formando.update', compact('formando', 'countries'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateFormandoRequest $request, Formando $formando)
    {
        try {
            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }

            $formando->contactos->update($request->all());
            $formando->enderecos->update($request->all());

            if ($request->hasFile('foto')) {
                $formando->update(
                    [
                        'provincia' => $request->input("provincia2"),
                        'municipio' => $request->input("municipio2"),
                        'foto' => $image_name
                    ] + $request->all()
                );
            } else {
                $formando->update([
                    'provincia' => $request->input("provincia2"),
                    'municipio' => $request->input("municipio2")
                ] + $request->except(['foto']));
            }

            return redirect()->route('formandos.index')->with('sucesso', 'formando "' . $formando->nome . '" atualizado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar o formando "' . $formando->nome . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Formando $formando)
    {
        try {
            $formando->delete();
            return back()->with('sucesso', 'O formando "' . $formando->nome . '" foi excluído com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir o formando "' . $formando->nome . '". Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Formando.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
