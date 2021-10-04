<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/customf731.css" />

    

    <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>

</head>
<body>
    <div id="registro" class="mb-5 pb-5 ">
        <div class="container">
            <form action="includes/registros_inc.php"  method="post">
                <div class="col-md-6">
                  <label for="nombre" class="form-label text-white">Nombre</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col-md-6">
                  <label for="nickname" class="form-label text-white">Nickname</label>
                  <input type="text" class="form-control" name="nickname">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label text-white">Correo</label>
                  <input type="email" class="form-control" name="email" placeholder="@dominio.com">
                </div>
                <div class="col-md-6">
                  <label for="pwd" class="form-label text-white">Contraseña</label>
                  <input type="password" class="form-control" name="pwd" placeholder="Contraseña">
                </div>
                <div class="col-12">
                  <label for="pwd2" class="form-label text-white">Repite tu contraseña</label>
                  <input type="password" class="form-control" name="pwd2" placeholder="Repite tu contraseña">
                </div>
                
                <div class="col-12">
                  <button type="submit" name="submit" class="btn btn-primary ">Registrarse</button>
                </div>
              </form>
              <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "vacioRegistro") {
          echo "<p>Campo vacio<p>";
        }
        else if ($_GET["error"] == "invalidNick") {
          echo "<p>Nickname invalido</p>";
        }
        else if ($_GET["error"] == "invalidEmail") {
          echo "<p>Correo invalido</p>";
        }
        else if ($_GET["error"] == "pwdMatch") {
          echo "<p>La contraseña no coincide</p>";
        }
        else if ($_GET["error"] == "stmtFailed") {
          echo "<p>Error, intentalo denuevo</p>";
        }
        else if ($_GET["error"] == "nickExiste") {
          echo "<p>Nickname/correo ya esta en uso, intente denuevo</p>";
        }
        else if ($_GET["error"] == "none") {
          echo "<p>Registrado correctamente</p>";
        }
      }
    ?>
        </div>
    </div>



    <nav id="nav_bar" class="navbar navbar-expand-lg fixed-bottom navbar-fixed">
        <a class="navbar-brand" href="index.php">
            <img class="top-logo" src="assets/images/logo-top.png" />
            <img class="text-img-logo" src="assets/images/logo-title.png" />
            <span>Tienda Pepe</span>
        </a>
        <button class="navbar-toggler navbar-dark collapsed" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-mobile-bg">
            </div>
            <ul class="navbar-nav ml-auto nav_links">
                <li class="nav-item"><a class="position-relative" href="index.php#productos" id="format-nav">Productos</a></li>
                <li class="nav-item"><a class="position-relative" href="ingresar.php" id="ingresar-nav">Ingresar</a></li>
                <li class="nav-item"><a class="position-relative" href="registro.php" id="registro-nav">Registrarse</a></li>
                </li>
            </ul>
        </div>
    </nav>

</body>



<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>
</html>