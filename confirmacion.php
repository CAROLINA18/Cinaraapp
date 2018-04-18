<!--
Basicamente esto es la interfaz
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Sistemas Cinara</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>
 <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="js/responsive-nav.js" type="text/javascript"></script>
  
 </head>
<body>
	<!----start-header----->
	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><h1><span>Sistemas</span>cinara</h1></a>
				</div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					 <div id="nav">
				      <ul>
				        <li><a href="index.html">Home</a></li>
				      
				         <li><a href="contact.html">Servicios</a></li>
				        
				     </ul>
		       </div>
		       <script>
			      var navigation = responsiveNav("#nav");
			    </script>
				</div>
				<div class="top-nav-right">
					<div class="search">
				  	<form>
				  		<img src = "images/binario.jpg" width = "300" height = "50">
				  	</form>
				  </div>
				</div>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
	</div>
   <!----End-header----->
	     
		 <!---start-content---->
		 <div class="wrap">
		 	<div class="about-desc">
		     <div class="content">	 	
		      <div class="page-not-found">
	    		<h2>Su solicitud se ha procesado</h2>
	    		<h2>Gracias por su paciencia</h2>
	    	  </div>
			</div>
			</div>
		  </div>		   			
		 <!---End-content---->
		 <!---start-footer---->
		  <div class="footer">
		    <div class="wrap">
		    	 <div class="foot-nav">
			  <ul>
			   		<li><a href="index.html">Home</a></li>
			   		
			   		<li><a href="contact.html">Solicitudes</a></li>
			   	</ul>
			   	</div>		
			   	<div class="copy-right">
					<p>2015 Copyright (c) </p>
				</div>
			<div class="clear"> </div>
		</div>
	</div>
		 <!---End-footer---->

		

<?php include("insertar.php"); //Logica de la app?>
<?php include ("email.php") //Logica de la app ?>

	





	</body>
</html>

