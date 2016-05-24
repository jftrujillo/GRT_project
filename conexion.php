<?php
$servidor = "localhost";
$usuario = "root";
$contra = "";



		snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
		snmp_set_valueretrieval(SNMP_VALUE_PLAIN);

		$conexion = @mysql_connect($servidor, $usuario,$contra)
	    or die('No se pudo conectar: ' . mysql_error());
		//echo 'Connected successfully';
		mysql_select_db("proyectogestio", $conexion) or die('No se pudo seleccionar la base de datos');

		 
			$query = "SELECT ip FROM red WHERE nombre =  'pc1'"; 
			//$query2 = "SELECT nombre_usuario FROM usuario WHERE password =  'admin'"; 
			$result = mysql_query($query, $conexion);
			//$nombre = mysql_query($query2, $link); 
			$value = mysql_fetch_array($result);
			//var_dump($values);
			$ip=$value['ip'];

			//echo $values;
			echo $ip;
			//echo $nombre;
			//$ip="127.0.0.1";
		 	//$comunidad="";
		 

		 ?>