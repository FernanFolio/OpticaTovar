<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <!-- CSRF Token -->
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    >


    <!-- Styles -->
    @yield('styles')
    <!-- FontAwesome -->
    <script
        src="https://kit.fontawesome.com/b244333883.js"
        crossorigin="anonymous"
    ></script>
    <!-- Ionicons -->
    <link
        rel="stylesheet"
        href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    >
    <!-- Theme style -->
    <link
        rel="stylesheet"
        href="/plugins/adminlte/adminlte.min.css"
    >
    <!-- overlayScrollbars -->
    <link
        rel="stylesheet"
        href="/plugins/overlayScrollbars/OverlayScrollbars.min.css"
    >
    <!-- DataTables -->
    <link
        rel="stylesheet"
        href="/plugins/datatables-bs4/dataTables.bootstrap4.min.css"
    >
    <link
        rel="stylesheet"
        href="/plugins/datatables-responsive/responsive.bootstrap4.min.css"
    >
    <link
        rel="stylesheet"
        href="/plugins/datatables-buttons/buttons.bootstrap4.min.css"
    >
    <link
        href="{{ asset('css/admin.css') }}"
        rel="stylesheet"
    >

    <!-- Scripts -->
    <script
        src="{{ asset('js/admin.js') }}"
        defer
    ></script>
    <!-- overlayScrollbars -->
    <script
        src="/plugins/overlayScrollbars/jquery.overlayScrollbars.min.js"
        defer
    ></script>
    <!-- DataTables  & Plugins -->
    <script
        src="/plugins/datatables/jquery.dataTables.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-bs4/dataTables.bootstrap4.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-responsive/dataTables.responsive.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-responsive/responsive.bootstrap4.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-buttons/dataTables.buttons.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-buttons/buttons.bootstrap4.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-buttons/buttons.html5.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-buttons/buttons.print.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-buttons/buttons.colVis.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-buttons/pdfmake.min.js"
        defer
    ></script>
    <script
        src="/plugins/datatables-buttons/vfs_fonts.js"
        defer
    ></script>
    <!-- Chart JS -->
    <script
        src="/plugins/chart.js/Chart.min.js"
        defer
    ></script>
    <!-- Tempus Dominus y Moment JS para el calendario -->
    <script
        src="/plugins/moment/moment.min.js"
        defer
    ></script>
    <script
        src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"
        defer
    ></script>
    <!-- AdminLTE App -->
    <script
        src="/plugins/adminlte/adminlte.js"
        defer
    ></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    @include('layouts.partials.admin_navbar')

    <div class="wrapper">
        <main class="content-wrapper">
            <header class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12">
                            @yield('titles')
                        </div>
                    </div>
                </div>
            </header>

            <section class="content container-fluid">
                @yield('content')
            </section>
        </main>
    </div>


    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
        </div>
    </footer>
</body>

</html>
