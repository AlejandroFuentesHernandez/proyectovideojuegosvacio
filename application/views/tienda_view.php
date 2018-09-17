<?php
//id_tienda
//nombre_tienda
//direccion_tienda
//telefono_tienda
include 'url_include.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Datos Tienda</title>
	<meta charset="utf-8">
	<script src="<?php echo base_url();?>/js/Script_tienda.js"></script>
</head>
<body style="padding: 20px">
	<div class="container-fluid">
		<!--columna1 -->
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Datos tienda</h1>
			</div>
		</div>
		<!-- columna 2-->
		<div class="row" style="padding-left: 435px;">
			<!--parte 2 -->
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading"> Datos tienda</div>
					<!--<div class -->
					<!--cuerpo -->
					<div class="panel-body">
						<form id="formtienda" action="" method="POST">
							<!-- esto estara oculto-->
							<!--primer campo-->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre tienda</label>
								<input type="text" id="nombre_tienda" name="nombre_tienda" class="form-control" onblur="" placeholder="Nombre tienda"></div>
							<!-- segundo campo-->
							<div class="col-md-12 form-group input-group">
								<label>Direccion tienda</label>
								<input type="text" id="direccion_tienda" name="direccion_tienda" class="form-control" onblur="" placeholder="direccion"></div>
							<!--tercer campo -->
							<div class="col-md-12 form-group input-group">
								<label>Telefono tienda</label>
								<input type="text" id="telefono_tienda" name="telefono_tienda" class="form-control" onblur="" placeholder="5555-5555"></div>

								<div class="col-md-12 text-center">
									<!-- nuevo-->
									<div class="col-md-12 text-center"><a href="<? echo site_url();?>" class="btn btn-primary">nueva tienda</a>
										<!-- boton-->
										<button type="submit" class="btn btn-success">Ingresar tienda</button>
									</div>
									<div class="col-md-12 text-center">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">visualizar Proveedores</button>
									</div>
								</div>
						</form>
					</div><!-- fin del cuerpo-->
				</div><!-- panel -->
			</div><!-- col md6-->
		</div><!-- row -->
	</div><!-- finclass container-->


	<div>
		<div class="modal fade"></div>
	</div>

</body>
</html>