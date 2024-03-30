<!-- Ruta dónde se encuentra el template -->
@extends('layouts.app')

<!-- Todo el codigo que vamos a inyectar a ese template -->

@section('title')
Pagina Nosotros
@endsection

@section('encabezado')
Estos esta desde nosotros
@endsection

@section('contenido')
<div class="container">
    <h5>Esto es un titulo que pertenece a <b>Nosotros</b></h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ab nihil expedita distinctio ducimus odit alias qui neque provident delectus, minima accusantium quis repellat voluptates! Dolorum architecto officia dicta fugiat!</p>
</div>
@endsection