<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modificar Compras</title>
      <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <!-- Bootstrap CDN -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body style="padding: 20px">
    <div class="container-fluid " style="padding-right: 50px; padding-left: 50px; padding-top: 50px; padding-bottom: 50px;">
        <!--columna 1-->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Modificar  Compra</h1>
            </div>
        </div>
         <!-- Columna 2-->
        <div class="row" style=" padding-left: 400px;" > 
          <!--PARTE 2-->
            <div class="col-md-6">
                <div class="panel panel-defaul"> 
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
                              <button type="submit" class="btn btn-success">Actualizar Compra</button>
                          </div><br><br> 
                        </form>
                  <?php  } ?>
                    
                    </div> <!--Fin del cuerpo-->
                </div>
            </div>
        </div>
    </div> <!-- fin class container-->


</body>
</html>

<script>
    $('#exampleModalLong').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    });
</script>


</body>
</html>
<script type="text/javascript">

  function operacion()
{
    var uno=parseInt($('#cantidad').val());
    var dos=parseInt($('#precio').val());
    var multi=uno*dos;
    $('#total').val(multi);
}

</script>

