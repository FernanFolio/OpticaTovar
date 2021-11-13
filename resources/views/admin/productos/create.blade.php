@extends('layouts.admin')

@section('titles')
    <h1>Crear Producto</h1>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">Llena los datos del producto</h4>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form
            action="{{ route('productos.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input
                        type="text"
                        class="form-control @error('descripcion') is-invalid @enderror"
                        id="descripcion"
                        name="descripcion"
                        value="{{ old('descripcion') }}"
                        required
                    >
                    @error('descripcion')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="marca">Marca</label>
                    <select
                        name="marca"
                        id="marca"
                        class="form-control @error('marca') is-invalid @enderror"
                    >
                        <option
                            value=""
                            selected
                            disabled
                        >--Seleccione--</option>
                        @foreach ($marcas as $marca)
                            <option
                                value="{{ $marca->id }}"
                                {{ $marca->id == old('marca') ? 'selected' : '' }}
                            >
                                {{ $marca->descripcion }}
                            </option>
                        @endforeach
                    </select>
                    @error('marca')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select
                        name="categoria"
                        id="categoria"
                        class="form-control @error('categoria') is-invalid @enderror"
                    >
                        <option
                            value=""
                            selected
                            disabled
                        >--Seleccione--</option>
                        @foreach ($categorias as $categoria)
                            <option
                                value="{{ $categoria->id }}"
                                {{ $categoria->id == old('categoria') ? 'selected' : '' }}
                            >
                                {{ $categoria->descripcion }}
                            </option>
                        @endforeach
                    </select>
                    @error('categoria')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="forma">Forma</label>
                    <select
                        name="forma"
                        id="forma"
                        class="form-control @error('forma') is-invalid @enderror"
                    >
                        <option
                            value=""
                            selected
                            disabled
                        >--Seleccione--</option>
                        @foreach ($formas as $forma)
                            <option
                                value="{{ $forma->id }}"
                                {{ $forma->id == old('forma') ? 'selected' : '' }}
                            >
                                {{ $forma->descripcion }}
                            </option>
                        @endforeach
                    </select>
                    @error('forma')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tipo_armazon">Tipo</label>
                    <select
                        name="tipo_armazon"
                        id="tipo_armazon @error('tipo_armazon') is-invalid @enderror"
                        class="form-control"
                    >
                        <option
                            value=""
                            selected
                            disabled
                        >--Seleccione--</option>
                        @foreach ($tipos as $tipo)
                            <option
                                value="{{ $tipo->id }}"
                                {{ $tipo->id == old('tipo_armazon') ? 'selected' : '' }}
                            >
                                {{ $tipo->descripcion }}
                            </option>
                        @endforeach
                    </select>
                    @error('tipo_armazon')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="color">Color</label>
                    <input
                        type="text"
                        class="form-control @error('color') is-invalid @enderror"
                        id="color"
                        name="color"
                        value="{{ old('color') }}"
                    >
                    @error('color')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="talla">Talla</label>
                    <input
                        type="number"
                        min="0"
                        class="form-control w-25 @error('talla') is-invalid @enderror"
                        id="talla"
                        name="talla"
                        value="{{ old('talla') }}"
                        required
                    >
                    @error('talla')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="longitud_varilla">Longitud de la Varilla</label>
                    <input
                        type="number"
                        min="0"
                        class="form-control w-25 @error('longitud_varilla') is-invalid @enderror"
                        id="longitud_varilla"
                        name="longitud_varilla"
                        value="{{ old('longitud_varilla') }}"
                        required
                    >
                    @error('longitud_varilla')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="ancho_puente">Ancho del Puente</label>
                    <input
                        type="number"
                        min="0"
                        class="form-control w-25 @error('ancho_puente') is-invalid @enderror"
                        id="ancho_puente"
                        name="ancho_puente"
                        value="{{ old('ancho_puente') }}"
                        required
                    >
                    @error('ancho_puente')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="ancho_total">Ancho Total</label>
                    <input
                        type="number"
                        min="0"
                        class="form-control w-25 @error('ancho_total') is-invalid @enderror"
                        id="ancho_total"
                        name="ancho_total"
                        value="{{ old('ancho_total') }}"
                        required
                    >
                    @error('ancho_total')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input
                        type="text"
                        class="form-control @error('sku') is-invalid @enderror"
                        id="sku"
                        name="sku"
                        value="{{ old('sku') }}"
                        required
                    >
                    @error('sku')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="precio">Precio de Venta</label>
                    <input
                        type="text"
                        class="form-control @error('precio') is-invalid @enderror"
                        id="precio"
                        name="precio"
                        value="{{ old('precio') }}"
                        required
                    >
                    @error('precio')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input
                        type="file"
                        class="form-control"
                        id="foto"
                        name="foto"
                        required
                    >
                    @error('foto')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                <button
                    type="submit"
                    class="btn btn-primary"
                >Guardar</button>
            </div>
        </form>
        <!-- Form end -->

    </div>
@endsection
