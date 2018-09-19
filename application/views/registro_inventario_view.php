<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inventario</title>
    <?php include 'url_include.php';?>
</head>
<body>
  <div class="container-fluid">
    <!--Fila 1-->
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Registro de Inventario</h1>
      </div>           
    </div>
         <!-- Fila 2-->
    <div class="row" style=" padding-left: 435px;"> 
          <!--PARTE 2-->
      <div class="col-md-6">
        <div class="panel panel-primary"> 
          <div class="panel-heading">Agregar Inventario</div>
              <!-- Cuerpo-->
          <div class="panel-body"> 
            <form id="formProv" action="<?php echo site_url(); ?>Proveedores/Registrar_inventario" method="POST"> 
              <!-- Primer campo-->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Nombre del juego:</label>
                <select class="form-control" id='nombre_juego' name="nombre_juego" onchange="llenarCantidad()">
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
                <label for="" class="input-group-addon">Precio Venta:</label>
                <input type="text" id="precio_venta" name="precio_venta" class="form-control">
              </div>
              <!-- Quinto campo-->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Fecha de ingreso</label>
                <input type="date" id="correo" name="correo_proveedores" class="form-control">
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
                  <option value=""></option>
                </select>
              </div>
              <div class="col-md-12 text-center">
                <!-- nuevo-->
                <a href="<?php echo site_url();?>Inventario" class="btn btn-primary">Limpiar</a>
                <!-- Boton-->
                <button type="submit" class="btn btn-success">Guardar Inventario</button>
              </div>
            </form>
          </div>   <!-- FIN DEL CUERPO -->          
        </div>  <!-- FIN DEL Panel -->       
      </div> 
    </div>   
  </div> <!-- fin class container-->   
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  llenarProducto();
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
</script>