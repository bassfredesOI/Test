<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Be Capitals | Env&iacute;o correcto</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

 

    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/js/fancyBox/jquery.fancybox.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="./assets/js/jquery-1.11.3.js"></script>
    <script src="./assets/js/imagesloaded.pkgd.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body>
    <div id="wrapper" class="container">
        <div id="contenido">
            <div class="row">
                <div class="col-xs-12">
                    <div id="header">
                        <div class="logo">
                            <img src="./assets/img/50-cuotas.png" class="logo img-responsive" alt="50 cuotas"/></br></br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row ">
                     <div class="col-md-12">   
                    <div class="gradiente boxDer">
                        <h1 class="text-center white">Gracias por confiar en nosotros <?php echo $_SESSION['nombre'];?></h1>
                        
                            <p class="text-center white">
                                Hemos recibido tu solicitud. Te contactaremos pronto.
                            </p> 
                            
                            <a href="#" class="white pull-left">Términos y Condiciones</a>
                            <a class="  white pull-right" href="index.php">Volver al Inicio</a>
                         <div class="clearfix"></div>   
                        </div>
                        <div class="clearfix"></div>
                    </div>
                        
                </div><!--row-->
                    </div>
            </div>
            
            
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