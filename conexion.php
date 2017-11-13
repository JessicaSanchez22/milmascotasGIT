<<<<<<< HEAD
<?php  
	$conexion=mysqli_connect('http://192.241.203.174', 'root', '27marco92', 'milmascotas') or die ("No se pudo conectar con la base de datos".mysqli_error($conexion));
=======
<? php 
      $servidor ='192.241.203.174'; // aqui colocar el nombre de tu servidor por default es localhost
      $usuario = 'root'; // aqui el usuario
      $clave ='27marco92'; // aqui va la clave de acceso a tu servidor
      $db='milmascotas'; // aqui el nombre de tu base de datos

      // ahora con todos los datos en variables procedemos a validar la conexion
      $conexion = mysqli_connect($servidor, $usuario, $clave) 
      or die(mysqli_error()); // devolvemos un mensaje de error si fallo la conexion

      mysqli_select_db($db, $conexion); // seleccionamos la base de datos

>>>>>>> da1041c6b4d22b55a64b1ae3b31f4988aea4c8d9
?>