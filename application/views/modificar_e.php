<?php 
  include 'url_incmod_e.php';
 
 ?>
<!DOCTYPE html>
<html>
<head>
  
  <title>Editar empleados</title>
  <meta charset="utf-8">
</head>
<body style="padding: 20px">
    <div class="container-fluid">
      <!--Fila 1-->
        <div class="row" style="padding-left: 435px;">
            <div class="col-md-6">
                <h1>Actualizar</h1>
            </div>
        </div><!--row titulo-->
         <!-- Fila 2-->
        <div class="row" style=" padding-left: 435px;"> 
          <!--PARTE 2-->
          <div class="col-md-6">
             <div class="panel panel-primary"> 
              <div class="panel-heading">Editar Empleados</div>
              <!-- Cuerpo-->
              <div class="panel-body"> 
                <form id="formProv" action="<?php echo site_url(); ?>Datos_empleado/modificar" method="POST"> 
                    <?php foreach ($id as $idd) { ?>
                     
                      <input type="hidden" id="id_empleados" name="id_empleados" value="<?php echo $idd->id_empleados; ?>">

                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Numero empleado</label>
                      <input type="text" id="numero_empleado" name="numero_empleado" class="form-control" 
                      value="<?php echo $idd->numero_empleado; ?>">
                        
                  
                   </div>
                    <!-- Segundo campo-->
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Nombre empleado:</label>
                      <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control" value="<?php echo $idd->nombre_empleado; ?>"> 
                    </div>
                    <!-- Tercero campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">DUI empleado :</label>
                      <input type="text" id="DUI_empleado" name="DUI_empleado" class="form-control" value="<?php echo $idd->DUI_empleado; ?>">
                    </div>
                    <!-- Cuarto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Direccion:</label>
                      <!--<textarea id="direccion_empleado" name="direccion_empleado" class="form-control" value="<?php echo $idd->direccion_empleado;?>"></textarea>-->
                      <input type="text" id="direccion_empleado" name="direccion_empleado" class="form-control" value="<?php echo $idd->direccion_empleado;?>">
                    </div>
                     <!-- Quinto campo-->
                    <div class="col-md-12 form-group input-group">
                        <label for="" class="input-group-addon">Fecha nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" onblur="" class="form-control" value="<?php echo $idd->fecha_nacimiento;?>">
                    </div>
                       <!-- sexto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Cargo empleado :</label>
                      <input type="text" id="cargo_empleado" name="cargo_empleado" class="form-control" value="<?php echo $idd->cargo_empleado;?>">
                    </div>

                      <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Correo empleado :</label>
                      <input type="text" id="correo_empleado" name="correo_empleado" class="form-control" value="<?php echo $idd->correo_empleado;?>">
                    </div>

                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Telefono empleado :</label>
                      <input type="text" id="telefono_empleado" name="telefono_empleado" class="form-control" value="<?php echo $idd->telefono_empleado;?>">
                    </div>

                    <!-- septimo campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Estado usuario:</label>
                        <select class="form-control" id="estado_usuario" name="estado_usuario">
                          <option value="Habilitado">Habilitado</option>
                          <option value="Deshabilitado">Deshabilitado</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon">Id tienda</label>
                    <select id="id_tienda" name="id_tienda" class="form-control">
                    </select>


                  </div> 
                  <div class="col-md-12 text-center">
                    <!--boton--->
                    <button type="submit" class="btn btn-success">Ingresar empleado</button>
                  </div>
                  <?php }?>
                  </form>

                  


                  </div>   <!-- panel body   <?php foreach($dempleado as $item):?>-->         
             </div>  <!-- FIN DEL Panel          <?php endforeach; ?>-->       
          </div><!-- col md-6-->
        </div><!-- row padding-->
    </div> <!-- fin container  -->         


        <!--<form id="formProv2" action="<?php echo site_url();?>Modificar_e/RegistroEmpleados?>" method="POST">
        <table border="solid" class="text-center">
          <thead>
            <tr>
              <--<th>Id del empleado</th>--
              <th>Numero del empleado</th>
              <th>Nombre del empleado</th>
              <th>DUI del empleado</th>
              <th>Direccion del empleado</th>
              <th>Fecha de nacimiento</th>
              <th>Cargo del empleado</th>
              <th>Correo electronico</th>
              <th>Telefono del empleado</th>
              <th>Estado del usuario</th>
              <th>Id de la tienda</th>
              <th>editar</th>
              <--
                <th>borrar</th>--
                
              
            </tr>
          </thead>
          <tbody>
            <?php foreach($dempleado as $de):?>
            <tr>
              <--<td><input type="radio" name="editar" value="<?=$u->id_empleado?>"/></td>--
              <--<td><?=$de->id_empleado?></td>--
              <td><?=$de->numero_empleado?></td>
              <td><?=$de->nombre_empleado?></td>
              <td><?=$de->DUI_empleado?></td>
              <td><?=$de->direccion_empleado?></td>
              <td><?=$de->fecha_nacimiento?></td>
              <td><?=$de->cargo_empleado?></td>
              <td><?=$de->correo_empleado?></td>
              <td><?=$de->telefono_empleado?></td>
              <td><?=$de->estado_empleado?></td>
              <td><?=$de->id_tienda?></td>
              
              <-- <td><a href="<?php echo base_url();?>Datosempleado/eliminar?id=<?php echo $de->id_empleado;?>">Eliminar</a></td>--
              <td><a href="<?php echo base_url();?>Datos_empleado\editar?id=<?php echo $de->id_empleados;?>">Modificar</a></td>
            </tr>

           <?php endforeach; ?>
          </tbody>
        </table> -->          
</body>

</html>
  <script type="text/javascript">
  $(document).ready(function()
  {
    llenarTienda();
  });

function llenarTienda()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Datos_empleado/cargaridtienda2',
    success: function(data)
      {
      $('#id_tienda').html('');
      $('#id_tienda').html(data);
    }

  });
}
</script>       


