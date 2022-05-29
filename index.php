<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Gestion de bodega SENA CDTCI</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Fabricate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	 	<link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/overhang.css">
        <link rel="stylesheet" href="css/verificacion.css">

        <style type="text/css">
        	
        	.transparente{
			opacity: 0.7;
			-moz-opacity: 0.8;
			filter: alpha(opacity=80);
			-khtml-opacity: 0.8;
			}
        </style>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/lightbox.css">
	<!-- gallery light box -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <script src="js/vendor/jquery.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/vendor/overhang.js"></script>
		<script src="js/app.js"></script>

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body data-spy="scroll" data-target=".fixed-top">
	<!-- header -->
	<header>
		<!-- navbar -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.html">
				<span>A</span>lmacén Herramientas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
							
						</a>
					</li>
					
				</ul>
			</div>
		</nav>
		<!-- //navbar ends here -->

		<!-- banner -->
		<div class="banner-w3l">
			<div class="container">
				<div class="banner-left-wthree">
					<h5 class="text-white text-capitalize">Bienvenido</h5>
					<h3 class="mt-2 mb-lg-4 mb-sm-3 mb-2 text-white font-weight-bold">SENA CDTCI</h3>
					
			</div>
			</div> <br><br>


			<div class="transparente">
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
		                    <input type="number" name="cedula" id="cedula" tabindex="1" class="form-control" placeholder="Cedula" value="" required pattern="^[letras)*$">
		                  </div>
		                  <div class="form-group">
		                    <input type="password" name="clave" id="password" tabindex="2" class="form-control" placeholder="Password" value="" required pattern="^[password)*$">
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
		                  <!-- comienza el otro formulario-->
						  <form id="register-form" role="form" style="display: none;" method="POST" action="postphp/registroUsu.php">
		                  <div class="form-group">
		                    <input type="text" name="nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre completo" value="" required >
		                  </div>
		                  <div class="form-group">
		                    <input type="number" name="cedula" id="cedula" tabindex="1" class="form-control" placeholder="Cedula" value="" required >
		                  </div>
		                  <div class="form-group">
		                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo Electronico" value="" required >
		                  </div>
		                  <div class="form-group">
		                    <input type="number" name="celular" id="celular" tabindex="1" class="form-control" placeholder="Celular" value="" required  >
		                  </div>
		                  <div class="form-group">
		                    <input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" value="" required >
		                  </div>

		                  <div class="form-group text-center">
						  <label class="radio-inline"><input type="radio" value="bodeguero" name="rol">Bodeguero</label>
                      	  <label class="radio-inline"><input type="radio" value="administrador" name="rol">Administrador</label>
                          
		                  </div> 


		                  <div class="form-group">
		                    <div class="row">
		                      <div class="col-sm-6 col-sm-offset-3">
		                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-login" value="Registrar">
		                      </div>
		                    </div>
		                  </div>
		                </form>
		                <div class="clearfix"></div>
		                  <hr>
		                  <div class="btn-links">
		                      <a href="#" class ="alert" id="">Olvidaste tu contraseña?</a>
		                  </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>

		</div>




					 <!-- Formularios de inrgeso/registro -->
		  

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

					
				</div>
			</div>
		</div>
		<!-- //banner -->
	</header>
	
</body>

</html>