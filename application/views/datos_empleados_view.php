<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Empleados</title>
	<meta charset="utf-8">
	
</head>
<body style="padding: 20px">
		<div class="container-fluid">
				<div class="row" style="padding-left: 435px;">
					<!--parte 2 -->
					<div class="col-md-6">
						<div class="panel panel-primary">
							<div class=" panel panel-heading"><h1>Ingresar empleado</h1></div>
						<!--<div class="panel-heading">Agregar </div>-->
						<!--cuerpo-->
						<div class="panel-body">
							<form id="formemple" action="<?php echo site_url();?>Datos_empleado/RegistroEmpleados" method="POST">
								<!-- Esto estara oculto
									<div class="col-md-12 form-group input-group">
										<input type="text" id="id_empleados" name="id_empleados" class="form-control"
										>
									</div>
								-->
								<!-- primer campo-->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Numero de empleado:</label>
									<input type="text" id="numero_empleado" name="numero_empleado" class="form-control" onblur="numero_empleadov()" required placeholder="Numero empleados">
								</div>
								<!-- segundo campo-->
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre del empleado:</label>
								<input type="text"  id="nombre_empleado" name="nombre_empleado" onblur="nombre_empleadov()" require placeholder="Nombre empleado"class="form-control">
								</div>
								<!--tercer campo-->
								<div class="col-md-12 form-group input-group" >
									<label for="" class="input-group-addon">DUI del empleado:</label>
									<input type="text" id="DUI_empleado" onblur=" Dui_empleadov()"  require  title="00000000-0" placeholder="55555555-5" name="DUI_empleado" class="form-control">
								</div>
						<!--cuarto campo-->
						<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Direccion del empleado:</label>
								<textarea id="direccion_empleado" name="direccion_empleado" onblur="dirreccion_empleadov()" class="form-control"></textarea>
						</div>
								<!--quinto campo-->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Fecha de nacimiento:</label>
									<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" onblur="fecha_nacimientov()" class="form-control">
								</div>
									<!--sexto campo -->
									<div class="col-md-12 form-group input-group">
										<label for="" class="input-group-addon">Cargo del empleado:</label>
										<input type="text" id="cargo_empleado" name="cargo_empleado" onblur="cargo_empleadov()" require placeholder="Vendedor" class="form-control">
									</div>
										<!-- septimo campo-->
									<div class="col-md-12 form-group input-group">
										<label for="" class="input-group-addon">Correo del empleado</label>
										<input type="text"  id="correo_empleado" name="correo_empleado" onblur="" require placeholder="asdf@asd.as" class="form-control">
									</div>
										<!-- octavo campo -->
									<div class="col-md-12 form-group input-group">
										<label for="" class="input-group-addon">Telefono del empleado</label>
										<input type=""  id="telefono_empleado" name="telefono_empleado" onblur="" title="0000-0000" placeholder="0000-0000" class="form-control">
									</div>


									
													<!--noveno campo html solo reconoce name no id el ajax si por id-->
									<div class="col-md-12 form-group input-group">
										<label for="" class="input-group-addon">Estado_usuario</label>
												<select id="estado_empleado" name="estado_empleado" class="form-control">
													<option value="habilitado">habilitado</option>
													<option value="inhabilitado">inhabilitado</option>
												</select>
									</div>
											<!-- decimo campo-->
									<div class="col-md-12 form-group input-group">
										<label for="" class="input-group-addon">Id tienda</label>
										<select id="id_tienda" name="id_tienda" class="form-control">
										</select>
									</div> 

										<!-- nuevo-->
										<div class="col-md-12 text-center">
										<!--boton--->
										<button type="submit" class="btn btn-success">Ingresar empleado</button>
									</div><br><br>
									<div class="col-md-12 text-center">
									<!-- buton trigger modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Visualizar empleado</button>
								</div>
							</form>
						</div><!--fin del cuerpo-->		
						</div><!--fin del primary -->
					</div>
				</div><!-- fin class container--->
				<hr>
<!-- Modal-->

	<div class="modal fade" id="exampleModalLong" tabindex="6" role="dialog" aria-labelledy="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			
			<div class="modal-content">

				<div class="modal-header">

					<h1 class="modal-title" id="exampleModalLongTitle">Tabla Empleados</h1>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
					<!--tabla para mostrar datos-->
					<table border="solid" class="text-center">
					<thead>
						<tr>
							<!--<th>Id del empleado</th>-->
							<th>Numero del empleado</th>
							<th>Nombre del empleado</th>
							<th>DUI del empleado</th>
							<th>Direccion del empleado</th>
							<!--<th>Fecha de nacimiento</th>-->
							<th>Cargo del empleado</th>
							<th>Correo electronico</th>
							<th>Telefono del empleado</th>
							<th>Estado del usuario</th>
							<!--<th>Id de la tienda</th>-->
							<th>editar</th>
							<!--
								<th>borrar</th>-->
								
							
						</tr>
					</thead>
					<tbody>
						<?php foreach($dempleado as $de):?>
						<tr>
							<!--<td><input type="radio" name="editar" value="<?=$u->id_empleado?>"/></td>-->
							<!--<td><?=$de->id_empleado?></td>-->
							<td><?=$de->numero_empleado?></td>
							<td><?=$de->nombre_empleado?></td>
							<td><?=$de->DUI_empleado?></td>
							<td><?=$de->direccion_empleado?></td>
							<!--<td><?=$de->fecha_nacimiento?></td>-->
							<td><?=$de->cargo_empleado?></td>
							<td><?=$de->correo_empleado?></td>
							<td><?=$de->telefono_empleado?></td>
							<td><?=$de->estado_empleado?></td>
							<!--<td><?=$de->id_tienda?></td>-->
							
							<!-- <td><a href="<?php echo base_url();?>Datosempleado/eliminar?id=<?php echo $de->id_empleado;?>">Eliminar</a></td>-->
							<td><a href="<?php echo base_url();?>Datos_empleado\mostrarID?id=<?php echo $de->id_empleados;?>">Modificar</a></td>
						</tr>

						<?php endforeach; ?>
					</tbody>
				</table>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-prymary">Save changes</button>-->
				</div>
			</div>
		</div>
	</div>

  <!--FINALIZA APLICACION-->

 <!--hp require 'application/views/Plantilla/footer.php' ;?>-->
</body>
<!--ipt src='<?php echo base_url();?>js/Script_datose.js'></script>-->

<script type="text/javascript">
	$(document).ready(function()
  {
    llenarTienda();
    mascara();
    duimascara();
  });

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
function mascara()
{
	jQuery(function($){
    $("#telefono_empleado").inputmask({"mask":"9999-9999"});
    });
}
function duimascara()
{
	jQuery(function($){
		$("#DUI_empleado").inputmask({"mask":"99999999-9"});
	});
}

$('#exampleModalLong2').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus');
    });
//$('#exampleModalLong').on('shown.bs.modal',function(){
  //$('#myInput').trigger('focus');
//});


</script>
</html>
