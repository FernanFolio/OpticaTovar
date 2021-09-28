<template>
  <div>
    <div class="row">
      <aside class="col-md-3">
        <p class="h3">Filtrar por</p>
        <hr />
        <div class="filtro">
          <div class="d-flex justify-content-between titulo-filtro">
            <p>Categoria</p>
            <i class="fas fa-plus small"></i>
          </div>
          <ul class="categorias list-group hide" id="categorias">
            <li class="list-group-item">
              <a
                href="#"
                @click.prevent="selectCategoria(0)"
                :class="{'category-active' : categoriaActual === 0}"
              >Todos</a>
            </li>
            <li class="list-group-item" v-for="categoria in categorias" :key="categoria.id">
              <a
                href="#"
                @click.prevent="selectCategoria(categoria.id)"
                :class="{'category-active' : categoriaActual === categoria.id}"
              >{{categoria.descripcion}}</a>
            </li>
          </ul>
        </div>

        <div class="filtro">
          <div class="d-flex justify-content-between titulo-filtro">
            <p>Marca</p>
            <i class="fas fa-plus small"></i>
          </div>
          <ul class="marcas list-group hide" id="marcas">
            <li class="list-group-item">
              <a
                href="#"
                @click.prevent="selectMarca(0)"
                :class="{'category-active' : marcaActual === 0}"
              >Todos</a>
            </li>
            <li class="list-group-item" v-for="marca in marcas" :key="marca.id">
              <a
                href="#"
                @click.prevent="selectMarca(marca.id)"
                :class="{'category-active' : marcaActual === marca.id}"
              >{{marca.descripcion}}</a>
            </li>
          </ul>
        </div>

        <div class="filtro">
          <div class="d-flex justify-content-between titulo-filtro">
            <p>Forma del Armazón</p>
            <i class="fas fa-plus small"></i>
          </div>
          <ul class="formas list-group hide" id="formas">
            <li class="list-group-item">
              <a
                href="#"
                @click.prevent="selectForma(0)"
                :class="{'category-active' : formaActual === 0}"
              >Todos</a>
            </li>
            <li class="list-group-item" v-for="forma in formas" :key="forma.id">
              <a
                href="#"
                @click.prevent="selectForma(forma.id)"
                :class="{'category-active' : formaActual === forma.id}"
              >{{forma.descripcion}}</a>
            </li>
          </ul>
        </div>

        <div class="filtro">
          <div class="d-flex justify-content-between titulo-filtro">
            <p>Tipo de Armazón</p>
            <i class="fas fa-plus small"></i>
          </div>
          <ul class="tipos list-group hide" id="tipos">
            <li class="list-group-item">
              <a
                href="#"
                @click.prevent="selectTipo(0)"
                :class="{'category-active' : tipoActual === 0}"
              >Todos</a>
            </li>
            <li class="list-group-item" v-for="tipo in tipos" :key="tipo.id">
              <a
                href="#"
                @click.prevent="selectTipo(tipo.id)"
                :class="{'category-active' : tipoActual === tipo.id}"
              >{{tipo.descripcion}}</a>
            </li>
          </ul>
        </div>
      </aside>

      <div class="col-md-9">
        <div class="orden d-flex">
          <label class="col-form-label">Ordenar por</label>
          <select id="select_order" class="form-control" v-model="sort">
            <option :value="0">--Seleccione--</option>
            <option :value="1">Precio (de bajo a alto)</option>
            <option :value="2">Precio (de alto a bajo)</option>
            <option :value="3">Marca de A-Z</option>
            <option :value="4">Marca de Z-A</option>
          </select>
        </div>

        <paginate
          ref="paginator"
          name="products"
          :list="filteredProducts"
          :per="9"
          tag="div"
          class="row productos"
        >
          <div
            class="col-md-4 producto"
            v-for="producto in paginated('products')"
            :key="producto.id"
          >
            <p class="marca text-nowrap text-truncate">{{producto.marca.descripcion}}</p>
            <img :src="producto.detalle.foto" alt="Imagen del producto" />
            <div class="contenido-producto">
              <p class="description">{{producto.descripcion}}</p>
              <div class="division">
                <span></span>
              </div>
              <p class="precio">${{producto.precio}}</p>
            </div>
            <div class="row justify-content-around">
              <button
                href="#"
                class="btn btn-sm btn-primary btn-add-to-cart"
                @click.prevent="addProducto(producto)"
              >
                <i class="fas fa-cart-plus"></i>Lo quiero
              </button>
              <a :href="`/detalle-producto/${producto.id}`" class="btn btn-sm btn-info">
                <i class="fas fa-caret-square-right"></i>Ver más
              </a>
            </div>
          </div>
        </paginate>
      </div>
    </div>

    <div class="d-flex justify-content-end">
      <paginate-links
        for="products"
        :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"
        :limit="5"
        :show-step-links="true"
        :hide-single-page="true"
      ></paginate-links>
    </div>
  </div>
</template>

<script>
  import { mapState } from 'vuex'
  export default {
    name: 'Tienda',
    props: ['authenticated'],
    data() {
      return {
        categorias: [],
        marcas: [],
        tipos: [],
        formas: [],
        productos: [],
        categoriaActual: 0,
        marcaActual: 0,
        tipoActual: 0,
        formaActual: 0,
        sort: 0,
        paginate: ['products'],
      }
    },
    async mounted() {
      const resp = await Promise.all([
        axios.get('/api/categorias'),
        axios.get('/api/marcas'),
        axios.get('/api/formas'),
        axios.get('/api/tipos'),
        axios.get('/api/productos'),
      ])

      this.categorias = resp[0].data
      this.marcas = resp[1].data
      this.formas = resp[2].data
      this.tipos = resp[3].data
      this.productos = resp[4].data
    },

    methods: {
      selectCategoria(categoria_id) {
        this.categoriaActual = categoria_id
        this.$refs.paginator.currentPage = 0
      },
      selectForma(forma_id) {
        this.formaActual = forma_id
        this.$refs.paginator.currentPage = 0
      },
      selectTipo(tipo_id) {
        this.tipoActual = tipo_id
        this.$refs.paginator.currentPage = 0
      },
      selectMarca(marca_id) {
        this.marcaActual = marca_id
        this.$refs.paginator.currentPage = 0
      },
      async addProducto(producto) {
        if (!this.authenticated) return (window.location = '/login')

        const resp = await axios.get(`/api/inventario/${producto.id}`)
        const stock = resp.data.stock

        const productoCarrito = this.carrito.find((p) => p.id === producto.id)
        const cantRequerida = productoCarrito ? productoCarrito.cantidad + 1 : 1

        if (stock >= cantRequerida) {
          this.$store.commit('AGREGAR_AL_CARRITO', { producto, cantidad: 1 })
          Swal.fire('Producto Agregado!', `Se agregó "${producto.descripcion}" al carrito`, 'success')
        } else {
          Swal.fire('Lo sentimos', 'No hay suficiente stock del producto', 'info')
        }
      },
    },

    computed: {
      ...mapState(['carrito']),
      filteredProducts() {
        let products = this.productos
        if (this.categoriaActual !== 0) products = products.filter((p) => p.categoria_id === this.categoriaActual)
        if (this.formaActual !== 0) products = products.filter((p) => p.forma_id === this.formaActual)
        if (this.tipoActual !== 0) products = products.filter((p) => p.tipo_armazon_id === this.tipoActual)
        if (this.marcaActual !== 0) products = products.filter((p) => p.marca_id === this.marcaActual)
        if (this.sort === 0) return products

        const sortBy = {
          1: (p1, p2) => p1.precio - p2.precio,
          2: (p1, p2) => p2.precio - p1.precio,
          3: (p1, p2) => p1.marca.descripcion.localeCompare(p2.marca.descripcion),
          4: (p1, p2) => p2.marca.descripcion.localeCompare(p1.marca.descripcion),
        }

        const func = sortBy[this.sort]
        products = products.sort((p1, p2) => func(p1, p2))

        return products
      },
    },
  }
</script>

