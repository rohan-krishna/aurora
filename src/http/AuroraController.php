<?php

namespace bluehexagon\aurora\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use bluehexagon\aurora\Models\AuroraUser;

class AuroraController extends Controller {
    
    public function index()
    {
        # code...
        $users = AuroraUser::all();
        return view('aurora::users.index', compact('users'));
    }


}