<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]== "POST"){
  require_once("conexion.php");

  $username = $_POST["username"];
  $password = $_POST["password"];


  $consulta = "SELECT * FROM administrador WHERE correo=? AND contrasenia=?";

  $stmt = mysqli_prepare($conexion, $consulta);

  if($stmt===false){
    die("Error en la consulta" . mysqli_error($conexion));

  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $password);


  if(mysqli_stmt_execute($stmt)){
    $resultado = mysqli_stmt_get_result($stmt);


    if(mysqli_num_rows($resultado)==1){
      $_SESSION["username"]= $username;
      header("Location: ../view/inicio.php");
    }else{
      echo "Nombre de usuario o contrasena incorrectos.";
    }
  }else{
    echo "Error en la ejecucion de la consulta: " . mysqli_error($conexion);
  }
  mysqli_stmt_close($stmt);

}

mysqli_close($conexion);
?>