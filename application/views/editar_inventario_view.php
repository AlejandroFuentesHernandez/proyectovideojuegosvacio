<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Inventario</title>
    <?php include 'url_include.php';?>
</head>
<body>
  <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ESTAMOS EN MANTENIMIENTO NO CHINGUE</a>
            </div>
           
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
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
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



<!-- INICIO MODAL EN EL SE PODRA EDITAR EL INVENTARIO-->
<div id="page-wrapper">
    <div class="modal fade" data-backdrop="static"  id="inventario"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document"> <!-- Establece el ancho y el margen del modal-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Editar Inventario</h4>
                    
                </div>
                <div class="modal-body">
                    
                        <!-- Fila 2-->
                        <div class="row"> 
                              <!--PARTE 2-->
                          <div class="col-md-12">
                            <div class="panel panel-primary"> 
                              <div class="panel-heading">Editar Inventario</div>
                                  <!-- Cuerpo-->
                              <div class="panel-body"> 
                                <form id="formInventario" action="<?php echo base_url();?>Inventario/modificar" method="POST"> 
                                <?php foreach ($idi_inv as $item) { ?> 
                                  <!-- Primer campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <!---ID-->
                                    <input type="hidden" name="id_inventario" value="<?php echo $item['id_inventario'];?>"/>   
                                    <label for="" class="input-group-addon">Nombre del juego:</label>
                                    <select class="form-control" id='nombre_juego' name="nombre_juego" onchange="llenarCantidad()&llenarPrecio()" >
                                    </select>
                                  </div>         
                                  <!-- Segundo campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon">Cantidad Existente:</label>
                                    <input type="number" min="1" id="cantidad_existente" name="cantidad_existente" class="form-control" readonly="readonly" value="<?=$item['cantidad_existente'];?>">
                                  </div>                              
                                  <!-- Tercero campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon">Stock minimo:</label>
                                    <input type="number" min="1" id="stock_minimo" name="stock_minimo" class="form-control" value="<?=$item['stock_minimo'];?>">
                                  </div>
                                  <!-- Cuarto campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon">Precio compra:</label>
                                    <input type="text" id="precio_compra" name="precio_compra" class="form-control">
                                  </div>

                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon">Porcentaje de ganancia:</label>
                                    <input type="number" min="0" max="1" step="0.01" id="porcentaje" name="porcentaje" class="form-control" onblur="operacion()" >
                                  </div>

                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon">Precio Venta:</label>
                                    <input type="text" id="precio_venta" name="precio_venta" class="form-control" value="<?=$item['precio_venta'];?>">
                                  </div>
                                  <!-- Quinto campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon">Fecha de ingreso</label>
                                    <input type="date" id="fecha_ingreso" name="fecha_ingreso" class="form-control" value="<?=$item['fecha_ingreso'];?>" >
                                  </div>
                                  <!-- sexto campo-->
                                   <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon">Estado:</label>
                                    <select class="form-control" id="estado_inventario" name="estado_inventario">
                                      
                                	<?php if($item['estado_inventario']=='Habilitado'){?>
                                  	<option value="Habilitado" class="form-control" selected="true">Habilitado</option>
                                  	<option value="Deshabilitado" class="form-control">Deshabilitado</option>
                                	<?php }else{?>
                                 	<option value="Habilitado" class="form-control" >Habilitado</option>
                                 	<option value="Deshabilitado" class="form-control" selected="true">Deshabilitado</option>
    
                               		 <?php }?>
                                    </select>
                                  </div>
                                  <!-- septimo campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon">Tienda:</label>
                                    <select class="form-control" id="tienda" name="tienda">
                                    </select>
                                  </div>
                                  <div class="col-md-12 text-center">
                                    
                                    <!-- Boton-->
                                    <button type="submit" class="btn btn-success">Guardar Inventario</button>
                                  </div>
                                </form>
                                   <?php }?>
                              </div>   <!-- FIN DEL CUERPO -->          
                            </div>  <!-- FIN DEL Panel -->       
                          </div> 
                        </div>   
                       
                       
                </div>
                <div class="modal-footer">
                	<a href="<?php echo base_url();?>Inventario/mostrar" class="btn btn-secondary">Close</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- /#wrapper -->



      <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  llenarProducto();
  llenartienda();
  $('#inventario').modal("show");

 
});
 

function llenarProducto()
{
  $.ajax({
    type:"POST",
    url:"<?php echo site_url();?>Inventario/cargarjuego",
    success: function(data)
    {
      $('#nombre_juego').html('');
      $('#nombre_juego').html(data);
    }
  });
}

function llenarCantidad()
{
  var id=$('#nombre_juego').val();
  $.ajax({
    type:"POST",
    url:"<?php echo site_url();?>Inventario/cargar_existencia",
    data:'id='+id,
    success: function(data)
    {
      $('#cantidad_existente').val(data);
    }
  });
}

function llenartienda()
{
  $.ajax({
    type:"POST",
    url:"<?php echo site_url();?>Inventario/cargartienda",
    success: function(data)
    {
      $('#tienda').html('');
      $('#tienda').html(data);
    }
  });
} 

function llenarPrecio()
{
  var id=$('#nombre_juego').val();
  $.ajax({
    type:"POST",
    url:"<?php echo site_url();?>Inventario/cargar_precio",
    data:'id='+id,
    success: function(data)
    {
      $('#precio_compra').val(data);
    }
  });
}

function operacion()
{
    var precio_compra=parseFloat($('#precio_compra').val());
    var porcentaje=$('#porcentaje').val();
    var precio_venta=(precio_compra*porcentaje)+precio_compra;
    $('#precio_venta').val(precio_venta);
}


</script>