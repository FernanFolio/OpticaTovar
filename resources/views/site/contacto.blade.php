@extends('layouts.site')

@section('content')
    <section class="fachada container">
        <h2 class="text-center separador mb-4">Contacto</h2>
        <div class="row">

            <div class="col-md-7">
                <img
                    src="img/dummy/fachada.jpg"
                    alt="Fachada del negocio"
                    class="shadow"
                >
            </div>

            <div class="col-md-5">
                <div class="row">

                    <div class="col-sm-6 datos">
                        <div class="icono">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <p class="h6 font-weight-bold">Teléfono</p>
                        <p>411160186</p>
                    </div>

                    <div class="col-sm-6 datos">
                        <div class="icono">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p class="h6 font-weight-bold">Domicilio</p>
                        <p>Hidalgo #130</p>
                        <p>C.P. 38300</p>
                        <p>Cortazar, Gto.</p>
                    </div>

                    <div class="col-sm-12 datos">
                        <div class="icono">
                            <i class="far fa-clock"></i>
                        </div>
                        <p class="h6 font-weight-bold">Horario de Atencion</p>
                        <p><span class="font-weight-bold">Lunes a Viernes:</span> 10:30 - 15:00 hrs y 17:00 - 20:00 hrs.</p>
                        <p><span class="font-weight-bold">Sábados:</span> 9:30 - 15:00 hrs</p>
                        <p><span class="font-weight-bold">Jueves:</span> 10:30 - 15 hrs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="card formulario-contacto">
        <div class="card-header">
            Formulario de Contacto
        </div>
        <div class="card-body">

            <form-contacto></form-contacto>

        </div>
    </section>
@endsection
