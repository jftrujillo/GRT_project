<?php @session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" href = "Css/style.css"/>
	<META HTTP-EQUIV="Refresh" CONTENT="5; URL=index.php">
	<title>Error</title>
</head>
<body id="bodyerror">

	
	<div id="texterror"><h2><?php if (isset($_SESSION['MSG1'])) {print $_SESSION['MSG1'];} else if (isset($_SESSION['MSG'])) {print $_SESSION['MSG'];} ?></h2></div> <!-- Sí existe el msg 1 indica que intentó ingresar sin login, ese mensaje prevalece sobre MSG-->


</body>
</html>

