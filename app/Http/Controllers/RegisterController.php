<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Método index
    public function index() {
        return view('auth.register');
    }

    //Método store
    public function store(Request $request) {
        //!Validación del Form registro
        $this->validate($request, [
            'name'=> 'required|min:5',
            'username'=>'required|unique:users|min:5|max:7',
            'email'=>'required|email|unique:users|max:20',
            'pwd'=>'required'
        ]);
    }
}
