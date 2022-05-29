<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gestion Bodega Herramientas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/overhang.css">
        <link rel="stylesheet" href="css/verificacion.css">
        <style>
            body {
                padding-top: 10px;
                padding-left: 20px;
                padding-right: 20px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body background="centro_servicio.jpg">
   
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Barra de navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Gestion de Bodega</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Iniciar Sesión</a></li>
            <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-registrar">Registrarse</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!--modal para iniciar sesión-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Iniciar sesión</h2>
        </div>
        <div class="modal-body">
          <form action="ingreso_sesion.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="cedula">Cedula:</label>
              <input type="number" name="cedula" class="form-control" id="cedula" placeholder="Cedula" required>
            </div>
            <div class="form-group">
              <label for="claveid">Contraseña:</label>
              <input type="password" name="clavenamei" class="form-control" id="claveid" placeholder="Contraseña" required>
            </div>
            <button type="submit" name="entrar"  class="btn btn-success btn-block">Entrar</button>
          </form>
              <div class="clearfix"></div>
                  <hr>
                  <div class="btn-links">
                      <a href="#" class ="alert" id="">¿Olvidaste tu contraseña?</a>
                  </div>
        </div>
    </div>
  </div>
</div>
      <!--modal para registrarse-->
<div class="modal fade bs-example-modal-sm-registrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="archivo_registrar.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="nombrer">Nombre:</label>
              <input type="text" name="nombrer" class="form-control" id="nombrer" placeholder="Nombre Completo" required>
            </div>
            <div class="form-group">
              <label for="cedular">Cedula:</label>
              <input type="text" name="cedular" class="form-control" id="cedular" placeholder="Cedula" required>
            </div>
            <div class="form-group">
              <label for="correor">Correo:</label>
              <input type="email" name="correor" class="form-control" id="correor" placeholder="EJ: arleth@hotmail.com" required>
            </div>
            <div class="form-group">
              <label for="celularr">Telefono:</label>
              <input type="tel" name="celularr" class="form-control" id="celularr" placeholder="31370.." required>
            </div>
            <div class="form-group">
              <label for="claver">Contraseña:</label>
              <input type="password" name="claver" class="form-control" id="claver" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
              <label for="rolidr">Rol (seleccione uno:):</label>
              <select class="form-control" id="rolidr" name="rolnamer">
                <option>Administrador</option>
                <option>Instructor</option>
                <option>Bodeguero</option>
                <option>Pasante</option>
              </select>
              <br><br><br>
            </div>
          <button type="submit" name="registrar" class="btn btn-success btn-block">Registrar</button>
          </form>
        </div>
    </div>
  </div>
</div>

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

      <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>
