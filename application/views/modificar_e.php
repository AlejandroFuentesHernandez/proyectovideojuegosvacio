<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">--
    <--<meta name="viewport" content="width=device-width, initial-scale=1">--
    <--<meta name="description" content="">--
    <--<meta name="author" content="">-->
  <title>Editar empleados</title>
</head>
<body>
<!-- INICIO MODAL EN EL SE PODRA EDITAR EL INVENTARIO-->
<div class="modal fade" data-backdrop="static" id="empleadosmodal"  role="dialog" aria-labelly="exampleModalLongTitle" aria-hidden="true"> <div class="modal-dialog" role="document"><!--Establecer el ancho y el margen del modal-->
  <div class="modal-content">
  <div class="modal-body">
    <div class="row">
    <div class="col-md-12">
     <div class="panel panel-primary">
        <div class="panel-heading">Editar empleado</div>
       <div class="panel-body">
         <form id="formEmple" action="<?php echo base_url(); ?>Datos_empleado/modificar" method="POST">
          <?php foreach ($dempleado as $idd) { ?>
          <!-- Primer campo-->
                    <div class="col-md-12 form-group input-group">
                      <!--id-->
                      <input type="hidden" id="id_empleados" name="id_empleados" value="<?php echo $idd['id_empleados']; ?>">
                      <!--segundo campo-->
                      <label for="" class="input-group-addon">Numero empleado:</label>
                      <input type="text" id="numero_empleado" name="numero_empleado" class="form-control" value="<?php echo $idd['numero_empleado']; ?>">
                   </div>
                   <!-- Segundo campo-->
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Nombre empleado:</label>
                      <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control" value="<?php echo $idd['nombre_empleado'];?>"> 
                    </div>
                    <!-- Tercero campo   <?php //echo $idd->DUI_empleado; ?>"         title="00000000-0" placeholder="55555555-5"-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">DUI empleado :</label>
                      <input type="text" id="DUI_empleado" name="DUI_empleado"  class="form-control" value="<?php echo $idd['DUI_empleado']?>">
                    </div>
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Direccion:</label>
                      <input type="textarea" id="direccion_empleado" name="direccion_empleado" class="form-control" value="<?php echo $idd['direccion_empleado']?>">
                    </div>

                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Fecha Nacimiento:</label>
                      <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="<?php echo $idd['fecha_nacimiento']?>">
                    </div>

                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Cargo empleado:</label>
                      <input type="text" id="cargo_empleado" name="cargo_empleado" class="form-control" value="<?php echo $idd['cargo_empleado']?>">

                    </div>

                    <!-- septimo campo value="<?php //echo $idd->correo_empleado;?>"-->
                      <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Correo empleado :</label>
                      <input type="text" id="correo_empleado" name="correo_empleado" class="form-control" value="<?php echo $idd['correo_empleado']?>">
                    </div>

                      <!-- Octavo campo value="<?php //echo $idd->telefono_empleado;?>"-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Telefono empleado :</label>
                      <input type="text" id="telefono_empleado" name="telefono_empleado" title="0000-0000" placeholder="0000-0000" class="form-control" value="<?php echo $idd['telefono_empleado']?>">
                    </div>
                    <!-- noveno campo  -->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Estado empleado:</label>
                        <select class="form-control" id="estado_empleado" name="estado_empleado">
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
           </form><!-- form-->
       </div><!-- panel-body-->
      </div><!-- panel-primary-->
    </div><!-- col-md-12-->
    <div class="modal-footer">
      <a href="<?php echo base_url();?>Datos_empleado/mostrar?" class="btn btn-danger">Close</a>
    </div>
    </div><!-- row-->
  </div><!-- modal-body-->
  </div><!-- modal-content-->
</div><!-- modal-dialog-->
</div><!-- modal fade-->
 </body>


</html>
<script type="text/javascript">
  $(document).ready(function()
  {
    $('#empleadosmodal').modal("show");
    //llenarEstado();
    
    llenarTienda();
    llenarTienda2();
    mascara();
    duimascara();
  });
/*function llenarEstado()
{
  $.ajax({
    type:"POST",
    url:'<?php //echo site_url();?>Datos_empleado/cargarEmpleado',
    success: function(data)
    {
      $('#estado_empleado').html('');
      $('#estado_empleado').html(data);
    }

  });
 }*/
function llenarTienda()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Datos_empleado/cargaridtienda',
    success: function(data)
      {
      $('#id_tienda').html('');
      $('#id_tienda').html(data);
    }

  });
}
function llenarTienda2()
{
  $.ajax({
    type:"POST",
    url:'<?php //echo site_url();?>Datos_empleado/cargaridtienda2',
    success: function(data)
      {
      $('#id_tienda').html('');
      $('#id_tienda').html(data);
    }

  }); 
}
function mascara ()
{
  jQuery(function($){
    $("#telefono_empleado").inputmask({"mask":"9999-9999"});
    });
}
function duimascara ()
{
  jQuery(function($){
    $("#DUI_empleado").inputmask({"mask":"99999999-9"});
  });
}
  </script>