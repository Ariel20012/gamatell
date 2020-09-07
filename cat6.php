<?php
include 'sesion/global/config.php';
include 'sesion/global/conexion.php';
$aCarrito = array();
$fPrecioTotal = 0;
$cont=0;

if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}


foreach ($aCarrito as $key => $value) {
    $fPrecioTotal += $value['precio'];
    $cont++;
}
?>


<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamatell - Catálogo</title>

   

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
  
    <!-- Bootstrap -->
    <link rel="stylesheet" href="sesion/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="sesion/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="sesion/css/owl.carousel.css">
    <link rel="stylesheet" href="sesion/style.css">
    <link rel="stylesheet" href="sesion/css/responsive.css">

</head>

<body>

<script>

$(function () {
  $('[data-toggle="popover"]').popover()
})

</script>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="carro.php"><i class="fa fa-user"></i> Mi Carrito</a></li>
                            <li><a href="sesion/login-php-sesiones/login.html"><i class="fa fa-user"></i> Iniciar Sesion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del area de encabezado -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1>
                            <a href="./"><img src="sesion/img/logo.png"></a>
                        </h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="carro.php">Carrito - <span class="cart-amunt">$<?php echo $fPrecioTotal?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $cont?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del area de marca -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">INICIO</a></li>
                        <li><a href="catalogo.php">CATALOGO</a></li>
                        <?php /* echo'<li><a href="producto.php?id=530 & cat=Accesorios">PRODUCTO UNICO</a></li>' */?>
                      <!--  <li><a href="producto.php">PRODUCTO UNICO</a></li> -->
                        <li><a href="carro.php">CARRITO</a></li>
                        <li><a href="contacto.php">CONTACTANOS</a></li>
                        <li><a href="otro.php">AYUDA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del area del menu -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Catálogo</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div>
            <p class="single-promo promo0">Categorías</p>
        </div>
    </div>

    <div class="categoria-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="cat1.php">Telefonos</a></li>
                        <li><a href="cat2.php">Televisores</a></li>                        
                        <li><a href="cat3.php">Computadores</a></li>
                        <li><a href="cat4.php">Cámaras</a></li>
                        <li><a href="cat5.php">Video Juegos</a></li>
                        <li><a href="cat6.php">Consolas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="single-product-area">
        <div class="zigzag-bottom"></div>


        <div class="container">
            <div class="row">
               

            <?php
$sentencia=$pdo->prepare("SELECT * FROM tblproductos WHERE categoria='Consola'");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
<?php foreach($listaProductos as $producto){?>
                <div class="col-md-3 col-md-5">
                    <div class="single-shop-product">
                        <div class="product-upper">
						
						
                        <img   title="<?php echo $producto['Nombre'];?>" data-toggle="popover" data-trigger="hover"
                data-content="<?php echo $producto['Descripcion'];?>"                        
                         class="card-img-top" src="sesion/img/<?php echo $producto['Imagen'];?>" >
                        </div>
                        <span><?php echo $producto['Nombre'];?><span>
                        <div class="product-carousel-price">
                            <ins>$ <?php echo $producto['Precio'];?>.00</ins> 
                        </div>

                        <div class="product-option-shop">
                           <?php echo'<a class="add_to_cart_button"  rel="nofollow" href="producto.php?id='.$producto['ID'].' & cat='.$producto['Categoria'].'">Detalles del Producto</a>' ?>
							
                        </div>
                    </div>
                </div>
   
                <?php } ?>
        </div>
</div>




    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Gama<span>Tell</span></h2>
                        <p>Dirección: STDO </p>
                        <p> Email: ventas@gamatell.com </P>
                        <p> Apertura: 10:00AM - 7:30PM de Lunes - Sábado</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa linkedin"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Navegación de usuario</h2>
                        <ul>
                            <li><a href="#">Mi Cuenta</a></li>
                            <li><a href="#">Historial de pedidos</a></li>
                            <li><a href="#">Lista de deseos </a></li>
                            <li><a href="#">Contacto del vendedor</a></li>
                            <li><a href="#">Página delantera</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <li><a href="#">Télefono móvil</a></li>
                            <li><a href="#">Accesorios para el hogar</a></li>
                            <li><a href="#">Televisión LED</a></li>
                            <li><a href="#">Computadora</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Boletin informativo</h2>
                        <p>¡Suscríbase a nuestro boletín y obtenga ofertas exclusivas que no encontrará en ningún otro lugar directamente en su bandeja de entrada!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Escribe tu correo electronico">
                                <input type="submit" value="SUSCRIBIR">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del area superior del pie de pagina -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2020 Gamatell. Derechos reservados. <a href="http://www.Gamatell.com" target="_blank">disgamatell.com</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa discover"></i>
                        <i class="fa mastercard"></i>
                        <i class="fa paypal"></i>
                        <i class="fa visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Servidor de formularios jQuery -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="sesion/js/owl.carousel.min.js"></script>
    <script src="sesion/js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="sesion/js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="sesion/js/main.js"></script>

    <!-- Dialogue -->
    <script src="sesion/js/mensajes.js"></script>
</body>

</php>