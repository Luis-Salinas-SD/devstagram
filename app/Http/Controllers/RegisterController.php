<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Método index
    public function index() {
        return view('auth.register');
    }

    //Método store para la validación de los campos del formulario
    public function store(Request $request) {
        //% Validación del Form de registro
        $this->validate($request, [
            'name'=> 'required|min:5',
            'username'=>'required|unique:users|min:5|max:7',
            'email'=>'required|email|unique:users|max:20',
            'password'=>'required|confirmed|min:8'
        ]);

        dd('Generando usuaio');
    }
}
