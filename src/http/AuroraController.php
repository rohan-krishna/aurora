<?php

namespace bluehexagon\aurora\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuroraController extends Controller {
    
    public function index()
    {
        # code...
        $users = User::all();
        return view('aurora::users.index', compact('users'));
    }

    public function create()
    {
        # code...
        return view('aurora::users.create');
    }

    public function edit(User $user)
    {
        # code...
        return $user;
    }

    public function delete(User $user)
    {
        # code...
        return $user;
    }


}