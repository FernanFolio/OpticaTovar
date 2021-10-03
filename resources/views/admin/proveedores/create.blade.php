@extends('layouts.admin')

@section('titles')
    <h1>Nuevo Proveedor</h1>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">Llena los datos del proveedor</h4>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form
            action="{{ route('proveedores.store') }}"
            method="POST"
        >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="razon_social">Razon Social</label>
                    <input
                        type="text"
                        class="form-control @error('razon_social') is-invalid @enderror"
                        id="razon_social"
                        name="razon_social"
                        value="{{ old('razon_social') }}"
                        required
                        autofocus
                    >
                    @error('razon_social')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input
                        type="text"
                        class="form-control @error('rfc') is-invalid @enderror"
                        id="rfc"
                        name="rfc"
                        maxlength="13"
                        value="{{ old('rfc') }}"
                        required
                    >
                    @error('rfc')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input
                        type="text"
                        class="form-control @error('domicilio') is-invalid @enderror"
                        id="domicilio"
                        name="domicilio"
                        value="{{ old('domicilio') }}"
                        required
                    >
                    @error('domicilio')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input
                        type="tel"
                        class="form-control @error('telefono') is-invalid @enderror"
                        id="telefono"
                        name="telefono"
                        value="{{ old('telefono') }}"
                        maxlength="10"
                    >
                    @error('telefono')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

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
