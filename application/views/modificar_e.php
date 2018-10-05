<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

  <title>Editar empleados</title>
</head>
<body>
<!-- INICIO MODAL EN EL SE PODRA EDITAR EL INVENTARIO-->
<div id="page-wrapper">
  
</div><!-- page-wrapper-->
<div class="modal fade" id="exampleModalLong2" tabindex="6" role="dialog" aria-labelly="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document"><!--Establecer el ancho y el margen del modal-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-heading">Empleado</div>
              <div class="panel-body">
                <form id="formProv" action="<?php echo site_url(); ?>Datos_empleado/modificar" method="POST"> 
                    <!--<?php foreach ($id as $idd) { ?>-->
                     
                      <input type="hidden" id="id_empleados" name="id_empleados" value="<?php echo $idd->id_empleados; ?>">

                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Numero empleado</label>
                      <input type="text" id="numero_empleado" name="numero_empleado" class="form-control" 
                     >
                        <!--  value="<?php echo $idd->numero_empleado; ?>"-->
                  
                   </div>
                    <!-- Segundo campo      value="<?php echo $idd->nombre_empleado; ?>"-->
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Nombre empleado:</label>
                      <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control" > 
                    </div>
                    <!-- Tercero campo   <?php echo $idd->DUI_empleado; ?>"-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">DUI empleado :</label>
                      <input type="text" id="DUI_empleado" name="DUI_empleado" class="form-control" value=">
                    </div>
                    <!-- Cuarto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Direccion:</label>
                      <!--<textarea id="direccion_empleado" name="direccion_empleado" class="form-control" value="<?php echo $idd->direccion_empleado;?>"></textarea>        value="<?php echo $idd->direccion_empleado;?>"-->
                      <input type="text" id="direccion_empleado" name="direccion_empleado" class="form-control" >
                    </div>
                     <!-- Quinto campo    value="<?php echo $idd->fecha_nacimiento;?>"-->
                    <div class="col-md-12 form-group input-group">
                        <label for="" class="input-group-addon">Fecha nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" onblur="" class="form-control" >
                    </div>
                       <!-- sexto campo   value="<?php echo $idd->cargo_empleado;?>"-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Cargo empleado :</label>
                      <input type="text" id="cargo_empleado" name="cargo_empleado" class="form-control" >
                    </div>
                      <!-- value="<?php echo $idd->correo_empleado;?>"-->
                      <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Correo empleado :</label>
                      <input type="text" id="correo_empleado" name="correo_empleado" class="form-control" >
                    </div>
                      <!-- value="<?php echo $idd->telefono_empleado;?>"-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Telefono empleado :</label>
                      <input type="text" id="telefono_empleado" name="telefono_empleado" class="form-control" >
                    </div>

                    <!-- septimo campo  -->
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
                  <!--<?php }?>-->
                  </form><!-- form-->
              </div><!-- panel-body-->
          </div><!-- col-md-12-->
        </div><!-- row-->
      </div><!-- modal-body-->
        <div class="modal-footer">
          <a href="<?php echo base_url();?>Datos_empleado/mostrarID?" class="btn btn-secondary">Close</a>
        </div><!-- modal-footer-->
    </div><!-- modal-content-->
  </div><!-- modal-dialog-->
</div><!-- modal fade-->
</body>

<!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

</html>


<script type="text/javascript">
  $(document).ready(function()
  {
    llenarTienda2();
  });

function llenarTienda2()
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
$('#exampleModalLong2').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus');
    });
  </script>
   
      
        
    



<!--
    <div class="container-fluid">
      <--Fila 1--
        <div class="row" style="padding-left: 435px;">
            <div class="col-md-6">
                <h1>Actualizar</h1>
            </div>
        </div><--row titulo--
         <-- Fila 2--
        <div class="row" style=" padding-left: 435px;"> 
          <--PARTE 2--
          <div class="col-md-6">
             <div class="panel panel-primary"> 
              <div class="panel-heading">Editar Empleados</div>
              <-- Cuerpo--
              <div class="panel-body"> 
                <form id="formProv" action="<?php echo site_url(); ?>Datos_empleado/modificar" method="POST"> 
                    <?php foreach ($id as $idd) { ?>
                     
                      <input type="hidden" id="id_empleados" name="id_empleados" value="<?php echo $idd->id_empleados; ?>">

                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Numero empleado</label>
                      <input type="text" id="numero_empleado" name="numero_empleado" class="form-control" 
                      value="<?php echo $idd->numero_empleado; ?>">
                        
                  
                   </div>
                    <-- Segundo campo--
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Nombre empleado:</label>
                      <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control" value="<?php echo $idd->nombre_empleado; ?>"> 
                    </div>
                    <-- Tercero campo--
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">DUI empleado :</label>
                      <input type="text" id="DUI_empleado" name="DUI_empleado" class="form-control" value="<?php echo $idd->DUI_empleado; ?>">
                    </div>
                    <-- Cuarto campo--
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Direccion:</label>
                      <--<textarea id="direccion_empleado" name="direccion_empleado" class="form-control" value="<?php echo $idd->direccion_empleado;?>"></textarea>--
                      <input type="text" id="direccion_empleado" name="direccion_empleado" class="form-control" value="<?php echo $idd->direccion_empleado;?>">
                    </div>
                     <-- Quinto campo--
                    <div class="col-md-12 form-group input-group">
                        <label for="" class="input-group-addon">Fecha nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" onblur="" class="form-control" value="<?php echo $idd->fecha_nacimiento;?>">
                    </div>
                       <-- sexto campo--
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

                    <-- septimo campo--
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
                    <--boton---
                    <button type="submit" class="btn btn-success">Ingresar empleado</button>
                  </div>
                  <?php }?>
                  </form>-->                   

  
    


