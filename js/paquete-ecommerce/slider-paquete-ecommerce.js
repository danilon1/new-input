      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        autoplay: {
          delay: 5000,
        },
      });

/*-----------------INICIA EFECTOS DE SCROLL------------------------*/

AOS.init();

/*--------------------------------------------------------------------
          BOTÓN FORMULARIO PAQUETES INDIVIDUALES VERSIÓN MóVIL
--------------------------------------------------------------------*/

status = "close";

$('#paquete-1').on('click', function(){

    if(status == "close"){
      $('.titulo-paquete-1').css({"borderBottomLeftRadius":"0px", "transition":"all 0.5s"});
      $('.menu-flecha').html('<i class="fas fa-chevron-up"></i>');
      $('.menu-flecha').css({"borderBottomRightRadius":"0px", "transition":"all 0.5s"});

      $('.paquete-2').css({"height":"46px", "transition":"all 0.5s"});
      $('.titulo-paquete-2').css({"height":"46px", "transition":"all 0.5s"});
      $('.paquete-3').css({"height":"46px", "transition":"all 0.5s"});
      $('.titulo-paquete-3').css({"height":"46px", "transition":"all 0.5s"});
      $('.paquete-4').css({"height":"46px", "transition":"all 0.5s"});
      $('.titulo-paquete-4').css({"height":"46px", "transition":"all 0.5s"});

      status = "open";

    }else{

      $('.titulo-paquete-1').css({"borderBottomLeftRadius":"15px", "transition":"all 0.5s"});
      $('.menu-flecha').html('<i class="fas fa-chevron-down"></i>');
      $('.menu-flecha').css({"borderBottomRightRadius":"15px", "transition":"all 0.5s"});

      $('.paquete-2').css({"height":"0px", "transition":"all 0.5s"});
      $('.titulo-paquete-2').css({"height":"0px", "transition":"all 0.5s"});
      $('.paquete-3').css({"height":"0px", "transition":"all 0.5s"});
      $('.titulo-paquete-3').css({"height":"0px", "transition":"all 0.5s"});
      $('.paquete-4').css({"height":"0px", "transition":"all 0.5s"});
      $('.titulo-paquete-4').css({"height":"0px", "transition":"all 0.5s"});
      status = "close";
    }
});

$('#paquete-2').on('click', function(){ 
  window.location.assign("https://new-input.com/paquete-inicial.php");
});
$('#paquete-3').on('click', function(){ 
  window.location.assign("https://new-input.com/paquete-full.php");
});
$('#paquete-4').on('click', function(){ 
  window.location.assign("https://new-input.com/paquete-institucional.php");
});

/*--------------------------------------------------------------------
      BOTÓN FORMULARIO PAQUETES INDIVIDUALES VERSIÓN ESCRITORIO
--------------------------------------------------------------------*/
$('#paquete-1-escritorio').on('click', function(){ 
  window.location.assign("https://new-input.com/paquete-inicial.php");
});
$('#paquete-2-escritorio').on('click', function(){ 
  window.location.assign("https://new-input.com/paquete-full.php");
});
$('#paquete-3-escritorio').on('click', function(){ 
  window.location.assign("https://new-input.com/paquete-institucional.php");
});
$('#paquete-4-escritorio').on('click', function(){ 
  window.location.assign("https://new-input.com/paquete-ecommerce.php");
});



/*----------------------------ENVÍA MAIL PACK INICIAL-------------------------------------------------*/
function enviarConsultaInicial(){
        
        if(screen.width < 700){
          var formConsultaInicial = new FormData(document.getElementById("formulario-consulta-inicial"));
          form = $("#formulario-consulta-inicial");
          btn = $('#btn-formulario-inicial'); 
        }else{
          var formConsultaInicial = new FormData(document.getElementById("formulario-consulta-inicial-2"));
          btn = $('#btn-formulario-inicial-2')
          form = $("#formulario-consulta-inicial-2");
        }

  $.ajax({
    beforeSend: function(){
      
        btn.html('<i class="fas fa-spinner fa-spin"></i> <i class="fas fa-envelope-open"></i>');
        setTimeout(function(){
        btn.html('<i class="fas fa-spinner fa-spin"></i> <i class="fas fa-envelope-open-text"></i>');
        }, 1000);
        setTimeout(function(){
        btn.html('<i class="fas fa-spinner fa-spin"></i> <i class="fas fa-envelope"></i>');
        }, 2000);

    },
    url: "php/mail-ecommerce.php",
    type: "POST",
    data: formConsultaInicial,
    processData: false,  // tell jQuery not to process the data
    contentType: false,   // tell jQuery not to set contentType
    dataType: 'json',
  })
  .done(function(response) {

      setTimeout(function(){

        if(response == 0){
          form[0].reset(); //limpiar inputs del form
          btn.toggleClass('boton-formulario');
          btn.html('¡Tu solicitud fue enviada!');
          btn.toggleClass('boton-exito');
          setTimeout(function(){
            btn.toggleClass('boton-exito');
            btn.html('Enviar');
            btn.toggleClass('boton-formulario');
          }, 3000);
        }
        if(response == 1){
          btn.toggleClass('boton-formulario');
          btn.html('Existen campos incompletos');
          btn.toggleClass('boton-error');
          setTimeout(function(){
            btn.toggleClass('boton-error');
            btn.html('Enviar');
            btn.toggleClass('boton-formulario');
          }, 3000);
        }
        if(response == 2){
          btn.toggleClass('boton-formulario');
          btn.html('El correo ingresado es incorrecto');
          btn.toggleClass('boton-error');
          setTimeout(function(){
            btn.toggleClass('boton-error');
            btn.html('Enviar');
            btn.toggleClass('boton-formulario');
          }, 3000);
        }
        if(response == 3){
          btn.toggleClass('boton-formulario');
          btn.html('El número de teléfono es incorrecto');
          btn.toggleClass('boton-error');
          setTimeout(function(){
            btn.toggleClass('boton-error');
            btn.html('Enviar');
            btn.toggleClass('boton-formulario');
          }, 3000);
        }
        if(response == 4){
          btn.toggleClass('boton-formulario');
          btn.html('Error en campo consulta');
          btn.toggleClass('boton-error');
          setTimeout(function(){
            btn.toggleClass('boton-error');
            btn.html('Enviar');
            btn.toggleClass('boton-formulario');
          }, 3000);
        }

      }, 3000); //timeot para permitir animaciones
      
  })
  .fail(function() {

    btn.toggleClass('boton-formulario');
    btn.html('Ocurrió un error inesperado');
    btn.toggleClass('boton-error');
    setTimeout(function(){
      btn.toggleClass('boton-error');
      btn.html('Enviar');
      btn.toggleClass('boton-formulario');
    }, 3000);

  })
  .always(function() {

  });

}