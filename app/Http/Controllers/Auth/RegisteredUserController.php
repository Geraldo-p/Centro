<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Contacto\Contacto;
use App\Models\Endereco\Endereco;
use App\Models\Formando\Formando;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function index(): View
    {
        $users= User::orderBy("name")->get();
        return view('auth.index', compact("users"));
    }
    public function create(): View
    {
        return view('auth.register');
    }

    public function edit(User $user): View
    {
        return view('auth.update', compact("user"));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        try {

            $user->update($request->all());
            return redirect()->route('users.index')->with('sucesso', 'Utilizador "' . $user->name . '" atualizado com sucesso.');
            
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar os dados do Utilizador "' . $user->name . '". Por favor, tente novamente.');
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'name.required' => 'O Nome do Utilizador é obrigatório.',
            'name.unique' => 'O Nome de Utilizador já se encontra em uso.',
            'name.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'email.required' => 'O email é obrigatório.',
            'email.lowercase' => 'O email deve estar em letras minúsculas.',
            'email.email' => 'Forneça um endereço de email válido.',
            'email.max' => 'O campo email não pode ter mais de 255 caracteres.',
            'email.unique' => 'O email fornecido já está em uso.',
            'password.required' => 'A senha é obrigatório.',
            'password.confirmed' => 'A confirmação da senha não coincide.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nivel_acesso' => 'Formando'
        ]);

        //criar formando assim que abrir uma conta no sistema
        $endereco = Endereco::create($request->all());
        $contacto = Contacto::create($request->all());
        Formando::create(
            [
                'nome' => $request->name,
                "endereco_id" => $contacto->id,
                "contacto_id" => $endereco->id,
                'id_us' => $user->id
            ]
        );

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
