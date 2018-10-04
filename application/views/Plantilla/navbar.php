  
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
        <li><a href="<?php echo site_url(); ?>index"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
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
          <li><a href="<?php echo site_url(); ?>venta">Nueva Venta</a></li>
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

