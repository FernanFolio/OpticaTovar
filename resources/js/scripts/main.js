document.addEventListener('DOMContentLoaded', function () {
    if ($('#page-loader').length) $('#page-loader').fadeOut(1000)
    if ($('.alert').length)
        setTimeout(() => {
            $('.alert').fadeOut(1000)
        }, 5000)

    //Configurar Typed.js
    if ($('#typed').length) {
        var typed = new Typed('#typed', {
            strings: ['La Óptica que Cortazar prefiere.', 'Tu mejor Opción.', 'Óptica Tovar..'],
            typeSpeed: 70,
            backSpeed: 30,
            backDelay: 700,
        })
    }

    //Menu Cambiante de color
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop()
        if (scroll > 100) {
            $('.navbar').addClass('bg-primary')
            $('.navbar').removeClass('bg-transparent')

            $('.dropdown-menu').removeClass('transparent')
            $('.dropdown-item').removeClass('transparent')
        } else {
            $('.navbar').addClass('bg-transparent')
            $('.navbar').removeClass('bg-primary')

            $('.dropdown-menu').addClass('transparent')
            $('.dropdown-item').addClass('transparent')
        }
    })

    //creamos el mapa con el codigo ofrecido en leafletjs.com
    if ($('#mapa').length) {
        var map = L.map('mapa').setView([20.482314, -100.961799], 16)

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map)

        L.marker([20.482314, -100.961799]).addTo(map).bindPopup('Optica Tovar <br> Te esperamos').openPopup()
    }

    //Scrol Reveal
    if ($('.index').length) {
        window.sr = ScrollReveal()
        sr.reveal('#lo-nuevo', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px',
            viewFactor: 0.2,
        })

        sr.reveal('#mapa', {
            duration: 2000,
            origin: 'top',
            distance: '300px',
            viewFactor: 0.2,
        })
    }

    if ($('.forma-cara').length) {
        window.sr = ScrollReveal()
        sr.reveal('#paso1', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px',
            viewFactor: 0.2,
        })
        sr.reveal('#paso2', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px',
            viewFactor: 0.2,
            delay: 2000,
        })
        sr.reveal('#paso3', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px',
            viewFactor: 0.2,
            delay: 4000,
        })
        sr.reveal('#paso4', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px',
            viewFactor: 0.2,
            delay: 6000,
        })
    }

    //Preguntas Frecuentes
    if ($('.preguntas').length) {
        $('.pregunta').on('click', function (e) {
            $(e.target).parent().children().last().slideToggle()
            $(e.target).children().toggleClass('fa-caret-up').toggleClass('fa-caret-down')
        })
    }

    //Menu Toggler Para el carrito
    $('.toggler').on('click', function (e) {
        e.preventDefault()
        $('#sidebar-wrapper').toggleClass('untoggled')
    })

    //Tienda
    if ($('.tienda').length) {
        $('.titulo-filtro').on('click', function (e) {
            $(this).parent().children().last().slideToggle()
            $(this).children().last().toggleClass('fa-plus').toggleClass('fa-minus')
        })
    }
})
