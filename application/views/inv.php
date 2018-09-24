<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ni le ocre</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo site_url();?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo site_url();?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo site_url();?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url();?>dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo site_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Barra de Navegacion -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0"> <!--navbar-fixed-top, sirve para tener una barrar de navegacion estatitca-->
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin World of V-Games</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url(); ?>index"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url(); ?>inicio"><i class="fa fa-home fa-fw"></i> Início </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url(); ?>add-usuario">Crear Usuario</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-user fa-fw"></i> Empleados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url(); ?>add-empleado">Ingresar Empleado</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-shopping-cart  fa-fw"></i>Proveedores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url(); ?>proveedores">Ingresar Proveedor</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url(); ?>add-cliente">Ingresar Cliente</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-credit-card  fa-fw"></i> Compras<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url(); ?>add-compra">Realizar Compra</a>
                                </li>
                                <li>
                                    <a href="buttons.html"></a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Tiendas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url(); ?>tiendas">Crear Sucursales</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Inventario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url(); ?>inventario">Registro Inventario</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url(); ?>view-inventario">Mostrar Inventario</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<!--ESTO ES EL ESPACIO PARA MOSTRAR EN PANTALLA-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
    <!--Fila 1-->
     <!-- Fila 2-->
    <div class="row" > 
          <!--PARTE 2-->
      <div class="col-md-6">
        <div class="panel panel-primary"> 
          <div class="panel-heading">Agregar Inventario</div>
              <!-- Cuerpo-->
          <div class="panel-body"> 
            <form id="formInventario" action="" method="POST"> 
              <!-- Primer campo-->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Nombre del juego:</label>
                <select class="form-control" id='nombre_juego' name="nombre_juego" onchange="llenarCantidad()&llenarPrecio()" >
                </select>
              </div>         
              <!-- Segundo campo-->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Cantidad Existente:</label>
                <input type="number" min="1" id="cantidad_existente" name="cantidad_existente" class="form-control" readonly="readonly">
              </div>                              
              <!-- Tercero campo-->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Stock minimo:</label>
                <input type="number" min="1" id="stock_minimo" name="stock_minimo" class="form-control">
              </div>
              <!-- Cuarto campo-->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Precio compra:</label>
                <input type="text" id="precio_compra" name="precio_compra" class="form-control">
              </div>

              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Porcentaje de ganancia:</label>
                <input type="number" min="0" max="1" step="0.01" id="porcentaje" name="porcentaje" class="form-control" onblur="operacion()">
              </div>

              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Precio Venta:</label>
                <input type="text" id="precio_venta" name="precio_venta" class="form-control">
              </div>
              <!-- Quinto campo-->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Fecha de ingreso</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" class="form-control">
              </div>
              <!-- sexto campo-->
               <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Estado:</label>
                <select class="form-control" id="estado_inventario" name="estado_inventario">
                  <option value=""></option>
                  <option value="Habilitado">Habilitado</option>
                  <option value="Deshabilitado">Deshabilitado</option>
                </select>
              </div>
              <!-- septimo campo-->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Tienda:</label>
                <select class="form-control" id="tienda" name="tienda">
                </select>
              </div>
              <div class="col-md-12 text-center">
                <!-- nuevo-->
                <a href="<?php echo site_url();?>Inventario" class="btn btn-primary">Limpiar</a>
                <!-- Boton-->
                <button type="button" onclick="guardar()"class="btn btn-success">Guardar Inventario</button>
              </div>
            </form>
          </div>   <!-- FIN DEL CUERPO -->          
        </div>  <!-- FIN DEL Panel -->       
      </div> 
    </div>   
  
        </div>
        <!-- /#page-wrapper -->
        <!-- /AQUI TERMINA LO QUE SE MUESTRA -->

    </div>
    <!-- /#wrapper -->






    <!-- jQuery -->
    <script src="<?php echo site_url();?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url();?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo site_url();?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo site_url();?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo site_url();?>vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url();?>dist/js/sb-admin-2.js"></script>

  

</body>

</html>

  
    <script>
    $(document).ready(function() {
        //Page-Level Demo Scripts - Tables - Use for reference 
        $('#dataTables-example').DataTable({
            responsive: true,
            "language": {
                "url": "js/lenguaje.js"
            }
             
        });
    });
    </script>