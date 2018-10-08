<?php 
include "url_include.php";
require "application/views/Plantilla/navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="autor" content="">
<!-- DataTables css -->
<link  href="../vendor/datatables-plugins/DataTables.bootsrap.css" rel="stylesheet">
<!-- DataTables Responsive css-->
<link href="../vendor/datatables-responsive/DataTables.responsive.css" rel="stylesheet">
	<title>Editar Usuario</title>

</head><!-- head -->
<body>
	<!-- Inicio modal en-->
	<div id="page-wrapper">
		<div class="modal fade" data-backdrop="static" id="usuariomodal" role="dialog" aria-labelledy="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document"><!-- Establecer el ancho y el margen del modal-->
				<div class="modal-content">
					<div class="modal-body">
						<!-- fila 2-->

						<div class="row">
							<!-- parte 2-->
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div panel-heading>Editar usuario</div><!-- panel-heading-->
					<!-- cuerpo -->
					<div class="panel-body">
						<form id="formusuario" action="<?php echo base_url();?>Datos_usuario/modificar" method="POST"></form>
						<?php foreach ?>
						<?php ?><!--foreach-->
					</div><!-- panel-body-->
				</div><!-- panel primary-->
			</div><!-- col-md-12-->

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



					</div><!-- modal-body-->
				</div><!-- modal-content-->
			</div><!-- modal-dialog-->
		</div><!-- modal fade-->
	</div><!-- page-wrapper-->
		
</body>
</html>