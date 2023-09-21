<?php 


function conexion(){
  $servidor = "localhost";
  $usuario = "root";
  $contrasena = "Borysaston1!";
  $base = "security";
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $base);

  if(!$conexion){
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
  }
  else{
    echo 'Conexión exitosa!';
  }

  return $conexion; // Devuelve la conexión para que puedas usarla fuera de la función.
}

// Llama a la función para obtener la conexión
$conexion = conexion();


?> 