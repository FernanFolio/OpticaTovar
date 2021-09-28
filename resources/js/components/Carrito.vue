<template>
  <aside class="bg-light border-right carrito" id="sidebar-wrapper">
    <div class="sidebar-heading toggler">
      <i class="fas fa-arrow-left"></i>Carrito
    </div>

    <div class="contenido-carrito">
      <ul class="list-group list-unstyled">
        <li class="producto" v-for="producto in carrito" :key="producto.id">
          <div class="row">
            <div class="col-5 pr-0">
              <img :src="producto.detalle.foto" />
            </div>
            <div class="col-7">
              <p class="marca">{{producto.marca.descripcion}}</p>
              <p class="precio">${{producto.precio}}</p>
              <p class="cantidad">
                Cant: {{producto.cantidad}}
                <a @click="eliminarProducto(producto)">
                  <i class="fas fa-minus-circle"></i>
                </a>
              </p>
            </div>
          </div>
        </li>
        <hr />
      </ul>
    </div>

    <footer>
      <p>Total</p>
      <p class="precio" id="total">${{totalPago.toFixed(2)}}</p>
      <hr />
      <div class="d-flex justify-content-center">
        <a href="/pagar" class="btn btn-primary w-75">Pagar</a>
      </div>
    </footer>
  </aside>
</template>

<script>
  import { mapGetters, mapState } from 'vuex'
  export default {
    name: 'Carrito',
    computed: {
      ...mapState(['carrito']),
      ...mapGetters(['totalPago']),
    },
    methods: {
      eliminarProducto(producto) {
        this.$store.commit('ELIMINAR_DEL_CARRITO', { producto })
      },
    },
  }
</script>
