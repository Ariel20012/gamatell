<?php
$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;
$cont=0;
//Vaciamos el carrito

/*if(isset($_REQUEST['borrar'])) {
	unset($aCarrito[$_REQUEST['borrar']]);
	setcookie('carrito',serialize($aCarrito),time()+3000);
}*/

if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
}

if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Anidandado un nuevo articulo al carrito

if(isset($_GET['nombre']) && isset($_GET['precio']) && isset($_GET['foto']) ) {
	$iUltimaPos = count($aCarrito);
	$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
    $aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
	$aCarrito[$iUltimaPos]['foto'] = $_GET['foto'];
}

//Creamos la cookie (serializamos)

$iTemCad = time() + (60 * 60);
setcookie('carrito', serialize($aCarrito), $iTemCad);



//Imprimimos el contenido del array

foreach ($aCarrito as $key => $value) {
	$sHTML .= '-> ' . $value['nombre'] . ' ' . $value['precio'] . '<br>';
    $fPrecioTotal += $value['precio'];
    $cont++;
}
//Imprimimos el precio total

$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal;

?>    

<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="tienda";

$enlace=mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
if(!$enlace){
echo "Error en la conexion con el servidor";
}
?>
<!DOCTYPE html>
<html lang="es-ES">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamatell - Carrito</title>

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
                            <li><a href="carro.html"><i class="fa fa-user"></i> Mi Carrito</a></li>
                            <li><a href="sesion/login-php-sesiones/login.html"><i class="fa fa-user"></i> Iniciar Sesion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del area del encabezado -->

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
                        <a href="carro.php">Carrito - <span class="cart-amunt"><?php echo $fPrecioTotal?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $cont?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del sitio de marca -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">INICIO</a></li>
                        <li><a href="catalogo.php">CATÁLOGO</a></li>                     
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
                        <h2>Carrito de Compras</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Area final del titulo de la pagina -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                   <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <!--<th class="product-remove">&nbsp;</th>-->
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Producto</th>
                                            <th class="product-price">Precio</th>
                                            <th class="product-quantity">Cantidad</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($aCarrito as $key => $value){?>
                                        <tr class="cart_item">
                                             <!--<td class="product-remove">
                                               <button type="submit" name="borrar" value="<?php echo $key;?>" title="Remove this item" class="btn btn-danger borrar" >
											   <i class="fa fa-trash"></i>
											   </button>
                                            </td>-->

                                            <td class="product-thumbnail">
                                                <a href="#"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="sesion/img/<?php echo $value['foto'];?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="producto.php"><?php echo $value['nombre']?></a>
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">$<?php echo $value['precio']?></span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                                    
                                                </div>
                                            </td>

                                           
                                        </tr>
                                        <?php } ?> 
                                        
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">

                             


                                <div class="cart_totals ">
                                    <h2>Totales de carrito</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal del carrito</th>
                                                <td><span class="amount">$<?php echo $fPrecioTotal?>.00</span></td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Envío y manipulación</th>
                                                <td>Envío gratis</td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total del pedido</th>
                                                <td><strong><span class="amount">$<?php echo $fPrecioTotal?>.00</span></strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

						                    
                                <div class="col-espacio">
                                     <button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium" onclick="alerta()">
                                    <span>Comprar<i class="icon-chevron-right right"></i></span>
                                </button>
                                    <button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium" onclick="alertas()">
                                    <span>Vaciar Carro<i class="icon-chevron-right right"></i></span>
                                    </button>
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
                            <li><a href="#">Televisións LED</a></li>
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
    <!-- Fin del area del pie de pagina -->

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
    <!-- Fin del area inferior del pie de pagina -->

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

</html>