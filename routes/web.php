<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FormandoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListaPresencaController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\MensagensController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\TurmaFormandoController;
use App\Mail\EnviarEmail;
use App\Models\Blog\Blog;
use App\Models\Curso\Curso;
use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
use App\Models\Turma\Turma;
use App\Models\User;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::middleware(['auth'])->group(function () {

    Route::get("dashboard", [DashboardController::class, 'dashboard'])->name("dashboard");
    Route::post('/notificacoes/marcar-como-lida/{id}', [DashboardController::class, 'marcarComoLida']);
    Route::post('/notifications/mark-as-read', [DashboardController::class, 'markAsRead'])->name('notifications.markAsRead');
});

// INDEX
Route::get('/', [IndexController::class, 'index'])->name('/');
Route::get('/Curso-detalhes/{cursos}', [IndexController::class, 'Curso_Show'])->name('indexCurso.show');
Route::get('/Inscrever-Curso/{cursoID}', [IndexController::class, 'Inscrever_Curso'])->name('inscrever.curso');
Route::get('/Curso', [IndexController::class, 'Todos_Cursos'])->name('todosCursos');
Route::get('/Detalhes-Evento/{id}', [IndexController::class, 'Evento_Show'])->name('evento.detalhes');


Route::get('/sobre', function () {
    return view('layouts user/sobre');
});


Route::get('/show', function () {
    return view('layouts user/Cursos/show');
});


Route::get('/evento', function () {
    return view('layouts user/Evento/evento');
});

Route::get('/evento-detalhe', function () {
    return view('layouts user/Evento/show');
});

Route::get('/equipe', function () {
    return view('layouts user/Equipe/equipe');
});
Route::get('/equipe-detalhes', function () {
    return view('layouts user/Equipe/show');
});



// Route::get('/dashboard', function () {
//     return view('/layouts.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', function () {
// return view("User Admin/index");
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/categoria', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('/categoria', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::get('/categoria/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show');
    Route::get('/categoria/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('/categoria/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('/categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
    Route::get("/generate-pdf/categoria", [CategoriaController::class, 'generatePdf'])->name("categorias.pdf");

    // EVENTO
    Route::resource('eventos', EventoController::class)->names([
        'index' => 'eventos.index',
        'create' => 'eventos.create',
        'store' => 'eventos.store',
        'edit' => 'eventos.edit',
        'update' => 'eventos.update',
        'destroy' => 'eventos.destroy'
    ]);
    Route::get("/generate-pdf/evento", [EventoController::class, 'generatePdf'])->name("eventos.pdf");

    // curso
    Route::resource('cursos', CursoController::class)->names([
        'index' => 'cursos.index',
        'create' => 'cursos.create',
        'store' => 'cursos.store',
        'show' => 'cursos.show',
        'edit' => 'cursos.edit',
        'update' => 'cursos.update',
        'destroy' => 'cursos.destroy'
    ]);
    Route::get("/generate-pdf/curso", [CursoController::class, 'generatePdf'])->name("cursos.pdf");

    // MODULOS
    Route::resource('modulos', ModuloController::class)->names([
        'index' => 'modulos.index',
        'create' => 'modulos.create',
        'store' => 'modulos.store',
        'show' => 'modulos.show',
        'edit' => 'modulos.edit',
        'update' => 'modulos.update',
        'destroy' => 'modulos.destroy'
    ]);
    Route::get("/generate-pdf/modulo", [ModuloController::class, 'generatePdf'])->name("modulos.pdf");

    // DEPARTAMENTO
    Route::resource('departamentos', DepartamentoController::class)->names([
        'index' => 'departamentos.index',
        'create' => 'departamentos.create',
        'store' => 'departamentos.store',
        'show' => 'departamentos.show',
        'edit' => 'departamentos.edit',
        'update' => 'departamentos.update',
        'destroy' => 'departamentos.destroy'
    ]);
    Route::get("/generate-pdf/departamento", [DepartamentoController::class, 'generatePdf'])->name("departamentos.pdf");


    // Funcionario
    Route::resource('funcionarios', FuncionarioController::class)->names([
        'index' => 'funcionarios.index',
        'create' => 'funcionarios.create',
        'store' => 'funcionarios.store',
        'show' => 'funcionarios.show',
        'edit' => 'funcionarios.edit',
        'update' => 'funcionarios.update',
        'destroy' => 'funcionarios.destroy'
    ]);
    Route::get("/generate-pdf/funcionario", [FuncionarioController::class, 'generatePdf'])->name("funcionarios.pdf");

    // Sala
    Route::resource('salas', SalaController::class)->names([
        'index' => 'salas.index',
        'create' => 'salas.create',
        'store' => 'salas.store',
        'show' => 'salas.show',
        'edit' => 'salas.edit',
        'update' => 'salas.update',
        'destroy' => 'salas.destroy'
    ]);
    Route::get("/generate-pdf/sala", [SalaController::class, 'generatePdf'])->name("salas.pdf");

    // Formando
    Route::resource('formandos', FormandoController::class)->names([
        'index' => 'formandos.index',
        'create' => 'formandos.create',
        'store' => 'formandos.store',
        'show' => 'formandos.show',
        'edit' => 'formandos.edit',
        'update' => 'formandos.update',
        'destroy' => 'formandos.destroy'
    ]);
    Route::get("/generate-pdf/formando", [FormandoController::class, 'generatePdf'])->name("formandos.pdf");

    // Turma
    Route::resource('turmas', TurmaController::class)->names([
        'index' => 'turmas.index',
        'create' => 'turmas.create',
        'store' => 'turmas.store',
        'show' => 'turmas.show',
        'edit' => 'turmas.edit',
        'update' => 'turmas.update',
        'destroy' => 'turmas.destroy'
    ]);
    Route::get("/generate-pdf/turmas", [TurmaController::class, 'generatePdf'])->name("turmas.pdf");

    // Turma_Formando
    Route::resource('turma_formandos', TurmaFormandoController::class)->names([
        'index' => 'turma_formandos.index',
        'create' => 'turma_formandos.create',
        'store' => 'turma_formandos.store',
        'show' => 'turma_formandos.show',
        'edit' => 'turma_formandos.edit',
        'update' => 'turma_formandos.update',
        'destroy' => 'turma_formandos.destroy'
    ]);
    Route::get("/generate-pdf/turma_formandos", [TurmaFormandoController::class, 'generatePdf'])->name("turma_formandos.pdf");
    Route::get('/turma-formando/retirar/{id}', [TurmaController::class, 'eliminar'])->name('turma-formando.eliminar');

    Route::resource('lista_presencas', ListaPresencaController::class)->names([
        'index' => 'lista_presencas.index',
        'create' => 'lista_presencas.create',
        'store' => 'lista_presencas.store',
        'show' => 'lista_presencas.show',
        'edit' => 'lista_presencas.edit',
        'update' => 'lista_presencas.update',
        'destroy' => 'lista_presencas.destroy'
    ]);

    Route::get("/generate-pdf/lista_presencas", [ListaPresencaController::class, 'generatePdf'])->name("lista_presencas.pdf");



    // User
    Route::resource('users', RegisteredUserController::class)->names([
        'index' => 'users.index',
        // 'create' => 'users.create',
        // 'store' => 'users.store',
        // 'show' => 'users.show',
        'edit' => 'users.edit',
        'update' => 'users.update',
        // 'destroy' => 'users.destroy'
    ]);

    //PAGAMENTOS
    Route::resource('pagamentos', PagamentoController::class)->names([
        'index' => 'pagamentos.index',
        'create' => 'pagamentos.create',
        'store' => 'pagamentos.store',
        'show' => 'pagamentos.show',
        'edit' => 'pagamentos.edit',
        'update' => 'pagamentos.update',
        'destroy' => 'pagamentos.destroy'
    ]);
    Route::post("/pagamentos/formando", [PagamentoController::class, 'pesquisar'])->name("pagamentos.pesquisar");

    Route::get("/generate-pdf/pagamentos", [PagamentoController::class, 'generatePdf'])->name("pagamentos.pdf");

    //PAGAMENTOS
    Route::resource('matriculas', MatriculaController::class)->names([
        'index' => 'matriculas.index',
        'create' => 'matriculas.create',
        'store' => 'matriculas.store',
        'show' => 'matriculas.show',
        'edit' => 'matriculas.edit',
        'update' => 'matriculas.update',
        'destroy' => 'matriculas.destroy'
    ]);
    Route::get("/generate-pdf/matriculas", [PagamentoController::class, 'generatePdf'])->name("pagamentos.pdf");

    //MENSAGENS
    Route::resource('mensagens', MensagensController::class)->names([
        'index' => 'mensagens.index',
        'create' => 'mensagens.create',
        'store' => 'mensagens.store',
        'show' => 'mensagens.show',
        'edit' => 'mensagens.edit',
        'update' => 'mensagens.update',
        'destroy' => 'mensagens.destroy'
    ]);
    Route::get("/generate-pdf/mensagens", [PagamentoController::class, 'generatePdf'])->name("mensagens.pdf");
});


Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('auth/google/callback', function () {

    $faker = \Faker\Factory::create();
    $senha = $faker->password(5, 10);

    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::firstOrCreate([
        'email' => $googleUser->getEmail(),
    ], [
        'name' => $googleUser->getName(),
        'google_id' => $googleUser->getId(),
        'password' => Hash::make($senha), // senha aleatória
    ]);

    Auth::login($user);

    return redirect('/'); // Redireciona para uma página desejada
});

//BLOG
Route::resource('blogs', BlogController::class)->names([
    'index' => 'blogs.index',
    'create' => 'blogs.create',
    'store' => 'blogs.store',
    'show' => 'blogs.show',
    'edit' => 'blogs.edit',
    'update' => 'blogs.update',
    'destroy' => 'blogs.destroy'
]);

Route::get("/Blog-Posts", [BlogController::class, 'post'])->name("blogs.post");


// COMENTARIO
Route::post('/posts/{post}/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');


require __DIR__ . '/auth.php';
