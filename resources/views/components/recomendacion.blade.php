@props(['items'])

<div class="recomendaciones container">
    <p class="h5 text-uppercase text-center text-muted">Te mostramos algunas recomendaciones</p>
    <div class="row">
        @foreach ($items as $producto)
            <div class="col-md-3 recomendacion">
                <p class="nombre">{{ $producto->descripcion }}</p>
                <img
                    src="{{ $producto->detalle->foto }}"
                    alt="Recomendacion"
                >
                <a
                    href="{{ route('detalle-producto', ['producto' => $producto->id]) }}"
                    class="btn btn-primary mt-2"
                >COMPRAR</a>
            </div>
        @endforeach
    </div>
</div>
