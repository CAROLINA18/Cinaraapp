<?php

//se insertan datos en php my admin cinara carolina
include ("conexion.php");
if(isset($_POST['nombre']) &&  !empty($_POST['nombre']) &&
	isset($_POST['espacio']) && !empty($_POST['espacio']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['solicitud']) && !empty($_POST['solicitud']) )
	
	
	{


		$con = mysql_connect($host , $user , $pw) or die ("problemas al conectar");
		mysql_select_db($db,$con) or die("problemas :O");
		mysql_query("INSERT INTO services (Nombre,Espacio,Correo,Solicitud) VALUES ('$_POST[nombre]' , '$_POST[espacio]' , '$_POST[email]' , '$_POST[solicitud]' )" , $con);
//echo $tiquete;



}else{
	//echo "problemas al insertar";
	}

$tiquete =  mysql_insert_id();
?>