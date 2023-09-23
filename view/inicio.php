<?php
session_start();
header("Cache-control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!isset($_SESSION["username"])) {
  header("Location: ../controller/log_in.php");

  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/view/static/css/principal.css">
  <title>Inicio</title>
</head>

<body>
  <div class="container">
    <div class="container-nav">
      <nav class="navbar">
        <a href="inicio.php" class="txtLogo">Uteg Security</a>
      </nav>
    </div>
  </div>
  <!--Menu-->
  <div class="sidebar">
  <button class="openbtn" onclick="toggleSidebar()">☰</button>
  <br><br><br><br> <br>
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Perfil</a></li>
      <li><a href="#">Configuracion</a></li>
      <li><a href="#">Cerrar sesion</a></li>
    </ul>
  </div>

  <div class="content">

  </div>
  <script src="/view/static/js/main.js"></script>
</body>

</html>