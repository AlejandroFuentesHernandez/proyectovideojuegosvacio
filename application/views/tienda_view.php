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
					<div class="panel-heading">Datos tienda</div>
					<!--<div class -->
					<!--cuerpo -->
					<div class="panel-body">
						<form id="formtienda" action="<?php echo site_url();?>Tienda/RegistroTienda" method="POST">
							<!-- esto estara oculto-->
							<!--primer campo-->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre tienda</label>
								<input type="text" id="nombre_tienda" name="nombre_tienda" class="form-control" onblur="" placeholder="Nombre tienda"></div>
							<!-- segundo campo-->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Direccion tienda</label>
								<textarea id="direccion_tienda" name="direccion_tienda" class="form-control" onblur="" placeholder="direccion"></textarea></div>
							<!--tercer campo -->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Telefono tienda</label>
								<input type="text" id="telefono_tienda" name="telefono_tienda" class="form-control" onblur="" placeholder="5555-5555"></div>


								<div class="col-md-12 text-center">
										<!-- boton-->
										<button type="submit" class="btn btn-success">Ingresar tienda</button>
									</div><br><br>
									<div class="col-md-12 text-center">
										<!-- boton trigger modal-->
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">visualizar tienda
										</button>
									</div>
						</form>
					</div><!-- fin del cuerpo-->
				</div><!-- panel -->
			</div><!-- col md6-->
		</div><!-- row -->
	</div><!-- finclass container-->


	
		<div class="modal fade" id="exampleModalLong" tabindex="6" role="dialog" aria-labelly="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">

				<div class="modal-content">

					<div class="modal-header">

						<h1 class="modal-title" id="exampleModalLongTitle">Tabla tiendas</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<!-- Tabla mostrar datos-->
					<table border="solid" class="text-center">
						<thead>
							<tr>
								<!--<th>Id de la tienda</th> -->
								<th>Nombre de la tienda</th>
								<th>Direccion de la tienda</th>
								<th>telefono de la tienda</th>
								<th>Modificar</th>
								<!-- 
									<th>borrar</th>
								-->
							</tr>
						</thead>
						<tbody>
							<?php foreach($dtienda as $dt):?>
								<tr>
									<!--<td><input type="radio" name="editar" value="<?=$u->id_tienda?>"/></td>-->
									<!--<td><?=$dt->id_tienda?></td> -->
									<td><?=$dt->nombre_tienda?></td>
									<td><?=$dt->direccion_tienda?></td>
									<td><?=$dt->telefono_tienda?></td>
									<!-- <td><a href="<?php echo base_url(); ?>Tienda/eliminar?id=<?php echo $dt->id_tienda;?>">Eliminar</a></td>-->
									<td><a href="<?php echo base_url();?>Tienda/editar?id=<?php echo $dt->id_tienda;?>">Modificar</a></td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					<!--<button type="button" class="btn btn-prymary">Save changes</button> -->
				</div>
				</div>
				

			</div>

		</div>
	

</body>
</html>