<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="fr"> <![endif]-->

<?php include("conexion.php");
 ?>
          
 
<html>



	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GESTIO</title>
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}


table {    
 	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 480px;    margin: 45px;     width: 480px; text-align: center;    border-collapse: collapse; }
tr {     font-size: 600px;     font-weight: normal;     padding: 8px;     background: #ff6666;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

th {     font-size: 480px;     font-weight: normal;     padding: 8px;     background: #ccffe6;
    border-top: 4px solid #ccffe6;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 21px;     background: #99ffcc;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }
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


		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	
	<body>
	<?php


      $query = "SELECT ip FROM red WHERE nombre =  'pc2'"; 
            //$query2 = "SELECT nombre_usuario FROM usuario WHERE password =  'admin'"; 
            $result = mysql_query($query, $conexion);
            //$nombre = mysql_query($query2, $link); 
            $value = mysql_fetch_array($result);
            //var_dump($values);
            $ip=$value['ip'];
            //echo $ip; ?> <br>
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


		<div id="content">
			<div class="container container-content">

				<!-- sidebar -->
				<aside class="col-md-3 col-xs-12 no_left">
					<!-- naviguation -->
					<nav id="nav">
						<ul>
							<li class="active">		
								<a href="inicio.php">
									<i class="icon-arrow"></i>
									<span>VOLVER</span>
									<div class="bg-nav"></div>
								</a>
							</li>
							
									
						</ul>

						<audio id="nav-sound" preload="auto">
							<source src="audio/bouton.mp3">
						</audio>

					</nav>
					<!-- end naviguation -->

					<div class="bloc ">
						<h3 class="grey">GESTIÓN DE REDES</h3>
						<span class="date green">Junio, 2016</span>
						<p class="grey"> La gestión de red consiste en monitorizar y controlar los recursos de una red con el fin de evitar que esta llegue a funcionar incorrectamente degradando sus prestaciones.</p>
					</div>

				</aside>
				<!-- end sidebar -->

				<!-- end content -->

				<div class="col-md-9 col-xs-12 no_right">
					
					<div class="col-md-20 col-xs-12 no_right slider">
					<h1>DETALLES PC2</h1>
					</div>
					<div class="row">

						<div class="col-md-20 col-xs-20">
							<article>
						<!-- Funciones de SNMP en PHP -->


						<table>

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
 



								
							</article>
						</div>


					</div>

				</div>
				<!-- end content -->

			</div>			
		</div>


		<!-- footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-8 col-xs-12 align_right">
						<p class="copyright">Copyright &#169; 2016 Ana Isabel Montoya &amp; Daniela M. Casas</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
    </div>

		<audio id="audio-bg">
		    <source src="audio/music.mp3">
		</audio>
		

    <script type='text/javascript' src="js/jquery-2.1.3.js"></script>
    <script type='text/javascript' src="assets/js/visuallightbox.js"></script>
    <script type='text/javascript' src="assets/js/vlbdata.js"></script>
    <script type="text/javascript" src="assets/js/wowslider.js"></script>
    <script type="text/javascript" src="assets/js/wowslider-gallery.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/script-gallery.js"></script>
    <script type='text/javascript' src="js/app.js"></script>


  </body>
</html>