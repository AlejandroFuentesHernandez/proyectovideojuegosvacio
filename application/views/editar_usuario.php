<?php 
include "url_include.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Editar Usuario</title>

</head><!-- head -->
<body>
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Actualizar</h1>
			</div>
		</div><!-- clas row titulo-->
		<div class="row" style="padding-left: 435px;"><!-- row central-->
			<div class="col-md-6">
				<div class="panel padding-primary">
					<div class="panel-heading">Editar Usuario</div><!-- panel heading-->
					<!--cuerpo-->
					<!--<div class="panel-body">-->
						<!--<form id="formUsu" name="formUsu" action="" method="POST"><-- form-->
							<!--<?php //foreach($usuario as $item){?>-->
							
							<!--<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Id Usuario</label>
								<input type="text" id="id_usuario" name="id_usuario">
								<?php //echo site_url();?>Datosusuario
							</div>-->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre usuario</label>
								<input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" value="">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Contraseña usuario</label>
								<input type="password" id="contraseña_usuario" name="contraseña_usuario" value="" class="form-control">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Estado usuario</label>
								<select class="form-control" id="estado_usuario" name="estado_usuario">
                          		<option value=""></option>
                          		<option value="Habilitado">Habilitado</option>
                          		<option value="Deshabilitado">Deshabilitado</option></select>
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Id Empleado</label>
								<select class="form-control" id="id_empleado" name="id_empleado"></select>
							</div>
								<div class="col-md-12 text-center">
                    <!-- nuevo-->
                     
                    <!-- Boton-->
                      <button type="submit" class="btn btn-success">Guardar usuario</button>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="col-md-12  text-center"> 
                      <input type="hidden" id="id_usuario" name="id_usuario" value=""/>                     
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#usuario"> Visualizar usuario </button>
                    </div>  
						<!--</form><-- form -->
					
					<!--</div>-->
				</div><!-- panel padding-->
			</div><!-- col md6 -->
		</div><!-- row central-->
</body>
</html>