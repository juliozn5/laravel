<template>
  <button class="text-red-600 hover:text-red-900  mr-5"
   @click="eliminarVacante"
  >Eliminar</button>
  </template>

  <<script>
  export default {
      props:['vacanteId'],
      methods: {
          eliminarVacante(){


              this.$swal.fire({
                title: 'Deseas eliminar esta vacante ?',
                text: "una vez eliminada no se podra recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText:'No'
                 }).then((result) => {
                 if (result.isConfirmed) {


                      const params ={
                          id: this.vacanteId,
                          _method: 'delete'
                      }

                      // envia peticion a axios

                     axios.post(`/vacantes/${this.vacanteId}`, params)
                     .then(respuesta => {
                         console.log(respuesta)

                          this.$swal.fire(
                          'Vacante Eliminada',
                          respuesta.data.mensaje,
                          'success'
                        );

                        //Eliminar del DOM
                        this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                     })
                     .catch(error => {
                         console.log(error);
                     })


  }
})
          }
      }

  }
  </script>

