<?php
include 'url_include.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body style="padding: 20px">
	<div class="row" style="padding-left: 435px;">
		<div class="col-md-6">
			<h1>Actualizar</h1>
		</div>
	</div><!-- row padding-->
	<!-- fila 2-->
	<div class="row" style="padding-left: 435px;">
		<!-- parte 2-->
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel panel-heading">Editar tienda</div>
				<!-- cuerpo -->
				<div class="panel-body">
					<form id="formTienda" action="<?php echo site_url();?>" method="POST">
						<!-- primer campo-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Nombre tienda</label>
							<input type="text" id="nombre_tienda" name="nombre_tienda" class="form-control"></div>
						<!-- segundo campo-->
							<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Direccion tienda</label>
							<input type="text" id="direccion_tienda" name="direccion_tienda" class="form-control"></div>

							<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Telefono_tienda</label>
							<input type="text" id="telefono_tienda" name="telefono_tienda" class="form-control"></div>
					</form><!-- form-->
				</div><!-- panel-body-->
			</div><!-- panel-primary-->
		</div><!-- col-md-6-->
	</div>

</body>
</html>