@extends('layouts.admin')

@section('titles')
    <h1>Categorias</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">En esta página encontrarás la informacón de todas las categorias</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table
                id="tabla"
                class="table table-bordered table-hover"
            >
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categorias as $categoria)
                        <tr id="tr-{{ $categoria->id }}">
                            <td>{{ $categoria->descripcion }}</td>
                            <td class="text-center">
                                <btn-eliminar-categoria :categoria-id="{{ $categoria->id }}"></btn-eliminar-categoria>
                                <a
                                    href="{{ route('categorias.edit', ['categoria' => $categoria->id]) }}"
                                    class='btn btn-secondary'
                                    role='button'
                                ><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Categoria</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
