<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, inicial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title></title>

</head>
<body>
	<div id="wrapper">
		<!--ESTO ES EL ESPACIO PARA MOSTRAR EN PANTALLA-->
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Empleados
						</div><!-- panel-heading-->
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
									<!--<th style="" scope="">Id_empleado</th>-->
										<th>Numero Empleado</th>
										<th>Nombre empleado</th>
										<!--<th>DUI empleado</th>-->
										<!--<th>Dirrecion empleados</th>-->
										<!--<th>Fecha nacimiento</th>-->
										<th>Cargo empleado</th>
										<th>Correo empleado</th>
										<th>Telefono empleado</th>
										<th>Estado empleado</th>
										<th>Id tienda</th>
										
										<th>editar</th>
									</tr>
								</thead><!--thead-->
								<tbody>
									<?php foreach ($dempleado as $de):?>
									<tr>
										<!--<td><input type="radio" name="editar" value="<?=$u->id?>"/></td> -->
										<td><?=$de->numero_empleado?></td>
										<td><?=$de->nombre_empleado?></td>
										<!--<td><?=$de->DUI_empleado?></td>-->
										<!--<td><?=$de->direccion_empleado?></td>-->
										<!--<td><?=$de->fecha_nacimiento?></td>-->
										<td><?=$de->cargo_empleado?></td>
										<td><?=$de->correo_empleado?></td>
										<td><?=$de->telefono_empleado?></td>
										<td><?=$de->estado_empleado?></td>
										<td><?=$de->id_tienda?></td>
										
										<td><a href="<?php echo base_url();?>Datos_empleado/editar?id=<?php echo $de->id_empleados;?>"class="btn btn-info" data-dismiss="modal">Modificar</a></td>
											

									</tr>	
										<?php endforeach;?>
								</tbody><!-- tbody-->
								
							</table><!-- table-->

						</div><!-- panel-body-->
						<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2"></button>-->
					</div><!-- panel panel-heading-->
				</div><!-- col-lg-12-->

			</div><!-- row-->
<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							 Datos empleados
						</div><!-- panel-heading-->
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example2">
								<thead>
									<tr>
										<th>Nombre empleado</th>
										<th>DUI empleado</th>
										<th>Dirrecion empleados</th>
										<th>Fecha nacimiento</th>
										<th>Cargo empleado</th>
										<th>Correo empleado</th>
										<th>Telefono empleado</th>
									</tr>
								</thead><!--thead-->
								<tbody>
									<?php foreach ($dempleado as $de):?>
									<tr>
										<td><?=$de->nombre_empleado?></td>
										<td><?=$de->DUI_empleado?></td>
										<td><?=$de->direccion_empleado?></td>
										<td><?=$de->fecha_nacimiento?></td>
										<td><?=$de->cargo_empleado?></td>
										<td><?=$de->correo_empleado?></td>
										<td><?=$de->telefono_empleado?></td>
									</tr>	
										<?php endforeach;?>
								</tbody><!-- tbody-->
								
							</table><!-- table-->

						</div><!-- panel-body-->
						
					</div><!-- panel panel-heading-->
				</div><!-- col-lg-12-->

			</div><!-- row-->
		</div><!-- page-wrapper-->

	</div><!-- wrapper-->

 <!--FINALIZA APLICACION-->

 </body><!--body -->
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
  $(document).ready(function() {
        //Page-Level Demo Scripts - Tables - Use for reference 
        $('#dataTables-example2').DataTable({
            responsive: true,
            "language": {
                "url": "js/lenguaje.js"
            }
             
        });
    });
  $(document).ready(function()
  	{
  		llenarTienda();
  		vertienda();
  	});

  function vertienda()
  {
  	$.ajax({
  		type:"POST",
  		url:'<?php echo site_url();?>Datos_empleado/cargarNtienda'
  	});
  	$('#tienda').html('');
  	$('#tienda').html();
  }
  function llenarTienda()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Datos_empleado/cargaridtienda',
    success: function(data)
    	{
      $('#id_tienda').html('');
      $('#id_tienda').html(data);
    }

  });
}

    </script>  
