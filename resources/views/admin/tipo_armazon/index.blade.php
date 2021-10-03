@extends('layouts.admin')

@section('titles')
    <h1>Tipos de Armazon</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">En esta página encontrarás la información de todas los tipos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table
                id="tabla"
                class="table table-bordered table-hover"
            >
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tipos as $tipo)
                        <tr id="tr-{{ $tipo->id }}">
                            <td>{{ $tipo->descripcion }}</td>
                            <td class="text-center">
                                <btn-eliminar-tipo :tipo-id="{{ $tipo->id }}"></btn-eliminar-tipo>
                                <a
                                    href="{{ route('tipos.edit', ['tipo' => $tipo->id]) }}"
                                    class='btn btn-secondary'
                                    role='button'
                                ><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Tipo</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
