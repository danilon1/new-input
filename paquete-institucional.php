<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/paquete-institucional/paquetes.css">
	<link rel="stylesheet" href="css/paquete-institucional/modal.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/> <!-- CSS DEL SLIDER -->
	<link rel="stylesheet" href="css/paquete-institucional/slider-paquete-institucional.css"> <!-- CSS DEL SLIDER -->
	<link rel="stylesheet" href="css/paquete-institucional/aos.css"> <!-- librería para efectos en scroll -->

	<title>New Input</title>
	<link rel="shortcut icon" href="Imagenes/logo 16px.png" type="image/png" />
</head>
<body>
	<div class="barra" id="barra">
		<div class="logo" onclick="irInicio()">
			<img class="new" src="Logo/Simple_Mesa de trabajo 1.png">
		</div>
		<div class="navegador oculto" id="navegador">
			<div><button class="bot" onclick="irServicio()" value="servicio">Servicios</button></div>
			<div><button class="bot" onclick="irPreguntas()" value="preguntas">Preguntas</button></div>
			<div><button class="bot" onclick="irPrecios()" value="precios">Precios</button></div>
			<div><button class="bot" onclick="irNosotros()" value="nosotros">Nosotros</button></div>		
			<div><button class="bot" onclick="irContacto()" value="contacto">Contacto</button></div>
		</div>

		<div class="navegador-sm" id="navegador-sm">
			<div id="menu-1"><p id="boton-menu">III</p></div>
			<div id="menu-2"><button class="bot" onclick="irServicioSm()" value="servicio">Servicios</button></div>
			<div id="menu-3"><button class="bot" onclick="irPreguntasSm()" value="preguntas">Preguntas Frecuentes</button></div>
			<div id="menu-4"><button class="bot" onclick="irPreciosSm()" value="precios">Precios</button></div>
			<div id="menu-5"><button class="bot" onclick="irNosotrosSm()" value="nosotros">Nosotros</button></div>		
			<div id="menu-6"><button class="bot" onclick="irContactoSm()" value="contacto">Contacto</button></div>
			<div id="menu-7"></div>							
		</div>
	</div> <!-- termina barra -->

	<div id="modal" class="modal">

	  <div class="modal-content">
	    <span class="close">&times;</span>
	  </div>

	</div> <!-- termina modal -->

	<div class="container-principal">

		<div class="menu-paquetes">

			<div class="paquete-1" id="paquete-1">
				<div class="titulo-paquete-1">PACK &nbsp<span class="colorear-titulos">INSTITUCIONAL</span></div>
				<div class="menu-flecha"><i class="fas fa-chevron-down"></i></div>
			</div> <!-- termina paquete-1 -->
			<div class="paquete-2" id="paquete-2">
				<div class="titulo-paquete-2">PACK &nbsp<span class="colorear-titulos">INICIAL</span></div>
			</div> <!-- termina paquete-2 -->
			<div class="paquete-3" id="paquete-3">
				<div class="titulo-paquete-3">PACK &nbsp<span class="colorear-titulos">FULL</span></div>
			</div> <!-- termina paquete-3 -->
			<div class="paquete-4" id="paquete-4">
				<div class="titulo-paquete-4">PACK &nbsp<span class="colorear-titulos">E-COMMERCE</span></div>
			</div> <!-- termina paquete-4 -->

		</div><!-- termina menu-paquetes -->

		<div class="menu-paquetes-escritorio">
			<div class="paquete-1-escritorio" id="paquete-1-escritorio">
				<div class="titulo-paquete-1">PACK &nbsp<span class="colorear-titulos">INICIAL</span></div>
			</div> <!-- termina paquete-1 -->
			<div class="paquete-2-escritorio" id="paquete-2-escritorio">
				<div class="titulo-paquete-2">PACK &nbsp<span class="colorear-titulos">FULL</span></div>
			</div> <!-- termina paquete-2 -->
			<div class="paquete-3-escritorio" id="paquete-3-escritorio">
				<div class="titulo-paquete-3">PACK &nbsp<span class="colorear-titulos">INSTITUCIONAL</span></div>
			</div> <!-- termina paquete-3 -->
			<div class="paquete-4-escritorio" id="paquete-4-escritorio">
				<div class="titulo-paquete-4">PACK &nbsp<span class="colorear-titulos">E-COMMERCE</span></div>
			</div> <!-- termina paquete-4 -->
		</div><!-- termina menu-paquetes-escritorio -->

		<div class="container-descripcion-paquetes" data-aos="fade-up" data-aos-duration="1500">
			<div class="descripcion-paquetes">
				<div class="titulo-slider">PACK &nbsp<span class="colorear-titulos-slider">INSTITUCIONAL</span></div>		
				<div class="parrafo-1-descripcion">
					<p>¡Estás más cerca de tener tu propia web institucional!</p>
				</div>
				<div class="parrafo-2-descripcion">
					<p>¿Representás a una organización o a una empresa? Te ofrecemos una página web institucional de hasta 5 secciones independientes y una de ellas será autoadministrable, para que tengas 100% autonomía sobre todos los contenidos. ¡También incluimos la ubicación de la institución en el mapa para que tus clientes puedan encontrarte off-line!</p>
				</div>
				<div class="parrafo-3-descripcion">
					<p>Este pack incluye:</p>
				</div>
				<div class="parrafo-4-descripcion">
					<ul>
						<li>Hasta 5 secciones independientes (con un máximo de 2 bloques de contenido por sección)</li>
						<li>1 bloque de contenido para reseñas de tus clientes</li>
						<li>Elección del bloque auto-administrable</li>
						<li>Menú (con submenús)</li>
						<li>Diseño responsive (adaptable a smartphones, tablets y computadoras)</li>
						<li>Enlace a redes sociales y WhatsApp</li>
						<li>Formulario de contacto</li>
						<li>Correo electrónico propio (hola@tudominio.com)</li>
						<li>Certificado SSL por 90 días (indica que tu sitio es seguro)</li>
						<li>Mapa de ubicación en Google Maps</li>						
					</ul>
					El pack Institucional es personalizable. Con gusto lo adaptaremos a tu medida si tus necesidades lo requieren.		
				</div>
			</div> <!-- termina descripcion-paquetes -->

			<div class="container-slider">
				<div class="titulo-slider">ALGUNOS &nbsp<span class="colorear-titulos-slider">EJEMPLOS</span></div>
				<div class="slider">
					<!-- Swiper -->
					<div class="swiper-container mySwiper">
					  <div class="swiper-wrapper">
					  	<div class="swiper-slide"><img src="Imagenes/pack-institucional/Institucional 1 - 1440px.png" alt="" id="img1"></div>
					  	<div class="swiper-slide"><img src="Imagenes/pack-institucional/Institucional 2 - 1440px.png" alt="" id="img2"></div>
					  	<div class="swiper-slide"><img src="Imagenes/pack-institucional/Institucional 3 - 1440px.png" alt="" id="img3"></div>
					  </div>
					  <div class="swiper-button-next flechas"></div>
					  <div class="swiper-button-prev flechas"></div>
					</div>
				</div>
			</div> <!-- termina container-slider -->
		</div>	<!-- termina container-descripcion-paquetes -->


		<div class="container-slider-sm" data-aos="fade-up" data-aos-duration="1500">
			<div class="titulo-slider">ALGUNOS &nbsp<span class="colorear-titulos-slider">EJEMPLOS</span></div>
			<div class="slider">
				<!-- Swiper -->
				<div class="swiper-container mySwiper">
				  <div class="swiper-wrapper">
				    <div class="swiper-slide"><img src="Imagenes/pack-institucional/Institucional 1 - 330px.png" alt=""></div>
				    <div class="swiper-slide"><img src="Imagenes/pack-institucional/Institucional 2 - 330px.png" alt=""></div>
				    <div class="swiper-slide"><img src="Imagenes/pack-institucional/Institucional 3 - 330px.png" alt=""></div>
				  </div>
				  <div class="swiper-button-next flechas"></div>
				  <div class="swiper-button-prev flechas"></div>
				</div>
			</div>
		</div> <!-- termina container-slider -->


		<div class="container-preguntas" id="preguntas"  data-aos="fade-up" data-aos-duration="1500">
			<div class="titulo-principal-preguntas">PREGUNTAS &nbsp<span class="colorear-titulos-slider">FRECUENTES</span></div>
				<div class="listado-preguntas">
					<div class="pregunta">
						<div class="container-titulo-pregunta">
						<div class="titulo-pregunta">
								¿Qué es una página o sitio web?
							</div>
							<div class="icono-pregunta">
								<i class="fas fa-angle-right"></i>
							</div>
						</div>
						<div class="respuesta">
						Un sitio web, también comúnmente llamado “página web”,  es un documento en internet que se escribe en lenguaje HTML; el lenguaje de marcado utilizado para crear y estructurar páginas web, y se identifica con un nombre, a lo que llamamos "dominio". <br><br>
						Un sitio web puede contener varias páginas web dentro, a las que llamamos URL; todas forman parte del mismo ecosistema y son parte del mismo dominio. <br><br>
						Por ejemplo: tomemos como referencia a www.samsung.com <br>
						<ul>
							<li>"www.samsung.com" es el sitio web</li>
							<li>"samsung" es el dominio </li>
							<li>"www.samsung.com/ar/tablets" es una de las páginas web del sitio, que corresponde a la sección de "tablets".</li>
						</ul>
						Todas los negocios, emprendimientos, profesionales autónomos y empresas necesitan un sitio web propio que formalice su propuesta de valor, genere confianza en sus clientes y les permita conocer quiénes son, qué comercializan, dónde encontrarlos y cómo ponerse en contacto.

						</div>
					</div>
					<div class="pregunta">
						<div class="container-titulo-pregunta">
							<div class="titulo-pregunta">
								¿Qué es una página web institucional?
							</div>
							<div class="icono-pregunta">
								<i class="fas fa-angle-right"></i>
							</div>
						</div>
						<div class="respuesta" id="respuesta">
						Se les llama sitio web institucional o sitio web corporativo a aquellos que representan a una empresa, institución u organización. Las páginas web corporativas tienen como objetivo proveer todo tipo de información sobre la empresa, compartir sus valores y su cultura con los usuarios y brindarles un medio de contacto, consiguiendo así clientes potenciales, autoridad y seriedad.

						</div>
					</div>
					<div class="pregunta">
						<div class="container-titulo-pregunta">
							<div class="titulo-pregunta">
								¿Qué es una sección en una página web?
							</div>
							<div class="icono-pregunta">
								<i class="fas fa-angle-right"></i>
							</div>
						</div>
						<div class="respuesta" id="respuesta">
						Una sección o sección independiente es una URL dentro de tu sitio. Un sitio web puede contener varias páginas web dentro, a las que llamamos URL; todas forman parte del mismo ecosistema y son parte del mismo dominio. 
						Si nuestro sitio web fuese un diario de noticias en papel, una sección sería una nueva hoja o página.
						Por ejemplo, cuando hacemos clic en el título “Sobre nosotros” en una web y se nos abre una nueva pestaña con toda la información sobre dicha empresa, estamos en otra sección a la que se le asigna su propia URL. 
						<br>- www.ejemplo.com/: URL de inicio o home 
						<br>- www.ejemplo.com/sobre-nosotros/: URL correspondiente a la sección “sobre nosotros”. <br>
						Una página web institucional es un gran ejemplo de un sitio que utiliza secciones independientes para organizar su contenido. 
						</div>
					</div>
					<div class="pregunta">
						<div class="container-titulo-pregunta">
							<div class="titulo-pregunta">
								¿Qué es un bloque de contenido en tu página web?
							</div>
							<div class="icono-pregunta">
								<i class="fas fa-angle-right"></i>
							</div>
						</div>
						<div class="respuesta" id="respuesta">
						Un bloque de contenido es una unidad de información dentro de una página web. Los bloques están encabezados por un título de texto que cumple la función de separar y estructurar los contenidos de esa página. A diferencia de la sección independiente, un bloque de contenido no abre una nueva pestaña, es decir; no se le asocia una nueva URL. <br>
						Si nuestra página web fuese un diario de noticias en papel, los bloques de contenido serían las columnas de opinión dentro de una misma hoja o página. 

						</div>
					</div>
					<div class="pregunta">
						<div class="container-titulo-pregunta">
							<div class="titulo-pregunta">
								¿Qué quiere decir que una web sea "autoadministrable"?
							</div>
							<div class="icono-pregunta">
								<i class="fas fa-angle-right"></i>
							</div>
						</div>
						<div class="respuesta" id="respuesta">
						Un sitio web autoadministrable es aquel que tiene incorporado un panel de control que posibilita al usuario (dueño/a del negocio o su representante) a cambiar, agregar, editar y eliminar contenido (como imágenes, videos, texto, precios, stock y productos) de forma autónoma e independiente, sin necesidad de depender de un desarrollador o programador web. 
						</div>
					</div>
					<div class="pregunta">
						<div class="container-titulo-pregunta">
							<div class="titulo-pregunta">
								¿Qué significa "diseño responsive"?
							</div>
							<div class="icono-pregunta">
								<i class="fas fa-angle-right"></i>
							</div>
						</div>
						<div class="respuesta" id="respuesta">
						El diseño responsive, responsivo o diseño web adaptable es una técnica de diseño que consiste en adaptar la apariencia de la interfaz a los distintos tamaños de todos los dispositivos. <br><br> De esta forma, logramos que tu sitio se vea bien en tablets, computadoras y celulares, garantizando una buena experiencia a los usuarios que navegan por él. 
						</div>
					</div>
					<div class="pregunta">
						<div class="container-titulo-pregunta">
							<div class="titulo-pregunta">
								¿Qué es el certificado SSL y por qué es necesario? 
							</div>
							<div class="icono-pregunta">
								<i class="fas fa-angle-right"></i>
							</div>
						</div>
						<div class="respuesta" id="respuesta">
						Un certificado SSL es un protocolo de seguridad emitido por Autoridades de Certificación, que cifra los datos que se intercambian en tu sitio entre los usuarios y el servidor (como datos personales, de inicio de sesión, de tarjetas de crédito, entre otros) y a cambio certifica que tu sitio web es seguro. <br><br>
						¿Cómo nos damos cuenta si una página web tiene un certificado SSL vigente? Además de que nos aparece un candado en la barra de búsqueda, el "http" cambia por "https". <br><br>
						Cumplir con este estándar mundial de seguridad es muy importante no sólo porque protege tu información y la de tus usuarios, también lo es porque favorece el posicionamiento de tu web en los motores de búsqueda (SEO). 
						</div>
					</div>

				</div> <!-- termina listado-preguntas versión móvil -->
		</div> <!-- termina container-preguntas vesión móvil -->

		<div class="container-formulario" data-aos="fade-up" data-aos-duration="1500">
			<div class="titulo-formulario">SOLICITAR &nbsp<span class="colorear-titulos-slider">PRESUPUESTO</span></div>
			<div class="formulario-inputs">
				<form id="formulario-consulta-inicial" onsubmit="e.preventDefault()" method="POST">
					<input name="nombre" placeholder="Nombre y apellido" type="text">
					<input name="email" placeholder="Correo electrónico" type="email">
					<input name="telefono" placeholder="Teléfono" type="tel">
					<textarea name="consulta" placeholder="Contanos más sobre tu consulta" id="" cols="35" rows="5"></textarea>
				</form>
					<button class="boton-formulario" onclick="enviarConsultaInicial()" id="btn-formulario-inicial">Enviar</button>
			</div>
		</div> <!-- termina continer-formulario versión móvil -->

		<div class="container-preguntas-formulario" data-aos="fade-up" data-aos-duration="1500">
			
			<div class="container-preguntas-escritorio" id="preguntas">
				<div class="titulo-principal-preguntas">PREGUNTAS &nbsp<span class="colorear-titulos-slider">FRECUENTES</span></div>
					<div class="listado-preguntas">
						<div class="pregunta">
							<div class="container-titulo-pregunta">
							<div class="titulo-pregunta">
									¿Qué es una página o sitio web?
								</div>
								<div class="icono-pregunta">
									<i class="fas fa-angle-right"></i>
								</div>
							</div>
							<div class="respuesta">
							Un sitio web, también comúnmente llamado “página web”,  es un documento en internet que se escribe en lenguaje HTML; el lenguaje de marcado utilizado para crear y estructurar páginas web, y se identifica con un nombre, a lo que llamamos "dominio". <br><br>
							Un sitio web puede contener varias páginas web dentro, a las que llamamos URL; todas forman parte del mismo ecosistema y son parte del mismo dominio. <br><br>
							Por ejemplo: tomemos como referencia a www.samsung.com <br>
							<ul>
								<li>"www.samsung.com" es el sitio web</li>
								<li>"samsung" es el dominio </li>
								<li>"www.samsung.com/ar/tablets" es una de las páginas web del sitio, que corresponde a la sección de "tablets".</li>
							</ul>
							Todas los negocios, emprendimientos, profesionales autónomos y empresas necesitan un sitio web propio que formalice su propuesta de valor, genere confianza en sus clientes y les permita conocer quiénes son, qué comercializan, dónde encontrarlos y cómo ponerse en contacto.

							</div>
						</div>
						<div class="pregunta">
							<div class="container-titulo-pregunta">
								<div class="titulo-pregunta">
									¿Qué es una página web institucional?
								</div>
								<div class="icono-pregunta">
									<i class="fas fa-angle-right"></i>
								</div>
							</div>
							<div class="respuesta" id="respuesta">
							Se les llama sitio web institucional o sitio web corporativo a aquellos que representan a una empresa, institución u organización. Las páginas web corporativas tienen como objetivo proveer todo tipo de información sobre la empresa, compartir sus valores y su cultura con los usuarios y brindarles un medio de contacto, consiguiendo así clientes potenciales, autoridad y seriedad.

							</div>
						</div>
						<div class="pregunta">
							<div class="container-titulo-pregunta">
								<div class="titulo-pregunta">
									¿Qué es una sección en una página web?
								</div>
								<div class="icono-pregunta">
									<i class="fas fa-angle-right"></i>
								</div>
							</div>
							<div class="respuesta" id="respuesta">
							Una sección o sección independiente es una URL dentro de tu sitio. Un sitio web puede contener varias páginas web dentro, a las que llamamos URL; todas forman parte del mismo ecosistema y son parte del mismo dominio. 
							Si nuestro sitio web fuese un diario de noticias en papel, una sección sería una nueva hoja o página.
							Por ejemplo, cuando hacemos clic en el título “Sobre nosotros” en una web y se nos abre una nueva pestaña con toda la información sobre dicha empresa, estamos en otra sección a la que se le asigna su propia URL. 
							<br>- www.ejemplo.com/: URL de inicio o home 
							<br>- www.ejemplo.com/sobre-nosotros/: URL correspondiente a la sección “sobre nosotros”. <br>
							Una página web institucional es un gran ejemplo de un sitio que utiliza secciones independientes para organizar su contenido. 
							</div>
						</div>
						<div class="pregunta">
							<div class="container-titulo-pregunta">
								<div class="titulo-pregunta">
									¿Qué es un bloque de contenido en tu página web?
								</div>
								<div class="icono-pregunta">
									<i class="fas fa-angle-right"></i>
								</div>
							</div>
							<div class="respuesta" id="respuesta">
							Un bloque de contenido es una unidad de información dentro de una página web. Los bloques están encabezados por un título de texto que cumple la función de separar y estructurar los contenidos de esa página. A diferencia de la sección independiente, un bloque de contenido no abre una nueva pestaña, es decir; no se le asocia una nueva URL. <br>
							Si nuestra página web fuese un diario de noticias en papel, los bloques de contenido serían las columnas de opinión dentro de una misma hoja o página. 

							</div>
						</div>
						<div class="pregunta">
							<div class="container-titulo-pregunta">
								<div class="titulo-pregunta">
									¿Qué quiere decir que una web sea "autoadministrable"?
								</div>
								<div class="icono-pregunta">
									<i class="fas fa-angle-right"></i>
								</div>
							</div>
							<div class="respuesta" id="respuesta">
							Un sitio web autoadministrable es aquel que tiene incorporado un panel de control que posibilita al usuario (dueño/a del negocio o su representante) a cambiar, agregar, editar y eliminar contenido (como imágenes, videos, texto, precios, stock y productos) de forma autónoma e independiente, sin necesidad de depender de un desarrollador o programador web. 
							</div>
						</div>
						<div class="pregunta">
							<div class="container-titulo-pregunta">
								<div class="titulo-pregunta">
									¿Qué significa "diseño responsive"?
								</div>
								<div class="icono-pregunta">
									<i class="fas fa-angle-right"></i>
								</div>
							</div>
							<div class="respuesta" id="respuesta">
							El diseño responsive, responsivo o diseño web adaptable es una técnica de diseño que consiste en adaptar la apariencia de la interfaz a los distintos tamaños de todos los dispositivos. <br><br> De esta forma, logramos que tu sitio se vea bien en tablets, computadoras y celulares, garantizando una buena experiencia a los usuarios que navegan por él. 
							</div>
						</div>
						<div class="pregunta">
							<div class="container-titulo-pregunta">
								<div class="titulo-pregunta">
									¿Qué es el certificado SSL y por qué es necesario? 
								</div>
								<div class="icono-pregunta">
									<i class="fas fa-angle-right"></i>
								</div>
							</div>
							<div class="respuesta" id="respuesta">
							Un certificado SSL es un protocolo de seguridad emitido por Autoridades de Certificación, que cifra los datos que se intercambian en tu sitio entre los usuarios y el servidor (como datos personales, de inicio de sesión, de tarjetas de crédito, entre otros) y a cambio certifica que tu sitio web es seguro. <br><br>
							¿Cómo nos damos cuenta si una página web tiene un certificado SSL vigente? Además de que nos aparece un candado en la barra de búsqueda, el "http" cambia por "https". <br><br>
							Cumplir con este estándar mundial de seguridad es muy importante no sólo porque protege tu información y la de tus usuarios, también lo es porque favorece el posicionamiento de tu web en los motores de búsqueda (SEO). 
							</div>
						</div>

					</div> <!-- termina listado-pregunta versión escritorio -->
			</div> <!-- termina container-preguntas vesión escritorio -->

			<div class="container-formulario-escritorio">
				<div class="titulo-formulario">SOLICITAR &nbsp<span class="colorear-titulos-slider">PRESUPUESTO</span></div>
				<div class="formulario-inputs">
					<form id="formulario-consulta-inicial-2" onsubmit="e.preventDefault()" method="POST">
						<input name="nombre" placeholder="Nombre y apellido" type="text">
						<input name="email" placeholder="Correo electrónico" type="email">
						<input name="telefono" placeholder="Teléfono" type="tel">
						<textarea name="consulta" placeholder="Contanos más sobre tu consulta" id="" cols="35" rows="5"></textarea>
					</form>
						<button class="boton-formulario" onclick="enviarConsultaInicial()" id="btn-formulario-inicial-2">Enviar</button>
				</div>
			</div> <!-- termina continer-formulario versión escritorio -->


		</div> <!-- termina container-preguntas-formulario versión escritorio -->

	</div> <!-- termina continer-principal -->

	<script src="https://kit.fontawesome.com/97a6d8d194.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/paquete-institucional/aos.js"></script>
	<script src="js/paquete-institucional/slider-paquete-institucional.js"></script>
	<script src="js/paquete-institucional/modal.js"></script>
	<script src="js/main.js"></script>
</body>
</html>