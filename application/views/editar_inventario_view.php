<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <title>Inventario</title>
    <?php include 'url_include.php';?>
    <?php require 'application/views/Plantilla/navbar.php';?>

</head>
<body>
  

<!-- INICIO MODAL EN EL SE PODRA EDITAR EL INVENTARIO-->
<div id="page-wrapper">
    <div class="modal fade" data-backdrop="static"  id="inventario"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document"> <!-- Establece el ancho y el margen del modal-->
            <div class="modal-content">
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
                                <input type="number" min="0" max="1" step="0.01" id="porcentaje" name="porcentaje" class="form-control" value="<?=$item['porcentaje_ganancia'];?>" onblur="operacion()" >
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
<hr>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>


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