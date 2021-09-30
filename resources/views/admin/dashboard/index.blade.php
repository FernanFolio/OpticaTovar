@extends('layouts.admin')


@section('titles')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <!-- Small boxes -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $productos }}</h3>

                    <p>Productos distintos ofrecidos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a
                    href="../producto/producto.php"
                    class="small-box-footer"
                >Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $proveedores }}</h3>

                    <p>Proveedores</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a
                    href="../proveedor/proveedor.php"
                    class="small-box-footer"
                >Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $marcas }}</h3>

                    <p>Marcas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-social-markdown"></i>
                </div>
                <a
                    href="../marca/marca.php"
                    class="small-box-footer"
                >Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ number_format($stock, 0) }}</h3>

                    <p>Productos en stock</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-clipboard"></i>
                </div>
                <a
                    href="../inventario/inventario.php"
                    class="small-box-footer"
                >Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $ventasPaypal }}</h3>

                    <p>Ventas completadas en la página</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a
                    href="../venta/venta.php"
                    class="small-box-footer"
                >Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $ventasStore }}</h3>

                    <p>Ventas Físicas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a
                    href="../venta/venta.php"
                    class="small-box-footer"
                >Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $users }}</h3>

                    <p>Usuarios Registrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-social-markdown"></i>
                </div>
                <a
                    href="../cliente/cliente.php"
                    class="small-box-footer"
                >Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>${{ number_format($totalVentas, 2) }}</h3>

                    <p>Total en Ventas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-clipboard"></i>
                </div>
                <a
                    href="../inventario/inventario.php"
                    class="small-box-footer"
                >Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!--Fin Small boxes -->

    <!-- GRAFICA -->
    <div
        class="card w-100"
        id="graphic-dashboard"
    >
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Ventas
            </h3>
            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            href="#revenue-chart"
                            data-toggle="tab"
                        >Ventas por mes</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="#sales-chart"
                            data-toggle="tab"
                        >Ventas por lugar</a>
                    </li>
                </ul>
            </div>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div
                    class="chart tab-pane active"
                    id="revenue-chart"
                    style="position: relative; height: 300px;"
                >
                    <canvas
                        id="revenue-chart-canvas"
                        style="height: 300px;"
                    ></canvas>
                </div>
                <div
                    class="chart tab-pane"
                    id="sales-chart"
                    style="position: relative; height: 300px;"
                >
                    <canvas
                        id="sales-chart-canvas"
                        style="height: 300px;"
                    ></canvas>
                </div>
            </div>
        </div><!-- /.card-body -->
    </div>
    <!-- FIN GRAFICA -->

    <!-- Calendario -->
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card bg-gradient-success">
                <div class="card-header border-0">

                    <h3 class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Calendario
                    </h3>
                    <!-- tools card -->
                    <div class="card-tools">
                        <button
                            type="button"
                            class="btn btn-success btn-sm"
                            data-card-widget="collapse"
                        >
                            <i class="fas fa-minus"></i>
                        </button>
                        <button
                            type="button"
                            class="btn btn-success btn-sm"
                            data-card-widget="remove"
                        >
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                    <!--The calendar -->
                    <div
                        id="calendar"
                        style="width: 100%"
                    ></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!--Fin Calendario -->

        <!-- PRODUCTS LIST -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Productos Agregados recientemente</h3>

                    <div class="card-tools">
                        <button
                            type="button"
                            class="btn btn-tool"
                            data-card-widget="collapse"
                        >
                            <i class="fas fa-minus"></i>
                        </button>
                        <button
                            type="button"
                            class="btn btn-tool"
                            data-card-widget="remove"
                        >
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">


                        @foreach ($ultimosProductos as $producto)
                            <li class="item">
                                <div class="product-img">
                                    <img
                                        src="{{ $producto->detalle->foto }}"
                                        alt="Product Image"
                                        class="img-size-50"
                                    >
                                </div>
                                <div class="product-info">
                                    <a
                                        href="javascript:void(0)"
                                        class="product-title"
                                    >{{ $producto->marca->descripcion }}
                                        <span
                                            class="badge badge-warning float-right">${{ number_format($producto->precio, 2) }}</span></a>
                                    <span class="product-description">
                                        {{ $producto->descripcio }}
                                    </span>
                                </div>
                            </li>
                        @endforeach



                        <!-- /.item -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- FIN PRODUCT LIST -->
    @endsection
