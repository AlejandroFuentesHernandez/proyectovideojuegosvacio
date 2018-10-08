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
						<form id="formusuario" action="<?php echo base_url();?>Datos_usuario/modificar" method="POST">
						<!--<?php foreach ($du as $idd){?>-->
						<!-- primer campo-->
						<div class="col-md-12 form-group input-group">
						<!-- ID-->
						<!--<input type="hidden" id="id_usuario" name="id_usuario" value="<?php //echo $idd['id_usuario'];?>"/>-->
						</div><!-- col-md-12-->
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
						<!--<?php }?>--><!--foreach-->
					</form><!--form -->
					</div><!-- panel-body-->
				</div><!-- panel primary-->
			</div><!-- col-md-12-->

				
							
							
							
							
								
                   
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