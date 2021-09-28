@extends('layouts.site')


@section('header')
    <header class="head container-fluid">
        <div class="head-content d-flex justify-content-center align-items-center h-100">
            <h1 class="h2 separador">¡A solo un paso!</h1>
        </div>
    </header>
@endsection

@section('content')
    <resumen-compra>
        <template #csrf>
            @csrf
        </template>
    </resumen-compra>
@endsection
