<?php 
  include "url_editar.php";
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar empleados</title>

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
              <div class="panel-heading">Editar Empleados</div>
              <!-- Cuerpo-->
              <div class="panel-body"> 
                <form id="formProv" action="<?php echo site_url(); ?>Datos_empleado/modificar" method="POST"> 

                  <?php foreach ($editarempleado as $item) { ?> 
               
                  <!-- Primer campo-->
                  <!-- <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Id Empleado</label>
                      <input type="text" id="id_empleado" name="id_empleado" class="form-control" value="<?=$item['id_empleado'];?>" >
                   //</div> -->
                   <!-- Segundo campo-->
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Numero empleado</label>
                      <input type="text" id="numero_empleado" name="numero_empleado" class="form-control" value="<?=$item['id_empleado'];?>" >
                   </div>                           
                    <!-- Tercero campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Nombre empleado:</label>
                      <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control" value="<?=$item['nombre_empleado'];?>"> 
                    </div>
                     <!-- Cuarto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">DUI empleado :</label>
                      <input type="text" id="DUI_empleados" name="DUI_empleados" class="form-control" value="<?=$item['DUI_empleados'];?>">
                    </div>
                    <!-- Quinto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Direccion:</label>
                      <textarea id="direccion_empleado" name="direccion_empleado" class="form-control" value="<?=$item['direccion_empleado'];?>"></textarea>
                    </div>
                    <!-- sexto campo-->
                    <div class="col-md-12 form-group input-group">
                        <label for="" class="input-group-addon">Fecha nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" onblur="" class="form-control" value="<?=$item['fecha_nacimiento'];?>">
                    </div>

                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Cargo empleado :</label>
                      <input type="text" id="cargo_empleado" name="cargo_empleado" class="form-control" value="<?=$item['cargo_empleado'];?>">
                    </div>

                    <!-- septimo campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Estado usuario:</label>
                        <select class="form-control" id="estado_usuario" name="estado_usuario">
                          <option value=""></option>
                          <option value="Habilitado">Habilitado</option>
                          <option value="Deshabilitado">Deshabilitado</option>
                        </select>
                    </div> 

                    <div class="col-md-12 text-center">
                    <!-- nuevo-->
                      <a href="<?php echo site_url();?>Datos_empleado" class="btn btn-primary">Nuevo empleado</a> 
                    <!-- Boton-->
                      <button type="submit" class="btn btn-success">Guardar empleado</button>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="col-md-12  text-center"> 
                      <input type="hidden" name="id_empleado" value="<?php echo $item['id_empleado'];?>"/>                     
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#empleado"> Visualizar Empleado</button> 
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