<!DOCTYPE html>
<html>
<head>
	<title>Novedades </title>
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
		body{
			margin:0;
			padding: 0;
			background-color: #f1f1f1;
            background: url(imagenes/bg2.jpg);
		}

        .transparente{
			opacity: 0.9;
			-moz-opacity: 0.8;
			filter: alpha(opacity=80);
			-khtml-opacity: 0.9;
			}

		.box{
			width: 750px;
			padding: 20px;
			background-color: #fff;
			border:1px solid #ccc;
			border-radius: 5px;
			margin-top: 100px;
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
			<a class="navbar-brand" href="bodeguero.php">
				<span>A</span>lmacén Herramientas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
				</button>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto text-center mr-lg-5">
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                    <a class="nav-link scroll" href="Herramientasprestadas.php">Herramientas Prestadas</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link scroll" href="instructores.php">Instructores</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link scroll" href="fichas.php">Fichas</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link scroll" href="novedades.php">Novedades</a>
					</li>
					<li class="nav-item">
						<a class="nav-link scroll" href="index.php">Salir</a>
					</li>
					
				</ul>
			</div>
		</nav>

        <div class="banner-w3l">
			 <br><br>

<div class="transparente">
	<div class="container box">
		<h3 align="center">Novedades Herramientas</h3>
		<br><br>
		<br><br>
		<h4><label>Asunto</label></h4>
		<input type="text" name="asunto" id="asunto" class="form-control"><br>
		<h4><label>Descripción</label></h4>
		<input type="text" name="descripcion" id="descripcion" class="form-control"><br><br>
		<h4><label>Cédula Bodeguero</label><h4>
		<input type="number" name="cedula_bodeguero" id="cedula_bodeguero" class="form-control"><br>
		<h4><label>Código Herramienta</label><h4>
		<input type="text" name="cod_herramienta" id="cod_herramienta" class="form-control"><br>
		<h4><label>Cantidad</label><h4>
		<input type="number" name="cantidad" id="cantidad" class="form-control"><br>

  			
		<input type="hidden" name="id_novedad" id="id_novedad">
		<center><button type="button" name="action" id="action" class="btn btn-info btn-lg">AGREGAR</button></center> 		
		</div>
		<br>
		<br>
		<br>
		<div id="result" class="table-responsive">
			
		</div>
	</div>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		fetchNovedad();
		function fetchNovedad()
		{
			var action="select";
			$.ajax({
				url: "select.php",
				method: "POST",
				data:{action:action},
				success:function(data){
					$('#asunto').val('');
					$('#descripcion').val('');
					$('#cedula_bodeguero').val('');
					$('#cod_herramienta').val('');
					$('#cantidad').val('');
					$('#action').text("Agregar");
					$('#result').html(data);
				}
			});
		}
		$('#action').click(function(){
			var asunto 			= $('#asunto').val();
			var descripcion 			= $('#descripcion').val();
			var cedula_bodeguero 		= $('#cedula_bodeguero').val();
			var cod_herramienta 		= $('#cod_herramienta').val();
			var cantidad                = $('#cantidad').val();
			var id_novedad 					= $('#id_novedad').val();			
			var action 				= $('#action').text();
			if(asunto != '' && descripcion != '')
			{
				$.ajax({
					url : "action.php",
					method:"POST",
					data:{asunto:asunto, descripcion:descripcion, cedula_bodeguero:cedula_bodeguero, cod_herramienta:cod_herramienta, cantidad:cantidad, id_novedad:id_novedad, action:action},
					success:function(data){
						alert(data);
						fetchNovedad();
					}
				});				
			}
			else
			{  
				alert("Both Fields are Required");
			}
		  });
		$(document).on('click', '.update', function(){ 
			var id_novedad = $(this).attr("id_novedad");
			$.ajax({

				url:"fetch.php",
				method:"POST",
				data:{id_novedad:id_novedad},
				dataType:"json",
				success:function(data){
					$('#action').text("Edit");
					$('#id_novedad').val(id_novedad);
					$('#asunto').val(data.asunto);
					$('#descripcion').val(data.descripcion);
					$('#cedula_bodeguero').val(data.cedula_bodeguero);
					$('#cod_herramienta').val(data.cod_herramienta);
					$('#cantidad').val(data.cantidad);
					
			}
		})
	});

	$(document).on('click', '.delete', function(){
		var id_novedad = $(this).attr("id_novedad");
		if(confirm("Are you sure you want to remove this data?"))
		{
			var action = "Delete";
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{id_novedad:id_novedad, action:action},
				success:function(data)
				{ 
					fetchNovedad();
					alert(data);
		 		}
			})
  		}
		else
		{
			return false;
		 }
	 
	});
});
</script>