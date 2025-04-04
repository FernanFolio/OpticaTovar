@extends('layouts.site')

@section('content')
    <section class="forma-cara-intro mt-5 container">
        <h2 class="text-center">Cómo elegir el armazón de acuerdo <span>a la forma de tu cara</span></h2>
        <p class="subtitulo separador text-muted">Identifica cómo comprar el lente ideal para tí.</p>
        <p>Hoy en día hay muchas opciones de lentes atractivos y a la moda. La primera regla para elegir armazones es
            seleccionar una opción que te encante y que te
            haga sentir seguro de ti mismo.
            Una manera de encontrar unos que acentúen mejor tus rasgos es escoger los que complementen la forma y el tono de
            tu piel, y que también representen tu
            estilo.</p>
    </section>

    <!-- INDICACION -->
    <div class="indicacion">
        <h3>Pasos para sacar la forma de tu cara</h3>
        <p>Necesitarás una cinta métrica flexible (no una regla rígida)<br>
            que pueda acoplarse con comodidad a las curvas de tu cara.</p>
    </div>
    <!-- FIN INDICACION -->

    <!-- PASOS PARA MEDIR -->
    <div class="container-fluid rostro-medida my-5">
        <div class="row">
            <div class="col-md-6">
                <img
                    src="img/rostro-medida-mujer.jpg"
                    alt="Medida del rostro para mujer"
                >
            </div>
            <div class="col-md-6">
                <img
                    src="img/rostro-medida-hombre.jpg"
                    alt="Medida del rostro para hombre"
                >
            </div>
        </div>

        <div class="row">
            <div
                class="col-md-3"
                id="paso1"
            >
                <p class="numero">1</p>
                <p class="h5">Mide la longitud (largo) de tu cara</p>
                <p class="text-muted description">Ubica el punto medio exacto de tu línea de cabello (la línea que se forma
                    donde el cabello se une con la frente),
                    empieza a medir desde ese punto
                    pasando sobre tu nariz y hasta la punta de tu mentón.</p>
            </div>

            <div
                class="col-md-3"
                id="paso2"
            >
                <p class="numero">2</p>
                <p class="h5">Mide tu frente</p>
                <p class="text-muted description">Ubica la parte más ancha de tu frente. Por lo general, se encuentra casi
                    en medio de las cejas. Coloca la cinta métrica
                    en el punto de inicio en un
                    lado de tu frente, en su punto más ancho y mide hasta el otro punto en el lado opuesto.</p>
            </div>

            <div
                class="col-md-3"
                id="paso3"
            >
                <p class="numero">3</p>
                <p class="h5">Mide de una mejilla a la otra</p>
                <p class="text-muted description">Mide a través de la parte superior de tus pómulos. Coloca el extremo de la
                    cinta métrica justo después de la esquina
                    exterior de tu ojo, este es tu
                    punto de inicio y hasta llegar al otro punto del lado opuesto.</p>
            </div>

            <div
                class="col-md-3"
                id="paso4"
            >
                <p class="numero">4</p>
                <p class="h5">Mide la línea de tu mandíbula</p>
                <p class="text-muted description">Ubica la parte inferior de las orejas e identifica el inicio de tu
                    mandibula. Este será el punto de inicio para tu
                    medición. Mide desde este punto
                    hasta la punta de tu mentón y la medida que te de multiplicala por dos para obtener la longitud
                    combinada de ambos lados de tu mandíbula.</p>
            </div>
        </div>
    </div>
    <!-- FIN PASOS PARA MEDIR -->

    <!-- INDICACION -->
    <div class="indicacion">
        <h3>Te mostraremos las diferentes formas de cara y el armazón ideal para cada una.</h3>
        <div class="container">
            <p>En general, los armazones agregan más interés y se ven perfectos cuando contrastan con tus características
                naturales,
                lo que quiere decir que las caras más redondeadas se ven mejor con los lentes más angulosos, mientras que
                las caras con ángulos más pronunciados se ven
                mejor con los lentes más redondeados.
            </p>
        </div>
    </div>
    <!-- FIN INDICACION -->

    <!-- FORMA -->
    <section class="container seccion-forma-cara">
        <h4 class="text-uppercase">Forma Cuadrada</h4>
        <p class="text-muted">
            Tienen casi la misma medida de largo que de ancho, las medidas de las mejillas, la frente y la mandíbula deben
            ser similares. La mandíbula tiene ángulos
            bien definidos y rectos en sus esquinas más anchas. La cara con forma cuadrada se ven bien con armazones que
            equilibran sus líneas pronunciadas, así que
            busca los redondos u ovalados. Para reducir la apariencia de tener una mandíbula muy pronunciada, busca un marco
            de bordes delgados y delicados (hecho de
            metal y de un color similar al tono de tu piel) para definir la forma de tu cara. Los armazones deben ser un
            poco más anchos que tus pómulos para que te
            quede bien.</p>
        <div class="row">
            <div class="col-md-6">
                <img
                    src="img/cuadrada-m.jpg"
                    alt="Rostro cuadrado mujer"
                >
            </div>
            <div class="col-md-6">
                <img
                    src="img/cuadrada-h.jpg"
                    alt="Rostro cuadrado hombre"
                >
            </div>
        </div>
    </section>
    <!-- FIN FORMA -->

    <x-recomendacion :items="$cuadrada"></x-recomendacion>

    <!-- FORMA -->
    <section class="container seccion-forma-cara">
        <h4 class="text-uppercase">Forma Rectangular</h4>
        <p class="text-muted">
            Son más largas que anchas, las mejillas tienen la misma medida que la frente y la línea de la mandíbula. Tienen
            ángulos bien definidos y rectos en sus
            esquinas. Las caras rectangulares se ven mejor con los marcos redondos o curvos, que atenúan su largo
            ligeramente y enfatizan su ancho. Elige los que tengan
            los bordes superiores e inferiores de la misma forma, pues esto interrumpirá el largo de la cara. También elige
            los marcos que tengan un puente bajo, que
            reduce el tamaño de la nariz. Un buen ejemplo son los lentes estilo aviador, pues su forma de gota ayudan a
            acentuar tus mejillas y los huesos de la
            mandíbula. De forma redonda o cuadrada, no importa, lo vital es que te asegures de que sean grandes, para que
            luzcan y no se pierdan en tu cara.</p>
        <div class="row">
            <div class="col-md-6">
                <img
                    src="img/rectangular-m.jpg"
                    alt="Rostro rectangular mujer"
                >
            </div>
            <div class="col-md-6">
                <img
                    src="img/rectangular-h.jpg"
                    alt="Rostro rectangular hombre"
                >
            </div>
        </div>
    </section>
    <!-- FIN FORMA -->

    <x-recomendacion :items="$rectangular"></x-recomendacion>

    <!-- FORMA -->
    <section class="container seccion-forma-cara">
        <h4 class="text-uppercase">Forma Ovalada</h4>
        <p class="text-muted">
            Son más largas que anchas, las mejillas son un poco más anchas que la medida de la frente y la línea de la
            mandíbula, el mentón es algo redondo. Las caras
            ovaladas se ven excelentes con cualquier tipo de armazon, ya sean de lágrima, redondos o de pasta, así que elige
            alguno que se adapte a tu personalidad.
            Puedes jugar con los colores y estilos que se acomoden a tu estado de ánimo, y sentirte confiado si pruebas las
            tendencias más recientes o eliges una opción
            clásica para estar seguro de que esté de moda por más tiempo.</p>
        <div class="row">
            <div class="col-md-6">
                <img
                    src="img/ovalada-m.jpg"
                    alt="Rostro ovalada mujer"
                >
            </div>
            <div class="col-md-6">
                <img
                    src="img/ovalada-h.jpg"
                    alt="Rostro ovalada hombre"
                >
            </div>
        </div>
    </section>
    <!-- FIN FORMA -->

    <x-recomendacion :items="$ovalada"></x-recomendacion>

    <!-- FORMA -->
    <section class="container seccion-forma-cara">
        <h4 class="text-uppercase">Forma Redonda</h4>
        <p class="text-muted">
            Tienen casi la misma medida de largo que de ancho, las mejillas son más anchas que la medida de la frente y la
            línea de la mandíbula, el mentón es curvo y
            redondo. Las caras redondas se ven mejor con los marcos que tienen ángulos pronunciados, como los cuadrados y
            rectangulares. Estos suelen hacer que esta se
            vea más larga e interrumpen su suavidad. Si tienes una cara muy rellena, considera los rectángulos horizontales,
            que hacen que se vea más delgada.</p>
        <div class="row">
            <div class="col-md-6">
                <img
                    src="img/redonda-m.jpg"
                    alt="Rostro redonda mujer"
                >
            </div>
            <div class="col-md-6">
                <img
                    src="img/redonda-h.jpg"
                    alt="Rostro redonda hombre"
                >
            </div>
        </div>
    </section>
    <!-- FIN FORMA -->
    <x-recomendacion :items="$redonda"></x-recomendacion>

    <!-- FORMA -->
    <section class="container seccion-forma-cara">
        <h4 class="text-uppercase">Forma Triangular</h4>
        <p class="text-muted">
            Son ligeramente más largas que anchas, su mentón es relativamente estrecho, delgado y largo. Las caras
            triangulares se ven geniales con los lentes que
            destacan la mitad superior del marco, como los semi al aire o los ascendentes, o que tienen dos tonos, siendo la
            parte de arriba más oscura que la de abajo,
            también lentes metálicos delgados o armazones de plástico transparente, así lograrás equilibrar tu rostro.</p>
        <div class="row">
            <div class="col-md-6">
                <img
                    src="img/triangular-m.jpg"
                    alt="Rostro triangular mujer"
                >
            </div>
            <div class="col-md-6">
                <img
                    src="img/triangular-h.jpg"
                    alt="Rostro triangular hombre"
                >
            </div>
        </div>
    </section>
    <!-- FIN FORMA -->

    <x-recomendacion :items="$triangular"></x-recomendacion>

    <!-- FORMA -->
    <section class="container seccion-forma-cara">
        <h4 class="text-uppercase">Forma Diamante</h4>
        <p class="text-muted">
            Son más largas que anchas, las mejillas son ligeramente más anchas que la frente y la línea de la mandíbula.
            Tienen ángulos bien definidos y rectos en sus
            esquinas. Las caras de forma de diamante les acomoda casi todo tipo de armazones, aunque si se usan lentes de
            forma rectangular serán un elemento de
            equilibrio a tu barbilla. Los estilos y formas llenas de color y detalles, también serán un buen elemento para
            suavizar la mitad inferior del rostro.</p>
        <div class="row">
            <div class="col-md-6">
                <img
                    src="img/diamante-m.jpg"
                    alt="Rostro diamante mujer"
                >
            </div>
            <div class="col-md-6">
                <img
                    src="img/diamante-h.jpg"
                    alt="Rostro diamante hombre"
                >
            </div>
        </div>
    </section>
    <!-- FIN FORMA -->

    <x-recomendacion :items="$diamante"></x-recomendacion>

    <!-- FORMA -->
    <section class="container seccion-forma-cara">
        <h4 class="text-uppercase">Forma Corazon</h4>
        <p class="text-muted">
            Se identifican por su forma de triángulo invertido, son más largas que anchas, las mejillas y la frente son más
            anchas que la línea de la mandíbula, por lo
            general tienen la entrada del cabello en forma de triángulo y un mentón relativamente puntiagudo. Al igual que
            una cara triangular, el objetivo es agregar
            equilibrio a la frente y barbilla. Sin embargo, a diferencia de la triangular, debes de utilizar armazones
            ovalados, así lograrás suavizar los pómulos.</p>
        <div class="row">
            <div class="col-md-6">
                <img
                    src="img/corazon-m.jpg"
                    alt="Rostro corazon mujer"
                >
            </div>
            <div class="col-md-6">
                <img
                    src="img/corazon-h.jpg"
                    alt="Rostro corazon hombre"
                >
            </div>
        </div>
    </section>
    <!-- FIN FORMA -->

    <x-recomendacion :items="$corazon"></x-recomendacion>


@endsection
