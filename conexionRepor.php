<?php 
//$conexion = mysql_connect('localhost','root','');
//mysql_select_db('blhdato', $conexion);
$db_host="localhost";
$db_usuario="root";
$db_password="gata";
$db_nombre="blhDatos";
$db_puerto="3306";

 if (!($conexion= mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre,$db_puerto))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysqli_select_db($conexion,$db_nombre)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 

?>