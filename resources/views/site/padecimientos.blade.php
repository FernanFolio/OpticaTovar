@extends('layouts.site')

@section('content')
    <section class="padecimientos-intro container mt-5">
        <h2 class="text-center separador mb-5">Padecimientos</h2>

        <div class="row">
            <div class="col-md-6">
                <p>La mayoría de las personas tienen algún tipo de problema visual en algún momento de la vida. Algunas
                    dejan de poder ver objetos lejanos; a otras les
                    cuesta mucho leer la letra pequeña. Este tipo de problemas suelen ser fáciles de tratar, con lentes
                    graduados (oftálmicos) o lentes de contacto.</p>

                <p>Estos son algunos de los principales problemas</p>
                <ul>
                    <li>Miopía</li>
                    <li>Hipermetropía</li>
                    <li>Astigmatismo</li>
                </ul>
            </div>

            <div class="col-md-6">
                <img
                    src="img/padecimientos-intro.jpg"
                    alt="Introduccion a los padecimientos"
                >
            </div>
        </div>
    </section>

    <!-- PADECIMIENTO -->
    <section class="padecimiento container-fluid">
        <h3>Miopía</h3>
        <div class="row align-items-center">
            <div class="col-md-5">
                <img
                    src="img/miopia.jpg"
                    alt="Vision con miopia"
                >
            </div>
            <div class="col-md-7">
                <p>La miopía es un defecto de refracción del ojo en el cual los rayos de luz paralelos convergen en un punto
                    focal situado delante de la retina, en lugar
                    de converger en la misma retina; es el defecto inverso a la hipermetropía, en la que los rayos de luz
                    llegan a la retina antes de converger.
                </p>
                <p>Puede definirse también como un exceso de potencia de refracción de los medios transparentes del ojo con
                    respecto a su longitud, por lo que los rayos
                    luminosos procedentes de objetos situados a cierta distancia del ojo convergen hacia un punto anterior a
                    la retina.</p>
                <p>Una persona con miopía tiene dificultades para enfocar bien los objetos lejanos, lo que provoca déficit
                    de agudeza visual y puede conducir también a
                    dolores de cabeza, estrabismo, incomodidad visual e irritación del ojo.</p>
            </div>
        </div>
    </section>
    <!-- FIN PADECIMIENTO -->

    <!-- PADECIMIENTO -->
    <section class="padecimiento container-fluid">
        <h3>Hipermetropia</h3>
        <div class="row align-items-center">
            <div class="col-md-5">
                <img
                    src="img/hipermetropia.jpg"
                    alt="Vision con hipermetropia"
                >
            </div>
            <div class="col-md-7">
                <p>La hipermetropía es un defecto ocular de refracción que consiste en que los rayos de luz que vienen del
                    infinito inciden en el ojo humano, convergiendo
                    detrás de la retina, formando de esta manera el foco o imagen. Es debida casi siempre a que el ojo es
                    muy corto en su eje antero-posterior.</p>
                <p>Es un defecto muy frecuente, aunque no es progresivo ni tiene repercusiones graves. Se trata mediante el
                    uso de lentes compensadoras convergentes o
                    convexas y/o se corrige con cirugías refractivas a base de rayos láser. La hipermetropía, la miopía y el
                    astigmatismo son los principales defectos de
                    refracción o ametropías.</p>
                <p>La magnitud de este defecto se mide en dioptrías positivas.</p>
            </div>
        </div>
    </section>
    <!-- FIN PADECIMIENTO -->

    <!-- PADECIMIENTO -->
    <section class="padecimiento container-fluid">
        <h3>Astigmatismo</h3>
        <div class="row align-items-center">
            <div class="col-md-5">
                <img
                    src="img/astigmatismo.jpg"
                    alt="Vision con astigmatismo"
                >
            </div>
            <div class="col-md-7">
                <p>El astigmatismo es un defecto ocular que se caracteriza porque existe una refracción diferente entre dos
                    meridianos oculares, lo que impide el enfoque claro de los objetos. Generalmente se debe a una
                    alteración en la curvatura anterior de la córnea.</p>
                <p>La córnea es la región transparente que se encuentra en el polo anterior del ojo y actúa como una lente a
                    través de la cual pasa la luz que se enfoca sobre la retina en la parte posterior del ojo.</p>
                <p>La superficie de la córnea debe ser simétrica y regular en sus curvaturas, de no ser así se produce el
                    astigmatismo.</p>
            </div>
        </div>
    </section>
    <!-- FIN PADECIMIENTO -->

    <!-- PADECIMIENTO -->
    <section class="padecimiento container-fluid">
        <h3>Visión 20/20</h3>
        <div class="row align-items-center">
            <div class="col-md-5">
                <img
                    src="img/vista-2020.jpg"
                    alt="Vision optima"
                >
            </div>
            <div class="col-md-7">
                <p>Una visión 20/20 no necesariamente significa que se tenga una visión perfecta, se refiere únicamente a la
                    capacidad de la visión a distancia.</p>
            </div>
        </div>
    </section>
    <!-- FIN PADECIMIENTO -->
@endsection
