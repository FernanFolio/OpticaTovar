require('./bootstrap')
require('./scripts/admin_plugins')

Vue.component('btn-eliminar-proveedor', require('./components/BtnEliminarProveedor.vue').default)
Vue.component('btn-eliminar-marca', require('./components/BtnEliminarMarca.vue').default)
Vue.component('btn-eliminar-categoria', require('./components/BtnEliminarCategoria.vue').default)
Vue.component('btn-eliminar-forma', require('./components/BtnEliminarForma.vue').default)
Vue.component('btn-eliminar-tipo', require('./components/BtnEliminarTipo.vue').default)

import store from './store'
const app = new Vue({
    el: '#app',
    store,
})
