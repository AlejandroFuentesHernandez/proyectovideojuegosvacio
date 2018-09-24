<?php 
include "url_editar.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Editar Usuario</title>

</head>
<body>
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Actualizar</h1>
			</div>
		</div>
		<div class="row" style="padding-left: 435px;">
			<div class="col-md-6">
				<div class="panel padding-primary">
					<div class="panel-heading">Editar Usuario</div>
					<!--cuerpo-->
					<div class="panel-body">
						<form id="formUsu" name="formUsu" action="<?php echo site_url();?>Datosusuario" method="POST">
							<?php foreach($editarusuario as $item){?>
							<!-- -->
							<!--<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Id Usuario</label>
								<input type="text" id="id_usuario" name="id_usuario">
							</div>-->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre usuario</label>
								<input type="text" id="nombre_usuario" name="nombre_usuario" class="form-group" value="<?=$item['nombre_usuario'];?>">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Contraseña usuario</label>
								<input type="password" id="contraseña_usuario" name="contraseña_usuario" value="<?=$item['contraseña_usuario']; ?>">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Estado usuario</label>
								<select class="form-control" id="estado_usuario" name="estado_usuario">
                          		<option value=""></option>
                          		<option value="Habilitado">Habilitado</option>
                          		<option value="Deshabilitado">Deshabilitado</option>
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Id Empleado</label>
								<input type="text" id="id_empleado" name="id_empleado">
							</div>
								<div class="col-md-12 text-center">
                    <!-- nuevo-->
                      <a href="<?php echo site_url();?>Datosusuario" class="btn btn-primary">Nuevo proveedor</a> 
                    <!-- Boton-->
                      <button type="submit" class="btn btn-success">Guardar usuario</button>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="col-md-12  text-center"> 
                      <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $item['id_usuario'];?>"/>                     
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#usuario"> Visualizar usuario </button> 
                    </div>  
						</form>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
</body>
</html>