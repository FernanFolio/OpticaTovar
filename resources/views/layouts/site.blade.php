<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="description"
        content="Optica Tovar | Los mejores precios | Lentes oftálmicos"
    >

    <!-- CSRF Token -->
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>Optica Tovar | Lic. Maricela Tovar Aboytes</title>

    <!-- Styles -->
    @yield('styles')
    <!-- Custom Preloader -->
    <link
        href="{{ asset('css/preloader.css') }}"
        rel="stylesheet"
    >
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >

    <!-- Scripts -->
    <script
        src="{{ asset('js/app.js') }}"
        defer
    ></script>
    {{-- Typed JS --}}
    <script
        src="{{ asset('plugins/typed/typed.js') }}"
        defer
    ></script>
    <!-- Scroll Reveal -->
    <script
        src="https://unpkg.com/scrollreveal"
        defer
    ></script>
    <!-- Font Awesome -->
    <script
        src="https://kit.fontawesome.com/149ef0981c.js"
        crossorigin="anonymous"
        async
    ></script>
    <!-- Sweet Alert 2 -->
    <script
        src="https://cdn.jsdelivr.net/npm/sweetalert2@10"
        async
    ></script>

    @yield('scripts')

</head>

<body class="{{ Route::currentRouteName() }}">
    <div id="app">

        <div
            class="d-flex"
            id="wrapper"
        >
            @if (Auth::check())
                <carrito></carrito>
            @endif

            <div id="page-content-wrapper">
                <div id="page-loader"><span class="preloader-interior"></span></div>

                @include('layouts.partials.site_navbar')

                @if (session('message'))
                    <div
                        class="alert alert-{{ session('alert_type') }} mb-0 fixed-top text-center"
                        style="z-index: 9999; margin-top: 4rem"
                    >{{ session('message') }}</div>
                @endif

                @section('header')
                    <header class="head container-fluid">
                        <div class="head-content d-flex justify-content-center align-items-center h-100">
                            <div class="content">
                                <p class="m-0">¡Hola! Bienvenido a </p>
                                <h1><span id="typed"></span></h1>
                                <a
                                    href="{{ route('tienda') }}"
                                    class="btn btn-outline-light"
                                >Tienda</a>
                            </div>
                        </div>
                    </header>
                @show

                <main>
                    @yield('content')
                </main>

                @include('layouts.partials.site_footer')
            </div>

        </div>
    </div>
</body>

</html>
