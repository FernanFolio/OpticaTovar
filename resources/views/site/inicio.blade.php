@extends('layouts.site')


@section('styles')
    <!-- Leaflet Mapa -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        defer
    />
@endsection

@section('content')
    <!-- CONOCENOS -->
    <section class="conocenos container mt-5">
        <h2 class="text-center mb-4 separador">¡El mejor servicio, con la mejor calidad!</h2>

        <div class="card-deck">
            <div class="card">
                <div class="imagen"><img
                        src="img/mision.png"
                        class="card-img-top"
                        alt="Mision"
                    ></div>
                <div class="card-body">
                    <h5 class="card-title text-center">Misión</h5>
                    <p class="card-text text-justify">Mantenerse líder en el sector Óptico realizando diagnósticos precisos
                        mediante Lic en Optometría, Nuestro objetivo
                        es llevar
                        salud visual a la población y darles una nueva visión del mundo.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imagen"><img
                        src="img/vision.png"
                        class="card-img-top"
                        alt="Visión"
                    ></div>
                <div class="card-body">
                    <h5 class="card-title text-center">Visión</h5>
                    <p class="card-text text-justify">Optica Tovar se convertirá en una de las mejores ópticas reconocida
                        por la calidad en el trato de su personal y de
                        sus tratamientos,
                        convirtiéndose así en la primera selección para
                        tratar cualquier patología visual.</p>
                </div>
            </div>
            <div class="card">
                <div class="imagen"><img
                        src="img/valores.png"
                        class="card-img-top"
                        alt="Valores"
                    ></div>
                <div class="card-body">
                    <h5 class="card-title text-center">Valores</h5>
                    <ul class="text-center list-unstyled">
                        <li>Pasión</li>
                        <li>Liderazgo</li>
                        <li>Excelencia</li>
                        <li>Humildad</li>
                        <li>Voluntad</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN CONOCENOS -->

    <!-- ENCUENTRA LO NUEVO -->
    <section
        class="container-fluid"
        id="lo-nuevo"
    >
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-content-left">
                        <img
                            src="img/lo-nuevo.png"
                            alt="Imagen Smartphone"
                        >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-content-rigth">
                        <h2 class="display-3 separador">Encuentra lo nuevo</h2>
                        <p class="mt-5">Tenemos una gran variedad de productos nuevos y a la moda, para que no te
                            quedes desactualizado y disfrutes de lo mejor en calidad y precio.
                        </p>
                        <a
                            href="{{ route('tienda') }}"
                            class="btn btn-outline-white btn-lg"
                        >Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN ENCUENTRA LO NUEVO -->

    <!-- BUSCANOS -->
    <section class="mt-5">
        <h2 class="text-center mb-4 separador">Búscanos</h2>
        <div
            id="mapa"
            class="mapa"
        ></div>
    </section>
    <!-- FIN BUSCANOS -->

    <!-- CONTACTANOS -->
    <div class="contactanos text-center my-5">
        <a
            href="{{ route('contacto') }}"
            class="btn btn-outline-white"
        >Contáctanos</a>
    </div>
    <!-- FIN CONTACTANOS -->

    <!-- TESTIMONIALES -->
    <section class="my-5 container">
        <h2 class="text-center mb-4 separador">Testimoniales</h2>
        <div class="testimoniales">
            <blockquote class="testimonial">
                <p>Sin duda alguna es de las majores ópticas en Cortazar, Celaya y la región</p>
                <footer>
                    <img
                        src="img/testimonial.jpg"
                        alt="imagen Testimonial"
                    >
                    <cite>Juan Mendoza Aguilar</cite>
                </footer>
            </blockquote>

            <blockquote class="testimonial">
                <p>Excelente servicio, el personal es muy educado y hacen un trabajo de calidad</p>
                <footer>
                    <img
                        src="img/testimonial2.jpeg"
                        alt="imagen Testimonial"
                    >
                    <cite>Marisol Acosta Tovar</cite>
                </footer>
            </blockquote>

            <blockquote class="testimonial">
                <p>Fui a tres ópticas antes y en todas me graduaron mal mis lentes, que bueno que me recomendaron a Óptica
                    Tovar</p>
                <footer>
                    <img
                        src="img/testimonial3.jpg"
                        alt="imagen Testimonial"
                    >
                    <cite>Jose Luis Acosta Tovar</cite>
                </footer>
            </blockquote>
        </div>
    </section>
    <!-- FIN TESTIMONIALES -->
@endsection

@section('scripts')
    <!--Leaflet mapas-->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
@endsection
