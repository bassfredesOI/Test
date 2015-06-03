<!DOCTYPE html>
<html lang="es">

<head>
    <title>Administrador | Be Capitals</title>
    <meta charset="utf-8" />
    <!--meta name="viewport" content="width=device-width, initial-scale=1"-->

    <link rel="stylesheet" href="../assets/js/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="../assets/css/style.css" />
    <script src="../assets/js/jquery-1.11.3.js"></script>
<style type="text/css">
    .gradiente {
        padding:20px;
        
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjY1Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMC42NCIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.64) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0.64))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.64) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.64) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.64) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.64) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#a3000000',GradientType=0 ); /* IE6-8 */

border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
border: 0px solid #000000;
}
    .white{
     color:#fff;   
    }
    
    .btn {
    background: rgb(255,246,153); /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZjY5OSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQ3JSIgc3RvcC1jb2xvcj0iI2ZmZWQwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmY0ODIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  rgba(255,246,153,1) 0%, rgba(255,237,0,1) 47%, rgba(255,244,130,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,246,153,1)), color-stop(47%,rgba(255,237,0,1)), color-stop(100%,rgba(255,244,130,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(255,246,153,1) 0%,rgba(255,237,0,1) 47%,rgba(255,244,130,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(255,246,153,1) 0%,rgba(255,237,0,1) 47%,rgba(255,244,130,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(255,246,153,1) 0%,rgba(255,237,0,1) 47%,rgba(255,244,130,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(255,246,153,1) 0%,rgba(255,237,0,1) 47%,rgba(255,244,130,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff699', endColorstr='#fff482',GradientType=0 ); /* IE6-8 */

    border: 1px solid #618E29;
    font-size: 20px;
    color: #3D474C;
    font-weight: bold;
    border-radius: 10px;
    padding: 5px 15px;
    margin: 30px 5px;
}
    .btn:hover {
    backgorund:#3D474C; 
    color: #fff;
}
    
</style>
</head>

<body>
    <div id="wrapper" class="container">
        <div id="header">
            <div class="row">
                <div class="col-xs-12">
                    <div class="logo">
                        <img src="../assets/img/50-cuotas.png" alt="Logo" title="Logo" class="img-responsive logo" />
                    </div>
                </div>
            </div>
        </div>
        <div id="contenido">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                   <div class="gradiente">
                    <h2 class="white text-center">Sistema Administraci&oacute;n BeCapitals</h2>
                     
                    <form id="formLogin" method="post" action="login.php" class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <div class="form-group">
                                <label for="nombre">Usuario : </label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="reset" class="btn btn-default">Borrar</button>
                            <button class="btn btn-default" id="loginAdmin">Enviar</button>
                        </div>
                    </form>
                    <p id="resultado"></p>
                           </div><!--gradiente-->
                </div>
              
            </div>
        </div>

          
    </div>
            <footer class="footer">
      <div class="container">
        <p class="text-muted text-right">@CopyRight Be Capitals 2015, Desarrollado por <a href="http://www.la-familia.cl">La Familia</a></p>
      </div>
    </footer>
</body>
<script src="../assets/js/bootstrap/js/bootstrap.min.js"></script>

<script src="../assets/js/script.js"></script>

    
    
</html>