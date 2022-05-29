 <!DOCTYPE html>
 <html>
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
 <body>

 
    <!-- Formularios de inrgeso/registro -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <!-- aqui esta los nombres de iniciar sesion y de registro-->
            <div class="row">
              <div class="col-xs-6"> 
                <span class="glyphicon glyphicon-ok-sign"></span><a href="#" class="active" id="login-form-link"> Iniciar sesion</a> 
              </div>
              <div class="col-xs-6">
                <span class="glyphicon glyphicon-user" ></span> <a  href="#" id="register-form-link"> Registro de usuario</a>
              </div>
            </div>
            <hr>
          </div>

          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
              <!-- comienza  el formulario el pattern se uza como un campo requerido -->
                <form id="login-form" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="" required pattern="^[letras)*$">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" value="" required pattern="^[password)*$">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Ingresar">
                      </div>
                    </div>
                  </div>
                </form>
                <!-- comienza el otro formulario-->
                <form id="register-form" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre completo" value="" required >
                  </div>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="usuario" value="" required >
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo Electronico" value="" required >
                  </div>
                  <div class="form-group">
                    <input type="number" name="cedula" id="cedula" tabindex="1" class="form-control" placeholder="cedula" value="" required >
                  </div>
                  <div class="form-group">
                    <input type="number" name="celular" id="celular" tabindex="1" class="form-control" placeholder="celular" value="" required  >
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" value="" required >
                  </div>
                  <div class="form-group text-center">
                    <label class="radio-inline"><input type="radio" value="instructor" name="rol" value=""required >Instructor</label>
                    <label class="radio-inline"><input type="radio" value="administrador" name="rol" value=""required >Administrador</label>
                    <label class="radio-inline"><input type="radio" value="coordinador" name="rol" value=""required >Coordinador Academico</label>  
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-login" value="Registrar">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/vendor/overhang.js"></script>
  <script src="js/app.js"></script>

  <script>
    $(function() {
      $('#login-form-link').click(function(e) {
        $("#login-form").delay(299).fadeIn(900);
        $("#register-form").fadeOut(300);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
      });
      $('#register-form-link').click(function(e) {
        $("#register-form").delay(299).fadeIn(900);
        $("#login-form").fadeOut(300);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
      });
    });
</script>

 </body>
 </html>
  