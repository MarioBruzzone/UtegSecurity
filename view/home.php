<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/view/static/css/home.css">
  <title>Document</title>
</head>
<body>
<div class="container">
        <div class="container-nav">
            <nav class="navbar">
                <a href="home.php" class="txtLogo">Uteg Security</a>
            </nav>
        </div> <br>
        <div class="login-container">
            <h1 class="txt-bienvenida">Bienvenidos</h1>
            <img src="/view/static/img/logo-uteg.png" alt="UTEG Logo" class="logo-uteg">

            <form class="login-form" action="/public/view/home.html" method="get">
                <input type="email" class="user" placeholder="Usuario">
                <input type="password" name="pass" id="" class="pass" placeholder="Contraseña">
                <button type="submit" class="btnIniciar">Iniciar Sesion</button>
                <a href="#" class="soporte">Olvide mi contraseña</a>
            

            </form>
        </div>
    </div>
</body>
</html>