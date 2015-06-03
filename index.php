<!DOCTYPE html>
<html lang="es">

<head>
    <title>BeCapitals</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <meta property="og:title" content=" " />
    <meta property="og:type" content="website" />
    <meta property="og:image" content=" " />
    <meta property="og:url" content=" " />
    <meta property="og:description" content=" " />

    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/js/fancyBox/jquery.fancybox.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="./assets/js/jquery-1.11.3.js"></script>
    <script src="./assets/js/imagesloaded.pkgd.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="http://becapitals.cl/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon" />
</head>

<body>
    <div id="todo" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 altura formback">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <img src="./assets/img/50-cuotas.png" class="logo" />
                         
                        <h1 class="text-center col-xs-10 col-xs-offset-1 text-center">Financiamos tu Campa&ntilde;a hasta en 50 Cuotas</h1>
                        
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2  ">
                        

                        <form id="formContacto" action="actions.php?info=ingresaDatos" method="post" class="row gradiente">
                            <div class="clearfix"></div>
                            <div class="col-xs-12 text-center">

                                <img src="assets/img/hook.png" />

                            </div>
                            <div class="clearfix"></div>
                            <h2 class="text-center">SOLICITA TU FINANCIAMIENTO</h2>
                            <br>
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="form-group nombreFormControl">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE COMPLETO" data-toggle="tooltip" data-placement="top" title="El campo debe tener al menos 5 car&aacute;cteres.">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="form-group mailFormControl">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" data-toggle="tooltip" data-placement="top" title="Debe ser un Email v&aacute;lido, con @.">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="form-group teleForm">
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="TEL&Eacute;FONO" data-toggle="tooltip" data-placement="top" title="El campo debe contener n&uacute;meros.">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="form-group celForm">
                                    <input type="text" class="form-control" id="cel" name="cel" placeholder="CELULAR" data-toggle="tooltip" data-placement="top" title="El campo debe contener n&uacute;meros.">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="form-group empresaForm">
                                    <input type="text" class="form-control" id="empresa" name="empresa" placeholder="EMPRESA" data-toggle="tooltip" data-placement="top" title="El campo debe tener al menos 1 car&aacute;cter.">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="form-group nombreComercialForm">
                                    <input type="text" class="form-control" id="nombrecomercial" name="nombrecomercial" placeholder="NOMBRE COMERCIAL" data-toggle="tooltip" data-placement="top" title="El campo debe tener al menos 1 car&aacute;cter.">
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="form-group sitioWebForm">
                                    <input type="text" class="form-control" id="sitio" name="sitio" placeholder="SITIO WEB" data-toggle="tooltip" data-placement="top" title="El campo debe contener la direcci&oacute;n y comenzar con http://">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="form-group inversionForm">
                                    <input type="text" class="form-control" id="inversion" name="inversion" placeholder="INVERSI&Oacute;N" data-toggle="tooltip" data-placement="top" title="El tramo de inversi&oacute;n necesaria.">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-10 col-xs-offset-1 btmFormBtns">
                                <button type="reset" class="btn btn-default">Borrar</button>
                                <button class="btn btn-default btnSubmit">Enviar</button>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <!--col-6-->
            <div class="col-xs-12 col-sm-12 col-md-6 relative contenidoback">
                <div id="contenidoBox" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
                    <div style="position:fixed; z-index:99999; left:50px; top:350px;">
                        <ol class="carousel-indicators">
                            <li data-target="#contenidoBox" data-slide-to="0" class="active"></li>
                            <li data-target="#contenidoBox" data-slide-to="1"></li>
                            <li data-target="#contenidoBox" data-slide-to="2"></li>
                            <li data-target="#contenidoBox" data-slide-to="3"></li>
                            <li data-target="#contenidoBox" data-slide-to="4"></li>
                        </ol>
                    </div>
                    <div class="row">

                        <div class="col-xs-11 col-xs-offset-1 col-sm-10 col-sm-offset-1">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="containerSubContent">
                                                <div class="relative">
                                                    <img class="img-responsive" src="assets/img/cartel.png" alt="Financiamento en 50 cuotas, haz explotar tus ventas" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-fluid-->
                                </div>
                                <!--/item-->
                                <div class="item">
                                    <div class="row">
                                        <div class="containerSubContent">
                                            <div class="col-xs-12 relative">
                                                <h2>QUÉ ES</h2>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                                            </div>

                                        </div>
                                    </div>
                                    <!--/row-fluid-->
                                </div>
                                <!--/item-->
                                <div class="item">
                                    <div class="row">
                                        <div class="containerSubContent">
                                            <div class="col-xs-12 relative">
                                                <h2>COMO CONSEGUIRLO</h2>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                                            </div>
                                        </div>

                                    </div>
                                    <!--/row-fluid-->
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="containerSubContent">
                                            <div class="col-xs-12 relative">
                                                <h2>VIDEO EXPLICATIVO</h2>
                                                <div class="embed-responsive embed-responsive-16by9 video">
                                                    <iframe class="embed-responsive-item text-center" width="420" height="315" src="https://www.youtube.com/embed/joKmC3pTFU8" frameborder="0" allowfullscreen></iframe>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <!--/row-fluid-->
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="containerSubContent">
                                            <div class="col-xs-12  relative">
                                                <h2>VISÍTANOS</h2>
                                                <div class="embed-responsive embed-responsive-16by9 video">


                                                    <iframe class="embed-responsive-item text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.3868773741465!2d-70.5157321!3d-33.3609644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cbe7c4184f4f%3A0xf52ece2f0c3e19bf!2sLa+Dehesa+1201%2C+Lo+Barnechea%2C+Regi%C3%B3n+Metropolitana+de+Santiago!5e0!3m2!1ses!2scl!4v1432906526365" width="600" height="450" frameborder="0" style="border:0"></iframe>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-fluid-->
                                </div>



                                <!--/item-->

                            </div>
                            <!--todos-->


                        </div>
                        <!--col-xs-10-->
                    </div>


                </div>
                <div class="footer-slides text-right">
                    <a href="http://www.becapitals.cl" target="_blank"><img src="http://www.becapitals.cl/img/logo-becapital.png" class="logo" width="150" height="150" /></a>
            </div>
            <!--col-6-->
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted text-center">La Dehesa 1201 Oficina 207 Edificio Oriente Lo Barnechea - Mesa central <a class="text-muted" href="tel:+56022834500">22 834 55 00</a> </p>
        </div>
    </footer>


</body>
<script src="./assets/js/bootstrap/js/bootstrap.min.js"></script>
<script src="./assets/js/respond.min.js"></script>
<script src="./assets/js/jquery.actual.min.js"></script>
<script src="./assets/js/greensock/minified/TweenLite.min.js"></script>
<script src="./assets/js/greensock/minified/plugins/CSSPlugin.min.js"></script>
<script src="./assets/js/jquery.backstretch.min.js"></script>
<script src="./assets/js/jquery.placeholder.min.js"></script>
<script src="./assets/js/fancyBox/jquery.fancybox.pack.js"></script>
<script src="./assets/js/jquery.Rut.js"></script>
<script src="./assets/js/script.js"></script>

</html>