<?php
 
//Invocamos el archivo de conexión

require ("conexion.php");
		 
			$query = "SELECT * FROM red"; 
			//$query2 = "SELECT nombre_usuario FROM usuario WHERE password =  'admin'"; 
			$result = mysql_query($query, $conexion);
			//$nombre = mysql_query($query2, $link); 
			mysql_fetch_array($result);
			//$ip=$value['ip'];
			//$nombre=$value['nombre']; ?>
	
 				<table>
                <tr>
                    <th>Nombre</th>
                    <th>Direccion IP</th>
                    <th>Comunidad</th>
                </tr>

                <?php if ($value=mysql_fetch_array($result)){ ?>

                    <tr>
                    <td><?php echo $value['nombre'];?></td>
                    <td><?php echo $value['ip'];?></td>
                    <td><?php echo $value['comunidad'];?></td>
                </tr> <br> <?php }
                while ($value=mysql_fetch_array($result));
                ?>
                </table>






<?php
/*

 				<table>
                <tr>
                    <th>Nombre</th>
                    <th>Direccion IP</th>
                    <th>Comunidad</th>
                </tr>

                <?php $value=mysql_fetch_array($result, MYSQL_BOTH);

                while($value)
                	{?>


                <tr>
                    <td><?php echo $value['nombre'];?></td>
                    <td><?php echo $value['ip'];?></td>
                    <td><?php echo $value['comunidad'];?></td>
                </tr>
                <?php $value=mysql_fetch_array($result, MYSQL_BOTH);
                }?>
            </table>























<table align="center" bordercolor="black"  border="1" >
			
 <tr><td> EQUIPO </td>
     <td> DIRECCION IP </td></tr>  
<tr><td><?php echo $nombre?> </td>
	<td><?php  echo $ip?></td></tr> 
 </table>	


//ahora vamos construyendo la tabla, la primera fila siendo mas preciso esta es posible construirla toda en pocas lineas, lo coloco así para una mejor comprensión
echo "<table border='1' align='center'>";
echo "<tr bgcolor='#CCCCCC'>";
echo "<td><b>Nombre</b></td>";
echo "<td><b>IP</b></td>";
echo "<td><b>Comunidad</b></td>";
echo "</tr>";

//Con la condicional while obtenemos los datos, mysqli_fetch_array() nos permite hacer esto, solo colocamos la variable que contiene esta con el nombre de la columna y nos arroja el dato, y como while es una condicional repetitiva y a la vez estamos construyendo la tabla, nos resultara una tabla con los datos ordenados según lo consultemos.
while ($row = mysql_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row[nombre]."</td>";
    echo "<td>".$row[ip]."</td>";
    echo "<td>".$row[comunidad]."</td>";
    echo "</tr>";
// Cerramos el While */


/*
//Notemos que colocamos ". y ." para concatenar las variables php y HTML
//Cerramos la tabla, es necesario hacerlo fuera del while, de los contrario solo mostraría la segunda fila dentro de la tabla el resto estaría desordenado.
echo "</table>";
// mysqli_close() es el evivalente a mysql_close() sirve para finalizar la conexión.
mysqli_close($enlace);
?>

<?php
mysql_connect("localhost", "root", "password") or
    die("Could not connect: " . mysql_error());
mysql_select_db("test");

$result = mysql_query("SELECT nombre, id, comunidad FROM red");

while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    printf ("Nombre: %s  ip: %s Comunidad: %s", $row["ip"], $row["nombre"]);
}

mysql_free_result($result);
?> */