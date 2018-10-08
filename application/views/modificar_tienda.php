<?php
include 'url_include.php';
require 'application/views/Plantilla/navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-with,initial-scale=1">
	<meta name="descripcion" content="">
	<meta name="author" content="">
	<!-- DataTables css-->
	<link href="../vendor/datatables-plugins/DataTables.bootstrap.css" rel="stylesheet">
	<!-- DataTables responsive css-->
	<link href="../vendor/datatables-responsive" rel="stylesheet">
	<title>Tienda</title>
	
</head>
<body>
	<!-- Inicio modal en el se podra editar el tienda-->
	<div id="page-wrapper">
		<div class="modal fade" data-backdrop="static" id="tienda" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document"><!-- establecer el ancho y el margen del modal-->
				<div class="modal-content">
					<div class="modal-body">
						<!-- fila 2-->
						<div class="row">
							<!-- parte 2-->
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Editar tienda</div><!-- panel-heading-->
									<!-- cuerpo-->
									<div class="panel-body">
										<form id="formTienda" action="<?php echo base_url();?>Tienda/modificar" method="POST">
											<!--<?php //foreach($dt as $idd){?>-->
											<!-- primer campo-->
											<div class="col-md-12 form-group input-group">
												<!-- id-->
												<!--<input type="hidden" id="id_tienda" name="id_tienda" value="<?php //echo $idd['id_tienda']?>"/>-->
												<!-- segundo campo -->
												<label for="" class="input-group-addon">Nombre tienda</label>
												<input type="text" id="nombre_tienda" name="nombre_tienda" class="form-control">
											</div>
											<!-- tercer campo-->
											<div class="col-md-12 form-group input-group">
												<label for="" class="input-group-addon">Direccion tienda</label>
												<input type="text" id="direccion_tienda" name="direccion_tienda" class="form-control">
											</div>
											<!-- cuarto campo-->
											<div class="col-md-12 form-group input-group">
												<label for="" class="input-group-addon">Telefono_tienda</label>
												<input type="text" id="telefono_tienda" name="telefono_tienda" class="form-control"></div>
											</div>
											<!--<?php }?>-->
											<div class="col-md-12 form-group input-group" >
												<label for="" class="input-group-addon"></label>
											</div>
										</form><!-- form body-->
									</div><!-- panel-body-->
								</div><!-- panel-primary-->
							</div><!-- col-md-12-->
						</div><!-- row-->
					</div><!-- modal-body-->
				</div><!-- modal-content-->
			</div><!-- modal-dialog-->
		</div><!-- modal fade-->
	</div><!-- page-wrapper-->
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