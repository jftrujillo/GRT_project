<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
      <?php
      
          ini_set('display_errors','off');
          ini_set('display_startup_errors', 'off');
          error_reporting(0);

          $usu= $_POST['usuario'];
          $pass= $_POST['contrasena'];
          
          function Conectarse()
          {
            if (!($link=mysql_connect('localhost','root'.'password')))
            {
              echo "error conectando a la base de datos.";
              exit();
            }
            if (!mysql_select_db('test',$link))
            {
              echo "error selecionando base de datos";
              exit();
            }
            return $link;
          }    

          $con = Conectarse();
          $sql= "SELECT * FROM administrador WHERE Usuario ='".$usu."' AND Contrasena = '".$pass."'";
           
          $q=mysql_query($sql);

          try {

            if(mysql_result($q, 0)) 
          {
            $result = mysql_result($q, 0);
            echo " Validación correcta ";
            
          }else
            echo " Usuario o contraseña incorrecta";
            header('Location: index.php');
          } catch (Exception $error) {
            mysql_close($con);
            
          }

          
        
          ?>

</body>
</html>