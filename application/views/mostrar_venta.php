<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth,inicial-scale=1">
	<meta name="description" content="">
	<meta name="autor" content="">
	<title>Mostrar ventas</title>
</head>
<body>
	<div id="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Ventas
					</div><!--panel-heading-->
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>Numero factura</th>
									<th>Estado factura</th>
									<th>Fecha venta</th>
									<th>Tipo pago</th>
									<th>Total factura</th>
									<th>Cantidad producto</th>
									<th>Observaciones factura</th>
									<th>Id cliente</th>
								</tr>
							</thead><!--thead-->
							<tbody>
								<?php foreach ($dventa as $dv):?> 
								<tr>
									<td><?=$dv->numero_factura?></td>
									<td><?=$dv->estado_factura?></td>
									<td><?=$dv->fecha_venta?></td>
									<td><?=$dv->tipo_pago?></td>
									<td><?=$dv->total_factura?></td>
									<td><?=$dv->cantidad_producto?></td>
									<td><?=$dv->Observaciones_factura?></td>
									<td><?=$du->id_cliente?></td>
								</tr>
								<?php endforeach;?>
							</tbody><!--tbody-->
						</table><!--table-->
					</div><!--panel-body-->
				</div><!--panel-default-->
			</div><!--col-lg-12-->
		</div><!--row-->
	</div><!--wrapper-->
</body>
</html>
<script>
	$(document).ready(function()
		{
			$('dataTables-example').DataTable({
				responsive: true,
				"language":{
					"url":"js/lenguaje.js"
				}
			});
		});
</script>