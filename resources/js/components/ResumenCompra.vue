<template>
  <div class="container my-5">
    <div class="row justify-content-around">
      <!-- Lista de productos -->
      <div class="col-md-8" id="list-items">
        <hr />
        <div class="item row mt-3" v-for="item in carrito" :key="item.id">
          <div class="col-4">
            <img :src="item.detalle.foto" :alt="item.descripcion" />
          </div>

          <div class="col-8">
            <div class="titulo d-flex justify-content-between">
              <p class="my-auto">
                <b>{{item.marca.descripcion}}</b>
              </p>
              <p class="badge badge-warning my-auto">${{item.precio}}</p>
            </div>
            <p class="mt-1 text-muted">{{item.descripcion}}</p>
            <p class="small">Cantidad: {{item.cantidad}}</p>
          </div>
        </div>
      </div>
      <!-- Fin Lista de productos -->

      <!-- Detalles del pago -->
      <aside class="col-md-3 card h-100">
        <div class="card-body">
          <p class="font-weight-bold text-center">Detalles del pago</p>
          <div class="mb-4" id="detalles">
            <div class="d-flex justify-content-between">
              <p class="m-0">Subtotal:</p>
              <p class="m-0">${{(totalPago * 0.84).toFixed(2)}}</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="m-0">IVA:</p>
              <p class="m-0">${{(totalPago * 0.16).toFixed(2)}}</p>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <p class="my-auto">Total a pagar:</p>
              <p class="badge badge-info my-auto">${{totalPago.toFixed(2)}}</p>
            </div>
          </div>
          <!-- <div id="paypal-button-container"></div> -->

          <!-- Formulario para enviar peticion de pago -->
          <form action="/paypal/pay" method="POST">
            <slot name="csrf"></slot>

            <div v-for="item in carrito" :key="item.id">
              <input type="hidden" :value="item.id" :name="`carrito[${item.id}]`" />
              <input type="hidden" :value="item.cantidad" :name="`carrito[${item.id}][cantidad]`" />
            </div>

            <input
              type="submit"
              class="btn btn-primary btn-block"
              value="Pagar"
              :disabled="carrito.length<=0"
            />
          </form>
        </div>
      </aside>
      <!-- Fin detalles del pago -->
    </div>
  </div>
</template>

<script>
  import { mapGetters, mapState } from 'vuex'
  export default {
    computed: {
      ...mapState(['carrito']),
      ...mapGetters(['totalPago']),
    },
  }
</script>

<style>
</style>