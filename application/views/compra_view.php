<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro de compras</title>
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
                <h1>Registro de compras</h1>
            </div>
        </div>
         <!-- Columna 2-->
        <div class="row" style=" padding-left: 400px;" > 
          <!--PARTE 2-->
            <div class="col-md-6">
                <div class="panel panel-defaul"> 
                      <div class="panel-body"> 
                        <form id="gracia" action="<?php echo site_url(); ?>/Compra/RegistroCompra" method="POST">
                            <!------------------ESTO ESTARA OCULTO--------------------------------------
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Id:</label>
                      <input type="text" id="idCompra" name="id_compra" class="form-control">
                    </div>
                  <------------------------------------------------------------------------->

                            <!-- Primer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Codigo de juego:</label>
                              <input type="text" id="codigo" name="codigo_juego" class="form-control" required>
                           </div>
                           <!-- Segundo campo-->
                            <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Nombre de juego:</label>
                              <input type="date" id="nombre" name="nombre_juego" class="form-control" required>
                           </div>
                            <!-- Tercer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Cantidad producto:</label>
                              <input type="text" id="cantidad" name="cantidad_juego" class="form-control" required>
                           </div>
                            <!-- Cuarto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Fecha de compra:</label>
                              <input type="text" id="fecha" name="fecha_compra" class="form-control" required>
                           </div>
                            <!-- Quinto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Precio Unitario de Compra:</label>
                              <input type="text" id="precio" name="precio_unitario_compra" class="form-control" required>
                           </div>
                           </div>
                            <!-- Sexto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Total de compra:</label>
                              <input type="text" id="total" name="total_compra" class="form-control" required>
                           </div>
                           <div class="col-md-12 text-center">
                            <!-- Boton-->
                              <button type="submit" class="btn btn-success">Realizar compra</button>
                          </div><br><br>
                          <div class="col-md-12 text-center">
                            <!-- Button trigger modal -->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> Visualizar Compras 
                              </button>
                            </div> 
                        </form>
                    </div> <!--Fin del cuerpo-->
                </div>
            </div>
        </div>
    </div> <!-- fin class container-->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="6" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Compras</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

         <!-- TABLA PARA MOSTRAR DATOS-->
                       <table border="solid" class="text-center">
                         <thead>
                            <tr>
                                <th>Codigo de juego</th>
                                <th>Nombre de juego</th>
                                <th>Cantidad producto</th>
                                <th>Fecha de compra</th> 
                                <th>Precio U.Compra</th>
                                <th>Total de compra</th>
                               <!-- <th>Eliminar</th>-->
                                <th>Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dcompra as $dc):?>
 
                            <tr>
                                <!-- <td><input type="radio" name="editar" value="<?=$u->id_compra?>"/></td> -->
                                <td><?=$dc->codigo_juego?></td>
                                <td><?=$dc->nombre_juego?></td>
                                <td><?=$dc->cantidad_juego?></td>
                                <td><?=$dc->fecha_compra?></td>
                                <td><?=$dc->precio_unitario_compra?></td>
                                <td><?=$dc->total_compra?></td>
                                <!--<td><a href="<?php echo base_url(); ?>Compra/eliminar?id=<?php echo $dc->id_compra;?>">Eliminar</a></td>-->
                                <td><a href="<?php echo base_url(); ?>Compra/editar?id=<?php echo $dc->id_compra;?>">Modificar</a></td>
                            </tr>
             
                            <?php endforeach;?>
                        </tbody>
                      </table>

                       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>

      </div>
     
    </div>
  </div>
</div>
</body>
</html>

<script>
    $('#exampleModalLong').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    });
</script>


</body>
</html>
