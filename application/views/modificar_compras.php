<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modificar Compras</title>
</head>
<body>

<!-- INICIO MODAL EN EL SE PODRA EDITAR CLIENTES-->
<div class="modal fade" data-backdrop="static"  id="modificar_compra"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document"> <!-- Establece el ancho y el margen del modal-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary"> 
              <div class="panel-heading">Modificar Compras</div>
              <div class="panel-body">
              <form id="gracia" action="<?php echo site_url(); ?>/Compra/modificar" method="POST">
                            <!------------------ESTO ESTARA OCULTO--------------------------------------
                            <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Id:</label>
                              <input type="text" id="idCte" name="id_cliente" class="form-control">
                            </div>
                          <------------------------------------------------------------------------->
                          <?php foreach ($variable as $item) { ?>

                             <input type="hidden" id="id" name="id_compra" class="form-control" value="<?php echo $item['id_compra'];?>">
                          <!-- Primer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Codigo de juego:</label>
                              <input type="text" id="codigo" name="codigo_juego" class="form-control" value="<?php echo $item['codigo_juego'];?>" required>
                           </div>
                           <!-- Segundo campo-->
                            <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Nombre de juego:</label>
                              <input type="text" id="nombre" name="nombre_juego" class="form-control" value="<?php echo $item['nombre_juego'];?>"  required>
                           </div>
                            <!-- Tercer campo-->
                            <div class="col-md-12 form-group input-group">
                               <label for="" class="input-group-addon"> Cantidad producto:</label>
                              <input type="text" id="cantidad" name="cantidad_juego" class="form-control"  value="<?php echo $item['fecha_compra'];?>" required>
                           </div>
                           <!-- Cuarto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Fecha de compra:</label>
                              <input type="date" id="fecha" name="fecha_compra" class="form-control"  value="<?php echo $item['fecha_compra'];?>" required>
                           </div>
                             <!-- Quinto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Precio Unitario de Compra:</label>
                              <input type="text" id="precio" onblur="operacion()" name="precio_unitario_compra" class="form-control"  value="<?php echo $item['precio_unitario_compra'];?>" required>
                           </div>
                            <!-- Sexto campo--> 
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Total de compra:</label>
                              <input type="text" id="total"  name="total_compra" class="form-control"  value="<?php echo $item['total_compra'];?>" required>
                           </div>
                           <div class="col-md-12 text-center">
                            <!-- Boton-->
                              <button type="submit" class="btn btn-success">Guardar Datos</button>
                          </div><br><br> 
                        </form>
                  <?php  } ?> 

              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url(); ?>Compra/mostrar" class="btn btn-danger">Cerrar</a>
        </div>
      </div> 
    </div>
  </div> 
               
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#modificar_compra').modal("show");

  });

  function operacion()
{
    var uno=parseInt($('#cantidad').val());
    var dos=parseInt($('#precio').val());
    var multi=uno*dos;
    $('#total').val(multi);
}

</script>

