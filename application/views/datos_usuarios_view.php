<!DOCTYPE html>
<html>
<head>
	<title>Ingresar usarios</title>
		<!--SOLICITAMOS LOS ESTILOS CSS Y LIBRERIAS DE JS-->
		      
	<meta charset="utf-8">
</head>
<body>
	<!--INICIA APLICACION-->

		<div class="container-fluid">
			<!--columna2-->
			<div class="row" style="padding-left: 435px;">
				<!-- parte 2 -->
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel panel-heading"><h1>Ingresar usuario</h1></div>
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
									<input type="text"  id="nombre_usuario" name="nombre_usuario" class="form-control" required placeholder="Nombre usuario" >
								</div>
								<!-- segundo campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Contraseña:</label>
									<input type="password" id="contraseña_usuario" name="contraseña_usuario" class="form-control" required placeholder="contraseña" >
								</div>

								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Confirmar Contraseña:</label>
									<input type="password" id="pass2" name="pass2" onblur="comprobarContra()" class="form-control" required placeholder="contraseña" ><label id="diferente"></label>
								</div>
								<!--tercero campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Rol usuario:</label>
									<input type="text" id="rol_usuario" name="rol_usuario" class="form-control" required placeholder="rol_usuario" >
								</div>
								<!-- cuarto campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Estado usuario</label>
									<select id="estado_usuario" name="estado_usuario" required class="form-control" ="">
										<option value="habilitado">habilitado</option>
										<option value="inhabilitado">inhabilitado</option>
									</select>
								</div>
					
								<!-- quinto campo -->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Id del empleado:</label>
									<select id="id_empleado" name="id_empleado"  required class="form-control"></select>
								</div>

								<!--nuevo usuario guardar -->
								<div class="col-md-12 text-center">
									<!-- boton -->
									<button type="submit" id="ingresar" class="btn btn-success" onclick="validar()">Ingresar usuario</button>
								</div><br><br>
								<div class="col-md-12 text-center">
									<!-- buton trigger modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Visualizar usuarios</button>
								</div>
							</form>
							
						</div><!-- fin del cuerpo -->
					</div>
				</div>
			</div><!--fin class container-->
			<hr>
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
								<!--<th>Contraseña del usuario</th>-->
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
									<!--<td><?=$du->contraseña_usuario?></td>-->
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

	<!--FINALIZA APLICACION-->
	
</body>
<script src='<?php echo base_url();?>js/jquery.min.js'></script>
<script type="text/javascript">
	$(document).ready(function()
  {
    llenarEmpleado();
    validar();
    comprobarContra();
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
function validar()
{
	if($('#nombre_usuario').val()==''||$('#contraseña_usuario').val()==''||$('#pass2').val()==''||$('#rol_usuario').val()==''||$('#estado_usuario').val()==''||$('#id_empleado').val()=='')
    {
      swal('Los campos no pueden estar vacios');
    }else {
      $.ajax({
      type:"POST",
      url:'<?php echo site_url();?>Datos_usuarios/RegistroUsuario', 
      data: $('#formus').serialize(),
      success: function(data)
      {
        if(data==1){
          swal("Datos ingresados exitosamente",'Excelente','success'); 
        }

        else{
           swal("Los datos no se pudieron introducir"); 
        }
      }
    });
      
    }
}
function comprobarContra ()
	{
		if($('#contraseña_usuario').val()!=$('#pass2').val())
		{
			//alert( 'si se esta haciendo');
			$('#diferente').html();
			$('#diferente').html('<font color="red"><h6>Las contraseñas no coinciden</h6></font>');
			$('#diferente').addClass('error');
			$('#ingresar').hide();
		}else{
			$('#diferente').html();
			$('#diferente').html('<font color="green"><h6>Las contraseñas coinciden</h6></font>');
			$('#ingresar').show();
			
		}
	}

/*function mascara()
{
	 jQuery(function($){
    $("#phone").inputmask({"mask": " 9999-9999"});
    });
}
  
  // $('#exampleModalLong').on('shown.bs.modal', function () {
    //  $('#myInput').trigger('focus')
  //  });*/
</script>
</html>