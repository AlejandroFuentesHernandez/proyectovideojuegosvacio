<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Modificar Tienda</title>
	
</head>
<body>
	<!-- Inicio modal en el se podra editar el tienda-->
	
		<div class="modal fade" data-backdrop="static" id="modificar_tienda" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
											<?php foreach($dtienda as $idd){?>

											<!-- primer campo-->
											<div class="col-md-12 form-group input-group">
												<!-- id-->
												<input type="hidden" id="id_tienda" name="id_tienda" value="<?php echo $idd['id_tienda'];?>">
												<!-- segundo campo -->
												<label for="" class="input-group-addon">Nombre tienda</label>
												<input type="text" id="nombre_tienda" name="nombre_tienda" class="form-control"
												value="<?php echo $idd['nombre_tienda'];?>">
											</div>
											<!-- tercer campo-->
											<div class="col-md-12 form-group input-group">
												<label for="" class="input-group-addon">Direccion tienda</label>
												<input type="text" id="direccion_tienda" name="direccion_tienda" class="form-control"
												value="<?php echo $idd['direccion_tienda'];?>">
											</div>
											<!-- cuarto campo-->
											<div class="col-md-12 form-group input-group">
												<label for="" class="input-group-addon">Telefono_tienda</label>
												<input type="text" id="telefono_tienda" name="telefono_tienda" title="0000-0000" placeholder="0000-0000" class="form-control" value="<?php echo $idd['telefono_tienda'];?>"></div>
											</div>
											<?php }?>
											<!-- boton-->
											<div class="col-md-12 text-center">
											<button type="submit" class="btn btn-success">Guardar Tienda</button>
											
											</div>
											<div class="modal-footer">
												<a href="<?php echo base_url();?>Tienda/mostrar" class="btn btn-danger">Close</a>
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
	
</body>

<script>
	$(document).ready(function(){
		$('#modificar_tienda').modal("show");
		mascara();
	});
	function mascara()
{
	jQuery(function($){
    $("#telefono_tienda").inputmask({"mask":"9999-9999"});
    });
}
    </script>