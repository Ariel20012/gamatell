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
    <title>Gamatell - Contacto</title>

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
    <!-- Fin del area del encabez -->

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
    <!-- Fin del sitio de marca -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">INICIO</a></li>
                        <li><a href="catalogo.php">CATALOGO</a></li>
                        <?php /* echo'<li><a href="producto.php?id=530 & cat=Accesorios">PRODUCTO UNICO</a></li>' */?>
                     <!--   <li><a href="producto.php">PRODUCTO UNICO</a></li> -->
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
                        <h2>Contacto</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

    </div>
    <div class="row">
        <div>
            <p class="single-promo promo0">¿Qué tenemos para ti?</p>
        </div>
    </div>
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa flechas"></i>
                        <p>Devolución 30 Dias</p>
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


    <div class="row">
        <div>
            <p class="single-promo promo0">Locales</p>
        </div>
    </div>

    <style type="text/css">
        /* LIST #2 */
        
        #list2 {
            width: 100%;
        }
        
        #list2 ol {
            font-style: italic;
            font-family: Georgia, Times, serif;
            font-size: 24px;
            color: #000;
        }
        
        #list2 ol li {
            width: 48%;
            display: inline-block;
        }
        
        #list2 ol li p {
            padding: 8px;
            font-style: normal;
            font-family: Arial;
            font-size: 13px;
            color: #000;
            border-left: 1px solid #000;
            line-height: 20px;
        }
        
        #list2 ol li p em {
            display: block;
            color: #fed700;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
    <div id="list2">
        <ol>
            <li>
                <p><em>Santo Domingo </em> AV. 29 de mayo y Tsachila esquina local #45. Telf.: 0980386322. <br> Lunes a Viernes : 9H00 a 17H30. <br> SÁBADO : 9H00 a 13H30. <br><br>La Carolina Edif. Karolina Plaza calle Juan González y Juan Pablo Sáenz. Telf:
                    0993733986 <br> Lunes a Viernes : 9H00 a 17H00. <br> SÁBADO : 9H00 a 17H30. <br><br>Lugar 2. Telf: 0992710784.<br> LUNES A VIERNES , DOMINGO : 10H00 a 19H00 <br> SÁBADO : 10H00 a 19H00. <br><br></p>
            </li>
          
        
        </ol>
    </div>


    <div class="row">
        <div>
            <p class="single-promo promo0">Formulario de Contacto</p>
        </div>
    </div>




    <!--Area del formulario -->
    <form name=form method="POST" action="#" >
    <div class="row">
        <div class="col-sm-6">
            <div class="col-espacio">
                <label for="id_contact">Cabecera</label>
                <select id="cabecera" class="form-control" name="cabecera" required>
                    <option value="0">--Elija--</option><option value="Cliente ">Servicio al Cliente                        
                    </option><option value="Webmaster">Webmaster</option>
                 </select>
            </div>
            <div class="col-espacio selector1">
                <label>Situacion</label>
                <input class="form-control grey" type="text" name="referencia" id="referencia" value="" />
            </div>
        </div>
        <div class="col-sm-6">
            <div class="col-espacio">
                <label for="email">Direcci&oacute;n de correo electr&oacute;nico</label>
                <input class="form-control grey validate" type="email" id="correo" name="correo" data-validate="isEmail" value="ventas@gamatell.com" required/>
            </div>
            <div class="col-espacio">
                <label for="fileUpload">Adjuntar archivo</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                <input type="file" name="archivo" id="archivo" class="form-control" />
            </div>
        </div>
        <div class="col-sm-12">
            <div class="col-espacio">
                <label for="message">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="9" required></textarea>
            </div>
            <div class="col-sm-6">
         <div class="col-espacio">
         <input type="submit" class="button" name="enviar" id="enviar" >         
         </div>
         </div>
     </div>
        
    </div> 
                </form> 
    <?php
if(isset($_POST['enviar'])){
 $cabecera=$_POST['cabecera'];
 $correo=$_POST['correo'];
 $referencia=$_POST['referencia'];
 $archivo=$_POST['archivo'];
 $mensaje=$_POST['mensaje'];

 
 if($cabecera!=null && $correo!=null && $referencia!=null && $mensaje!=null ){
 
 $insertarDatos = "INSERT INTO contacto VALUES('$cabecera',
											 '$correo',  																		
											 '$referencia',
											'$archivo',
											'$mensaje')";
$ejecutarInsertar = mysqli_query($enlace,$insertarDatos); }		
if(!$ejecutarInsertar){
echo"Error en la linea de sql" ;
}												  													
 } 
 
?>
    

    <!--Fin area del formulario -->
    <br>
    </br>

    <div class="row">
        <div>
            <p class="single-promo promo0">Aliados de Gamatell</p>
        </div>
    </div>
    <!--Area de Marcas -->
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

    <!--Fin del area de Marcas -->

    <!--Area del fie de pag -->
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
    <!-- Fin del pie de pagina superior -->

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

    <!-- Servidor de forjQuery -->
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

