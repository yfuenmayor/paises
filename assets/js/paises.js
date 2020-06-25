    // Definimos la URL
    let baseUrl = $('#url').val();

    //Configuramos las alerts
    let Toast = Swal.mixin({
        toast: true,
        showConfirmButton: false,
        timer: 3000
    });

$(document).ready(function () {
    $('#pais').on('change', function(e) {
       const nombre = $(this).find(':selected').attr('data-nombre');
       const pais_id = $(this).val();
       (pais_id.trim() !== '' || nombre.trim() !== '') ? sendPais(pais_id,nombre) : null;    
    });
}); //DocReady
 
//Configuramos la carga de la data
const sendPais = (pais_id,nombre) => {
      // Envio asincrono
      $.ajax({  
          type: "POST",
          url: `${baseUrl}paises/paises/getPais`,
          data: {
              Nombre: nombre,
              Id: pais_id
          },
          dataType: "json",  
        //respuesta del envio
        success: function(res) {
            if (res) {
                Toast.fire({
                    type: 'success',
                    title: `${res.nombre} Cargado con Exito !`,
                    background: '#F3F3F3'
                });
                $('#showPais').text(res.nombre);
                $("#card").attr("hidden",false); 
            } 
          },  // success
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            Toast.fire({
                type: 'error',
                title: `${errorThrown} !`,
                background: '#F3F3F3'
            });
        });  //Ajax   
  }//funcion
