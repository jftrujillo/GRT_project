<!-- Funciones de SNMP en PHP -->
<?php include("conexion.php");
 ?>
<html>
<head>	
	<title>CONSULTA SNMP DISPOSITIVO WIN_PC_1</title>
</head>

<body>


<h1 align="center">Grupo: 
Daniela M. Casas Velasco - Ana Isabel Montoya Muñoz

</h1>
<BR>
<BR>
<?php


      $query = "SELECT ip FROM red WHERE nombre =  'pc1'"; 
            //$query2 = "SELECT nombre_usuario FROM usuario WHERE password =  'admin'"; 
            $result = mysql_query($query, $conexion);
            //$nombre = mysql_query($query2, $link); 
            $value = mysql_fetch_array($result);
            //var_dump($values);
            $ip=$value['ip'];
            //echo $ip; ?> <br>
             
 
     


<table border="1" style="width:100%">

  <th colspan="2">


  TABLA PETICIONES GET PARA EQUIPOS LOCAL</th>
  <tr>
    <th>VARIABLE</th>
    <th>RESULTADO LOCAL</th> 
  </tr>

  <tr>
    <td> sysDescr </td>
	  <td> <?php	echo  $sysDescr = snmpget($ip, "public", ".1.3.6.1.2.1.1.1.0"); ?> </td> 
  </tr>

  <tr>
    <td> sysContact </td>
	  <td> <?php	
	     snmp_set_valueretrieval(SNMP_VALUE_PLAIN); 
	     echo  $sysContact = snmpget($ip, "public", ".1.3.6.1.2.1.1.4.0"); ?> 
    </td> 
  </tr>

  <tr>
    <td> sysLocation </td>
	  <td> <?php	echo  $sysLocation = snmpget($ip, "public", ".1.3.6.1.2.1.1.6.0"); ?> 
    </td> 
  </tr>

  <tr>
    <td> sysName </td>
	  <td> <?php	echo  $sysName = snmpget($ip, "public", ".1.3.6.1.2.1.1.5.0"); ?> </td> 
  </tr>

  <tr> 
    <td> ifType </td>
    <td> <?php
      	$ifNumber = snmpget($ip, "public", ".1.3.6.1.2.1.2.1.0");
      	$ifNumber;
	
        for ( $x=1; $x <= $ifNumber; $x++) { $ifType = snmpget($ip, "public", ".1.3.6.1.2.1.2.2.1.3.$x");
                                      $ifOperStatus  = snmpget($ip, "public", ".1.3.6.1.2.1.2.2.1.8.$x");
if ($ifType <= $ifNumber) {
   
        switch ($ifType) {
            case 1:
                echo "Interfaz: ";
                echo "other(1), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 2:
                echo "Interfaz: ";
                echo "regular1822(2), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 3:
                echo "Interfaz: ";
                echo "hdh1822(3), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 4:
                echo "Interfaz: ";
                echo "ddn-x25(4), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 5:
                echo "Interfaz: ";
                echo "rfc877-x25(5), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 6:
                echo "Interfaz: ";
                echo "ethernet-csmacd(6), "; 
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 7:
                echo "Interfaz: ";
                echo "iso88023-csmacd(7), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 8:
                echo "Interfaz: ";
                echo "iso88024-tokenBus(8), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 9:
                echo "Interfaz: ";
                echo "iso88025-tokenRing(9), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 10:
                echo "Interfaz: ";
                echo "iso88026-man(10), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 11:
                echo "Interfaz: ";
                echo "starLan(11), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 12:
                echo "Interfaz: ";
                echo "proteon-10Mbit(12), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 13:
                echo "Interfaz: ";
                echo "proteon-80Mbit(13), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 14:
                echo "Interfaz: ";
                echo "hyperchannel(14), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 15:
                echo "Interfaz: ";
                echo "fddi(15), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 16:
                echo "Interfaz: ";
                echo "lapb(16), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 17:
                echo "Interfaz: ";
                echo "sdlc(17), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 18:
                echo "Interfaz: ";
                echo "ds1(18), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 19:
                echo "Interfaz: ";
                echo "e1(19), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 20:
                echo "Interfaz: ";
                echo "basicISDN(20), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 21:
                echo "Interfaz: ";
                echo "primaryISDN(21), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 22:
                echo "Interfaz: ";
                echo "propPointToPointSerial(22), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 23:
                echo "Interfaz: ";
                echo "ppp(23), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
            case 24:
                echo "Interfaz: ";
                echo "softwareLoopback(24), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)"; echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)"; echo "<BR>";}
                break;
            case 25:
                echo "Interfaz: ";
                echo "eon(25), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 26:
                echo "Interfaz: ";
                echo "ethernet-3Mbit(26), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 27:
                echo "Interfaz: ";
                echo "nsip(27), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 28:
                echo "Interfaz: ";
                echo "slip(28), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 29:
                echo "Interfaz: ";
                echo "ultra(29), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 30:
                echo "Interfaz: ";
                echo "ds3(30), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;    
            case 31:
                echo "Interfaz: ";
                echo "sip(31), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)";echo "<BR>"; }
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;   
            case 32:
                echo "Interfaz: ";
                echo "frame-relay(32), ";
                echo "Estado: ";
                if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
                  elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
                  elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
                break;
        }

    } else{
    echo "Interfaz: ";
    echo $ifType; echo ", ";
    echo "Estado: ";
      if($ifOperStatus =1) {echo "up(1)"; echo "<BR>";}
        elseif($ifOperStatus =2){echo "down(2)";echo "<BR>";}
        elseif ($ifOperStatus =3) {echo "testing(3)";echo "<BR>";}
    } 

}
?> 
    </td> 
  </tr>

  <tr>
    <td> hrSystemUptime </td>
	  <td><?php snmp_set_valueretrieval(SNMP_VALUE_PLAIN);echo "<br>"; 
        $hrsystemuptime = snmpget($ip, "public", ".1.3.6.1.2.1.25.1.1.0");
        $t=intval($hrsystemuptime/100); 
        echo $dias=intval($t/86400); 
        echo " Dias, ";
        echo $horas=intval(($t-$dias*24*3600)/3600);
        echo " Horas, ";
        echo $minutos=intval(($t-$dias*24*3600-$horas*3600)/60);
        echo " Minutos ";
        echo $segundos=intval($t-$dias*24*3600-$horas*3600-$minutos*60);
        echo " Segundos ";?>
     </td>
 </tr>

 <tr>
      <td> hrMemorySize </td>
      <td><?php  $hrmemorysize = snmpget($ip, "public", ".1.3.6.1.2.1.25.2.2.0");
			     echo $ramGB=$hrmemorysize/(1024*1024); echo " GB"; ?>
	     </td>
  </tr>
	
	
<tr>
        <td> hrStorageSize </td> 
        <td><?php  $hrstoragesize = snmpget($ip, "public", ".1.3.6.1.2.1.25.2.3.1.5.1");
		        echo $storage_GB=intval(($hrstoragesize*4096)/(1024*1024*1024)); echo " GB"; ?>
		    </td>
</tr>		   

<tr>
       <td> hrStorageUsed </td>
       <td><?php $hrstorageused = snmpget($ip, "public", ".1.3.6.1.2.1.25.2.3.1.6.1");
			     echo $used_GB=intval(($hrstorageused*4096)/(1024*1024*1024)); echo " GB";?>
		  </td>
</tr>   
 
<tr>
        <td> SWinstalledName </td>
        <td><?php for ($i = 1; $i <= 12; $i++) { echo $SWinstalledName  = snmpget($ip, "public", ".1.3.6.1.2.1.25.6.3.1.2.$i"); echo  "<br>";} ?> 
	       </td>
</tr> 


</table>
 



</body>
</html>
