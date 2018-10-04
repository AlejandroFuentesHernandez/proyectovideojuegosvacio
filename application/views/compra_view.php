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

    <div class="container-fluid">
         <!-- Columna 2-->
        <div class="row" style=" padding-left: 435px;" > 
          <!--PARTE 2-->
            <div class="col-md-6">
                <div class="panel panel-primary"> 
                  <div class="panel-heading"><h1>Registrar Compra</h1></div>
              <!-- Cuerpo-->
                      <div class="panel-body"> 
                        <form id="gracia" action="<?php echo site_url(); ?>/Compra/RegistroCompra" method="POST">
                            <div class="col-md-12 form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
                                <label for="" class="input-group-addon"> Seleccionar Proveedor:</label>
                                <select class="form-control" id='nombre_empresa' name="nombre_empresa">
                                </select>
                            </div>    

                            <!-- Primer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Codigo de juego:</label>
                              <input type="text" id="codigo" name="codigo_juego" class="form-control" required>
                           </div>
                           <!-- Segundo campo-->
                            <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Nombre de juego:</label>
                              <input type="text" id="nombre" name="nombre_juego" class="form-control" required>
                           </div>
                            <!-- Tercer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Cantidad producto:</label>
                              <input type="text" id="cantidad"  name="cantidad_juego" class="form-control" required>
                           </div>
                            <!-- Cuarto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Fecha de compra:</label>
                              <input type="date" id="fecha" name="fecha_compra" class="form-control" required>
                           </div>
                            <!-- Quinto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Precio Unitario de Compra:</label>
                              <input type="text" id="precio" onblur="operacion()" name="precio_unitario_compra" class="form-control" required>
                           </div>
                           
                            <!-- Sexto campo-->
                          <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Total de compra:</label>
                              <input type="text" id="total" name="total_compra" class="form-control" required>
                           </div>

                           <div class="col-md-12 text-center">
                            <!-- Boton-->
                              <button type="submit" class="btn btn-success">Realizar compra</button>
                          </div><br> 
                        </form>
                    </div> <!--Fin del cuerpo-->
                </div>
            </div>
        </div>
    </div> <!-- fin class container-->
    <hr>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="6" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
     
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

<script type="text/javascript">
  $(document).ready(function()
{
 llenarCliente();
});

  function operacion()
{
    var uno=parseInt($('#cantidad').val());
    var dos=$('#precio').val();
    var multi=uno*dos;
    $('#total').val(multi);
}

function llenarCliente()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Compra/cliente',
    success: function(data)
    {
      $('#nombre_empresa').html('');
      $('#nombre_empresa').html(data);
    }

  });
}
</script>