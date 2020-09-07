<?php
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


<?php
include 'sesion/global/config.php';
include 'sesion/global/conexion.php';

$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="tienda";

$enlace=mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
if(!$enlace){
echo "Error en la conexion con el servidor";
}



?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamatell - Producto</title>

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
                             <li><a href="login-php-sesiones/login.html"><i class="fa fa-user"></i> Iniciar Sesion</a></li>
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
    <!-- Fin del sitio del area de marca -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">INICIO</a></li>
                        <li><a href="catalogo.php">CATALOGO</a></li>
                         <?php /* echo'<li><a href="producto.php?id=530 & cat=Accesorios">PRODUCTO UNICO</a></li>' */?> 
                      <!--  <li><a href="producto.php">PRODUCTO UNICO</a></li>-->
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
                        <h2>Producto</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">                  

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Productos</h2>
                        <div class="thubmnail-recent">
                            <img src="sesion/img/Telefono4.jpg" class="recent-thumb" alt="">
                            <?php
                            echo'<h2><a href="producto.php?id=218 & cat=Telefono">Samsung Galaxy A80 128GB</a></h2>
                            '?>                          
                            <div class="product-sidebar-price">
                                <ins>$607.00</ins> 
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="sesion/img/Telefono6.jpg" class="recent-thumb" alt="">
                            <?php
                            echo'<h2><a href="producto.php?id=310 & cat=Telefono">Apple iPhone 7 32GB Pantalla 4.7</a></h2>
                            '?>                
                            <div class="product-sidebar-price">
                                <ins>$315.00</ins>
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="sesion/img/Telefono5.jpg" class="recent-thumb" alt="">
                            <?php
                            echo'<h2><a href="producto.php?id=616 & cat=Telefono">Apple iPhone 6 32GB Pantalla 4.7</a></h2>
                            '?>              
                            <div class="product-sidebar-price">
                                <ins>$245.00</ins>
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="sesion/img/Telefono7.jpg" class="recent-thumb" alt="">
                            <?php
                            echo'<h2><a href="producto.php?id=254 & cat=Telefono">Apple iPhone 7 128 GB Pantalla 4.9</a></h2>
                            '?>             
                            <div class="product-sidebar-price">
                                <ins>$365.00</ins>
                            </div>
                        </div>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Buscados Recientemente</h2>
                        <ul>
                        <?php
                            echo'<li><a href="producto.php?id=770 & cat=Video-Juego">Grand Theft Auto V</a></li>
                            '?> 
                            <?php
                            echo'<li><a href="producto.php?id=877 & cat=Telefono">Samsung Galaxy A80</a></li>
                            '?> 
                            <?php
                            echo'<li><a href="producto.php?id=710 & cat=Video-Juego">Lords of the Fallen</a></li>
                            '?> 
                            <?php
                            echo'<li><a href="producto.php?id=483 & cat=Televisor">Televisión Smart Tv </a></li>
                            '?>                            
                        </ul>
                    </div>
                </div>


<?php

//$id = 816;
//$cat = 'Telefono';

   // $id  = 736;
   // $cat =  'Telefono';

  $id = $_GET['id'];
 $cat = $_GET['cat'];

    //print_r($id);
    $consulta = "SELECT * FROM tblproductos WHERE ID ='$id'";
    $ejecutarConsulta=mysqli_query($enlace,$consulta);
  //print_r($ejecutarConsulta);
    $fila=mysqli_fetch_array($ejecutarConsulta);
       //echo$fila['Nombre'];
       //echo $fila['ID'];
      // echo $fila['Categoria'];
       //echo $fila['Precio'];

   
   // print_r($fila);
   
   
   
   if(!$ejecutarConsulta){
    echo "Error en la consulta";
     } 
    
  
?>
<style>
img.zoom {
    width: 250px;
    height: 300px;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
}
 
.transition {
    -webkit-transform: scale(1.8); 
    -moz-transform: scale(1.8);
    -o-transform: scale(1.8);
    transform: scale(1.8);
}
</style>
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>





                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Inicio</a>
                            <a href=""><?php echo $fila['Categoria'];?> </a>
                            <a href=""></a>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="productproduct-thumb-1.jpg-main-img">
                                        <img src="sesion/img/<?php echo $fila['Imagen'];?>" alt="" class="img.zoom">
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $fila['Nombre'];?></h2>
                                    <div class="product-inner-price">
                                        <ins>$<?php echo $fila['Precio'];?>.00</ins> 
                                    </div>

                                    <form action="" class="cart">
                                        <div class="quantity">
										<input type="button" class="minus" value="-">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
											<input type="button" class="plus" value="+" >
                                        </div>
                                     
                                        <?php echo'<a href="carro.php?nombre='.$fila['Nombre'].'& precio='.$fila['Precio'].'& foto='.$fila['Imagen'].'">   <input class="add_to_cart_button" type="button" value="Añadir carrito"></a>' ?>


                                    </form>
                                    
                                  <!-- <div class="product-inner-category">
                                        <p>Categoria: <a href=""><?php echo $fila['Categoria'];?></a>. Tags: <a href="">Texto</a>, <a href="">Texto</a>, <a href="">Texto</a>, <a href="">Texto</a>. </p>
                                    </div>--> 

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descripción</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reseña</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Descripcion del producto</h2>
                                                <p> <?php echo $fila['Descripcion'];?></p>

                                                <p></p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reseña</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Nombre</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Calificanos</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Cuentanos tu experiencia</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Enviar"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

<?php


//print_r($cat);
$sentencia=$pdo->prepare("SELECT * FROM tblproductos WHERE categoria='$cat'");
$sentencia->execute();

$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Productos relacionados</h2>
                            <div class="related-products-carousel">
                            <?php foreach($listaProductos as $producto){?>	    
                            <div class="single-product">
                              <div class="product-f-image">
                                        <img src="sesion/img/<?php echo $producto['Imagen'];?>" alt="">
                                        <div class="product-hover">
                                            <?php echo'<a href="carro.php?cant= & nombre='.$producto['Nombre'].'& precio='.$producto['Precio'].'& foto='.$producto['Imagen'].'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Añadir carrito</a>'?>
                                            <?php echo'<a href="producto.php?id='.$producto['ID'].' & cat='.$producto['Categoria'].'" class="view-details-link"><i class="fa fa-link"></i> Ver detalles</a>'?>
                                        </div>
                                    </div>
                                    <h2><a href=""><?php echo $producto['Nombre'];?></a></h2>
                                    <div class="product-carousel-price">
                                        <ins><?php echo $producto['Precio'];?>.00</ins>
                                    </div>
                                </div>   
                                <?php } ?>                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Servidor de formularios jQuery  -->
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

</html>
