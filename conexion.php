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



		 ?>