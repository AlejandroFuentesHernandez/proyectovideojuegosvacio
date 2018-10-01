<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro de clientes</title>


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

<?php require 'application/views/Plantilla/navbar.php';?>
</head>

<body>

  <!--INICIA APLICACION-->

    <div class="container-fluid">
         <!-- Columna 2-->
        <div class="row" style=" padding-left: 435px;" > 
          <!--PARTE 2-->
            <div class="col-md-6">
                <div class="panel panel-primary"> 
                  <div class="panel-heading"><h1>Agregar Cliente</h1></div>
              <!-- Cuerpo-->
                      <div class="panel-body"> 
                        <form id="gracia" action="<?php echo site_url(); ?>Clientes/RegistroCliente" method="POST">
                            <!------------------ESTO ESTARA OCULTO--------------------------------------
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Id:</label>
                      <input type="text" id="idCte" name="id_cliente" class="form-control">
                    </div>
                  <------------------------------------------------------------------------->

                            <!-- Primer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Nombre del cliente:</label>
                              <input type="text" id="nombre" name="nombre_cliente" class="form-control" required>
                           </div>
                            <!-- Segundo campo-->
                            <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Fecha de nacimiento cliente:</label>
                              <input type="date" id="fecha" onblur="calculaEdad()" name="fecha_nacimiento_cliente" class="form-control" required>
                           </div>
                            <!-- Tercer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Edad de Cliente:</label>
                              <input type="text" id="edad" name="edad_cliente" class="form-control" required>
                           </div>
                             <!-- Cuarto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Número de DUI:</label>
                              <input type="text" id="DUI" name="numero_DUI" class="form-control" required>
                           </div>
                             <!-- Quinto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Número de NIT:</label>
                              <input type="text" id="NIT" name="numero_NIT" class="form-control" required>
                           </div>
                            <!-- Sexto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Estado de Cliente:</label>
                              <select name="estado_cliente">
                                  <option value="Habilitado" class="form-control">Habilitado</option>
                                  <option value="Deshabilitado" class="form-control">Deshabilitado</option>
                              </select>
                              <!--<input type="text" id="estado" name="estado_cliente" class="form-control" required>-->
                           </div>
                            <!-- Sexto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Telefono de cliente:</label>
                              <input type="text" id="telefono" name="telefono_cliente" class="form-control" required>
                           </div>

                           <div class="col-md-12 text-center">
                            <!-- Boton-->
                              <button type="submit" class="btn btn-success">Ingresar Cliente</button>
                          </div><br><br> 
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

    <div class="modal-content">


                       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>

      </div>
     
    </div>
  </div>
</div>
  
  <!--FINALIZA APLICACION-->

  <?php require 'application/views/Plantilla/footer.php' ;?>
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
  function calculaEdad()
{
    var hoy = new Date();
    var nac = new Date(document.getElementById('fecha').value);
    var edad = hoy.getFullYear()-nac.getFullYear();
    document.getElementById('edad').value=edad;
}

</script>

