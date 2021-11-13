@extends('layouts.admin')

@section('titles')
    <h1>Productos</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">En esta página encontrarás la informacón de todos los productos</h3>
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
                            <!--foto-->
                        </th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Forma</th>
                        <th>Precio</th>
                        <th>SKU</th>
                        <th>
                            <!--acciones-->
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($productos as $producto)
                        <tr>
                            <td class="p-0 text-center align-middle">
                                <img
                                    src="{{ $producto->detalle->foto?->foto_url ?? '/img/no-foto.jpg' }}"
                                    alt="Imagen del producto"
                                    height="75"
                                >
                            </td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->tipoArmazon->descripcion }}</td>
                            <td>{{ $producto->marca->descripcion }}</td>
                            <td>{{ $producto->categoria->descripcion }}</td>
                            <td>{{ $producto->forma->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->detalle->sku }}</td>
                            <td class="text-center">
                                <a
                                    href="#"
                                    class='btn btn-danger btn-sm m-1'
                                    role='button'
                                ><i class="fas fa-trash-alt"></i></a>
                                <a
                                    href="{{ route('productos.edit', ['producto' => $producto->id]) }}"
                                    class='btn btn-secondary btn-sm'
                                    role='button'
                                ><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            <!--foto-->
                        </th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Forma</th>
                        <th>Precio</th>
                        <th>SKU</th>
                        <th>
                            <!--acciones-->
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
