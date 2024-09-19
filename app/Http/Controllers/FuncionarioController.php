<?php

namespace App\Http\Controllers;

use App\Models\Funcionario\Funcionario;
use App\Http\Requests\StoreFuncionarioRequest;
use App\Http\Requests\UpdateFuncionarioRequest;
use App\Models\Contacto\Contacto;
use App\Models\Departamento\departamento;
use App\Models\Endereco\Endereco;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = funcionario::orderBy('nome')->get();
        return view('admin.Funcionario.index', compact('funcionarios'));
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
        $valencia = departamento::orderBy("nome")->get();
        return view('admin.Funcionario.create', compact('valencia', 'countries'));
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreFuncionarioRequest $request)
    {

        try {
            $faker = \Faker\Factory::create();

            // depois de criar mandar as credenciais por email - resolver isso depois
            $user = User::create([
                'name' => $faker->name,
                'email' => $request->email,
                'password' => Hash::make($faker->password),
                'nivel_acesso' => $request->cargo
            ]);

            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }

            $doc = null;
            $file = null;
            if ($request->hasFile('documento')) {
                $file = $request->file('documento');
                $doc = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("arquivo"), $doc);
            }
            // provincia2
            // municipio2
            $endereco = Endereco::create($request->all());
            $contacto = Contacto::create($request->all());

            funcionario::create(
                [
                    "endereco_id" => $contacto->id,
                    "contacto_id" => $endereco->id,
                    'id_us' => $user->id,
                    'foto' => $image_name,
                    'documento' => $doc,
                    'provincia' => $request->input("provincia2"),
                    'municipio' => $request->input("municipio2")
                ] + $request->all()
            );

            return back()->with('sucesso', 'funcionario "' . $request->input("nome") . '" criado com sucesso. As crêdencias do Funcionario foram enviadas no email do mesmo');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar o funcionario. "' . $request->input("nome") . '"');
        }
    }

    /**
     * Exibe o recurso especificado.
     */
    
    public function show(funcionario $funcionario)
    {
        return view('admin.Funcionario.show', compact('funcionario'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Funcionario $funcionario)
    {
        $client = new Client();
        $response = $client->get('https://restcountries.com/v3.1/all');
        $countries = json_decode($response->getBody(), true);

        // Ordenar os países por nome
        usort($countries, function ($a, $b) {
            return strcmp($a['name']['common'], $b['name']['common']);
        });
        $valencia = departamento::orderBy("nome")->get();

        return view('admin.Funcionario.update', compact('funcionario', 'countries', 'valencia'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateFuncionarioRequest $request, Funcionario $funcionario)
    {
        try {
            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }

            $doc = null;
            $file = null;
            if ($request->hasFile('documento')) {
                $file = $request->file('documento');
                $doc = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("arquivo"), $doc);
            }
            // provincia2
            // municipio2
            $funcionario->contactos->update($request->all());
            $funcionario->enderecos->update($request->all());

            if ($request->hasFile('foto')) {
                $funcionario->update(
                    [
                        'provincia' => $request->input("provincia2"),
                        'municipio' => $request->input("municipio2"),
                        'foto' => $image_name
                    ] + $request->except(['documento'])
                );
            }
            if ($request->hasFile('documento')) {
                $funcionario->update(
                    [
                        'provincia' => $request->input("provincia2"),
                        'municipio' => $request->input("municipio2"),
                        'documento' => $doc
                    ] + $request->except(['foto'])
                );
            }

            if (!$request->hasFile('documento') && !$request->hasFile('foto')) {

                $funcionario->update([
                    'provincia' => $request->input("provincia2"),
                    'municipio' => $request->input("municipio2")
                ] + $request->except(['foto', 'documento']));
            }




            return redirect()->route('funcionarios.index')->with('sucesso', 'funcionario "' . $funcionario->nome . '" atualizado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar o funcionario "' . $funcionario->nome . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Funcionario $funcionario)
    {
        try {
            $funcionario->delete();
            return back()->with('sucesso', 'O funcionario "' . $funcionario->nome . '" foi excluído com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir o funcionario "' . $funcionario->nome . '". Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Funcionario.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
