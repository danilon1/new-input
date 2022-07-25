$(document).ready(function(){
setTimeout(apagar, 5000);
	function apagar(){
		$('#letra-1').toggleClass('letra-1');
		$('#letra-2').toggleClass('letra-2');
		$('#letra-3').toggleClass('letra-3');
		$('#letra-4').toggleClass('letra-4');
		$('#letra-5').toggleClass('letra-5');
		$('#letra-6').toggleClass('letra-6');
		$('#letra-7').toggleClass('letra-7');
		$('#letra-8').toggleClass('letra-8');
		$('#letra-9').toggleClass('letra-9');
	}
});

  posicion = window.pageYOffset;  

$(document).scroll(function(){

    nuevaPosicion = window.pageYOffset;

    if(nuevaPosicion <= posicion){
      document.getElementById('navegador').style.backdropFilter = 'blur(10px)';
      document.getElementById('navegador-sm').style.backdropFilter = 'blur(10px)';
      document.getElementById('barra').style.top = '0px';
      document.getElementById('barra').style.transition = 'all 0.3s';
    }else{
      document.getElementById('barra').style.top = '-60px';
      document.getElementById('barra').style.transition = 'all 0.3s';
      $('.navegador-sm').css("height", "40px")
      $('#boton-menu').html('III');
       $('#boton-menu').toggleClass('menu-clicked');
    }
    posicion = nuevaPosicion;
});

$('.elemento').on('click', function(){
    id = $(this).children().attr('id');
    contenido = $('.contiene-imagen-modal').html('<img src="Imagenes/web 1440px ('+id+').png">');
    modal.style.display = "block";
});
$('.elemento-2').on('click', function(){
    id = $(this).children().attr('id');
    contenido = $('.contiene-imagen-modal').html('<img src="Imagenes/diseño 1440px ('+id+').png">');
    modal.style.display = "block";
});



function solicitar(){

 $('html, body').animate({
 scrollTop: $("#contacto").offset().top}, 1500);

}

function irInicio(){

  url = window.location.href;

  if(url == 'https://new-input.com/paquete-inicial.php'){
     window.location.assign("https://new-input.com/index.php#container");
  }
  if(url == 'https://new-input.com/paquete-full.php'){
     window.location.assign("https://new-input.com/index.php#container");
  }
  if(url == 'https://new-input.com/paquete-institucional.php'){
     window.location.assign("https://new-input.com/index.php#container");
  }
  if(url == 'https://new-input.com/paquete-ecommerce.php'){
     window.location.assign("https://new-input.com/index.php#container");
  }
    $('html, body').animate({scrollTop: $("#container").offset().top}, 1500);
}

function irServicio(){

   url = window.location.href;

   if(url == 'https://new-input.com/paquete-inicial.php'){
      window.location.assign("https://new-input.com/index.php#servicio");
   }
   if(url == 'https://new-input.com/paquete-full.php'){
      window.location.assign("https://new-input.com/index.php#servicio");
   }
   if(url == 'https://new-input.com/paquete-institucional.php'){
      window.location.assign("https://new-input.com/index.php#servicio");
   }
   if(url == 'https://new-input.com/paquete-ecommerce.php'){
      window.location.assign("https://new-input.com/index.php#servicio");
   }
     $('html, body').animate({scrollTop: $("#servicio").offset().top}, 1500);

}

function irNosotros(){

  url = window.location.href;

  if(url == 'https://new-input.com/paquete-inicial.php'){
     window.location.assign("https://new-input.com/index.php#nosotros");
  }
  if(url == 'https://new-input.com/paquete-full.php'){
     window.location.assign("https://new-input.com/index.php#nosotros");
  }
  if(url == 'https://new-input.com/paquete-institucional.php'){
     window.location.assign("https://new-input.com/index.php#nosotros");
  }
  if(url == 'https://new-input.com/paquete-ecommerce.php'){
     window.location.assign("https://new-input.com/index.php#nosotros");
  }
    $('html, body').animate({scrollTop: $("#nosotros").offset().top}, 1500);

}

function irPreguntas(){

    url = window.location.href;

    if(url == 'https://new-input.com/paquete-inicial.php'){
       window.location.assign("https://new-input.com/index.php#preguntas");
    }
    if(url == 'https://new-input.com/paquete-full.php'){
       window.location.assign("https://new-input.com/index.php#preguntas");
    }
    if(url == 'https://new-input.com/paquete-institucional.php'){
       window.location.assign("https://new-input.com/index.php#preguntas");
    }
    if(url == 'https://new-input.com/paquete-ecommerce.php'){
       window.location.assign("https://new-input.com/index.php#preguntas");
    }
      $('html, body').animate({scrollTop: $("#preguntas").offset().top}, 1500);
}

$('.hoversub').on('mouseover', function(){
  $('.submenu').css({backdropFilter: 'blur(10px)',top: '40px'});
});

$('.submenu').on('mouseleave', function(){
  $('.submenu').css({top: '-140px', backdropFilter: 'blur(10px)'});
});

function irPrecios(){

    url = window.location.href;
 if(url == 'https://new-input.com/paquete-inicial.php'){
    window.location.assign("https://new-input.com/index.php#precios");
 }
 if(url == 'https://new-input.com/paquete-full.php'){
    window.location.assign("https://new-input.com/index.php#precios");
 }
 if(url == 'https://new-input.com/paquete-institucional.php'){
    window.location.assign("https://new-input.com/index.php#precios");
 }
 if(url == 'https://new-input.com/paquete-ecommerce.php'){
    window.location.assign("https://new-input.com/index.php#precios");
 }
   $('html, body').animate({scrollTop: $("#precios").offset().top}, 1500);
}

function irContacto(){

    url = window.location.href;

 if(url == 'https://new-input.com/paquete-inicial.php'){
    window.location.assign("https://new-input.com/index.php#contacto");
 }
 if(url == 'https://new-input.com/paquete-full.php'){
    window.location.assign("https://new-input.com/index.php#contacto");
 }
 if(url == 'https://new-input.com/paquete-institucional.php'){
    window.location.assign("https://new-input.com/index.php#contacto");
 }
 if(url == 'https://new-input.com/paquete-ecommerce.php'){
    window.location.assign("https://new-input.com/index.php#contacto");
 }
   $('html, body').animate({scrollTop: $("#contacto").offset().top}, 1500);
  
}

$('#boton-menu').click(function (){
    $('#boton-menu').toggleClass('menu-clicked');
    contenido = $('#boton-menu').html();
    if(contenido == 'III'){
    	$('#boton-menu').html('<i class="fas fa-chevron-left"></i>');
    	$('.navegador-sm').css("height", "150px")
    }else{
    	$('#boton-menu').html('III');
    	$('.navegador-sm').css("height", "40px")
    }    
});


function irServicioSm(){
     url = window.location.href;
  if(url == 'https://new-input.com/paquete-inicial.php'){
     window.location.assign("https://new-input.com/index.php#servicio");
  }
  if(url == 'https://new-input.com/paquete-full.php'){
     window.location.assign("https://new-input.com/index.php#servicio");
  }
  if(url == 'https://new-input.com/paquete-institucional.php'){
     window.location.assign("https://new-input.com/index.php#servicio");
  }
  if(url == 'https://new-input.com/paquete-ecommerce.php'){
     window.location.assign("https://new-input.com/index.php#servicio");
  }

  $('html, body').animate({scrollTop: $("#servicio").offset().top}, 1500);
  $('#boton-menu').toggleClass('menu-clicked');
  $('#boton-menu').html('III');
  $('.navegador-sm').css("height", "40px")
  contenido = $('#boton-menu').html();
}

function irNosotrosSm(){
     url = window.location.href;
  if(url == 'https://new-input.com/paquete-inicial.php'){
     window.location.assign("https://new-input.com/index.php#nosotros");
  }
  if(url == 'https://new-input.com/paquete-full.php'){
     window.location.assign("https://new-input.com/index.php#nosotros");
  }
  if(url == 'https://new-input.com/paquete-institucional.php'){
     window.location.assign("https://new-input.com/index.php#nosotros");
  }
  if(url == 'https://new-input.com/paquete-ecommerce.php'){
     window.location.assign("https://new-input.com/index.php#nosotros");
  }

  $('html, body').animate({scrollTop: $("#nosotros").offset().top}, 1500);
  $('#boton-menu').toggleClass('menu-clicked');
  $('#boton-menu').html('III');
  $('.navegador-sm').css("height", "40px")
  contenido = $('#boton-menu').html();
}

function irPreguntasSm(){
     url = window.location.href;
  if(url == 'https://new-input.com/paquete-inicial.php'){
     window.location.assign("https://new-input.com/index.php#preguntas");
  }
  if(url == 'https://new-input.com/paquete-full.php'){
     window.location.assign("https://new-input.com/index.php#preguntas");
  }
  if(url == 'https://new-input.com/paquete-institucional.php'){
     window.location.assign("https://new-input.com/index.php#preguntas");
  }
  if(url == 'https://new-input.com/paquete-ecommerce.php'){
     window.location.assign("https://new-input.com/index.php#preguntas");
  }

  $('html, body').animate({scrollTop: $("#preguntas").offset().top}, 1500);
  $('#boton-menu').toggleClass('menu-clicked');
  $('#boton-menu').html('III');
  $('.navegador-sm').css("height", "40px")
  contenido = $('#boton-menu').html();
}

function irPreciosSm(){

     url = window.location.href;
  if(url == 'https://new-input.com/paquete-inicial.php'){
     window.location.assign("https://new-input.com/index.php#precios");
  }
  if(url == 'https://new-input.com/paquete-full.php'){
     window.location.assign("https://new-input.com/index.php#precios");
  }
  if(url == 'https://new-input.com/paquete-institucional.php'){
     window.location.assign("https://new-input.com/index.php#precios");
  }
  if(url == 'https://new-input.com/paquete-ecommerce.php'){
     window.location.assign("https://new-input.com/index.php#precios");
  }

  $('html, body').animate({scrollTop: $("#precios").offset().top}, 1500);
  $('#boton-menu').toggleClass('menu-clicked');
  $('#boton-menu').html('III');
  $('.navegador-sm').css("height", "40px")
  contenido = $('#boton-menu').html();
}

function irContactoSm(){
     url = window.location.href;
  if(url == 'https://new-input.com/paquete-inicial.php'){
     window.location.assign("https://new-input.com/index.php#contacto");
  }
  if(url == 'https://new-input.com/paquete-full.php'){
     window.location.assign("https://new-input.com/index.php#contacto");
  }
  if(url == 'https://new-input.com/paquete-institucional.php'){
     window.location.assign("https://new-input.com/index.php#contacto");
  }
  if(url == 'https://new-input.com/paquete-ecommerce.php'){
     window.location.assign("https://new-input.com/index.php#contacto");
  }

  $('html, body').animate({scrollTop: $("#contacto").offset().top}, 1500);
  $('#boton-menu').toggleClass('menu-clicked');
  $('#boton-menu').html('III');
  $('.navegador-sm').css("height", "40px")
  contenido = $('#boton-menu').html();
}

function irPack1Sm(){
  window.location.assign("https://new-input.com/paquete-inicial.php");
}
function irPack2Sm(){
  window.location.assign("https://new-input.com/paquete-full.php");
}
function irPack3Sm(){
  window.location.assign("https://new-input.com/paquete-institucional.php");
}
function irPack4Sm(){
  window.location.assign("https://new-input.com/paquete-ecommerce.php");
}

/*----------------------------ENVÍA MAIL PRINCIPAL-------------------------------------------------*/
function enviarConsulta(){
        
        if(screen.width < 700){
          var formConsultaInicial = new FormData(document.getElementById("formulario-consulta"));
          form = $("#formulario-consulta");
          btn = $('#btn-formulario'); 
        }else{
          var formConsultaInicial = new FormData(document.getElementById("formulario-consulta"));
          btn = $('#btn-formulario')
          form = $("#formulario-consulta");
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
    url: "php/contacto.php",
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
/*-----------------------------------------------------------------------------*/


/*--------------------------------PREGUNTAS FRECUENTES---------------------------------------------*/

$('.container-titulo-pregunta').on('click', function(){

  altura = $(this).siblings('.respuesta').css('max-height');

    if(altura === '0px'){
      styles = {
        maxHeight: "550px",
        transition: "all ease 1s"
      };
      $(this).children('.icono-pregunta').html('<i class="fas fa-chevron-down"></i>');
      $(this).siblings('.respuesta').css(styles);
      
    }else{
          styles = {
        maxHeight: "0px",
        transition: "all ease 1s"
      };
      $(this).children('.icono-pregunta').html('<i class="fas fa-angle-right"></i>');
      $(this).siblings('.respuesta').css(styles);
    }
});

/*-----------------------CHECKBOX------------------------*/
 
    checkboxA = "off";

$('#checkbox-a').click(function(){
    
    if(checkboxA == "off"){
        $('#checkbox-a').html('<i class="fas fa-check"></i>');
        $('#input-web').val('si');
        checkboxA = "on";
    }else{
        $('#checkbox-a').html('');
        $('#input-web').val('')
        checkboxA = "off";
    }
});
$('.label-a').click(function(){
    if(checkboxA == "off"){
        $('#checkbox-a').html('<i class="fas fa-check"></i>');
        $('#input-web').val('si');
        checkboxA = "on";
    }else{
        $('#checkbox-a').html('');
        $('#input-web').val('')
        checkboxA = "off";
    }
});

    checkboxB = "off";

$('#checkbox-b').click(function(){
    
    if(checkboxB == "off"){
        $('#checkbox-b').html('<i class="fas fa-check"></i>');
        $('#input-ux').val('si');
        checkboxB = "on";
    }else{
        $('#checkbox-b').html('');
        $('#input-ux').val('');
        checkboxB = "off";
    }
});
$('.label-b').click(function(){
    if(checkboxB == "off"){
        $('#checkbox-b').html('<i class="fas fa-check"></i>');
        $('#input-ux').val('si');
        checkboxB = "on";
    }else{
        $('#checkbox-b').html('');
        $('#input-ux').val('');
        checkboxB = "off";
    }
});

    checkboxC = "off";

$('#checkbox-c').click(function(){
    
    if(checkboxC == "off"){
        $('#checkbox-c').html('<i class="fas fa-check"></i>');
        $('#input-grafico').val('si');
        checkboxC = "on";
    }else{
        $('#checkbox-c').html('');
        $('#input-grafico').val('');
        checkboxC = "off";
    }
});
$('.label-c').click(function(){
    if(checkboxC == "off"){
        $('#checkbox-c').html('<i class="fas fa-check"></i>');
        $('#input-grafico').val('si');
        checkboxC = "on";
    }else{
        $('#checkbox-c').html('');
        $('#input-grafico').val('');
        checkboxC = "off";
    }
});

    checkboxD = "off";

$('#checkbox-d').click(function(){
    
    if(checkboxD == "off"){
        $('#checkbox-d').html('<i class="fas fa-check"></i>');
        $('#input-foto').val('si');
        checkboxD = "on";
    }else{
        $('#checkbox-d').html('');
        $('#input-foto').val('');
        checkboxD = "off";
    }
});
$('.label-d').click(function(){
    if(checkboxD == "off"){
        $('#checkbox-d').html('<i class="fas fa-check"></i>');
        $('#input-foto').val('si');
        checkboxD = "on";
    }else{
        $('#checkbox-d').html('');
        $('#input-foto').val('');
        checkboxD = "off";
    }
});

/*-------------------ENLACES ICONOS RRSS-------------*/
$('#instagram').click(function(){
    window.open('https://www.instagram.com/newinputweb/');
});
$('#facebook').click(function(){
    window.open('https://www.facebook.com/newinputweb');
});
$('#whatsapp').click(function(){
    window.open('https://wa.me/+5493517462682?text=¡Hola! Quiero hacerles una consulta');
});

/*-----------------INICIA EFECTOS DE SCROLL------------------------*/

AOS.init();