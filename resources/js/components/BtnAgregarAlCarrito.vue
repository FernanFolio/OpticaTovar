<template>
  <a href="#" class="btn btn-primary" @click.prevent="agregarAlCarrito">Agregar al carrito</a>
</template>

<script>
  import { mapState } from 'vuex'
  export default {
    props: ['producto', 'authenticated'],
    computed: {
      ...mapState(['carrito']),
    },
    methods: {
      async agregarAlCarrito() {
        if (!this.authenticated) return (window.location = '/login')

        const cantidad = Number(document.querySelector('#spnCantidad').value)
        const resp = await axios.get(`/api/inventario/${this.producto.id}`)
        const stock = resp.data.stock

        const productoCarrito = this.carrito.find((p) => p.id === this.producto.id)
        const cantRequerida = productoCarrito ? productoCarrito.cantidad + cantidad : cantidad

        if (stock >= cantRequerida) {
          this.$store.commit('AGREGAR_AL_CARRITO', { producto: this.producto, cantidad })
          Swal.fire(
            'Producto Agregado!',
            `Se agregaron ${cantidad} existencias de "${this.producto.descripcion}" al carrito`,
            'success'
          )
        } else {
          Swal.fire('Lo sentimos', 'No hay suficiente stock del producto', 'info')
        }
      },
    },
  }
</script>