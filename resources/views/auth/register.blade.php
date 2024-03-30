@extends('layouts.app')

@section('title')
Registrate
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:items-center gap-4 pt-5">

    <div class="md:w-3/12 bg-blue-500 m-1 p-3 rounded-lg">
        <img src="{{asset('img/registro.jpg')}}">
    </div>

    <div class="md:w-4/12 m-1 p-6 rounded-lg bg-white shadow-xl">
        <form action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Tu nombre" class=" border p-2 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">
                @error('name')
                    <p class="bg-red-400 text-white text-center p-1 my-2 rounded-lg">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                <input type="text" id="username" name="username" placeholder="Nombre de usuario" class=" border p-2 w-full rounded-lg @error('username') border-red-500 @enderror" value="{{old('username')}}">
                @error('username')
                    <p class="bg-red-400 text-white text-center p-1 my-2 rounded-lg">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                <input type="email" id="email" name="email" placeholder="correo@correo.com" class=" border p-2 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
                @error('email')
                    <p class="bg-red-400 text-white text-center p-1 my-2 rounded-lg">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="pwd" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                <input type="password" id="pwd" name="pwd" placeholder="**********" class=" border p-2 w-full rounded-lg @error('pwd') border-red-500 @enderror" value="{{old('pwd')}}">
                    @error('pwd')
                    <p class="bg-red-400 text-white text-center p-1 my-2 rounded-lg">{{$message}}</p>
                    @enderror
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Confirmar password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="**********"
                    class=" border p-2 w-full rounded-lg">
            </div>

            <input type="submit" value="Crear usuario" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg p-1">

        </form>
    </div>
</div>
@endsection