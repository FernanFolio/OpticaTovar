@extends('layouts.admin')

@section('titles')
    <h1>Proveedores</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">En esta página encontrarás la informacón de todos los proveedores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table
                id="tabla"
                class="table table-bordered table-hover"
            >
                <thead>
                    <tr>
                        <th>Razon Social</th>
                        <th>RFC</th>
                        <th>Domicilio</th>
                        <th>Teléfono</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($proveedores as $proveedor)
                        <tr id="tr-{{ $proveedor->id }}">
                            <td>{{ $proveedor->razon_social }}</td>
                            <td>{{ $proveedor->rfc }}</td>
                            <td>{{ $proveedor->domicilio }}</td>
                            <td>{{ $proveedor->telefono }}</td>
                            <td class="text-center">
                                <btn-eliminar-proveedor :proveedor-id="{{ $proveedor->id }}"></btn-eliminar-proveedor>
                                <a
                                    href="{{ route('proveedores.edit', ['proveedor' => $proveedor->id]) }}"
                                    class='btn btn-secondary'
                                    role='button'
                                ><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Razon Social</th>
                        <th>RFC</th>
                        <th>Domicilio</th>
                        <th>Teléfono</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
