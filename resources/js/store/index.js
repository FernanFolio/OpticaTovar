import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import Vue from 'vue'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        carrito: [],
    },
    mutations: {
        AGREGAR_AL_CARRITO(state, { producto, cantidad }) {
            const exists = state.carrito.find((p) => p.id === producto.id)

            if (exists) {
                state.carrito = state.carrito.map((p) => {
                    if (p.id === producto.id) p.cantidad += cantidad
                    return p
                })
            } else {
                producto.cantidad = cantidad
                state.carrito.push(producto)
            }
        },
        ELIMINAR_DEL_CARRITO(state, { producto }) {
            producto.cantidad = producto.cantidad - 1

            if (producto.cantidad <= 0) {
                state.carrito = state.carrito.filter((p) => p.id !== producto.id)
            } else {
                state.carrito = state.carrito.map((p) => (p.id === producto.id ? producto : p))
            }
        },
        SET_CARRITO(state, { carrito }) {
            state.carrito = carrito
        },
    },

    getters: {
        totalPago(state) {
            return state.carrito.reduce((acc, producto) => acc + producto.cantidad * producto.precio, 0)
        },
        numItems(state) {
            return state.carrito.reduce((acc, producto) => acc + producto.cantidad, 0)
        },
    },
    plugins: [createPersistedState()],
})

export default store
