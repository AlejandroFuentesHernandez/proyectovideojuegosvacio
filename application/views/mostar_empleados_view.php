<?php
/*<th>id_empeado</th>
				<th>numero_empleado</th>
				<th>nombre_empleado</th>
				<th>DUI_empleado</th>
				<th>direccion_empleados</th>
				<th>fecha_nacimiento</th>
				<th>cargo_empleado</th>
				<th>id_tienda</th>
				<th>estado_empleado</th>*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, inicial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
    <!-- Bootstrap CDN -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo site_url();?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo site_url();?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo site_url();?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url();?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo site_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div id="wrapper">
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
										<th>DUI empleado</th>
										<th>Dirrecion empleados</th>
										<th>Fecha nacimiento</th>
										<th>Cargo empleado</th>
										<th>Id tienda</th>
										<th>Estado empleado</th>
										<th>editar</th>
									</tr>
								</thead><!--thead-->
								<tbody>
									<?php foreach ($dempleado as $de): ?>
									<tr>
										<!--<td><input type="radio" name="editar" value="<?=$u->id?>"/></td> -->
										<td><?=$de->numero_empleado?></td>
										<td><?=$de->nombre_empleado?></td>
										<td><?=$de->DUI_empleado?></td>
										<td><?=$de->direccion_empleado?></td>
										<td><?=$de->fecha_nacimiento?></td>
										<td><?=$de->cargo_empleado?></td>
										<td><?=$de->id_tienda?></td>
										<td><?=$de->estado_empleado?></td>
										<td><a href="<?php echo base_url();?>Datos_empleado\editar?id=<?php echo $de->id_empleados;?>">Modificar</a></td>
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
<!-- DataTables JavaScript -->
    <script src="<?php echo site_url();?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo site_url();?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo site_url();?>vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url();?>dist/js/sb-admin-2.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <!--FINALIZA APLICACION-->
  <?php require 'application/views/Plantilla/footer.php' ;?>

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
    </script>  
