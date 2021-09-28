<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
    <a
        class="navbar-brand"
        href="index.php"
    ><img
            src="/img/logo-ligth.png"
            alt=""
            width="70"
        ></a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarNav"
    >
        <ul class="navbar-nav">
            <li class="nav-item {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
                <a
                    class="nav-link"
                    href="{{ route('index') }}"
                >Inicio</a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'tienda' ? 'active' : '' }}">
                <a
                    class="nav-link"
                    href="{{ route('tienda') }}"
                >Tienda</a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ Route::currentRouteName() == 'contacto' ? 'active' : '' }}"
                    href="{{ route('contacto') }}"
                >Contacto</a>
            </li>

            <li class="nav-item dropdown">
                <a
                    class="nav-link {{ Route::currentRouteName() == 'forma-cara' ? 'active' : '' }} {{ Route::currentRouteName() == 'faqs' ? 'active' : '' }} {{ Route::currentRouteName() == 'padecimientos' ? 'active' : '' }}"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    Ayuda
                </a>
                <div
                    class="dropdown-menu transparent"
                    aria-labelledby="navbarDropdown"
                >
                    <a
                        class="dropdown-item transparent"
                        href="{{ route('padecimientos') }}"
                    >Padecimientos</a>
                    <a
                        class="dropdown-item transparent"
                        href="{{ route('forma-cara') }}"
                    >Forma de Cara</a>
                    <a
                        class="dropdown-item transparent"
                        href="{{ route('faqs') }}"
                    >FAQ's</a>
                </div>
            </li>

            @if (Auth::check())
                <li class="nav-item dropdown">
                    <a
                        id="navbarDropdown2"
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        v-pre
                    >
                        {{ Auth::user()->name }}
                    </a>

                    <div
                        class="dropdown-menu transparent dropdown-menu-right"
                        aria-labelledby="navbarDropdown2"
                    >
                        <a
                            class="dropdown-item transparent"
                            href="{{ route('mis-compras') }}"
                        >Mis Compras</a>
                        <btn-logout>
                            <template #csrf>
                                @csrf
                            </template>
                        </btn-logout>
                    </div>
                </li>
            @endif

            @if (Auth::check())
                <btn-abrir-carrito></btn-abrir-carrito>
            @else
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/login"
                    >
                        <i class="fas fa-cart-plus mr-1"></i>
                    </a>
                </li>
            @endif

        </ul>
    </div>
</nav>
