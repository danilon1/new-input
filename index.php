<!DOCTYPE html>
<html>
<head>
	<title>New input</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/newinput.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/paquete-inicial/aos.css"> <!-- librería para efectos en scroll -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/97a6d8d194.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="Imagenes/logo 16px.png" type="image/png" />
</head>
<body>
	<div class="container" id="container">
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
		</div>

		<div class="medio">
			<div class="medio-logo">
				<div class="medio-logo-contenedor">
					<span id="letra-1" class="letra letra-1 icon-n"></span><span id="letra-2" class="letra letra-2 icon-e"></span><span id="letra-3" class="letra letra-3 icon-w"></span><span id="letra-4" class="letra letra-4 icon-iso"></span><span id="letra-5" class="letra letra-5 icon-I"></span><span id="letra-6" class="letra letra-6 icon-N"></span><span id="letra-7" class="letra letra-7 icon-P"></span><span id="letra-8" class="letra letra-8 icon-U"></span><span id="letra-9" class="letra letra-9 icon-T"></span>
				</div>
			</div>
		</div>


		<div class="container-servicio" id="servicio" data-aos="fade-up" data-aos-duration="1500">
			<div class="titulo-principal">
				SERVICIOS
			</div>
			<div class="servicio">
					<div class="parte">
						<div class="servicio-titulo">
							<div class="titulo1">DISEÑO</div>&nbsp<div class="titulo2">WEB</div>
						</div>
						<div class="servicio-texto">
							<p>Conseguí nuevos clientes, convertí tus visitas en ventas y aumentá tu presencia online gracias a tu propio sitio web. Creamos tu página para que tus actuales y potenciales clientes te encuentren en internet, siempre.</p>
						</div>
						<div class="servicio-mas">
							<button class="mas" onclick="solicitar()" >Solicitar</button>
						</div>
					</div>
					<div class="parte">
						<div class="servicio-titulo">
							<div class="titulo1">DISEÑO</div>&nbsp<div class="titulo2" >UX/UI</div>
						</div>
						<div class="servicio-texto">
							<p>Fidelizá a tus clientes brindándoles la mejor experiencia al usar tu aplicación o sitio web. Nos ocupamos de investigar, diseñar y testear tu producto digital para generar una experiencia agradable, intuitiva y sencilla. Tu usuario en el centro, siempre.</p>
						</div>
						<div class="servicio-mas">
							<button class="mas" onclick="solicitar()" >Solicitar</button>
						</div>
					</div>
					<div class="parte">
						<div class="servicio-titulo">
							<div class="titulo1">DISEÑO &nbsp</div><div class="titulo2">GRÁFICO</div>
						</div>
						<div class="servicio-texto">
							<p>Convertite en una marca poderosa gracias a diseños de calidad. Diseñamos piezas gráficas funcionales y estéticas que comunican la esencia de tu negocio, siempre alineados a tu identidad visual. ¿Todavía no tenés una identidad definida? ¡La creemos juntos!</p>
						</div>
						<div class="servicio-mas">
							<button class="mas" onclick="solicitar()" >Solicitar</button>
						</div>
					</div>
					<div class="parte">
						<div class="servicio-titulo">
							<div class="titulo1">FOTOGRAFÍA DE&nbsp</div><div class="titulo2">PRODUCTO</div>
						</div>
						<div class="servicio-texto">
							<p>Impactá a tu audiencia con fotografías atractivas reales de tus productos. Nos encargamos de resaltar todos los atributos de tus artículos para que entren por los ojos, siempre respetando los estándares visuales de tu marca. ¡Trabajemos juntos!</p>
						</div>
						<div class="servicio-mas">
							<button class="mas" onclick="solicitar()" >Solicitar</button>
						</div>
					</div>
			</div>
		</div>

		<div class="container-paquetes" id="precios">
			<div class="titulo-principal" data-aos="fade-up" data-aos-duration="1500">
				PRECIOS DISEÑO WEB
			</div>							
			<div class="paquetes" id="packinicial" data-aos="fade-up" data-aos-duration="1500">
				<div class="titulo-paquetes">
					<div class="titulo1">PACK</div>&nbsp<div class="titulo2">INICIAL</div>
				</div>
				<div class="paquetes-precio">
					<h5 class="paquetes-precio-detalle" >(Desde)</h5><h4 class="paquetes-precio-detalle-2" >$8.500</h4>
				</div> 
				<div class="texto-paquetes">
					<p class="texto-paquetes-copy">Te brindamos una landing page sencilla, práctica y adaptable a cualquier dispositivo para que tus clientes puedan contactarte. Así, podrás centralizar las consultas que te llegan a través de un e-mail personalizado.</p>
				</div>
				<div class="sabermas-paquetes">
					<button class="mas" onclick="irPack1Sm()">Saber más</button>
				</div>
			</div>
 			<div class="paquetes" data-aos="fade-up" data-aos-duration="1500">
				<div class="titulo-paquetes">
					<div class="titulo1">PACK</div>&nbsp<div class="titulo2">FULL</div>
				</div>
				<div class="paquetes-precio">
					<h5 class="paquetes-precio-detalle" >(Desde)</h5><h4 class="paquetes-precio-detalle-2" >$15.000</h4>
				</div>
				<div class="texto-paquetes">
					<p class="texto-paquetes-copy">¿Tenés una gran historia para contar? Te ofrecemos hasta 4 bloques de contenido en tu página web. ¿Lo mejor? Uno de ellos será semi-administrable, para que desde tu compu puedas editar, agregar y publicar contenido cuando quieras, las veces que quieras.
					Con el Pack Full mostrale al mundo tu gran propuesta de valor, diferenciate de la competencia y optimizá tu perfil profesional.</p>
				</div>
				<div class="sabermas-paquetes">
					<button class="mas" onclick="irPack2Sm()" >Saber más</button>
				</div>
			</div>
			<div class="paquetes" data-aos="fade-up" data-aos-duration="1500">
				<div class="titulo-paquetes">
					<div class="titulo1">PACK</div>&nbsp<div class="titulo2">INSTITUCIONAL</div>
				</div>
				<div class="paquetes-precio">
					<h5 class="paquetes-precio-detalle" >(Desde)</h5><h4 class="paquetes-precio-detalle-2" >$25.000</h4>
				</div>
				<div class="texto-paquetes">
					<p class="texto-paquetes-copy">¿Representás a una organización o a una empresa? Te ofrecemos hasta 5 secciones independientes y una de ellas será auto-administrable, para que tu empresa tenga 100% autonomía sobre todos los contenidos.
					¡También incluimos la ubicación de la empresa en el mapa para que tus clientes puedan encontrarte off-line!</p>
				</div>
				<div class="sabermas-paquetes">
					<button class="mas" onclick="irPack3Sm()" >Saber más</button>
				</div>
			</div>
			<div class="paquetes" data-aos="fade-up" data-aos-duration="1500">
				<div class="titulo-paquetes">
					<div class="titulo1">PACK</div>&nbsp<div class="titulo2">E-COMMERCE</div>
				</div>
				<div class="paquetes-precio">
					<h5 class="paquetes-precio-detalle" >(Desde)</h5><h4 class="paquetes-precio-detalle-2" >$45.000</h4>
				</div>
				<div class="texto-paquetes">
					<p class="texto-paquetes-copy">¿Querés tener tu propia tienda online? Te ofrecemos una web de hasta 7 secciones independientes para que vendas las 24 horas.
					Con el Pack E-commerce podrás tener control completo de tu tienda: modificar precios, stock y productos gracias a un Panel de Control hecho a tu medida. Así, podrás automatizar tus ventas y darle autonomía de compra a tus clientes. Además, vinculamos tu web con Google Analytics y con Píxel de Facebook para que lleves tu publicidad a otro nivel. </p>
				</div>
				<div class="sabermas-paquetes">
					<button class="mas desde" onclick="irPack4Sm()" >Saber más</button>
				</div>
			</div>
		</div>

		<div class="container-servicio" id="nosotros" data-aos="fade-up" data-aos-duration="1500">
			<div class="titulo-principal">
				NEW INPUT
			</div>
				<div class="nosotros">
					<div class="nosotros-titulo">
						<div class="titulo1">QUIENES</div>&nbsp<div class="titulo2">SOMOS</div>
					</div>
						<div class="nosotros-descripcion">
							<p>Somos una empresa de desarrollo web ubicada en Córdoba, Argentina. Si hay algo que distingue a nuestro staff, es la verdadera pasión por lo que hacemos. Desde ese punto de partida, formamos un equipo integrado por profesionales en el área de la programación, el diseño y la fotografía.</p>
						</div>
					<div class="nosotros-titulo-2">
						<div class="titulo1">NUESTRA</div>&nbsp<div class="titulo2">MISIÓN</div>
					</div>
						<p>¿Por qué hacemos lo que hacemos? Porque queremos ayudar a negocios a alcanzar su máximo potencial.
						¿Cómo lo hacemos? Haciendo lo que mejor sabemos hacer, tecnología.
						¿Qué hacemos? Diseñamos y desarrollamos sitios web adaptables para todos los dispositivos.
						Brindamos soluciones en forma de software porque creemos que la tecnología es el futuro.</p>

					<div class="nosotros-titulo-3">
						<div class="titulo1">ESPÍRITU Y</div>&nbsp<div class="titulo2">VALORES</div>
					</div>
						<p>Todos los que hacemos New Input compartimos los mismos valores: compromiso, respeto, calidad y pasión. Aunque nos gusta más presentarnos así: Si New Input fuera una persona, sería: apasionada, perseverante, confiable, elegante y ambiciosa.
						</p>
				</div>
		</div>
		<div class="container-formulario" id="contacto" data-aos="fade-up" data-aos-duration="1500">
				<div class="titulo-formulario">COMO &nbsp<span class="colorear-titulos-slider">CONTACTARNOS</span></div>
				<div class="formulario-inputs">
					<form id="formulario-consulta" onsubmit="e.preventDefault()" method="POST">
						<input name="nombre" placeholder="Nombre y apellido" type="text">
						<input name="email" placeholder="Correo electrónico" type="email">
						<input name="telefono" placeholder="Teléfono" type="tel">
						<div class="pregunta-formulario">¿Qué servicio necesita?</div>
						<div class="container-ckeckbox">
							<div class="grupo-1-checkbox">
								<div class="checkbox-1" id="checkbox-1">
									<div class="checkbox-a" id="checkbox-a"></div><label class="label-a">Diseño web</lavel>		
								</div>
								<div class="checkbox-2" id="checkbox-2">
									<div class="checkbox-b" id="checkbox-b"></div><label class="label-b">Diseño UX/UI</lavel>
								</div>
							</div>
							<div class="grupo-2-checkbox">
								<div class="checkbox-3" id="checkbox-3">
									<div class="checkbox-c" id="checkbox-c"></div><label class="label-c">Diseño gráfico</lavel>					
								</div>
								<div class="checkbox-4" id="checkbox-4">
									<div class="checkbox-d" id="checkbox-d"></div><label class="label-d">Foto de producto</lavel>
								</div>
							</div>
						</div>
						<input type="hidden" id="input-web" name="web" value="">
						<input type="hidden" id="input-ux" name="ux" value="">
						<input type="hidden" id="input-grafico" name="grafico" value="">
						<input type="hidden" id="input-foto" name="foto" value="">
						<textarea name="consulta" placeholder="Contanos más sobre tu consulta" id="" cols="35" rows="5"></textarea>
					</form>
						<button class="boton-formulario" onclick="enviarConsulta()" id="btn-formulario">Enviar</button>
						<div class="iconos-contacto"><i id="instagram" class="fab fa-instagram"></i><i id="facebook" class="fab fa-facebook-f"></i><i id="whatsapp" class="fab fa-whatsapp"></i></div>
				</div>
			</div> <!-- termina continer-formulario versión móvil -->




			</div>
			<div class="footer-copyrigth">
			<footer>Copyright © 2021 – 2022 Todos los derechos reservados a New Input</footer>
			</div>		
		</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="js/paquete-inicial/aos.js"></script>
	<script src="js/main.js"></script>
</body>
</html>