<?php
  
  $nombre = $_POST['usuario'];
  $pass = $_POST['contrasena'];

  $conexion = mysql_connect("localhost", "root") or die ("PROBLEMAS AL CONECTAR EL SERVIDOR");

  mysql_select_db("test", $conexion) or die ("ERROR AL TRATAR DE CONECTAR CON LA BASE DE DATOS");

  $estandar = mysql_query("SELECT * FROM Administrador where Usuario = '".$nombre."' and Contrasena = '".$pass."'", $conexion);

   if($row = mysql_fetch_array($estandar)){

    header("Location: inicio.php");

  }else{
    //echo("NO PASS");
    header("Location: error.php");
  }

?> 