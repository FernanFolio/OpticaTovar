@extends('layouts.site')

@section('header')
    <header class="head container-fluid">
        <div class="head-content d-flex justify-content-center align-items-center h-100">
            <h1 class="h2">Historial de Compras</h1>
        </div>
    </header>
@endsection

@section('content')
    <div class="container my-5" style="min-height: 35vh;">
        @if (count($ordenes) > 0)
            @foreach ($ordenes as $orden)
                <div class="row justify-content-center my-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a
                                    href="btn btn-link"
                                    data-toggle="collapse"
                                    aria-expanded="true"
                                    data-target="#collapse-{{ $orden->id }}"
                                >
                                    <h5>{{ Str::ucfirst($orden->created_at->diffForHumans()) }}</h5>
                                </a>
                            </div>
                            <div
                                class="card-body row  collapse"
                                id="collapse-{{ $orden->id }}"
                            >
                                @foreach ($orden->productos as $producto)
                                    <div class="col-12 col-md-3 mt-2">
                                        <div class="card">
                                            <img
                                                class="card-img-top"
                                                src="{{ $producto->detalle->foto }}"
                                                alt="{{ $producto->descripcion }}"
                                            >
                                            <div class="card-body">
                                                <h6 class="card-title">${{ $producto->precio }}</h6>
                                                <p
                                                    class="card-text"
                                                    style="font-size:0.8rem"
                                                >{{ $producto->descripcion }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @else
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <img
                        src="/img/vacio.jpg"
                        alt="Sin compras"
                    >
                    <p class="h5">Parece que aún no has realizado ninguna compra. <br /> Dale una vuelta a
                        nuestra
                        <a href="{{ route('tienda') }}" class="font-weigth-bold">tienda</a> para encontrar los mejores anteojos para tí
                    </p>
                </div>
            </div>
        @endif
    </div>
@endsection
