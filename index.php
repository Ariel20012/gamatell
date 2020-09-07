

<?php
$aCarrito = array();
include 'sesion/global/config.php';
include 'sesion/global/conexion.php';

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamatell</title>

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
    <!-- Area final del encabezado -->

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
    <!-- Sitio final del area de marca -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

             

                        <li class="active"><a href="index.php">INICIO</a></li>
                        <li><a href="catalogo.php">CATALOGO</a></li>  
                        <?php /* echo'<li><a href="producto.php?id=530 & cat=Accesorios">PRODUCTO UNICO</a></li>' */?>                      
                        <li><a href="carro.php">CARRITO</a></li>
                        <li><a href="contacto.php">CONTACTANOS</a></li>
                        <li><a href="otro.php">AYUDA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del area de menu -->

    <div class="slider-area">
        <!-- Carrusel -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <li>
                    <img src="sesion/img/fondo1.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            ¡Sonríe! <span class="primary">a nuestras <strong>Promos</strong></span>
                        </h2>
                        <h4 class="caption subtitle"></h4>
                        <a class="caption button-radius" href="catalogo.php"><span class="icon"></span>Comprar Ahora</a>
                    </div>
                </li>
                <li><img src="sesion/img/fondo2.png" alt="Slide">
                    <div class="caption-group">
                        <a class="caption button-radius" href="cat1.php"><span class="icon"></span>Comprar Ahora</a>
                    </div>
                </li>
                <li><img src="sesion/img/h4-slide3.png" alt="Slide">
                    <div class="caption-group">
                        <a class="caption button-radius" href="#"><span class="icon"></span>Comprar Ahora</a>
                    </div>
                </li>
                <li><img src="sesion/img/h4-slide4.png" alt="Slide">
                    <div class="caption-group">

                        <a class="caption button-radius" href="#"><span class="icon"></span>Comprar Ahora</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- ./Carrusel -->
    </div>
    <!-- fin del area del carrusel -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="single-promo promo1">
                        <i class="fa flechas"></i>
                        <p>Devolución 30 Dias </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa envios"></i>
                        <p>Envío Gratis</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa candado"></i>
                        <p>Pagos Seguros</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa producto"></i>
                        <p>Nuevos Productos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Final del area de promocion -->
   
   <?php
$sentencia=$pdo->prepare("SELECT * FROM tblproductos LIMIT 0,8");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
    

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Más destacados</h2>
					
						
                        <div class="product-carousel">
						<?php foreach($listaProductos as $producto){?>	
                            <div class="single-product">
                                <div class="product-f-image">
                                <img src="sesion/img/<?php echo $producto['Imagen'];?>" alt="">
                                    <div class="product-hover">
                                       <?php echo'<a href="carro.php?cant= & nombre='.$producto['Nombre'].'& precio='.$producto['Precio'].'& foto='.$producto['Imagen'].'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>'?>
                                       <!--Enlazar el ID de cada producto al detalle -->
                                       
                                        <?php
                                        echo'<a href="producto.php?id='.$producto['ID'].' & cat='.$producto['Categoria'].'" class="view-details-link"><i class="fa fa-link"></i> Ver Detalles</a>
                                        '?>

                                        </div>
                                </div>

                                <h2><?php echo $producto['Nombre'];?></h2>
                                <div class="product-carousel-price">
                                    <ins>$ <?php echo $producto['Precio'];?>.00</ins> 
                                </div>
                            </div>
                            <?php } ?> 
                        </div>
						 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del area de contenido principal -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">

                            <img src="sesion/img/log1.jpg" alt="">
                            <img src="sesion/img/log2.jpg" alt="">
                            <img src="sesion/img/log3.jpg" alt="">
                            <img src="sesion/img/log4.jpg" alt="">
                            <img src="sesion/img/log5.jpg" alt="">
                            <img src="sesion/img/log6.jpg" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del area de marcas -->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Lo más vendido</h2>
                        <a href="shop.html" class="wid-view-more">Ver Todo</a>
                        <div class="single-wid-product">
                            <?php
                            echo'<a href="producto.php?id=348 & cat=Televisor"><img src="sesion/img/television3.jpg" alt="" class="product-thumb"></a>
                            '?>                       
                            <?php
                            echo'<h2><a href="producto.php?id=348 & cat=Televisor">Tv Samsung 58tu8000 4k Cristal Uhd </a></h2>
                            '?>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$879.00</ins>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <?php
                            echo'<a href="producto.php?id=882 & cat=Televisor"><img src="sesion/img/television4.jpg" alt="" class="product-thumb"></a>
                            '?>
                            <?php
                            echo'<h2><a href="producto.php?id=882 & cat=Televisor">Televisor Smart LED 3D RCA 32"</a></h2>
                            '?>              
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                
                            </div>
                            <div class="product-wid-price">
                                <ins>$385.00</ins>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <?php
                            echo'<a href="producto.php?id=812 & cat=Consola"><img src="sesion/img/consola2.jpg" alt="" class="product-thumb"></a>
                            '?>                           
                            <?php
                            echo'<h2><a href="producto.php?id=812 & cat=Consola">Mando Inalámbrico Gamepad /PS4</a></h2>
                            '?>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$39.99</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">En Oferta</h2>
                        <a href="shop.html" class="wid-view-more">Ver Todo</a>
                        <div class="single-wid-product">
                            <?php
                            echo'<a href="producto.php?id=676 & cat=Video-Juego"><img src="sesion/img/juego11.jpg" alt="" class="product-thumb"></a>
                            '?>                             
                            <?php
                            echo'<h2><a href="producto.php?id=676 & cat=Video-Juego">FIFA 20 - Edición Champions</a></h2>
                            '?>                      
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$39.10</ins> <del>$45.10</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <?php
                            echo'<h2><a href="producto.php?id=449 & cat=Consola"><img src="sesion/img/consola4.jpg" alt="" class="product-thumb"></a>
                            '?>                    
                            <?php
                            echo'<h2><a href="producto.php?id=449 & cat=Consola">Pack Xbox One S con 2 mandos - 2T</a></h2>
                            '?>                            
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$300.00</ins> <del>$345.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <?php
                            echo'<a href="producto.php?id=438 & cat=Consola"><img src="sesion/img/consola1.jpg" alt="" class="product-thumb"></a>
                            '?>                             
                            <?php
                            echo'<h2><a href="producto.php?id=438 & cat=Consola">Sony PlayStation 4 Slim 1TB - PS4 Console</a></h2>
                            '?>                        
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$410.00</ins> <del>$450.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Nuevo</h2>
                        <a href="#" class="wid-view-more">Ver Todo</a>
                        <div class="single-wid-product">
                            <?php
                            echo'<a href="producto.php?id=332 & cat=Video-Juego"><img src="sesion/img/juego8.jpg" alt="" class="product-thumb"></a>
                            '?>                            
                            <?php
                            echo'<h2><a href="producto.php?id=332 & cat=Video-Juego">WWE 2K20 Complete Edition</a></h2>
                            '?>                         
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$81.00</ins>
                            </div>
                        </div>
                        <div class="single-wid-product">                          
                            <?php
                            echo'<a href="producto.php?id=124 & cat=Video-Juego"><img src="sesion/img/juego10.jpg" alt="" class="product-thumb"></a>
                            '?>                      
                            
                            <?php
                            echo'<h2><a href="producto.php?id=124 & cat=Video-Juego">Call of Duty WWII Gold Edition</a></h2>
                            '?>                        
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$75.00</ins>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <?php
                            echo'<a href="producto.php?id=539 & cat=Video-Juego"><img src="sesion/img/juego9.jpg" alt="" class="product-thumb"></a>
                            '?>                            
                            <?php
                            echo'<h2><a href="producto.php?id=539 & cat=Video-Juego">NBA 2K20 Ultimate Edition</a></h2>
                            '?>                   
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$52.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Area de producto final -->

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
                            <li><a href="sesion/login-php-sesiones/login.html">Mi Cuenta</a></li>
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
    <!-- End footer top area -->

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

    <!-- Fin del area del pie de pagina -->
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

<!-- Slider -->
<script type="text/javascript" src="sesion/js/bxslider.min.js"></script>
<script type="text/javascript" src="sesion/js/script.slider.js"></script>

<!-- Dialogue -->
<script src="sesion/js/mensajes.js"></script>

                 
	
	
</body>


</html>
