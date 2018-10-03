<!DOCTYPE html>
<html>
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
					<div class="panel-heading">
						Tiendas
					</div><!-- panel-heading-->
					<div class="panel-body">
						<table width="100%" class="table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<!--id_tienda,nombre_tienda,direccion_tienda,telefono_tienda -->
									<th>Id tienda</th>
									<th>Nombre tienda</th>
									<th>direccion tienda</th>
									<th>telefono tienda</th>
								</tr>
							</thead><!-- thead-->
							<tbody>
								<?php foreach($dtienda as $dt):?>
								<tr>
									<!-- -->
									<td><?=$dt->id_tienda?></td>
									<td><?=$dt->nombre_tienda?></td>
									<td><?=$dt->direccion_tienda?></td>
									<td><?=$dt->telefono_tienda?></td>
									<td><a href="<?php echo base_url();?>Tienda\editar?id=<?php echo $dt->id_tienda;?>"></a></td>
								</tr>
								<?php endforeach;?>
							</tbody><!-- tbody-->
						</table><!-- dataTable-example-->
					</div><!-- panel-body-->
				</div><!-- col-lg-12-->
			</div><!-- row-->
		</div><!-- page-wrapper-->
	</div><!-- wrapper-->

</body>
</html>
<script>
	$(document).ready(function(){
		$('#dataTables-example').DataTable({
			responsive:true,
			"language":{
				"url": "js/lenguaje.js"
			}
		});
	});
</script>