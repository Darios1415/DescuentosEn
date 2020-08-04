<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
    <body>
    <div class="contenedor">
        <!-- SCROLL Arriba -->
        <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- /SCROLL Arriba -->
        <!-- Seccion Encabezado -->
        <header id="aa-header">
        <!-- Encabezado superior  -->
        <div class="aa-header-top">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="aa-header-top-area">
                    <!-- inicio encabezado arriba a la izquierda -->
                    <div class="aa-header-top-left">
                    <!-- Lenguaje -->
                    <div class="aa-language">
                        <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                            <img src="img/flag/mexico.jpg" alt="english flag">Español
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#"><img src="img/flag/french.jpg" alt="">Frances</a></li>
                            <li><a href="#"><img src="img/flag/english.jpg" alt="">Ingles</a></li>
                        </ul>
                        </div>
                    </div>
                    <!-- / languaje -->

                    <!-- Moneda -->
                    <div class="aa-currency">
                        <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-usd"></i>MXN
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                            <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                        </ul>
                        </div>
                    </div>
                    <!-- / Moneda -->
                    <!--  -->

                    </div>
                    <!-- / inicio encabezado arriba a la izquierda -->
                    <div class="aa-header-top-right">
                    <ul class="aa-head-top-nav-right">
                        <li><a href="MiCuenta.html">Mi Cuenta</a></li>
                        <li class="hidden-xs"><a href="ListaDeDeseos.html">Lista de Deseos</a></li>
                        <li class="hidden-xs"><a href="Carrito.html">Carrito</a></li>
                        <li class="hidden-xs"><a href="Comprar.html">Comprar</a></li>
                        <li><a href="" data-toggle="modal" data-target="#login-modal">Iniciar sesion</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- / Encabezado superior  -->

        <!-- Encabezado inferior  -->
        <div class="aa-header-bottom">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="aa-header-bottom-area">
                    <!-- logo  -->
                    <div class="aa-logo">

                    <a href="index.html">
                        <!-- logo -->
                        <p><img src="img/logo.png" alt="img"></p>
                        <!-- logo -->
                        <!-- Texto base de logo -->
                        <p>Descuentos<strong>En</strong> <span>Calidad y buen servicio</span></p>
                        <!-- Texto base de logo -->
                    </a>

                    </div>
                    <!-- / logo  -->
                    <!-- Carrito -->
                    <div class="aa-cartbox">

                    @include("paginas/carrito");

                    <div class="aa-cartbox-summary">

                    @include("paginas/carritocompras");

                    </div>
                    </div>
                    <!-- / carrito -->
                    <!-- search box -->
                    <div class="aa-search-box">
                    <form action="">
                        <input type="text" name="" id="" placeholder="Buscar">
                        <button type="submit"><span class="fa fa-search"></span></button>
                    </form>
                    </div>
                    <!-- / search box -->
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- / Encabezado Inferior  -->
        </header>
        <!-- / Seccion Encabezado -->
        <!-- menu -->
        <section id="menu">
        <div class="container">
            <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
                <div class="navbar-collapse collapse">
                <!-- Barra navegación-->
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="#">Categorias <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Artesanias</a></li>
                        <li><a href="#">Alimentos</a></li>
                        <li><a href="#">Ropa</a></li>
                        <li><a href="#">Servicios</a></li>

                        <li><a href="#">Otros... <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Tamales</a></li>

                        </ul>
                        </li>
                    </ul>
                    </li>
                    <li><a href="#">Ofertas </a> </li>
                    <li><a href="#">Lo más nuevo <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Comida</a></li>
                        <li><a href="#">Artesania</a></li>
                        <li><a href="#">Moda</a></li>

                        <li><a href="#">Otros... <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Damas</a></li>

                        </ul>
                        </li>
                    </ul>
                    </li>

                    <li><a href="Contactanos.html">Contactactanos</a></li>
                    <li><a href="#">Más... <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Quienes somos</a></li>
                        <li><a href="#">Edrea-Consultoria</a></li>
                        <li><a href="404.html">Pagina Error</a></li>

                    </ul>
                    </li>
                </ul>
                </div>
                <!--/.Barra navegación -->
            </div>
            </div>
        </div>
        </section>
        <!-- / menu -->

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                            <div>
                                @yield('content')
                            </div>
                </div>
            </section>
        </div>

        <!-- footer -->
        <footer id="aa-footer">
        <!-- footer bottom -->
        <div class="aa-footer-top">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="aa-footer-top-area">
                    <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="aa-footer-widget">
                        <h3>Menu Principal</h3>
                        <ul class="aa-footer-nav">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Otros servicios</a></li>
                            <li><a href="#">Otros Productos</a></li>
                            <li><a href="#">Acerca De</a></li>
                            <li><a href="#">Contactanos</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="aa-footer-widget">
                        <div class="aa-footer-widget">
                            <h3>Nosotros</h3>
                            <ul class="aa-footer-nav">
                            <li><a href="#">Descuentos en</a></li>
                            <li><a href="#">Regresar</a></li>
                            <li><a href="#">SServicios</a></li>
                            <li><a href="#">Descuentos</a></li>
                            <li><a href="#">SOfertas especiales</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="aa-footer-widget">
                        <div class="aa-footer-widget">
                            <h3>Otros</h3>
                            <ul class="aa-footer-nav">
                            <li><a href="#">Visitanos</a></li>
                            <li><a href="#">Buscar más</a></li>
                            <li><a href="#">Busqueda avanzada</a></li>
                            <li><a href="#">Provedores</a></li>
                            <li><a href="#">Preguntas más frecuentes</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="aa-footer-widget">
                        <div class="aa-footer-widget">
                            <h3>Contactanos</h3>
                            <address>
                            <p> número Localidad Municipio, Estado. Mexico</p>
                            <p><span class="fa fa-phone"></span>Algun telefono</p>
                            <p><span class="fa fa-envelope"></span>Edreaconsultoria@gmail.com</p>
                            </address>
                            <div class="aa-footer-social">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-youtube"></span></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- footer-bottom -->
        </footer>
        <!-- / footer -->

        <!-- Login Modal -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body">

                @include("Auth/login");

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
        <!-- SmartMenus jQuery Bootstrap Addon -->
        <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
        <!-- To Slider JS -->
        <script src="js/sequence.js"></script>
        <script src="js/sequence-theme.modern-slide-in.js"></script>
        <!-- Product view slider -->
        <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
        <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
        <!-- slick slider -->
        <script type="text/javascript" src="js/slick.js"></script>
        <!-- Price picker slider -->
        <script type="text/javascript" src="js/nouislider.js"></script>
        <!-- Custom js -->
        <script src="js/custom.js"></script>
        <script src="js/login.js"></script>
    </div>
    </body>


    </html>
