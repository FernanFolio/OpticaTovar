require('./bootstrap')
require('./scripts/admin_plugins')

Vue.component('btn-eliminar-proveedor', require('./components/BtnEliminarProveedor.vue').default)

import store from './store'
const app = new Vue({
    el: '#app',
    store,
})
