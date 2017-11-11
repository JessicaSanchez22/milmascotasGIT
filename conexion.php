<? php 
      $servidor ='192.241.203.174'; // aqui colocar el nombre de tu servidor por default es localhost
      $usuario = 'root'; // aqui el usuario
      $clave ='27marco92'; // aqui va la clave de acceso a tu servidor
      $db='milmascotas'; // aqui el nombre de tu base de datos

      // ahora con todos los datos en variables procedemos a validar la conexion
      $conexion = mysqli_connect($servidor, $usuario, $clave) 
      or die(mysqli_error()); // devolvemos un mensaje de error si fallo la conexion

      mysqli_select_db($db, $conexion); // seleccionamos la base de datos

?>