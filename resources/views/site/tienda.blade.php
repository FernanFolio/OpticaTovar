@extends('layouts.site')

@section('header')
    <header class="head container-fluid">
        <div class="head-content d-flex justify-content-center align-items-center h-100">
            <div class="content">
                <p class="m-0">¡Hola! Bienvenido a </p>
                <h1><span id="typed"></span></h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container my-5">
        <h2 class="text-center separador">¡Encuentra lo que estas buscando!</h2>
        <tienda :authenticated="{{ json_encode(Auth::check()) }}"></tienda>
    </div>
@endsection
