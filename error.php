<?php @session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href = "Css/style.css"/>
	<META HTTP-EQUIV="Refresh" CONTENT="5; URL=index.php">
	<title>Error</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gestión de Redes</title>
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
		<style>
			#free-flash-header a,#free-flash-header a:hover{color:#363636;}#free-flash-header a:hover {text-decoration:none}
		</style>
		<!--END OF TERMS OF USE-->

		<!-- Bootstrap -->
		<link href="css/reset.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/font.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/mobile.css" rel="stylesheet" type="text/css" media="all">
		<!-- end Bootstrap -->

		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

		<!-- LightBox -->
		<link href="css/lightbox/vlightbox.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/lightbox/visuallightbox.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="css/lightbox/style.css" />
		<!-- end LightBox -->

</head>


	<div class="page-container">	
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
	<div id="copy" style="height: 75px; position: absolute; bottom: 0px; left:0px; border: none; width: 100%;">
		<div id="free-flash-header" style="width:820px;margin:0 auto;text-align:right;position:relative;bottom:0px;margin-top:63px;color:#363636;font-size:10px;font-family:Verdana"><strong>GESTIO</strong></div>																			 
	</div>	
	<!--END OF TERMS OF USE-->	
		
		<header>
			<div class="container">

				<!-- logo -->
				<div class="logo">
					<a href="">
						<div class="name_logo">
							<p> <span class="orange">G</span>ESTIÓN DE REDES</p>
							<p><span class="green">D</span>E TELECOMUNICACIONES</p>
						</div>
						<div class="picture_logo">
							<div class="orange_square"></div>
							<div class="green_square"></div>
						</div>
					</a>
				</div>
				<!-- logo -->

			</div>
		</header>
				
					<h1>
					<p ALIGN=center> ERROR EN LA VALIDACIÓN</p>
					<p ALIGN=center> INTÉNTELO NUEVAMENTE</p>	
					</h1>
				

	<body id="bodyerror">

	
	<div id="texterror"><h2><?php if (isset($_SESSION['MSG1'])) {print $_SESSION['MSG1'];} else if (isset($_SESSION['MSG'])) {print $_SESSION['MSG'];} ?></h2></div> <!-- Sí existe el msg 1 indica que intentó ingresar sin login, ese mensaje prevalece sobre MSG-->
	

</body>
</html>

