<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Venta</title>
    <?php include 'url_include.php';?>
</head>
<body>
  <div class="container-fluid">
         <!-- Fila 1-->
    <div class="row"  style=" padding-left: 435px;"> 
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading"><h1>Registro de Ventas</h1>
            </div>
            <!-- Cuerpo-->
            <div class="panel-body"> 
              <form id="formVentas" action="" method="POST">
                <!-- Primer campo-->
                <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon">Nombre del juego:</label>
                    <select class="form-control" id='nombre_juego' name="nombre_juego" onchange="llenarPrecio()">
                    </select>
                </div> 
                 <!-- Segundo  campo-->
                <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon">Número de Factura:</label>
                    <input type="number" min="0" id="numero_factura" name="numero_factura" class="form-control">
              
                </div>
                 <!-- Tercero campo-->
                 <div class="col-md-12 form-group input-group">
                 <label for="" class="input-group-addon">Estado de Factura</label>
                  <select class="form-control" id="estado_factura" name="estado_factura">
                    <option value=""></option>
                    <option value="Habilitado">Habilitado</option>
                    <option value="Deshabilitado">Deshabilitado</option>
                  </select>
                </div>
                <!-- Cuarto campo-->
                <div class="col-md-12 form-group input-group">
                  <label for="" class="input-group-addon">Fecha de venta</label>
                  <input type="date" id="fecha_venta" name="fecha_venta" class="form-control">
                </div>
                <!-- Quinto campo-->
                <div class="col-md-12 form-group input-group">
                  <label for="" class="input-group-addon">Tipo de Pago:</label>
                  <select class="form-control" id="tipo_pago" name="tipo_pago">
                    <option value=""></option>
                    <option value="Efectio">Efectivo</option>
                    <option value="Tarjeta de credito">Tarjeta de credito</option>
                  </select>
                </div>
                <!-- Quinto campo-->
                <div class="col-md-12 form-group input-group">
                  <label for="" class="input-group-addon">Precio de venta:</label>
                   <input type="text" id="precio_venta" name="precio_venta" class="form-control">
                </div>
                <!-- Sexto campo-->
                <div class="col-md-12 form-group input-group">
                  <label for="" class="input-group-addon">Cantidad de Producto:</label>
                  <input type="number" min="1" id="cantidad_producto" name="cantidad_producto" class="form-control">
                </div>
                <!-- Septimo campo-->
                <div class="col-md-12 form-group input-group">
                  <label for="" class="input-group-addon">Total Factura:</label>
                  <input type="text" id="   total_factura" name="total_factura" class="form-control">
                </div>
                <!-- Octavo campo-->
                <div class="col-md-12 form-group input-group">
                  <label for="" class="input-group-addon">Observaciones:</label>
                  <textarea id="observaciones_factura" name="observaciones_factura" class="form-control"></textarea>
                  
                </div>
                <!-- Noveno campo-->
                <div class="col-md-12 form-group input-group">
                  <label for="" class="input-group-addon">Cliente:</label>
                  <select class="form-control" id='id_cliente' name="id_cliente">
                  </select>
                  
                </div>
                <!--Botones-->
                <div class="col-md-12 text-center">
                  <button type="button" onclick="guardar()" class="btn btn-success">Guardar</button>
                </div>

              </form>
            </div> <!--PAneel Body-->



          </div>  <!-- Panel--> 
            
        </div>   <!-- col-->  
    </div>   <!-- row-->
  </div> <!-- fin class container-->   
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  llenarProducto();
  llenarcliente();
  $('#nombre_juego').select2();
   
});

function llenarProducto()
{
  $.ajax({
    type:"POST",
    url:"<?php echo site_url();?>Venta/cargarjuego",
    success: function(data)
    {
      $('#nombre_juego').html('');
      $('#nombre_juego').html(data);
    }
  });
}

function llenarcliente()
{
  $.ajax({
    type:"POST",
    url:"<?php echo site_url();?>Venta/cargarcliente",
    success: function(data)
    {
      $('id_cliente').html('');
      $('#id_cliente').html(data);
    }
  });
}

function llenarPrecio()
{
  var id=$('#nombre_juego').val();
  $.ajax({
    type:"POST",
    url:"<?php  echo site_url();?>Venta/cargar_precio",
    data:'id='+id,
    success: function(data)
    {
      $('#precio_venta').val(data);
    }
  });
}


function guardar(){
    $.ajax({
      type:"POST",
      url:'<?php echo site_url();?>Venta/Registrar_venta', 
      data: $('#formVentas').serialize(),
      success: function(data)
      {
        if(data==1){
          swal("Datos ingresados exitosamente",'Excelente','success'); 
        }

        if(data==0){
           swal("No se pudieron ingresar datos"); 
        }
      }
    });
  }

</script>