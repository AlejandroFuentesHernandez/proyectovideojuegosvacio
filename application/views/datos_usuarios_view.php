<?php
/*
//id_usuario		int
//nombre_usuarios		varchar
//contraseña_usuario	varchar
//rol_usuario		varchar
//estado_usuario (enum varchar)	
//id_empleado
*/
include 'url_include.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar usarios</title>
	<meta charset="utf-8">
	
</head>
<body style="padding:20px">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Ingresar usuarios</h1>
				</div>
			</div>
			<!--columna2-->
			<div class="row" style="padding-left: 435px;">
				<!-- parte 2 -->
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel panel-heading">Ingresar usuario</div>
						<!--<div class="panel-heading" -->
						<!-- cuerpo -->
						<div class="panel-body">
							<form id="formus" action="<?php echo site_url();?>Datos_usuario/registrousuarios" method="POST">
								<!--
									<div class="col-md-12 form-group input-group">
										<input type="text" id="idprov" name="id_" class="form-control">
									</div>
								-->
								<!--primer campo 
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Id usuario:</label>
									<input type="text" id="id_usuario" name="id_usuario"  onblur="idvacio()" placeholder="id usuario" class="form-control">
								</div>-->
								<!-- segundo campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Nombre usuario:</label>
									<input type="text"  id="nombre_usuario" onblur="" placeholder="Nombre usuario" name="nombre_usuario" class="form-control">
								</div>
								<!-- tercer campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Contraseña:</label>
									<input type="text" id="contraseña_usuario" onblur="" placeholder="contraseña"name="contraseña_usuario" class="form-control">
								</div>
								<!--cuarto campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Rol usuario:</label>
									<input type="text" id="rol_usuario" onblur="" placeholder="rol_usuario"name="rol_usuario" class="form-control">
								</div>
								<!-- quinto campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Estado usuario</label>
									<select id="estado_usuario" name="estado_usuario" onblur="" class="form-control">
										<option value="habilitado">habilitado</option>
										<option value="inhabilitado">inhabilitado</option>
									</select>
								</div>
					
								<!-- sexto campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Id del empleado:</label>
									<input type="text" id="id_empleado" name="id_empleado"  onblur=""placeholder="id empleado"class="form-control">
								</div>
								
								<div>
									<button type="button" onclick="">
										Click
									</button>
									<label id=""></label><input type="text" placeholder="ver" id="campo">
								</div>


								<div class="col-md-12 text-center"><a href="<? echo site_url();?>datos_usuario.php" class="btn btn-primary">nuevo usuario</a>
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
							<!--<?php foreach($dusuario as $du):?>-->
								<tr>
									<!--<td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td>-->
									<!--<td><?=$du->id_usuario?></td> -->
									<td><?=$du->nombre_usuario?></td>
									<td><?=$du->contraseña_usuario?></td>
									<td><?=$du->rol_usuario?></td>
									<td><?=$du->id_empleado?></td>
									<td><?=$du->estado_usuario?></td>
								</tr>
							<!--<?php endforeach;?>-->
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
<script src="<?php echo base_url();?>/js/Script_datosu.js"></script>
</html>