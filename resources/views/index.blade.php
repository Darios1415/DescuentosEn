@extends('layouts/index')

@section('content')

 <!-- pantalla carga -->
 <div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Cargando</span>
    </div>
    </div>
    <!-- /pantalla carga -->

      <!-- imagenes en carrusel <<slider>> -->
        <section id="aa-slider">
            <div class="aa-slider-area">
                <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                    <!-- Primera dispositiva -->
                    <li>
                        <div class="seq-model">
                        <img data-seq src="img/slider/1.jpg" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                        <span data-seq>Ahorre hasta un 75%</span>
                        <h2 data-seq>Productos artesanales</h2>
                        <p data-seq>Arte bello hecho a mano</p>
                        <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">COMPRAR AHORA</a>
                        </div>
                    </li>
                    <!-- Primera dispositiva -->
                    <!-- Segunda diapositiva -->
                    <li>
                        <div class="seq-model">
                        <img data-seq src="img/slider/2.jpg" alt="Wristwatch slide img" />
                        </div>
                        <div class="seq-title">
                        <span data-seq>Hasta 40% de descuento en</span>
                        <h2 data-seq>Servicios a Domicilio</h2>
                        <p data-seq>El precio se olvida, la calidad permanece</p>
                        <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">PEDIR AHORA</a>
                        </div>
                    </li>
                    <!-- /Segunda diapositiva -->
                    <!-- Tercera diapositiva -->
                    <li>
                        <div class="seq-model">
                        <img data-seq src="img/slider/3.jpg" alt="Women Jeans slide img" />
                        </div>
                        <div class="seq-title">
                        <span data-seq>Los mejor en</span>
                        <h2 data-seq>Platillos tipicos</h2>
                        <p data-seq>El amor puede esperar, el hambre no</p>
                        <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">PEDIR AHORA</a>
                        </div>
                    </li>
                    <!-- /Tercera diapositiva -->
                    <!-- Cuarta diapositiva -->
                    <li>
                        <div class="seq-model">
                        <img data-seq src="img/slider/4.jpg" alt="Shoes slide img" />
                        </div>
                        <div class="seq-title">
                        <span data-seq>
                            Ahorre hasta un 75% de descuento</span>
                        <h2 data-seq>Ropa Exclusiva</h2>
                        <p data-seq>Olvida las reglas, si te gusta usalo</p>
                        <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">COMPRAR AHORA</a>
                        </div>
                    </li>
                    <!-- /Cuarta diapositiva -->
                    <!-- quinta diapositiva -->
                    <li>
                        <div class="seq-model">
                        <img data-seq src="img/slider/5.jpg" alt="Male Female slide img" />
                        </div>
                        <div class="seq-title">

                        <h2 data-seq>Descuentos En</h2>
                        <p data-seq>Calidad y servicio a tu alcance</p>
                        </div>
                    </li>
                    </ul>
                </div>
                <!-- /quinta diapositiva -->
                <!-- Flechas  -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
                <!-- /Flechas -->
                </div>
            </div>
            </section>
            <!-- / Fin carrusel -->
        <!-- Iniciar la sección de Promo -->
        <section id="aa-promo">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                    <div class="row">
                        <!-- Promo izquierda -->
                        <div class="col-md-5 no-padding">
                        <div class="aa-promo-left">
                            <div class="aa-promo-banner">
                            <img src="img/promo-banner-1.jpg" alt="img">
                            <div class="aa-prom-content">
                                <span>75% de descuento</span>
                                <h4><a href="#">Para mujeres</a></h4>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Promo derecha -->
                        <div class="col-md-7 no-padding">
                        <div class="aa-promo-right">
                            <div class="aa-single-promo-right">
                            <div class="aa-promo-banner">
                                <img src="img/promo-banner-3.jpg" alt="img">
                                <div class="aa-prom-content">
                                <span>Exclusivo </span>
                                <h4><a href="#">Para hombres</a></h4>
                                </div>
                            </div>
                            </div>

                            <div class="aa-single-promo-right">
                            <div class="aa-promo-banner">
                                <img src="img/promo-banner-2.jpg" alt="img">
                                <div class="aa-prom-content">
                                <span>Descuento</span>
                                <h4><a href="#">En zapatos</a></h4>
                                </div>
                            </div>
                            </div>

                            <div class="aa-single-promo-right">
                            <div class="aa-promo-banner">
                                <img src="img/promo-banner-4.jpg" alt="img">
                                <div class="aa-prom-content">
                                <span>Lo mas nuevo</span>
                                <h4><a href="#">Para miños</a></h4>
                                </div>
                            </div>
                            </div>
                            <div class="aa-single-promo-right">
                            <div class="aa-promo-banner">
                                <img src="img/promo-banner-5.jpg" alt="img">
                                <div class="aa-prom-content">
                                <span>25% de descuento</span>
                                <h4><a href="#">Para bolsas</a></h4>
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
            </section>
            <!-- / terminar sección de Promo -->
            <!-- Productos sección -->
        <section id="aa-product">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                        <!-- Categorias -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#artesanias" data-toggle="tab">Artesanias</a></li>
                            <li><a href="#alimentos" data-toggle="tab">Alimentos</a></li>
                            <li><a href="#ropa" data-toggle="tab">ropa</a></li>
                            <li><a href="#servicios" data-toggle="tab">Servicios</a></li>
                        </ul>
                        <!-- /Categorias -->

                        <div class="tab-content">
                            <!-- Iniciar menu artesanias -->
                            <div class="tab-pane fade in active" id="artesanias">
                            <ul class="aa-product-catg">
                                <!-- Iniciar por producto -->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                        alt="Aretes"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->

                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-sale" href="#">¡Rebaja!</span>
                                <!-- Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-sold-out" href="#">¡Agotado!</span>
                                <!--/ Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-hot" href="#">¡Oferta!</span>
                                <!-- /Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-sale" href="#">¡Rebaja!</span>
                                <!-- /Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un producto</a></h4>
                                    <span class="aa-product-price">$45.50</span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-sold-out" href="#">¡Agotado!</span>
                                <!-- /Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                            </ul>
                            <!--Navegador-->
                            <a class="aa-browse-btn" href="#">Buscar mas Productos <span
                                class="fa fa-long-arrow-right"></span></a>
                            <!--/Navegador-->
                            </div>
                            <!-- / Productos artesanias -->

                            <!-- Catalogo de alimentos -->
                            <div class="tab-pane fade" id="alimentos">
                            <ul class="aa-product-catg">
                                <!-- Iniciar por producto -->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/alimentos/comida-1.png" alt="Aretes"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-sale" href="#">¡Rebaja!</span>
                                <!-- Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Iniciar por producto -->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/alimentos/comida-1.png" alt="Aretes"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-sale" href="#">¡Rebaja!</span>
                                <!-- Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/alimentos/comida-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-sold-out" href="#">¡Agotado!</span>
                                <!--/ Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/alimentos/comida-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/alimentos/comida-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                        class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- Etiqueta del producto -->
                                <span class="aa-badge aa-hot" href="#">¡Oferta!</span>
                                <!-- /Etiqueta del producto -->
                                </li>
                                <!-- /terminar por producto -->
                                <!-- Inciar por producto-->
                                <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/alimentos/comida-1.png"
                                        alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                    <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span>
                                    </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Agregar a lista de Deseos"><span class="fa fa-heart-o"></span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                        class="fa fa-exchange"></span></a>
                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                </li>
                                <!-- /terminar por producto -->

                            </ul>
                            <!--Navegador-->
                            <a class="aa-browse-btn" href="#">Buscar mas Productos <span
                                class="fa fa-long-arrow-right"></span></a>
                            <!--/Navegador-->

                            </div>
                            <!-- / catalogo de alimentos -->

                            <!-- catalogo de ropa -->

                            <!-- / catalogo de ropa -->
                            <!-- catalogo de servicios-->

                            <!-- / catalogo de servicios -->
                        </div>

                        <!-- Zoom de imagen quick view -->
                        <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <div class="row">
                                    <!-- Modal view slider -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div class="simpleLens-gallery-container" id="demo-1">
                                        <div class="simpleLens-container">
                                            <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image"
                                                data-lens-image="img/vista_rapida/grande/grande.png">
                                                <img src="img/vista_rapida/mediano/mediano.png" class="simpleLens-big-image">
                                            </a>
                                            </div>
                                        </div>
                                        <div class="simpleLens-thumbnails-container">
                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                            data-lens-image="img/vista_rapida/grande/grande.png"
                                            data-big-image="img/vista_rapida/mediano/mediano.png">
                                            <img src="img/vista_rapida/miniatura/miniatura.png">
                                            </a>
                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                            data-lens-image="img/vista_rapida/grande/grande.png"
                                            data-big-image="img/vista_rapida/mediano/mediano.png">
                                            <img src="img/vista_rapida/miniatura/miniatura.png">
                                            </a>

                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                            data-lens-image="img/vista_rapida/grande/grande.png"
                                            data-big-image="img/vista_rapida/mediano/mediano.png">
                                            <img src="img/vista_rapida/miniatura/miniatura.png">
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Modal view content -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3>Esto es un producto</h3>
                                        <div class="aa-price-block">
                                        <span class="aa-product-view-price">$34.99</span>
                                        <p class="aa-product-avilability">Disponibilidad: <span>En tienda</span></p>
                                        </div>
                                        <p>Esta es la descripcion del producto y su vista rapida,Esta es la descripcion del
                                        producto y su vista rapida.</p>
                                        <h4>Talla</h4>
                                        <div class="aa-prod-view-size">
                                        <a href="#">S</a>
                                        <a href="#">M</a>
                                        <a href="#">L</a>
                                        <a href="#">XL</a>
                                        </div>
                                        <div class="aa-prod-quantity">
                                        <form action="">
                                            <select name="" id="">
                                            <option value="0" selected="1">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                            <option value="4">5</option>
                                            <option value="5">6</option>
                                            </select>
                                        </form>
                                        <p class="aa-prod-category">
                                            Categoria: <a href="#">Categoria del proyecto</a>
                                        </p>
                                        </div>
                                        <div class="aa-prod-view-bottom">
                                        <a href="#" class="aa-add-to-cart-btn"><span
                                            class="fa fa-shopping-cart"></span>Agregar
                                            al Carrito</a>
                                        <a href="#" class="aa-add-to-cart-btn">Ver detalles</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div><!-- /.modal-content -->

                            </div><!-- /.modal-dialog -->

                        </div>
                        <!-- / zoom imagen - quick view-->

                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
            <!-- / Productos sección -->
            <!-- banner section -->
        <section id="aa-banner">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="row">
                    <div class="aa-banner-area">
                        <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
            <!-- seccion de populares -->
        <section id="aa-popular-category">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- Iniciar titulo de populares -->
                        <ul class="nav nav-tabs aa-products-tab">
                        <li class="active"><a href="#popular" data-toggle="tab">Populares</a></li>
                        <li><a href="#featured" data-toggle="tab">Destacados</a></li>
                        <li><a href="#latest" data-toggle="tab">últimos modelos</a></li>
                        </ul>
                        <!-- /Terminar titulo de populares -->
                        <!-- Paneles -->
                        <div class="tab-content">
                        <!-- Inicio artesanias popular -->
                        <div class="tab-pane fade in active" id="popular">
                            <ul class="aa-product-catg aa-popular-slider">
                            <!-- Iniciar productos individual -->
                            <li>
                                <figure>
                                <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                    alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                    class="aa-product-price"><del>$65.50</del></span>
                                </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de Deseos"><span
                                    class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                    class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- product badge -->
                                <span class="aa-badge aa-sale" href="#">¡REBAJA!</span>
                            </li>
                            <!-- /Terminar productos individual -->

                            <li>
                                <figure>
                                <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                    alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span>
                                </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de Deseos"><span
                                    class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                    class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- product badge -->
                                <span class="aa-badge aa-sold-out" href="#">¡Agotado!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                    alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    carrito</a>
                                </figure>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                <span class="aa-product-price">$45.50</span>
                                </figcaption>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de Deseos"><span
                                    class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                    class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- product badge -->
                                <span class="aa-badge aa-sold-out" href="#">¡Agotado!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                    alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                    class="aa-product-price"><del>$65.50</del></span>
                                </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de Deseos"><span
                                    class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                    class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                    alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                    class="aa-product-price"><del>$65.50</del></span>
                                </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de Deseos"><span
                                    class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                    class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                    alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                    class="aa-product-price"><del>$65.50</del></span>
                                </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de Deseos"><span
                                    class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                    class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- product badge -->
                                <span class="aa-badge aa-hot" href="#">¡Oferta!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                    alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                    class="aa-product-price"><del>$65.50</del></span>
                                </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de Deseos"><span
                                    class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                    class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- product badge -->
                                <span class="aa-badge aa-hot" href="#">¡Oferta!</span>
                            </li>
                            <!-- start single product item -->
                            <li>
                                <figure>
                                <a class="aa-product-img" href="#"><img src="img/artesanias/artesania-1.png"
                                    alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Agregar al
                                    Carrito</a>
                                <figcaption>
                                    <h4 class="aa-product-title"><a href="#">Esto es un Producto</a></h4>
                                    <span class="aa-product-price">$45.50</span><span
                                    class="aa-product-price"><del>$65.50</del></span>
                                </figcaption>
                                </figure>
                                <!--Vista rapida-->
                                <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de Deseos"><span
                                    class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span
                                    class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Vista rápida"
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                </div>
                                <!--/Vista rapida-->
                                <!-- product badge -->
                                <span class="aa-badge aa-sale" href="#">¡Rebaja!</span>
                            </li>
                            </ul>
                            <a class="aa-browse-btn" href="#">Bucar mas productos <span
                                class="fa fa-long-arrow-right"></span></a>
                        </div>
                        <!-- / popular product category -->

                        <!-- start featured product category -->

                        <!-- / featured product category -->

                        <!-- start latest product category -->

                        <!-- / latest product category -->
                        </div>
                        <!--/Panel -->
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
            <!-- / Seccion de populares -->
              <!-- Seccion de soporte -->
        <section id="aa-support">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                        <span class="fa fa-truck"></span>
                        <h4>ENVIOS GRATIS</h4>
                        <P> Insertar frase sobre los envios gratis</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                        <span class="fa fa-clock-o"></span>
                        <h4>TIEMPO LIMITADO PARA RECIBIR TU PRODUCTO</h4>
                        <P>Si en un lapso de 30 dias no tienes el producto se te devuelve tu dinero</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                        <span class="fa fa-phone"></span>
                        <h4>SOPORTE 24/7</h4>
                        <P>Porque la atencion a nuestro cliente nos interesa</P>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
            <!-- / Seccion de soporte-->
              <!-- Testimonial -->
        <section id="aa-testimonial">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="aa-testimonial-area">
                    <ul class="aa-testimonial-slider">
                        <!-- single slide -->
                        <li>
                        <div class="aa-testimonial-single">
                            <img class="aa-testimonial-img" src="img/user.png" alt="testimonial img">
                            <span class="fa fa-quote-left aa-testimonial-quote"></span>
                            <p>Descripcion de colaborador,Descripcion de colaborador,Descripcion de colaborador,Descripcion de
                            colaborador</p>
                            <div class="aa-testimonial-info">
                            <p>Jose Luis</p>
                            <span>Programador</span>
                            <a href="#">Edrea.com</a>
                            </div>
                        </div>
                        </li>
                        <!-- single slide -->

                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </section>
            <!-- / Testimonial -->
             <!-- Latest Blog -->
        <section id="aa-latest-blog">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                    <h2>Redes Sociales</h2>
                    <div class="row">
                        <!-- single latest blog -->
                        <div class="col-md-4 col-sm-4">
                        <div class="aa-latest-blog-single">
                            <figure class="aa-blog-img">
                            <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                            <figcaption class="aa-blog-img-caption">
                                <span href="#"><i class="fa fa-eye"></i>5K</span>
                                <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                            </figcaption>
                            </figure>
                            <div class="aa-blog-info">
                            <h3 class="aa-blog-title"><a href="#">Facebook</a></h3>
                            <p>Alguna descripcion que pondre por alguna imagen conmemorativa a esta consultoria</p>
                            <a href="#" class="aa-read-mor-btn">Leer mas <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                        </div>
                        <!-- single latest blog -->
                        <div class="col-md-4 col-sm-4">
                        <div class="aa-latest-blog-single">
                            <figure class="aa-blog-img">
                            <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                            <figcaption class="aa-blog-img-caption">
                                <span href="#"><i class="fa fa-eye"></i>5K</span>
                                <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                <span href="#"><i class="fa fa-clock-o"></i>June 26, 2020</span>
                            </figcaption>
                            </figure>
                            <div class="aa-blog-info">
                            <h3 class="aa-blog-title"><a href="#">Instagram</a></h3>
                            <p>Alguna descripcion que pondre por alguna imagen conmemorativa a esta consultoria</p>
                            <a href="#" class="aa-read-mor-btn">Leer mas<span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                        </div>
                        <!-- single latest blog -->
                        <div class="col-md-4 col-sm-4">
                        <div class="aa-latest-blog-single">
                            <figure class="aa-blog-img">
                            <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                            <figcaption class="aa-blog-img-caption">
                                <span href="#"><i class="fa fa-eye"></i>5K</span>
                                <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                <span href="#"><i class="fa fa-clock-o"></i>June 26, 2020</span>
                            </figcaption>
                            </figure>
                            <div class="aa-blog-info">
                            <h3 class="aa-blog-title"><a href="#">twitter</a></h3>
                            <p>Alguna descripcion que pondre por alguna imagen conmemorativa a esta consultoria</p>
                            <a href="#" class="aa-read-mor-btn">Leer mas <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
            <!-- / Latest Blog -->
        <!-- Subscribe section -->
        <section id="aa-subscribe">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">

                        @include("paginas/suscribete");

                    </div>
                </div>
                </div>
            </div>
            </section>
            <!-- / Subscribe section -->



@endsection
