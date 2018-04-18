<?php
//echo '<script language="javascript">alert("juas");</script>'; 
//Enviar correos electronicos carolina 94378201
$destino=$_POST["email"];
$asunto="Solicitud de soporte tecnico";
$nombre=$_POST["nombre"];
$espacio=$_POST["espacio"];
$tiquete =  mysql_insert_id();
$email2 = "aristizabal.ana@correounivalle.edu.co";
//$email3 = "jamer.obed@correounivalle.edu.co";



$comentario = "
Email: $_POST[email]
Nombre: $_POST[nombre]
Espacio : $_POST[espacio]
Solicitud:$_POST[solicitud]
Tiquete : $tiquete
Se le atendera en la menor brevedad posible.
Recuerde guardar su numero de tiquete.
";

$headers='From:'.$_POST['email']."\r\n".
				'Reply-To:'.$_POST['email']."\r\n".
				'X-Mailer:PHP/'.phpversion();


	mail($destino,$asunto,$comentario,$headers);

$headers2='From:'.$email2."\r\n".
				'Reply-To:'.$_POST['email']."\r\n".
				'X-Mailer:PHP/'.phpversion();


	mail($email2,$asunto,$comentario,$headers2);
	

	//$headers3='From:'.$email3."\r\n".
	//			'Reply-To:'.$_POST['email']."\r\n".
	//			'X-Mailer:PHP/'.phpversion();


	//mail($email3,$asunto,$comentario,$headers3);

?>