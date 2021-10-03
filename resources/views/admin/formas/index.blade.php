@extends('layouts.admin')

@section('titles')
    <h1>Formas</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">En esta página encontrarás la informacón de todas las formas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table
                id="tabla"
                class="table table-bordered table-hover"
            >
                <thead>
                    <tr>
                        <th>Forma</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($formas as $forma)
                        <tr id="tr-{{ $forma->id }}">
                            <td>{{ $forma->descripcion }}</td>
                            <td class="text-center">
                                <btn-eliminar-forma :forma-id="{{ $forma->id }}"></btn-eliminar-forma>
                                <a
                                    href="{{ route('formas.edit', ['forma' => $forma->id]) }}"
                                    class='btn btn-secondary'
                                    role='button'
                                ><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Forma</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
