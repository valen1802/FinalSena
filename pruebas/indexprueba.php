<!doctype html>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Almacén Herramientas CDTCI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  body {
        background-color: transparent;
       
    }
  .carousel-inner img {
    width: 100%;
    max-height: 460px;
    }

    .carousel-inner{
     height: 300px;
    }

    .imagenes{
    background-color: #ffffff;
    padding: 5px 10px 5px 10px;
    margin:5px;
    float:left;
    width:200px;
    text-align:center;
    }
    .item {
      display: block;
      width: 100%;
      height: 200px;
    }
    .item img {    
          height: 100%;
          width: 100%;+ // para que es el signo + despues del ;?
          width: 100px;
          height: 300px; //Alto de la imagen "stanley"
          background:;
          transition: width 2s;
          -webkit-transition: width 2s;
     }
     nav.navbar {
    background-color:#e12a2a;
    
    }
    .navbar{
        color: #000000 !important;
    }
  

  .navbar-default  .navbar-brand{
    color:#eeeeee;

  }

   

  </style>

<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!--  -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" 
            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
      <a class="navbar-brand" href="#" >  Almacén Herramientas CDTCI</a>
      
    </div>

     <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-expanded="false"><span class="glyphicon glyphicon-align-justify" style="color:#eeeeee";> Categorías </span>
          </a>


          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Herramientas Construcción</a></li>
            <li><a href="#">Herramientas Maquinaria Pesada</a></li>
            <li><a href="#">Materiales Construcción</a></li>
            <li class="divider"></li>
            <li><a href="#">Subcategoría</a></li>
            <li class="divider"></li>
            <li><a href="#">Consumibles</a></li>
            <li><a href="#">No Consumibles</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-left" role="¿Qué estas buscando?">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="¿Qué estas buscando?">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">

        
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-expanded="false"><span class="glyphicon glyphicon-user" style="color:#eeeeee";>MiCuenta</span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Iniciar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!--  /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <div id="imagenes">
        <img src="imagenes/herramientas.jpg"  alt="" width="230" height="100">
        <div class="carousel-caption">
        </div>
      </div>

  </div>

      <div class="item">
        <div id="imagenes">
        <img src="imagenes/Stanley.jpg" alt="" >
        <div class="carousel-caption">
        
        </div>
      </div>
    </div>

       <div class="item">
        <div id="imagenes">
        <img src="imagenes/stanleyherra.jpg" alt="" width="460" height="400">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</head>


<div class="jumbotron">
  <h3><b>HERRAMIENTAS DESTACADAS</b></h3>      
  <p>Encuentra también <font color="#c10a0a">Herramientas de alta calidad</font></p>
  <img src="imagenes/caja.jpg" width="400" height="200">
  <h4>Carro Caja Organizador Herramienta 
  <p>Ahora puede organizar sus herramientas con nuestra 
  <br>
  utilidad nuevo rodando el carro de la herramienta mecánica </p>
  </h4>
  
</div>

<div class="container">
  <p></p>      
  <p></p>      
</div>

</body>
</html>