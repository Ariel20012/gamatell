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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamatell - Ayuda</title>

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
                        <a href="carro.html">Carrito - <span class="cart-amunt">$<?php echo $fPrecioTotal?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $cont?></span></a>
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
                       <!-- <li><a href="producto.php">PRODUCTO UNICO</a></li>-->
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
                        <h2>Ayuda</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="woocommerce">

        <div class="woocommerce-info"><b>1. ¿Cómo me registro? </b><a class="showlogin" data-toggle="collapse" href="#login-form-wrap0" aria-expanded="false" aria-controls="login-form-wrap0">Abrir</a>
        </div>

        <form id="login-form-wrap0" class="login collapse" method="post">
            <h4><b>  1.1 Si eres cliente GamaTell </b> </h4>
            <h4>En la web www.GamaTell.com clicando en el apartado “iniciar sesión” accederás a un formulario. Clicando en el apartado “Registro”, deberás introducir Nombre, Contraseña, Dirección y número de teléfono. Una vez hecho esto te redirigirá a la
                a la página de GamaTell.</h4>

            <h4><b> 1.2. Si ya estas registrado </b> </h4>
            <h4>Si ya estás registrado deberás acceder usando tu Nombre y contraseña</h4>

            <h4> <b> 1.3. Si no eres cliente </b> </h4>
            <h4>
                En el sitio web clicando en el apartado “Iniciar Sesion o registrarse” se desplegará un menú. Clicando en el apartado “Registro” se abrirá una ventana donde deberás seleccionar la opción y rellenar el formulario con tus datos y se te creará un usuario
                y una contraseña que podrás cambiar en ese mismo instante. Una vez hecho esto tu registro se habra completado y que podrás utilizar sitio como un cliente mas, tanto en la web como en las tiendas físicas.
            </h4>
        </form>



        <div class="woocommerce-info"> <b> 2.¿Cómo hago un pedido? </b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap1" aria-expanded="false" aria-controls="login-form-wrap1">Abrir</a>
        </div>

        <form id="login-form-wrap1" class="login collapse" method="post">
            <h4> <b> 2.1.Selección de dirección de entrega del pedido</b> </h4>
            <h4>Para poder realizar un pedido será necesario estar registrado en la web de GamaTell. Al acceder a la tienda online tendrás que elegir entre que te enviemos el pedido a una dirección que tú elijas o recoger el pedido en tienda. Una vez completado
                este paso se podrá iniciar la realización del pedido.</h4>
            <h4> <b> 2.2. Selección de artículos mediante buscador </b> </h4>
            <h4>La tienda online dispone de un buscador de artículos que permite introducir una o varias palabras identificando entre todos los artículos aquellos que se relacionen con las palabras indicadas y mostrándolos para poder ser elegidos.</h4>

            <h4> <b> 2.2. Selección de artículos mediante buscador </b> </h4>
            <h4>La tienda online dispone de un buscador de artículos que permite introducir una o varias palabras identificando entre todos los artículos aquellos que se relacionen con las palabras indicadas y mostrándolos para poder ser elegidos.</h4>
        </form>



        <div class="woocommerce-info"><b>3. ¿Puedo hacer cambios en mi pedido?</b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap2" aria-expanded="false" aria-controls="login-form-wrap2">Abrir</a>
        </div>

        <form id="login-form-wrap2" class="login collapse" method="post">
            <h4>No. Una vez que hayas finalizado tu pedido online no podrás añadir o eliminar productos o cambiar las cantidades. En caso de querer modificar la hora de entrega que habías reservado será necesario que te pongas en contacto con el Servicio
                de Atención al Cliente.</h4>
        </form>


        <div class="woocommerce-info"><b> 4. ¿Hay un importe mínimo/máximo para realizar un pedido? </b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap3" aria-expanded="false" aria-controls="login-form-wrap3">Abrir</a>
        </div>

        <form id="login-form-wrap3" class="login collapse" method="post">
            <h4>No existe un importe mínimo ni máximo de compra. En caso de recibir un pedido con un importe excepcionalmente alto el Servicio de Atención al Cliente se pondrá en contacto contigo para verificar que el pedido realizado es correcto.</h4>
        </form>


        <div class="woocommerce-info"><b> 5. ¿Puede no haber disponibilidad de artículos en la compra online?  </b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap4" aria-expanded="false" aria-controls="login-form-wrap4">Abrir</a>
        </div>

        <form id="login-form-wrap4" class="login collapse" method="post">
            <h4>En GamaTell trabajamos para que siempre podamos servirte lo que nos hayas solicitado. </h4>
        </form>


        <div class="woocommerce-info"><b> 6. ¿Cómo puedo saber si la Tienda Online de GamaTell sirve a mi domicilio? </b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap5" aria-expanded="false" aria-controls="login-form-wrap5">Abrir</a>
        </div>

        <form id="login-form-wrap5" class="login collapse" method="post">
            <h4>Cuando entres en la Tienda Online de GamaTell, a la hora de introducir la dirección de entrega del pedido, te indicaremos si tu dirección está dentro de nuestra área de reparto. </h4>
        </form>


        <div class="woocommerce-info"><b> 7. ¿Puedo navegar por la web sin estar registrado? </b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap6" aria-expanded="false" aria-controls="login-form-wrap6">Abrir</a>
        </div>

        <form id="login-form-wrap6" class="login collapse" method="post">
            <h4>Sí, podrás navegar por la web y ver los diferentes artículos que están disponibles en la Tienda Online de GamaTell. </h4>
        </form>


        <div class="woocommerce-info"><b> 8. ¿Puedo navegar por la web sin estar registrado? </b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap7" aria-expanded="false" aria-controls="login-form-wrap7">Abrir</a>
        </div>

        <form id="login-form-wrap7" class="login collapse" method="post">
            <h4>Sí, podrás navegar por la web y ver los diferentes artículos que están disponibles en la Tienda Online de GamaTell. </h4>
        </form>



        <div class="woocommerce-info"><b>9. Proceso de pago</b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap8" aria-expanded="false" aria-controls="login-form-wrap8">Abrir</a>
        </div>

        <form id="login-form-wrap8" class="login collapse" method="post">
            <h4><b> 1. ¿Cuáles son los métodos de pago disponibles? </b></h4>
            <h4>Sí, podrás navegar por la web y ver los diferentes artículos que están disponibles en la Tienda Online de GamaTell. </h4>

            <h4><b> 2. ¿Qué tarjetas se aceptan para pagar los pedidos?</b></h4>
            <h4> Para pagar los pedidos aceptamos tarjetas de crédito y de débito. Los tipos de tarjetas que se pueden usar para realizar el pago son: VISA, VISA Electron, Mastercard.</h4>


        </form>


        <div class="woocommerce-info"><b>10. Proceso de envío de pedidos </b> <a class="showlogin" data-toggle="collapse" href="#login-form-wrap9" aria-expanded="false" aria-controls="login-form-wrap9">Abrir</a>
        </div>

        <form id="login-form-wrap9" class="login collapse" method="post">
            <h4><b> 10.1. ¿Cómo se transporta el pedido?</b></h4>
            <h4>El pedido se transporta en furgonetas especialmente acondicionadas y adaptadas para el transporte de productos tecnolgicos.</h4>

            <h4><b> 10.2. ¿Cuál es el precio de preparación y envío del pedido?</b></h4>
            <h4>El coste de preparación y envío es de 6$ indistintamente de la hora de entrega que elijas, pero si tu compra supera los 100$ éste coste será gratuito.</h4>


            <h4><b>10.3. ¿Qué ocurre si el pedido llega tarde?</b></h4>
            <h4>No es normal que ocurra, pero si el pedido va a retrasarse nuestro Servicio de Atención al Cliente se pondrá en contacto contigo por teléfono.</h4>


            <h4><b> 10.4. ¿Cómo se prepara mi pedido en la tienda?</b></h4>
            <h4>Una vez que finalizas el pedido, este se recibe en GamaTell donde un equipo de profesionales empieza a trabajar para que tu pedido llegue con la máxima calidad a tu dirección de envío en la franja de entrega que hayas seleccionado.</h4>

        </form>





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

</html>
