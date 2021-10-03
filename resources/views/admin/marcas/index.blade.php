@extends('layouts.admin')

@section('titles')
    <h1>Marcas</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">En esta página encontrarás la informacón de todas las marcas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table
                id="tabla"
                class="table table-bordered table-hover"
            >
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($marcas as $marca)
                        <tr id="tr-{{ $marca->id }}">
                            <td>{{ $marca->descripcion }}</td>
                            <td class="text-center">
                                <btn-eliminar-marca :marca-id="{{ $marca->id }}"></btn-eliminar-marca>
                                <a
                                    href="{{ route('marcas.edit', ['marca' => $marca->id]) }}"
                                    class='btn btn-secondary'
                                    role='button'
                                ><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Marca</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
