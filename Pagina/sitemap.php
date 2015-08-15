<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Home</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="carousel.min.css" rel="stylesheet">
 <script src="ie-emulation-modes-warning.min.js"></script> 
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--CDN FONTAWESOME-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 <!--Css extras-->
 <link href="izquierda.min.css" rel="stylesheet">
 <link href="buspedido.min.css" rel="stylesheet">
</head>

<body>
<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Tienda</a></li>
                <li><a href="#about">Tutoriales</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Reputaci&oacute;n</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="dudas.php">Dudas</a></li>
                <li><a href="login.php"><i style=" right:500px;" class="fa fa-user-secret">Ingresar</i></a></li>
              
              </ul>
            </div>
          </div>
        </nav>

     

      <!--Menu izquierda-->
<br>
 <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
      <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Compras<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-shopping-cart"></span></a>
      <!--Aqui con php se veran reflejadas las compras-->
      </li>
        <li class="dropdown">
        <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Tarjetas de desarrollo<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hdd"></span></a>
        <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="#">Arduino</a></li>
            <li><a href="#">Radxa Rock</a></li>
            <li><a href="#">Raspberry Pi</a></li>
            <li><a href="#">Cubie Board</a></li>
            <li><a href="#">Banana Pi</a></li>
            <li><a href="#">Beaglebone</a></li>
            <li><a href="#">Freescale</a></li>
            <li><a href="#">Intel</a></li>
         </ul>
     </li>    
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sensores <span style="font-size:16px;" class="pull-right hidden-xs showopacity  glyphicon glyphicon-screenshot"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="">Inercial</a></li>
            <li><a href="#">Biomedico y Presencial</a></li>
            <li><a href="#">Distancia</a></li>
            <li><a href="#">Climaticos</a></li>
            <li><a href="#">Luz y Radiaci&oacute;n</a></li>
            <li><a href="#">Visi&oacute;n</a></li>
            <li><a href="#">Voltaje</a></li>
            <li><a href="#">Fluidos</a></li>
            <li><a href="#">Fuerza y Deflexion</a></li>
            <li><a href="#">Gas</a></li>
            <li><a href="#">Otros</a></li>
          </ul>
        </li>          
     <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
      <ul class="dropdown-menu forAnimate" role="menu">
        <li><a href="#">Android</a></li>
            <li><a href="#">Robotica</a></li>
            <li><a href="#">Arduino</a></li>
            <li><a href="#">Python</a></li>
            <li><a href="#">SolidWorks</a></li>
        <li><a href="#">Autocad</a></li>
            <li><a href="#">Otros Lenguajes</a></li>
      </ul>
     </li>  
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Impresi&oacute;n 3D<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-print"></span>
    </a>
      <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="#">Diseño</a></li>
            <li><a href="#">Asesoria</a></li>
            <li><a href="#">Cotizaci&oacute;n</a></li>
          <li><a href="#">Filamento</a></li>
            <li><a href="#">Ejemplos</a></li>
            <li><a href="#">Impresoras</a></li>
        </ul>    
     </li>
     <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Motores<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
      <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="#">Servomotores</a></li>
            <li><a href="#">Motores a paso</a></li>
            <li><a href="#">Motores Brushless</a></li>
          <li><a href="#">Controladores</a></li>
            <li><a href="#">Actuadores</a></li>
        </ul>    
     </li>
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Herramientas<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-wrench"></span></a>
      <ul class="dropdown-menu forAnimate" role="menu">
          <li><a href="#">De reparaci&oacute;n</a></li>
            <li><a href="#">De corte</a></li>
            <li><a href="#">Pinzas</a></li>
          <li><a href="#">Suministros para soldar</a></li>
            <li><a href="#">Osciloscopios</a></li>
            <li><a href="#">Microscopio y endoscopio</a></li>
            <li><a href="#">Multietros</a></li>
            <li><a href="#">Medidores y detectores</a></li>
            <li><a href="#">T&eacute;lemtr&oacute; Laser</a></li>
            <li><a href="#">Balanzas digital</a></li>
            <li><a href="#">Alcohol&iacute;metros</a></li>
            <li><a href="#">De temperatura</a></li>
            <li><a href="#">Otros</a></li>
        </ul>    
     </li>
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Software<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-save"></span></a>
      <ul class="dropdown-menu forAnimate" role="menu">
          <li>Licenciamiento</li>
          <li><a href="#">Autodesk</a></li>
            <li><a href="#">Solidworks</a></li>
            <li class="divider"></li>
            <li>Gratuitos</li>
          <li><a href="https://www.blender.org/">Blender</a></li>
            <li><a href="http://opencv.org/">OpenCv</a></li>
             <li><a href="http://opencv.org/">OpenGl</a></li>
        </ul>    
     </li>
     
       
        <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a>
      <ul class="dropdown-menu forAnimate" role="menu">
        <li>Rastrear mis ordenes</li>
          <div class="span12">
            <form id="custom-search-form" class="form-search form-horizontal pull-right" action="busquedapedido.php">
                <div class="input-append span12">
                    <input type="text" class="search-query" placeholder="ID del pedido o Email">
                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <li><a href="#"></a></li>

        </ul>    
     </li>
        
      </ul>
    </div>
  </div>
</nav>


<!--Menu izquierda--> 
<div class="container">

  <div class="col-md-2">
  <h3 class="text-info">Informaci&oacute;n</h3>
  <hr>
  <a href="nosotros.php">&bull;Nosotros</a><br>
  <a href="contacto.php">&bull;Contacto</a><br>
  <a href="dudas.php">&bull;Dudas</a><br>
  <a href="factura.php">&bull;Facturaci&oacute;n</a><br>
  <a href="politicas.php">&bull;Politicas</a><br>
  <a href="privacidad.php">&bull;Privacidad</a><br>
  </div>
  <div class="col-md-2">
  <h3 class="text-info">Catalogo</h3>
  <hr>
  <a href="nosotros.php">&bull;Tarjetas de desarrollo</a><br>
  <a href="nosotros.php">&bull;Sensores</a><br>
  <a href="nosotros.php">&bull;Herramientas</a><br>
  <a href="nosotros.php">&bull;Libros</a><br>
  <a href="nosotros.php">&bull;Impresion 3D</a><br>
  <a href="nosotros.php">&bull;Motores</a><br>
  <a href="nosotros.php">&bull;Software</a><br>
  </div>
  
<div >
  sggfasgs
  </div>
  
</div>






</div><!--Container ends-->
<!-- FOOTER 
      
      -->
      <div class="container-fluid">
      <p class="pull-right"><a href="#">Inicio</a></p>
      </div>
      <div class="container-fluid">
 <footer style="bottom:0;z-index:999999;">
        <table class="table">
        <tr>
        <td>
        <b>Direcci&oacute;n</b>
        <p class="text-info">Trigal #173</p>
        <p class="text-info">Fraccionamiento Rancho Alegre</p>
        <p class="text-info">Tlajomulco de Zuñiga</p>
        <p class="text-info">C.P 45672</p>
        <p class="text-info">Jalisco,M&eacute;xico</p>
        <p class="text-info">Tel: (33) 31-61-68-27</p>
        </td>
        <td>
        <b>Horarios</b>
        <p class="text-info">L-V: 08:00 a 15:00</p>
    <p class="text-info">L-V: 16:00 a 19:00</p>
    <p class="text-info">S: 09:00 a 14:00</p>
        <p class="text-info">Cel: (044) 3331990492</p>
        <p class="text-info">Cel: (044) 3310645519</p>
        <p class="text-success">Se contesta Whatsapp</p>
        </td>
        <td>
        <b>Arduelectronics</b>
        <a href="#"><p class="text-info">&bull;Facturaci&oacute;n</p></a>
        <a href="#"><p class="text-info">&bull;Mapa de sitio</p></a>
        <a href="#"><p class="text-info">&bull;Nosotros</p></a>
        <a href="#"><p class="text-info">&bull;Privacidad</p></a>
        <a href="#"><p class="text-info">&bull;&middot;Politicas</p></a>
       
        </td>
        <td>
        <b>Atenci&oacute;n a clientes</b>
        <a href="#"><p class="text-info">&bull;Garantia</p></a>
        <a href="#"><p class="text-info">&bull;Acerca del pedido</p></a>
        </td>
        <td>
        <p class="pull-right"><a href="https://www.facebook.com/pages/Arduelectronics/1005416422812999?skip_nax_wizard=true"><i class="fa fa-facebook fa-2x"></i></a></p>
        <p class="pull-right"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></p>
        <p class="pull-right"><a href="#"><i class="fa fa-youtube-play fa-2x"></i></a></p>
        </td>
        </tr>
        </table>
        <div >
        <p class="pull-left">&copy; Desarrollado por Arduelectronics  </p>
        </div>
      </footer>     
</div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="ie10-viewport-bug-workaround.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    
   






















    </body> 
    </html>