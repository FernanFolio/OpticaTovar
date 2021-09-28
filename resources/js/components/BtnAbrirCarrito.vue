<template>
  <li class="nav-item">
    <a class="nav-link toggler" href="#">
      <i class="fas fa-cart-plus mr-1">
        <span id="item-in-cart">({{numItems}})</span>
      </i>
    </a>
  </li>
</template>

<script>
  import { mapGetters } from 'vuex'
  export default {
    computed: {
      ...mapGetters(['numItems']),
    },
  }
</script>

<style>
</style>