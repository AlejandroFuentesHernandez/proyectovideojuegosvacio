<?php
/*
//id_empleado int 						//id_usuarios		int
//numero_empleado varchar
//nombre_empleado varchar				//nombre_usuarios		varchar
//DUI_empleados		varchar				//contraseña_usuario	varchar
//direccion_empleado		varchar		//rol_usuario		varchar
//fecha_nacimiento date(format)			//estado_usuario (enum varchar)
//cargo_empleado	varchar
//telefono_ empleado varchar
//estado_usuario (enum varchar)


//id_ tienda varchar
*/

include 'url_include.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Empleados</title>
	<meta charset="utf-8">
	<script src="js/Scripts_datose.js"></script>
	<!--<script src="js/Script_ingusuempl.js"></script>-->
</head>
<body>
		<div class="container-fluid" style="padding-right: 50px; padding-left: 50px; padding-top: 50px; padding-bottom: 50px;">
			<!--columna1-->
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>Ingresar Empleado</h1>
					</div>
				</div>
				<!--columna 2-->
				<div class="row" style="padding-left: 430px;">
					<!--parte 2 -->
					<div class="col-md-6">
						<div class="panel panel-default">
						<!--<div class="panel-heading">Agregar </div>-->
						<!--cuerpo-->
						<div class="panel-body">
							<form id="formemple" action="<?php echo site_url();?>/datos_empleados_controller/registrar_empleado" method="POST">
								<!-- Esto estara oculto
									<div class="col-md-12 form-group input-group">
										<input type="text" id="idprov" name="id_" class="form-control">
									</div>
								-->
								<!-- primer campo-->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Numero de empleado:</label>
									<input type="text" id="numero_empleado" name="numero_empleado" class="form-control">
								</div>
								<!-- segundo campo-->
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre del empleado:</label>
								<input type="text"  id="nombre_empleado" name="nombre_empleado" class="form-control">
								</div>
								<!--tercer campo-->
								<div class="col-md-12 form-group input-group" >
									<label for="" class="input-group-addon">DUI del empleado:</label>
									<input type="text" id="DUI_empleado" name="DUI_empleado" class="form-control">
								</div>
						<!--cuarto campo-->
						<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Direccion del empleado:</label>
								<input type="text" id="direccion_empleado" name="direccion_empleado" class="form-control">
						</div>
								<!--quinto campo-->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Fecha de nacimiento:</label>
									<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control">
								</div>
									<!--sexto campo -->
									<div class="col-md-12 form-group input-group">
										<label for="" class="input-group-addon">Cargo del empleado:</label>
										<input type="text" id="cargo_empleado" name="cargo_empleado" class="form-control">
									</div>
										<!-- septimo campo-->
									<div class="col-md-12 form-group input-group">
											<label for="" class="input-group-addon">Id_tienda:</label>
											<input type="text" id="id_empleados" name="id_tienda" class="form-control">
									</div>
													<!--octavo campo -->
									<div class="col-md-12 form-group input-group">
										<label for="" class="input-group-addon">Estado usuario</label>
												<select name="estado_usuario" class="form-control"><option value="habilitado">habilitado</option><option value="inhabilitado">inhabilitado</option></select>
									</div>
									
									<div class="col-md-12 text-center">
										<!-- nuevo-->
										<div class="col-md-12 text-center">
										<!--boton--->
										<button type="submit" class="btn btn-success">Ingresar empleado</button>
									</div>
									<div class="col-md-12 text-center">
									<!-- buton trigger modal -->
									<button type="button" class="btn btn-prymary" data-toggle="modal" data-target="#exampleModalLong">Visualizar Proveedores</button>
								</div>
								<div class="col-md-12 text-center">
									<!-- -->
									<button type="button" class="btn btn-prymary " data-toggle="modal" data-target="#ingresarModalLong">Ingresar usuario</button>
								</div>
							</form>
						</div><!--fin del cuerpo-->		
						</div>
						</div>
						</div><!-- fin class container--->
<!-- Modal-->
<div>
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledy="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title" id="exampleModalLongTitle"> Tabla Empleados</h1>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
					<!--tabla para mostrar datos-->
					<table border="solid">
					<thead>
						<tr>
							<!--<th>Id del empleado</th>-->
							<th>Numero del empleado</th>
							<th>Nombre del empleado</th>
							<th>DUI del empleado</th>
							<th>Direccion del empleado</th>
							<th>Fecha de nacimiento</th>
							<th>Cargo del empleado</th>
							<th>Telefono del empleado</th>
							<th>Id de la tienda</th>
							<th>Estado del usuario</th>
							<!--
								<th>borrar</th>
								<th>editar</th>
							-->
						</tr>
					</thead>
					<tbody>
						<?php foreach($dempleados as $de):?>
						<tr>
							<!--<td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td>-->
							<!--<td><?=$de->id_empleado?></td>-->
							<td><?=$de->numero_empleado?></td>
							<td><?=$de->nombre_empleado?></td>
							<td><?=$de->DUI_empleado?></td>
							<td><?=$de->direccion_empleado?></td>
							<td><?=$de->fecha_nacimiento?></td>
							<td><?=$de->cargo_empleado?></td>
							<td><?=$de->telefono_empleado?></td>
							<td><?=$de->id_tienda?></td>
							<td><?=$de->estado_usuario?></td>
						</tr>

						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-prymary">Save changes</button>-->
				</div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="modal fade" id="ingresarModalLong" tabindex="-1" role="dialog" aria-labelledy="ingresarModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title" id="ingresarModalLongTitle">Tabla usuario</h1>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="formus" action="<?php echo site_url();?>/datos_usuario_controller/agregar_usuario" method="POST">
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Id usuario:</label>
								<input type="text" id="id_usuarios" name="id_usuarios" class="form-control"></div>
								<!-- segundo campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Nombre usuario:</label>
								<input type="text"  id="nombre_usuarios" name="nombre_usuarios" class="form-control"></div>
								<!-- tercer campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Contraseña:</label>
								<input type="text" id="contraseña_usuario" name="contraseña_usuario" class="form-control"></div>
								<!--cuarto campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Rol usuario:</label>
								<input type="text" id="rol_usuario" name="rol_usuario" class="form-control"></div>
								<!-- quinto campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Id del empleado:</label>
								<input type="text" id="id_empleado" name="id_empleado" class="form-control"></div>
								<!-- sexto campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Estado usuario</label>
								<select name="estado_usuario" class="form-control">
									<option value="habilitado">habilitado</option>
									<option value="inhabilitado">inhabilitado</option>
								</select></div>
					<div class="col-md-12 text-center">
									<!-- boton -->
									<button type="submit"  id="ingresar"  class="btn btn-success">Ingresar usuario</button>
								</div>
								<div class="col-md-12 text-center">
									<!-- buton trigger modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Visualizar usuarios</button>
								</div>
					</form>
				</div>
				
			</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>
