<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Recuperacion de contraseña</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="carousel.css" rel="stylesheet">
 <script src="ie-emulation-modes-warning.js"></script> 
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--CDN FONTAWESOME-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 <!--Css extras-->
 <link href="izquierda.css" rel="stylesheet">
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

      </div>
      <!--Div olvido-->
      <div class="container">
      <table class="table">
      <tr>
      <td>
      Aqui poner otra imagen
		</td>
       <td>
       
       <form action="recupera.php" method="post">
       <h5 class="text-info">Ingrese su correo:</h5><br>
       <input type="text" class="form-group" name="correo" placeholder="Email"><br>
       <input type="submit" value="Recuperar" class="btn-success">
       </form>
       
       </td>
        </table>
		</div>
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
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="ie10-viewport-bug-workaround.js"></script>
    <script src="http://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>      
</body>
</html>