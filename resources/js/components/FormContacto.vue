<template>
  <form method="POST" @submit.prevent="handleSubmit" novalidate>
    <div class="form-group">
      <label for="email" class="col-form-label">E-mail</label>
      <input
        type="email"
        class="form-control shadow-sm"
        placeholder="Email"
        id="email"
        name="email"
        v-model="email"
        required
      />
    </div>

    <div class="form-group">
      <label for="asunto" class="col-form-label">Asunto</label>
      <input
        type="text"
        class="form-control shadow-sm"
        placeholder="Asunto"
        id="asunto"
        name="asunto"
        v-model="asunto"
        required
      />
    </div>

    <div class="form-group">
      <label for="mensaje" class="col-form-label">Mensaje</label>
      <textarea
        type="text"
        class="form-control shadow-sm"
        placeholder="Siéntete libre de dejar tus comentarios..."
        name="mensaje"
        id="mensaje"
        rows="8"
        v-model="mensaje"
        required
      ></textarea>
    </div>

    <input type="submit" class="btn btn-primary enviar" />
  </form>
</template>

<script>
  export default {
    data() {
      return {
        email: '',
        asunto: '',
        mensaje: '',
      }
    },
    methods: {
      async handleSubmit() {
        try {
          const resp = await axios.post('/api/contacto', {
            email: this.email,
            asunto: this.asunto,
            mensaje: this.mensaje,
          })
          await Swal.fire('Gracias!', 'Tu mensaje ha sido enviado. Esperamos responderte en breve', 'info')
          window.location = '/'
        } catch (error) {
          console.log(error.response)
        }
      },
    },
  }
</script>

<style>
</style>