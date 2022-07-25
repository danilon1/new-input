<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	include('PHPMailer/PHPMailer.php');
	include('PHPMailer/SMTP.php');
	include('PHPMailer/Exception.php');

	$nombre   = $_POST['nombre'];
	$email    = $_POST['email'];
	$telefono = $_POST['telefono'];
	$consulta = $_POST['consulta'];
	$checkweb = $_POST['web'];
	$checkux  = $_POST['ux'];
	$checkgrafico  = $_POST['grafico'];
	$checkfoto = $_POST['foto'];

	if(!empty($nombre) && !empty($email) && !empty($telefono) && !empty($consulta)){

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {	 //verificando que sea una dirección de email correcta
		   
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);  //quitando caracteres no deseados

			$telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
			if(strlen($telefono) >= 10 ){

				$consulta = filter_var($consulta, FILTER_SANITIZE_STRING);
				if(filter_var($consulta, FILTER_SANITIZE_STRING)){
					$respuesta = 0; //0 = Exito


					/*------------------------------------------------------------------------------------*/
					/*	MAIL DEL ADMINISTRADOR*/
						$host = "smtp.hostinger.es";
						$username = "consultas@new-input.com";
						$password = "Muyfacil1";
						$port = 587;
						$from = "consultas@new-input.com";
						$nameFrom = "New Input";
						$mail_intenro = "consultas@new-input.com"; //Modificar con la dirección deseada para realizar pruebas
						$mail_intenro1 = "daniloedelgado@gmail.com";
						$mail_intenro2 = "frandjev@gmail.com";
						$mail_intenro3 = "wallker.disfo@gmail.com";
						$mail_intenro4 = "eugeniagarcia.marketingdigital@gmail.com";


					/*	MAIL PARA EL USUARIO*/
							$mail = new PHPMailer(true);
							//Server settings
						    $mail->isSMTP();                                            //Send using SMTP
						    $mail->Host       = $host;                     				//Set the SMTP server to send through
						    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
						    $mail->Username   = $username;                    			//SMTP username
						    $mail->Password   = $password;                              //SMTP password
						    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; 
						    $mail->Port       = $port;                                    
						    //Recipients
						    $mail->setFrom($from, $nameFrom);
						    $mail->addAddress($email, $nombre);     					//Add a recipient
						    //Content
						    $mail->isHTML(true);                                  		//Set email format to HTML
						    $mail->Subject = 'Recibimos tu consulta';
						    $mail->Body    = '¡Hola '.$nombre.'!<br><br>Revisaremos tu consulta y a la brevedad te enviaremos una respuesta.<br>Nuestro tiempo de respuesta es de hasta un día hábil. Recordá que en caso de que necesites hacernos una consulta urgente podés escribirnos vía Whatsapp al siguiente número:<a href="https://wa.me/+5493517462682">+5493517462682</a>.<br><br>Saludos.<br><img src="https://new-input.com/Imagenes/FirmaNewinput.png">';
						    $mail->send();

					/*	MAIL DE USO INTERNO*/	
							$mail2 = new PHPMailer(true);
							//Server settings
						    $mail2->isSMTP();                                            //Send using SMTP
						    $mail2->Host       = $host;                     				//Set the SMTP server to send through
						    $mail2->SMTPAuth   = true;                                   //Enable SMTP authentication
						    $mail2->Username   = $username;                    			//SMTP username
						    $mail2->Password   = $password;                              //SMTP password
						    $mail2->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; 
						    $mail2->Port       = $port;                                    
						    //Recipients
						    $mail2->setFrom($from, $nombre);
						    $mail2->addAddress($mail_intenro, $nombre);     					//Add a recipient
						    $mail2->addCC($mail_intenro1);
						    $mail2->addCC($mail_intenro2);
						    $mail2->addCC($mail_intenro3);
						    $mail2->addCC($mail_intenro4);
						    //Content
						    $mail2->isHTML(true);                                  		//Set email format to HTML
						    $mail2->Subject = 'Nueva consulta - Contacto';
						    $mail2->Body    = 'El usuario '.$nombre.' envió la sigueinte consulta:<br>'.$consulta.'<br>Datos del usuario:<br>Nombre: '.$nombre.'<br>Teléfono: '.$telefono.'<br>Correo electrónico: '.$email.'<br>Servicios solicitados:<br>Diseño web: '.$checkweb.'<br>Diseño UX UI: '.$checkux.'<br>Diseño gráfico: '.$checkgrafico.'<br>Fotografía de producto: '.$checkfoto.'<br>Saludos.';
						    $mail2->send();
					/*------------------------------------------------------------------------------------*/
					echo json_encode($respuesta);
				}else{
					$respuesta = 4; //4 = Error en el campo consulta
					echo json_encode($respuesta);
				}
			}else{
				$respuesta = 3; //3 = Error en el campo teléfono
				echo json_encode($respuesta);
			}
		} else {
		    $respuesta = 2; //2 = Error en campo email
		    echo json_encode($respuesta);
		}
	}else{
		$respuesta = 1; //0 = Existen campos sin completar
		echo json_encode($respuesta);
	}

?>