<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, inicial-scale=1">
	<meta name="autor" content="">

</head>
<body>
		<div id="wrapper">
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Usuarios
							</div><!-- panel-heading-->
							<div class="panel-body">
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTable-example">
									<thead>
										<tr>
											<!-- <th>id del usuario</th>-->
											<th>Nombre del usuario</th>
											<!--<th>Contraseña del usuario</th>-->
											<th>Rol del usuario</th>
											<th>Id del empleado</th>
											<th>Estado del usuario</th>
										</tr>
									</thead><!-- thead-->
										<tbody>
											<?php foreach($dusuario as $du):?>
											<tr>
												<!--<td><input type="radio" name="editar" value="<?=$u->id?>"/></td> -->
												<td><?=$du->nombre_usuario?></td>
												<!--<td><?=$du->contraseña_usuario?></td>-->
												<td><?=$du->rol_usuario?></td>
												<td><?=$du->id_empleado?></td>
												<td><?=$du->estado_usuario?></td>
												<td><a href="<?php echo base_url();?>Datos_usuario/editar?id=<?php echo $du->id_usuario;?>"class="btn btn-info" data-dismiss="modal">Modificar</a>
											</td>
											</tr>
											<?php endforeach;?>
										</tbody><!-- tbody-->
								</table><!--table-->
							</div><!-- panel-body-->
						</div><!--panel panel-default-->
					</div><!-- col-lg-12-->
				</div><!-- row-->
			</div><!-- page-wrapper-->
		</div><!-- wrapper-->

	
    

</body>
</html>
<script>
    $(document).ready(function() {
        //Page-Level Demo Scripts - Tables - Use for reference 
        $('#dataTables-example').DataTable({
            responsive: true,
            "language": {
                "url": "js/lenguaje.js"
            }
             
        });
    });
    </script> 