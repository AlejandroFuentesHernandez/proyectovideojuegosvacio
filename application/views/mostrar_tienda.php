<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, inicial-scale=1">
	<meta  name="description" content="">
	<meta  name="autor" content="">
	<title></title>
</head>
<body>
	<div id="wrapper">
		<!-- esto es el espacio mostrar en la pantalla-->
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						Tiendas
						</div><!-- panel-heading-->
					
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<!--<th style="" scope="">Id tienda</th>-->
									<th>Nombre tienda</th>
									<th>direccion tienda</th>
									<th>telefono tienda</th>
									<th>editar</th>
								</tr>
							</thead><!-- thead-->
							<tbody>
								<?php foreach($dtienda as $dt):?>
								<tr>
									<!-- -->
									<!--<td><?=$dt->id_tienda?></td>-->
									<td><?=$dt->nombre_tienda?></td>
									<td><?=$dt->direccion_tienda?></td>
									<td><?=$dt->telefono_tienda?></td>
									<td><a href="<?php echo base_url();?>Tienda/editar?id=<?php echo $dt->id_tienda;?>" class="btn btn-info">Editar</a></td>
								</tr>
								<?php endforeach;?>
							</tbody><!-- tbody-->
						</table><!-- Table-->
					</div><!-- panel-body-->
					<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#"></button> -->

					</div><!-- panel-panel-default-->
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
