<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Login</title>
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
   
<!--Inicio de sesion-->

<div class="container-fluid">
  
  <table class="table">
  <tr>
  <td>
  <img src="imagen/icono8.png"  width="400" height="400">
  </td>
  <td>
	<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Iniciar Sesi&oacute;n</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="olvido.php">&iquest;Olvido su contrase&ntilde;a?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="sesion.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="usuario" value="" placeholder="Usuario">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="contra" placeholder="Contrase&ntilde;a">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="recuerda" value="1"> Recordar
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Entrar </a>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Entrar con Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            No tiene cuenta! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Registrece aqui
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Registro</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Iniciar Sesi&oacute;n</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="post" action="registro.php">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="correo">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Nombre:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Apellido:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Contrase&ntilde;a</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="contra" placeholder="Contrase&ntilde;a">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Registrar</button>
                                        <span style="margin-left:8px;">o</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Registrar con Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
	
    </td>
    </tr>
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