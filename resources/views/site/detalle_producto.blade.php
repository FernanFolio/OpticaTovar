@extends('layouts.site')

@section('header')
    <header class="head container-fluid">
        <div class="head-content d-flex justify-content-center align-items-center h-100">
            <h1 class="h2 separador">Detalle del Producto</h1>
        </div>
    </header>
@endsection

@section('content')
    <div class="container">
        <div class="detalle">
            <div class="row">
                <div class="col-md-7">
                    <img
                        src="{{ $producto->detalle->foto->foto_url }}"
                        alt="Imagen del producto"
                    >
                </div>

                <div class="col-md-5 detalles">
                    <h2 class="marca">{{ $producto->marca->descripcion }}</h2>
                    <p class="sku">SKU: {{ $producto->detalle->sku }}</p>
                    <p class="text-muted">Descripcion: {{ $producto->descripcion }}</p>
                    <p class="precio">${{ $producto->precio }}</p>
                    <p class="text-{{ $producto->inventario->stock > 0 ? 'muted' : 'danger' }} small">Nos quedan
                        {{ $producto->inventario->stock }} unidades</p>
                    <p class="cantidad">Cantidad</p>
                    <input
                        type="number"
                        class="form-control"
                        min="1"
                        value="1"
                        id="spnCantidad"
                    >
                    <btn-agregar-carrito
                        :producto="{{ json_encode($producto) }}"
                        :authenticated="{{ json_encode(Auth::check()) }}"
                    ></btn-agregar-carrito>
                </div>
            </div>

            <div class="info">
                <p>Color</p>
                <p>{{ $producto->detalle->color }}</p>

                <p>Talla</p>
                <p>{{ $producto->detalle->talla }}</p>

                <p>Longitud de Varilla</p>
                <p>{{ $producto->detalle->longitud_varilla }}</p>

                <p>Ancho de puente</p>
                <p>{{ $producto->detalle->ancho_puente }}</p>

                <p>Ancho total</p>
                <p>{{ $producto->detalle->ancho_total }}</p>

                <p>Tipo de Armazon</p>
                <p>{{ $producto->tipoArmazon->descripcion }}</p>
            </div>
        </div>
    </div>

@endsection
