<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Curso\Curso;
use App\Models\Formando\Formando;
use App\Models\Matricula\Matricula;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $notifications = $user->unreadNotifications->sortByDesc('created_at');
        $usuarios = User::orderBy("name")->get();
        $formandos = Formando::orderBy("nome")->get();
        $cursos = Curso::orderBy("nome")->get();
        // $matriculas = Matricula::get();

        $qtdUs = $usuarios->count();
        $inscPendente = Formando::whereDoesntHave('matriculas')->count();
        


        // dd($notifications);
        return view("layouts.dashboard", compact("notifications","inscPendente","qtdUs"));
    }

    public function marcarComoLida($id)
    {
        // Busca a notificação pelo ID e marca como lida
        $notification = DatabaseNotification::find($id);

        if ($notification) {
            $notification->markAsRead(); // Marca a notificação como lida
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
    public function markAsRead(Request $request)
    {
        $user = Auth::user();

        // Marca todas as notificações não lidas como lidas
        $user->unreadNotifications->markAsRead();

        return response()->json(['success' => true]);
    }
}
