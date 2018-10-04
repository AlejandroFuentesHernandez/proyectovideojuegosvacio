<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Proveedores</title>
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
<body>
    <div class="container-fluid">

        <div class="row" style=" padding-left: 435px;"> 
          <!--PARTE 2-->
          <div class="col-md-6">
             <div class="panel panel-primary"> 
              <div class="panel-heading"><h1>Agregar Proveedores</h1></div>
              <!-- Cuerpo-->
              <div class="panel-body"> 
                <form id="formProv" action="<?php echo site_url(); ?>Proveedores/Registrar_proveedores" method="POST"> 
                  <!------------------ESTO ESTARA OCULTO--------------------------------------
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Id:</label>
                      <input type="text" id="idprov" name="id_proveedor" class="form-control">
                    </div>
                  <------------------------------------------------------------------------->                   
                  <!-- Primer campo-->
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Nombre de la empresa:</label>
                      <input type="text" id="nombre" name="nombre_empresa" class="form-control">
                   </div>
                    <!-- Segundo campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Tipo de persona:</label>
                        <select class="form-control" id="tipo" name="tipo_persona">
                          <option value=""></option>
                          <option value="Natural">Natural</option>
                          <option value="Juridica">Juridica</option>
                        </select>
                    </div>                              
                    <!-- Tercero campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Representante:</label>
                      <input type="text" id="repre" name="representante_empresa" class="form-control">
                    </div>
                     <!-- Cuarto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Direccion:</label>
                      <input type="text" id="direccion" name="direccion_proveedores" class="form-control">
                    </div>
                    <!-- Quinto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Email:</label>
                      <input type="email" id="correo" name="correo_proveedores" class="form-control">
                    </div>
                    <!-- sexto campo-->
                    <div class="col-md-12 form-group input-group">
                        <label for="" class="input-group-addon">Contacto:</label>
                        <input type="text" id="contacto" name="contacto_proveedores" class="form-control">
                    </div>
                    <!-- septimo campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Estado:</label>
                        <select class="form-control" id="estado" name="estado_provedores">
                          <option value=""></option>
                          <option value="Habilitado">Habilitado</option>
                          <option value="Deshabilitado">Deshabilitado</option>
                        </select>
                    </div>

                    <div class="col-md-12 text-center">
                    <!-- nuevo-->
                      <a href="<?php echo site_url();?>Proveedores" class="btn btn-primary">Nuevo proveedor</a>
                    <!-- Boton-->
                      <button type="submit" class="btn btn-success">Guardar proveedor</button>
                    </div><br><br>
        
                </form>
              </div>   <!-- FIN DEL CUERPO -->          
             </div>  <!-- FIN DEL Panel -->       
          </div> 
        </div>
    </div> <!-- fin class container-->
    <hr>



<!-- Modal -->
<div class="modal fade" id="proveedores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> <!-- Establece el ancho y el margen del modal-->
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Proveedores</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  
    </div>
  </div>
</div>
</body>
</html>

<script>
    $('#proveedores').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    });
</script>
