<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function create() {
        return view('register');
    }

    public function store(Request $informacoes) {
        
        $input = $informacoes->all();
        User::create($input);

        echo 'usuario criado com sucesso';
        return redirect()->back()->with('message', 'Usuario Cadastrado com Sucesso');
    }
}
