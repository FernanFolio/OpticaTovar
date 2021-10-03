@extends('layouts.admin')

@section('titles')
    <h1>Editar Tipo de Armazón</h1>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">Llena los datos del tipo</h4>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form
            action="{{ route('tipos.update', ['tipo' => $tipo->id]) }}"
            method="POST"
        >
            @method('put')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="descripcion">Tipo</label>
                    <input
                        type="text"
                        class="form-control @error('descripcion') is-invalid @enderror"
                        id="descripcion"
                        name="descripcion"
                        value="{{ $tipo->descripcion }}"
                        autofocus
                        required
                    >
                </div>
                @error('descripcion')
                    <p class="d-block invalid-feedback">{{ $message }}</p>
                @enderror
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
