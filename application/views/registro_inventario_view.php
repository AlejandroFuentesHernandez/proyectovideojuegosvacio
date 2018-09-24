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
  </div> <!-- fin class container-->   
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  llenarProducto();
  llenartienda();
 
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

function guardar(){
    $.ajax({
      type:"POST",
      url:'<?php echo site_url();?>Inventario/Registrar_inventario', 
      data: $('#formInventario').serialize(),
      success: function(data)
      {
        if(data==1){
          swal("Datos ingresados exitosamente",'Excelente','success'); 
        }

        else{
           swal("No se pudieron ingresar datos"); 
        }
      }
    });
  }

</script>