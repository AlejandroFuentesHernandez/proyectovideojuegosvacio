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