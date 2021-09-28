require('./bootstrap')

// Vue Paginate
import Vue from 'vue'
import VuePaginate from 'vue-paginate'
Vue.use(VuePaginate)

Vue.component('carrito', require('./components/Carrito.vue').default)
Vue.component('btn-abrir-carrito', require('./components/BtnAbrirCarrito.vue').default)
Vue.component('btn-agregar-carrito', require('./components/BtnAgregarAlCarrito.vue').default)
Vue.component('btn-logout', require('./components/BtnLogout.vue').default)
Vue.component('tienda', require('./components/Tienda.vue').default)
Vue.component('form-contacto', require('./components/FormContacto.vue').default)
Vue.component('resumen-compra', require('./components/ResumenCompra.vue').default)

import store from './store'
const app = new Vue({
    el: '#app',
    store,
})

require('./scripts/main')
