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
    <div class="container-fluid " style="padding-right: 50px; padding-left: 50px; padding-top: 50px; padding-bottom: 50px;" >
      <!--columna 1-->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Registro de Proveedores</h1>
            </div>
        </div>
         <!-- Columna 2-->
        <div class="row" style=" padding-left: 400px;" > 
          <!--PARTE 2-->
          <div class="col-md-6">
             <div class="panel panel-defaul"> 
              <!-- <div class="panel-heading">Agregar Proveedores</div>-->
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
                      <label for="" class="input-group-addon"> Tipo de empresa:</label>
                      <input type="text" id="tipo" name="tipo_empresa" class="form-control">
                    </div>
                    <!-- Tercero campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Representante:</label>
                      <input type="text" id="repre" name="representante_empresa" class="form-control">
                    </div>
                    <!-- Cuarto campo-->
                      <div class="col-md-12 form-group input-group">
                        <label for="" class="input-group-addon">Contacto:</label>
                        <input type="text" id="contacto" name="contacto_proveedores" class="form-control">
                      </div>
                    <!-- Quinto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Estado:</label>
                      <input type="text" id="estado" name="estado_proveedores" class="form-control">
                    </div>

                    <div class="col-md-12 text-center">
                    <!-- nuevo-->
                      <a href="<?php echo site_url();?>Proveedores" class="btn btn-primary">Nuevo proveedor</a>
                    <!-- Boton-->
                      <button type="submit" class="btn btn-success">Guardar proveedor</button>
                    </div>
                    <div class="col-md-12 text-center">
                    <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> Visualizar Proveedores </button>
                    </div>         
                </form>
              </div>   <!-- FIN DEL CUERPO -->          
             </div>
          </div> 
        </div>
    </div> <!-- fin class container-->



<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Proveedores</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
                
                   
                       <!-- TABLA PARA MOSTRAR DATOS-->
                       <table border="solid">
                         <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo de la empresa</th>
                                <th>Representante de la empresa</th> 
                                <th>Contacto</th>
                                <th>Estado</th>
                               <!-- <th>borrar</th>
                                <th>editar</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dproveedores as $dp):?>
 
                            <tr>
                                <!-- <td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td> -->
                                <td><?=$dp->nombre_empresa?></td>
                                <td><?=$dp->tipo_empresa?></td>
                                <td><?=$dp->representante_empresa?></td>
                                <td><?=$dp->contacto_proveedores?></td>
                                <td><?=$dp->estado_provedores?></td>
                            </tr>
             
                            <?php endforeach;?>
                        </tbody>
                      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
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
