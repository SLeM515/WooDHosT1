<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $servers = Server::with('owner')->get();
        return view('dashboard.index', compact('servers'));
    }

    public function manageServer($id)
    {
        $server = Server::findOrFail($id);
        return view('dashboard.manage', compact('server'));
    }

    public function users()
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    public function settings()
    {
        return view('dashboard.settings');
    }
}
