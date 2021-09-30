@extends('layouts.admin')

@section('titles')
    Inventario
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">En esta página encontrarás el inventario de todos los productos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table
                        id="tabla"
                        class="table table-bordered table-hover"
                    >
                        <thead>
                            <tr>
                                <th>
                                    <!--Foto-->
                                </th>
                                <th>Producto</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="p-0 text-center w-25"><img
                                            src="{{ $producto->detalle->foto }}"
                                            alt="Imagen del producto"
                                            height="75"
                                        ></td>
                                    <td>{{ $producto->descripcion }}</td>
                                    <td>{{ $producto->inventario->stock }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    <!--Foto-->
                                </th>
                                <th>Producto</th>
                                <th>Stock</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
    </div>
@endsection
