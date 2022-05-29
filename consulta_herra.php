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
			opacity: 0.9;
			-moz-opacity: 0.8;
			filter: alpha(opacity=80);
			-khtml-opacity: 0.9;
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
			<a class="navbar-brand" href="administrador.php">
				<span>A</span>lmacén Herramientas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
				</button>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto text-center mr-lg-5">
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link scroll" href="herramientas.php">Crear Herramientas 
						</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link scroll" href="consulta_herra.php">Consulta Herramientas</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link scroll" href="trazabilidadp.php">Trazabilidad Prestamo</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link scroll" href="trazabilidadcat.php">Trazabilidad Categorías</a>
					</li>
					
				</ul>
			</div>
		</nav>
		<!-- //navbar ends here -->

		<!-- banner -->
	
	
		<div class="banner-w3l">
			 <br><br>
<br> <br> <br><br> <br> <br> <br>
<div class="transparente">
			<div class="container">
		    <div class="row">
		      <div class="col-md-6 col-md-offset-3">
			  <div class="panel panel-login">
		          <div class="panel-heading">
				  <div class="row">
		              <div class="col-xs-6"> 
		                <span class="glyphicon glyphicon-list"></span><a href="#" class="active" id="login-form-link">Consulta Herramienta</a>
						<br>
						<br>
						<img src="imagenes/consultar.png" widht="100" height="100"> 
		              
				  <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header"></legend>

                        
                         <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="glyphicon glyphicon-asterisk"></i></span>
                          <div class="col-md-8">
                            <label><h4>Nombre Herramienta<h4></label>
                            <input name="nombre_herramienta" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-offset-4 ">
                                <button type="submit" class="form-control btn btn-login" name="Consultar">Consultar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php
if (isset($_POST["Consultar"])) {
 ?>
   <div class="panel panel-default">
        
        <div class="panel-heading"><h2>Lista</h2></div>
        <table class="table">
          <thead>
            <tr>
              <th><h3>Nombre Herramienta</h3></th>
            </tr>
          </thead>
          <tbody>
            <?php
            
              include"conexion.php";
              $nombre_herramienta= $_POST["nombre_herramienta"];
              $sql = "SELECT * from herramienta
              where nombre_herramienta = \"$nombre_herramienta\" ";
              $query = $con->query($sql);
              foreach($query as $row){
              ?>
              <tr>
                <td><?php echo $row["nombre_herramienta"]; ?></td>
                
                
              </tr>
              <?php
            }
          }
            ?>
			</tbody>
        </table>
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

					
				</div>
			</div>
		</div>
		<!-- //banner -->
	</header>	
</body>

</html>


