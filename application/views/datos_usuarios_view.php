<?php
/*
//id_usuario		int
//nombre_usuario		varchar
//contraseña_usuario	varchar
//rol_usuario		varchar
//estado_usuario (enum varchar)	
//id_empleado
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar usarios</title>
	<meta charset="utf-8">
	 <?php include 'url_include.php';?>
	
</head>
<body style="padding:20px">
		<div class="container-fluid">
			<!-- columna1-->
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Ingresar usuarios</h1>
				</div>
			</div>
			<!--columna2-->
			<div class="row" style="padding-left: 435px;">
				<!-- parte 2 -->
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel panel-heading">Ingresar usuario</div>
						<!--<div class="panel-heading" -->
						<!-- cuerpo -->
						<div class="panel-body">
							<form id="formus" action="<?php echo site_url();?>Datos_usuario/RegistroUsuario" method="POST">
								<!--
									<div class="col-md-12 form-group input-group">
										<input type="text" id="id_usuario" name="id_usuario" class="form-control">
									</div>
								-->
								<!-- primer campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Nombre usuario:</label>
									<input type="text"  id="nombre_usuario" name="nombre_usuario" class="form-control"  onblur="nombre_usuariov()" require placeholder="Nombre usuario" >
								</div>
								<!-- segundo campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Contraseña:</label>
									<input type="password" id="contraseña_usuario" name="contraseña_usuario" class="form-control"  onblur=" contraseña_usuariov()" require placeholder="contraseña" >
								</div>
								<!--tercero campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Rol usuario:</label>
									<input type="text" id="rol_usuario" name="rol_usuario" class="form-control" onblur="rol_usuariov()" require placeholder="rol_usuario" >
								</div>
								<!-- cuarto campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Estado usuario</label>
									<select id="estado_usuario" name="estado_usuario" class="form-control">
										<option value="habilitado">habilitado</option>
										<option value="inhabilitado">inhabilitado</option>
									</select>
								</div>
					
								<!-- quinto campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Id del empleado:</label>
									<select id="id_empleado" name="id_empleado" class="form-control"></select>
								</div>

								<!--nuevo usuario guardar -->
								<div class="col-md-12 text-center">
									<!-- boton -->
									<button type="submit" class="btn btn-success">Ingresar usuario</button>
								</div>
								<div class="col-md-12 text-center">
									<!-- buton trigger modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Visualizar usuarios</button>
								</div>
							</form>
							
						</div><!-- fin del cuerpo -->
					</div>
				</div>
			</div><!--fin class container-->
<!-- Modal -->

	<div class="modal fade" id="exampleModalLong" tabindex="6" role="dialog" aria-labelledy="exampleModalLongTitle" arial-hidden="true">

		<div class="modal-dialog modal-lg" role="document">
			
			<div class="modal-content">

				<div class="modal-header">

					<h1 class="modal-title" id="exampleModalLongTitle">Tabla usuarios</h1>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!--tabla para mostrar datos -->
					<table border="solid" class="text-center">
						<thead>
							<tr>
								<!--<th>Id del usuario</th> -->
								<th>Nombre del usuario</th>
								<th>Contraseña del usuario</th>
								<th>Rol del usuario</th>
								<th>Estado del usuario</th>
								<th>Id empleado</th>
								<th>editar</th>
								<!--
								<th>borrar</th>
								
								-->
							</tr>
						</thead>
						<tbody>
							<?php foreach($dusuario as $du):?>
								<tr>
									
									
									<td><?=$du->nombre_usuario?></td>
									<td><?=$du->contraseña_usuario?></td>
									<td><?=$du->rol_usuario?></td>
									<td><?=$du->estado_usuario?></td>
									<td><?=$du->id_empleado?></td>

								
									<td><a href="<?php echo base_url();?>Datos_usuario\editar?id=<?php echo $du->id_usuario;?>">Modificar</a>
									</td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-prymary">Save changes</button>-->
				</div>
			</div>
		</div>
	</div>
</div>


</body>
<script src='<?php echo base_url();?>js/Script_datosu.js'></script>
<script type="text/javascript">
	$(document).ready(function()
  {
    llenarEmpleado();
  });

function llenarEmpleado()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Datos_usuario/cargaridEmpleado',
    success: function(data)
    {
      $('#id_empleado').html('');
      $('#id_empleado').html(data);
    }

  });
 }
  
  // $('#exampleModalLong').on('shown.bs.modal', function () {
    //  $('#myInput').trigger('focus')
  //  });
</script>
</html>