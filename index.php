<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/customf731.css" />

    

    <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
</head>
<body>
    <section id="promociones">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"
            data-interval="2000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-center min-vh-100">
                        <img class="d-block w-100 landing_slide_bg" src="assets/images/slider/bg/banner1.png"
                            alt="Tienda Pepe Banner" />
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100">
                        <img class="d-block w-100 landing_slide_bg" src="assets/images/slider/bg/banner2.jpg"
                            alt="Tienda Pepe Banner" />
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100">
                        <img class="d-block w-100 landing_slide_bg" src="assets/images/slider/bg/banner3.png"
                            alt="Tienda Pepe Banner" />
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100">
                        <img class="d-block w-100 landing_slide_bg" src="assets/images/slider/bg/banner4.jpg" />
                    </div>
                </div>
            </div>
        </div>   
    </section>
    <section>
        <div class="categories">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <img src="assets/images/unnamed.png">
                    </div>
                    <div class="col-6">
                        <h2 style="display: flex; justify-content: center; align-items: center; height: 500px;">
                            Bienvenido
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="anchor" id="productos">
        <div class="s-container">
            <h2 class="title">Productos</h2>
            <div class="row">
            <?php
                            require_once 'includes/dbh_inc.php';
                            require_once 'includes/carrito_inc.php';
                            $query = "SELECT * FROM cart_item";
                            $result = mysqli_query($conn,$query);

                            while ($row = mysqli_fetch_array($result)) {?>
                                <div class="col-4">
                                    <form method="post" action="index.php?id=<?=$row["id"] ?>#productos">
                                        <img src="assets/images/item/<?= $row['image'] ?>">
                                        <h5><?= $row['name']; ?></h5>
                                        <p>$<?= number_format($row['price'],2); ?></p>
                                        <input type="hidden" name="name" value="<?= $row['name'] ?>">
                                        <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                        <input type="hidden" name="image" value="<?= $row['image'] ?>">
                                        <input type="number" name="quantity" value="1" class="form-control">
                                        <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2 text-white" value="Agregar al carro">
                                    </form>
                                </div> 
                            <?php }

                            ?>
            </div>
            
        </div>
    </section>

    <section id="carrito">
        <div class="container">
            <h2 class="title">Carrito</h2>
                <div>
                    <?php

                    $total = 0;

                    $output = "";
                    $output .= "
                        <div class='container carr-p mb-5 pb-5'>
                        <table>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                    ";

                    if(!empty($_SESSION["cart"])){
                        foreach($_SESSION["cart"] as $key => $value){
                            $output .= "
                                <tr>
                                    <td>
                                        <div class='carr-1'>
                                            <img src='assets/images/item/".$value['image']."'>
                                            <div>
                                                <p>".$value['name']."</p>
                                                <small>$".$value['price']."</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>".$value['quantity']."</td>
                                    <td>$".number_format((float)$value['quantity'] * (float)$value['price'], 2)."</td>
                                    <td>
                                        <a href='index.php?action=remove&id=".$value["id"]."#carrito'>
                                            <button class='btn btn-danger btn-block elim'>Eliminar</button>
                                        
                                    </td>

                            ";

                            $total = $total +$value['quantity'] * $value['price'];
                        }
                        $output .= "
                            <tr>
                                <td colspan='1'></td>
                                <td><b>Total</b></td>
                                <td>$".number_format($total,2)."</td>
                                <td>
                                    <a href='index.php?action=clearall#carrito'>
                                        <button class='btn btn-warning btn-block'>Borrar todo</button>
                                    </a>
                                </td>
                            </tr>
                        ";
                    }
                    echo $output;

                    ?>
                </div>
        </div>
    </section>

    <nav id="nav_bar" class="navbar navbar-expand-lg fixed-bottom navbar-home">
        <a class="navbar-brand" href="#promociones">
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
                <li class="nav-item"><a class="position-relative" href="#productos" id="format-nav">Productos</a></li>
                <?php
                    if (isset($_SESSION["usuarionickname"])){
                        echo "<li class=\"nav-item\"><a class=\"position-relative\" href=\"includes/logout_inc.php\" id=\"ingresar-nav\">Cerrar sesión</a></li>";

                    }
                    else{
                        echo "<li class=\"nav-item\"><a class=\"position-relative\" href=\"ingresar.php\" id=\"ingresar-nav\">Ingresar</a></li>";
                        echo "<li class=\"nav-item\"><a class=\"position-relative\" href=\"registro.php\" id=\"registro-nav\">Registrarse</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

</body>


<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>


</html>