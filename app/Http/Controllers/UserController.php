<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $title = 'Usuarios';

        return view('users.index')-> with(compact('users', 'title'));

        /*return view('users.index')
            ->with('users', User::all())
            ->with('title', 'Listado de usuarios');*/
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        return view('users.store');
    }

    public function show(User $user)
    {
        if($user == null) {
            return response()->view('errors.404', [], 404);
        }

        return view('users.show', compact('user'));
    }
}
