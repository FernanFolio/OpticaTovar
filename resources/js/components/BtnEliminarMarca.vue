<template>
  <button href="#" class="btn bg-red btn-flat m-lg-2" @click.prevent="eliminarMarca">
    <i class="fa fa-trash text-white"></i>
  </button>
</template>

<script>
  export default {
    props: ['marcaId'],
    methods: {
      async eliminarMarca() {
        Swal.fire({
          title: '¿Estas seguro?',
          text: 'Esta acción no se puede deshacer',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, eliminar!',
        }).then((result) => {
          if (result.isConfirmed) {
            axios
              .delete(`/admin/marcas/${this.marcaId}`)
              .then((resp) => {
                const tr = document.querySelector(`#tr-${this.marcaId}`)
                tr.parentNode.removeChild(tr)
                Swal.fire('Eliminado!', resp.data, 'success')
              })
              .catch((error) => {
                Swal.fire('Imposible!', 'No puedes eliminar una marca asociada con lentes', 'error')
              })
          }
        })
      },
    },
  }
</script>
