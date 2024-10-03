<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $notifications = $user->unreadNotifications->sortByDesc('created_at');
        return view("layouts.dashboard", compact("notifications"));
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
