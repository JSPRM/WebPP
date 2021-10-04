<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/customf731.css" />

    

    <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>

</head>
<body>
    <div id="ingresar" class="mb-5 pb-5 ">
        <div class="container">
            <form class="form-signin" action="includes/ingresar_inc.php"  method="post">
              <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
              </div>

              <div class="form-label-group">
                <label for="inputemail" class="form-label text-white">Nickname o correo</label>
                <input type="text" class="form-control" name="name" placeholder="Nickname o correo"  required="" autofocus="">
              </div>

              <div class="form-label-group">
                <label for="inputpassword" class="form-label text-white">Contraseña</label>
                <input type="password" class="form-control" id="password" name="pwd" placeholder="Contraseña" required="">
              </div>
                
              <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Ingresar</button>
            </form>
          <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "vacioIngreso") {
          echo "<p>Campo vacio<p>";
        }
        else if ($_GET["error"] == "Error") {
          echo "<p> Error usuario no registrado</p>";
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