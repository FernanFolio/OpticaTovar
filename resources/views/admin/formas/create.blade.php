@extends('layouts.admin')

@section('titles')
    <h1>Crear Forma</h1>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">Llena los datos de la forma</h4>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form
            action="{{ route('formas.store') }}"
            method="POST"
        >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="descripcion">Forma</label>
                    <input
                        type="text"
                        class="form-control @error('descripcion') is-invalid @enderror"
                        id="descripcion"
                        name="descripcion"
                        value="{{ old('descripcion') }}"
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
