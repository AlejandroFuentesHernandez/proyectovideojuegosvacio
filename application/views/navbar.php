  
<!--INICIA DE NAVBAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><b>Game Store</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url(); ?>index"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
          <li><a href="#">Mostrar Usuario</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Empleados <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>add-empleado">Ingresar Empleado</a></li>
          <li><a href="#">Mostrar Empleado</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Proveedores<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>proveedores">Nuevo Proveedor</a></li>
          <li><a href="#">Mostrar Proveedor</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>add-cliente">Cliente Nuevo</a></li>
          <li><a href="#">Ver Clientes</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Compras<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>add-compra">Nueva Compra</a></li>
          <li><a href="#">Mostrar Compra</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tiendas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url(); ?>tiendas">Crear Nueva Tienda</a></li>
          <li><a href="#">Mostrar Sucursales</a></li>
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