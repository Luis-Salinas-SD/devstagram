<?php

namespace App\Http\Controllers;

use App\Models\User; //importacion del modelo user
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //Método index
    public function index()
    {
        return view('auth.register');
    }

    //Método store para la validación de los campos del formulario
    public function store(Request $request)
    {
        //% Validación del Form de registro
        $this->validate($request, [
            'name' => 'required|min:4',
            'username' => 'required|unique:users|min:4|max:7',
            'email' => 'required|email|unique:users|max:30',
            'password' => 'required|confirmed|min:8'
        ]);
        //mostrar  el nombre y el usuario en un mensaje flash
        //dd('Generando usuario '. 'Nombre: '. $request->name . ' '. 'Usuario: '. $request->username);

        //Modelo User
        User::create([
            'name' => $request->name,
            'username' => Str::slug($request->username),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }
}
