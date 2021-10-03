@extends('layouts.admin')

@section('titles')
    <h1>Editar Proveedor</h1>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">Cambia los campos necesarios</h4>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form
            action="{{ route('proveedores.update', ['proveedor' => $proveedor->id]) }}"
            method="POST"
        >
            @method('put')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="razon_social">Razon Social</label>
                    <input
                        type="text"
                        class="form-control @error('razon_social') is-invalid @enderror"
                        id="razon_social"
                        name="razon_social"
                        value="{{ $proveedor->razon_social }}"
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
                        value="{{ $proveedor->rfc }}"
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
                        value="{{ $proveedor->domicilio }}"
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
                        value="{{ $proveedor->telefono }}"
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
