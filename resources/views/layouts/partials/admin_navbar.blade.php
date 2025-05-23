  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a
                  class="nav-link"
                  data-widget="pushmenu"
                  href="#"
                  role="button"
              ><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a
                  href="/index.php"
                  class="nav-link"
              >Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a
                  href="/admin/login/login.php?action=logout"
                  class="nav-link"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
              >Salir</a>

              <form
                  id="logout-form"
                  action="{{ route('logout') }}"
                  method="POST"
                  class="d-none"
              >
                  @csrf
              </form>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a
                  class="nav-link"
                  data-widget="fullscreen"
                  href="#"
                  role="button"
              >
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a
          href="#"
          class="brand-link"
      >
          <img
              src="/img/logo.png"
              alt="Optica Logo"
              class="brand-image img-circle elevation-3"
              style="opacity: .8"
          >
          <span class="brand-text font-weight-light">Optica</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img
                      src="{{ Auth::user()->photo }}"
                      class="img-circle elevation-2"
                      alt="User Image"
                  >
              </div>
              <div class="info">
                  <a
                      href="#"
                      class="d-block"
                  >{{ Auth::user()->name }}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul
                  class="nav nav-pills nav-sidebar nav-child-indent flex-column"
                  data-widget="treeview"
                  role="menu"
                  data-accordion="false"
              >
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a
                          href="{{ route('dashboard') }}"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-user-friends"></i>
                          <p>
                              Proveedores
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="{{ route('proveedores.index') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="{{ route('proveedores.create') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-tags"></i>
                          <p>
                              Productos
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="{{ route('productos.index') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="{{ route('productos.create') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-money-bill-wave"></i>
                          <p>
                              Compras
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="/admin/compra/compra.php"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todas</p>
                              </a>
                              <a
                                  href="/admin/compra/compra.php?action=form"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Registrar Compra</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fab fa-paypal"></i>
                          <p>
                              Clientes
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="/admin/cliente/cliente.php"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="/admin/cliente/cliente.php?action=form"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Registrar Cliente</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-store"></i>
                          <p>
                              Ventas
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="/admin/venta/venta.php"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todas</p>
                              </a>
                              <a
                                  href="/admin/venta/venta.php?action=form"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Registrar Venta</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a
                          href="{{ route('inventario') }}"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-warehouse"></i>
                          <p>
                              Inventario
                          </p>
                      </a>
                  </li>

                  <li class="nav-header">Catálogos</li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fab fa-buffer"></i>
                          <p>
                              Marcas
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="{{ route('marcas.index') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todas</p>
                              </a>
                              <a
                                  href="{{ route('marcas.create') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-bahai"></i>
                          <p>
                              Categorias
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="{{ route('categorias.index') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todas</p>
                              </a>
                              <a
                                  href="{{ route('categorias.create') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-shapes"></i>
                          <p>
                              Formas
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="{{ route('formas.index') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todas</p>
                              </a>
                              <a
                                  href="{{ route('formas.create') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-draw-polygon"></i>
                          <p>
                              Tipos de Armazones
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="{{ route('tipos.index') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="{{ route('tipos.create') }}"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Sistema CRUGE -->
                  <li class="nav-header">Sistema de Usuarios</li>
                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Usuarios
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="/admin/cruge/usuario/usuario.php"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="/admin/cruge/usuario/usuario.php?action=form"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-user-tie"></i>
                          <p>
                              Roles
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="/admin/cruge/rol/rol.php"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="/admin/cruge/rol/rol.php?action=form"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-user-lock"></i>
                          <p>
                              Permisos
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="/admin/cruge/permiso/permiso.php"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="/admin/cruge/permiso/permiso.php?action=form"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Agregar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-user-cog"></i>
                          <p>
                              Asignación de Roles
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="/admin/cruge/usuario_rol/usuario_rol.php"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="/admin/cruge/usuario_rol/usuario_rol.php?action=form"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Asignar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview">
                      <a
                          href="#"
                          class="nav-link"
                      >
                          <i class="nav-icon fas fa-user-slash"></i>
                          <p>
                              Asignación de permisos
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a
                                  href="/admin/cruge/rol_permiso/rol_permiso.php"
                                  class="nav-link"
                              >
                                  <i class="fas fa-list nav-icon"></i>
                                  <p>Ver todos</p>
                              </a>
                              <a
                                  href="/admin/cruge/rol_permiso/rol_permiso.php?action=form"
                                  class="nav-link"
                              >
                                  <i class="fas fa-plus-circle nav-icon"></i>
                                  <p>Asignar</p>
                              </a>
                          </li>
                      </ul>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
