<?php
/*
//id_usuarios		int
//nombre_usuarios		varchar
//contraseña_usuario	varchar
//rol_usuario		varchar
//id_empleado		int
//estado_usuario (enum varchar)	
*/
include 'url_include.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar usarios</title>
	<meta charset="utf-8">
	<script src="js/Scripts_datosu"></script>
</head>
<body>
		<div class="container-fluid" style="padding-right: 50px; padding-right: 50px; padding-top: 50px; padding-bottom: 50px;">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Ingresar usuarios</h1>
				</div>
			</div>
			<!--columna2-->
			<div class="row" style="padding-left: 430px;">
				<!-- parte 2 -->
				<div class="col-md-6">
					<div class="panel panel-default">
						<!--<div class="panel-heading" -->
						<!-- cuerpo -->
						<div class="panel-body">
							<form id="formus" action="<?php echo site_url();?>/datos_usuario_controller/agregar_usuario" method="POST">
								<!--
									<div class="col-md-12 form-group input-group">
										<input type="text" id="idprov" name="id_" class="form-control">
									</div>
								-->
								<!--primer campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Id usuario:</label><input type="text" id="id_usuarios" name="id_usuarios" class="form-control"></div>
								<!-- segundo campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Nombre usuario:</label><input type="text"  id="nombre_usuarios" name="nombre_usuarios" class="form-control"></div>
								<!-- tercer campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Contraseña:</label><input type="text" id="contraseña_usuario" name="contraseña_usuario" class="form-control"></div>
								<!--cuarto campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Rol usuario:</label><input type="text" id="rol_usuario" name="rol_usuario" class="form-control"></div>
								<!-- quinto campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Id del empleado:</label><input type="text" id="id_empleado" name="id_empleado" class="form-control"></div>
								<!-- sexto campo -->
								<div class="col-md-12 form-group input-group"><label for="" class="input-group-addon">Estado_usuario</label><input type="text" id="estado_usuario" name="estado_usuario" class="form-control"><select class="form-control"><option value="habilitado"></option><option value="inhabilitado"></option></select></div>
					
								<div class="col-md-12 text-center"><a href="<? echo site_url();?>" class="btn btn-primary">nuevo usuario</a>
									<!-- boton -->
									<button type="submit"  id="ingresar"  class="btn btn-success">Ingresar usuario</button>
								</div>
								<div class="col-md-12 text-center">
									<!-- buton trigger modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Visualizar usuarios</button>
								</div>
							</form>
							
						</div><!-- fin del cuerpo -->
					</div>
				</div>
			</div><!--fin class container-->

<!-- Modal -->
<div>
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledy="exampleModalLongTitle" arial-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title" id="exampleModalLongTitle">Tabla usuarios</h1>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!--tabla para mostrar datos -->
					<table border="solid">
						<thead>
							<tr>
								<!--<th>Id del usuario</th> -->
								<th>Nombre del usuario</th>
								<th>Contraseña del usuario</th>
								<th>Rol del usuario</th>
								<th>Id empleado</th>
								<th>Estado del usuario</th>
								<!--
								<th>borrar</th>
								<th>editar</th>
								-->
							</tr>
						</thead>
						<tbody>
							<?php foreach($dusuarioc as $du):?>
								<tr>
									<!--<td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td>-->
									<!--<td><?=$du->id_usuario?></td> -->
									<td><?=$du->nombre_usuario?></td>
									<td><?=$du->contraseña_usuario?></td>
									<td><?=$du->rol_usuario?></td>
									<td><?=$du->id_empleado?></td>
									<td><?=$du->estado_usuario?></td>
								</tr>
							<?php endforeach;?>
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
		</div>
</div>
</body>
</html>