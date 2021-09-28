<template>
  <div>
    <a class="dropdown-item transparent" href="#" @click.prevent="logout">Cerrar Sesión</a>

    <form id="logout-form" action="/logout" method="POST" class="d-none">
      <slot name="csrf"></slot>
    </form>
  </div>
</template>

<script>
  export default {
    methods: {
      logout() {
        this.$store.commit('SET_CARRITO', { carrito: [] })
        document.getElementById('logout-form').submit()
      },
    },
  }
</script>

<style>
</style>