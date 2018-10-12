<!DOCTYPE html>
<html lang="en">
<head>
  <title>Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
  
<!--INICIA DE NAVBAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" ><b>Game Store</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url(); ?>index"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a>
          <ul class="dropdown-menu">
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Cerrar Sesión</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--FIN DE NAVBAR-->

    <!--INICIA PANEL DE MENU-->
     
  <div class="col-sm-2 sidenav">
      <ul class="nav nav-pills nav-stacked">
      <li class="active"><a href="<?php echo site_url(); ?>inicio">Inicio</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuario <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>add-usuario">Crear Usuario</a></li>
          <li><a href="<?php echo site_url();?>view-usuario">Mostrar Usuario</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Empleados <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>add-empleado">Ingresar Empleado</a></li>
          <li><a href="<?php echo site_url(); ?>view-empleado">Mostrar Empleado</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Proveedores<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>proveedores">Nuevo Proveedor</a></li>
          <li><a href="<?php echo site_url(); ?>view-proveedores">Mostrar Proveedor</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ventas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>ventas">Nueva Venta</a></li>
          <li><a href="#">Visualizar Ventas</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>add-cliente">Cliente Nuevo</a></li>
          <li><a href="<?php echo site_url(); ?>view-clientes">Ver Clientes</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Compras<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>add-compra">Nueva Compra</a></li>
          <li><a href="<?php echo site_url(); ?>view-compra">Mostrar Compra</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tiendas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>tiendas">Crear Nueva Tienda</a></li>
          <li><a href="<?php echo site_url(); ?>view-tienda">Mostrar Sucursales</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Inventario<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>inventario">Registro de Inventarios</a></li>
          <li><a href="<?php echo site_url(); ?>view-inventario">Visualizar Inventario</a></li>
        </ul>
      </li>

      </ul><br>
  </div>
  <!--FINALIZA PANEL DE MENU-->

  <!--INICIO DE COROUSEL-->
<div class="row">
  <div class="col-md-9">
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
        <img src="https://media.metrolatam.com/2018/05/11/godofwar20180511130512-cde2efe5a75a529df7595f67ddb372e8-1200x600.jpg" alt="Image" class="img-responsive">
        <div class="carousel-caption">
          <h3><b>Good of War</b></h3>
          <p>$45.00</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://media.metrolatam.com/2018/08/12/fortniteandroid02-5fae0106e5a8b723bd8bd5ec4a47f378-1200x600.jpg" alt="Image" class="img-responsive">
        <div class="carousel-caption">
          <h3><b>Fortnite</b></h3>
          <p>$55.00</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://cdn.gamer-network.net/2013/articles/1/7/9/0/5/4/4/gran-turismo-sport-is-not-gran-turismo-7-1446030751952.jpg/EG11/thumbnail/1200x600/format/jpg/1790544.jpg" alt="Image" class="img-responsive">
        <div class="carousel-caption">
          <h3><b>Gran Turismo</b></h3>
          <p>$45.00</p>
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
</div>
  <!--FIN DE COROUSEL-->

  <!--Inicio de imagenes finales-->
<div class="row">
<div class="container text-center"><br>   
  
  <div class="row">
    <div class="col-sm-6">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRrP7iGqYs3WJBoNVCuK1mxlF2jIu3HvfK5QXVycjir_WC9GoDVA" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-6"> 
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk45leZv2PQbcnW4PBoLQvPndC313gCxsXS9m7xABhmu7FMsK3Iw" class="img-responsive" style="width:100%" alt="Image">
      
    </div>
  </div>
</div><br>
</div>
<!--Fin de imagenes finales-->

<footer class="container-fluid text-center">
  <p>&copy; Derechos Reservados, 2018</p>
</footer>

</body>
</html>
