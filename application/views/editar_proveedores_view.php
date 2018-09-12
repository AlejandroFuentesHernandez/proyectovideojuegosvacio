<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Proveedores</title>
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
      <!--Fila 1-->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Actualizar</h1>
            </div>
        </div>
         <!-- Fila 2-->
        <div class="row" style=" padding-left: 435px;"> 
          <!--PARTE 2-->
          <div class="col-md-6">
             <div class="panel panel-primary"> 
              <div class="panel-heading">Editar Proveedores</div>
              <!-- Cuerpo-->
              <div class="panel-body"> 
                <form id="formProv" action="<?php echo site_url(); ?>Proveedores/modificar" method="POST"> 

                  <?php foreach ($editarprov as $item) { ?> 
               
                  <!-- Primer campo-->
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Nombre de la empresa:</label>
                      <input type="text" id="nombre" name="nombre_empresa" class="form-control" value="<?=$item['nombre_empresa'];?>" >
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
                      <input type="text" id="repre" name="representante_empresa" class="form-control" value="<?=$item['representante_empresa'];?>"> 
                    </div>
                     <!-- Cuarto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Direccion:</label>
                      <input type="text" id="direccion" name="direccion_proveedores" class="form-control" value="<?=$item['direccion_proveedores'];?>">
                    </div>
                    <!-- Quinto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Email:</label>
                      <input type="email" id="correo" name="correo_proveedores" class="form-control" value="<?=$item['correo_proveedores'];?>">
                    </div>
                    <!-- sexto campo-->
                    <div class="col-md-12 form-group input-group">
                        <label for="" class="input-group-addon">Contacto:</label>
                        <input type="text" id="contacto" name="contacto_proveedores" class="form-control" value="<?=$item['contacto_proveedores'];?>">
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
                    </div>
                    <!-- Button trigger modal -->
                    <div class="col-md-12  text-center"> 
                      <input type="hidden" name="id_proveedores" value="<?php echo $item['id_proveedores'];?>"/>                     
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#proveedores"> Visualizar Proveedores </button> 
                    </div>  

                </form>
                  <?php }?>
           
                                                        
              </div>   <!-- FIN DEL CUERPO -->          
             </div>  <!-- FIN DEL Panel -->       
          </div> 
        </div>
    </div> <!-- fin class container-->
</body>
</html>
