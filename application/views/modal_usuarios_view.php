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
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Id usuario:</label>
								<input type="text" id="id_usuarios" name="id_usuarios" class="form-control"></div>
								<!-- segundo campo -->
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre usuario:</label>
								<input type="text"  id="nombre_usuarios" name="nombre_usuarios" class="form-control"></div>
								<!-- tercer campo -->
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Contraseña:</label>
								<input type="text" id="contraseña_usuario" name="contraseña_usuario" class="form-control"></div>
								<!--cuarto campo -->
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Rol usuario:</label>
								<input type="text" id="rol_usuario" name="rol_usuario" class="form-control"></div>
								<!-- quinto campo -->
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Id del empleado:</label>
								<input type="text" id="id_empleado" name="id_empleado" class="form-control"></div>
								<!-- sexto campo -->
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Estado usuario</label>
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