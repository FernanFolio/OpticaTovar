<template>
  <button href="#" class="btn bg-red btn-flat m-lg-2" @click.prevent="eliminarProveedor">
    <i class="fa fa-trash text-white"></i>
  </button>
</template>

<script>
  export default {
    props: ['proveedorId'],
    methods: {
      async eliminarProveedor() {
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
            axios.delete(`/admin/proveedores/${this.proveedorId}`).then((resp) => {
              const tr = document.querySelector(`#tr-${this.proveedorId}`)
              tr.parentNode.removeChild(tr)
              Swal.fire('Eliminado!', resp.data, 'success')
            })
          }
        })
      },
    },
  }
</script>
