<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, inicial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title></title>

</head>
<body>
	<div id="wrapper">
		<!--ESTO ES EL ESPACIO PARA MOSTRAR EN PANTALLA-->
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Empleados
						</div><!-- panel-heading-->
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
									<!--<th style="" scope="">Id_empleado</th>-->
										<th>Numero Empleado</th>
										<th>Nombre empleado</th>
										<th>DUI empleado</th>
										<th>Dirrecion empleados</th>
										<th>Fecha nacimiento</th>
										<th>Cargo empleado</th>
										<th>Id tienda</th>
										<th>Estado empleado</th>
										<th>editar</th>
									</tr>
								</thead><!--thead-->
								<tbody>
									<?php foreach ($dempleado as $de): ?>
									<tr>
										<!--<td><input type="radio" name="editar" value="<?=$u->id?>"/></td> -->
										<td><?=$de->numero_empleado?></td>
										<td><?=$de->nombre_empleado?></td>
										<td><?=$de->DUI_empleado?></td>
										<td><?=$de->direccion_empleado?></td>
										<td><?=$de->fecha_nacimiento?></td>
										<td><?=$de->cargo_empleado?></td>
										<td><?=$de->id_tienda?></td>
										<td><?=$de->estado_empleado?></td>
										<td><!--<a href="<?php echo base_url();?>Datos_empleado/mostrarId?id=<?php echo $de->id_empleados;?>"class="btn btn-info" data-dismiss="modal">Modificar</a>-->
											<a class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong2">Modificar</a>
										</td>

									</tr>	
										<?php endforeach;?>
								</tbody><!-- tbody-->
							</table><!-- table-->
						</div><!-- panel-body-->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2"></button>
					</div><!-- panel panel-heading-->
				</div><!-- col-lg-12-->
			</div><!-- row-->
		</div><!-- page-wrapper-->

	</div><!-- wrapper-->

<div class="modal fade" id="exampleModalLong2" tabindex="6" role="dialog" aria-labelly="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document"><!--Establecer el ancho y el margen del modal-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-heading">Empleado</div>
              <div class="panel-body">

                <form id="formProv" action="<?php echo site_url(); ?>Datos_empleado/modificar" method="POST"> 

                    <!--<?php //foreach ($de as $idd) { ?>-->
                     
                      <input type="hidden" id="id_empleados" name="id_empleados" value="<?php echo $idd->id_empleados; ?>">

                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Numero empleado</label>
                      <input type="text" id="numero_empleado" name="numero_empleado" class="form-control" value="<?php echo $idd->numero_empleado; ?>">
                  
                   </div>
                    
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Nombre empleado:</label>
                      <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control" value="<?php echo $idd->nombre_empleado; ?>"> 
                    </div>
                    <!-- Tercero campo   <?php echo $idd->DUI_empleado; ?>"-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">DUI empleado :</label>
                      <input type="text" id="DUI_empleado" name="DUI_empleado" class="form-control" value="">
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
                 <!--<?php //}?>-->
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
 <!--FINALIZA APLICACION-->

 </body><!--body -->
</html>

 <script>
   /* $(document).ready(function() {
        //Page-Level Demo Scripts - Tables - Use for reference 
        $('#dataTables-example').DataTable({
            responsive: true,
            "language": {
                "url": "js/lenguaje.js"
            }
             
        });
    });
    /*$('#exampleModalLong2').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus');
    });*/
    </script>  
