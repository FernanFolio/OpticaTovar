<template>
  <button href="#" class="btn bg-red btn-flat m-lg-2" @click.prevent="eliminarTipo">
    <i class="fa fa-trash text-white"></i>
  </button>
</template>

<script>
  export default {
    props: ['tipoId'],
    methods: {
      async eliminarTipo() {
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
              .delete(`/admin/tipos/${this.tipoId}`)
              .then((resp) => {
                const tr = document.querySelector(`#tr-${this.tipoId}`)
                tr.parentNode.removeChild(tr)
                Swal.fire('Eliminado!', resp.data, 'success')
              })
              .catch((error) => {
                Swal.fire('Imposible!', 'No puedes eliminar un tipo de armazón asociado con lentes', 'error')
              })
          }
        })
      },
    },
  }
</script>
