<?php 
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

<!-- DataTables Responsive css-->

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
									<div class="panel-heading">Editar usuario</div><!-- panel-heading-->
									<!-- cuerpo -->
										<div class="panel-body">
											<form id="formusuario" action="<?php echo base_url();?>Datos_usuario/modificar" method="POST">
												<?php foreach ($dusuario as $idd){?>
													<!-- primer campo-->
												<div class="col-md-12 form-group input-group">
												<!-- ID-->
												<input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $idd['id_usuario'];?>"/>
												</div><!-- col-md-12-->
												<div class="col-md-12 form-group input-group">
													<label for="" class="input-group-addon">Nombre usuario</label>
													<input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" value="<?php echo $idd['nombre_usuario'];?>">
												</div>
												<div class="col-md-12 form-group input-group">
													<label for="" class="input-group-addon">Contraseña usuario</label>
													<input type="text" id="contraseña_usuario" name="contraseña_usuario" value="" class="form-control" value="<?php echo $idd['contraseña_usuario'];?>">
												</div>
												<!--<div class="col-md-12 form-group input-group">
													<label for="" class="input-group-addon">confirmar contraseña</label>
													<input type="password" id="pass2" name="contraseña_usuario" value="" class="form-control"><label id="diferente"></label>
												</div>-->
												<div class="col-md-12 form-group input-group">
													<label for="" class="input-group-addon">Estado usuario</label>
														<select class="form-control" id="estado_usuario" name="estado_usuario">
                          									<option value="<?php echo $idd['estado_usuario'];?>"></option>
                          									<option value="Habilitado">Habilitado</option>
                          									<option value="Deshabilitado">Deshabilitado</option></select>
												</div>
												<div class="col-md-12 form-group input-group">
													<label for="" class="input-group-addon">Id Empleado</label>
													<select class="form-control" id="id_empleado" name="id_empleado" value="<?php echo $idd['id_empleado'];?>"></select>
												</div>
												<div class="col-md-12 text-center">
                    								<!-- nuevo-->
                    								<!-- Boton-->
                      							<button type="submit" class="btn btn-success">Guardar usuario</button>
                    							</div>
                     							<!-- Button trigger modal -->
                   								<div class="col-md-12  text-center"> 
                      							<input type="hidden" id="id_usuario" name="id_usuario" value=""/>                     
                      							<a href="<?php echo base_url();?>Datos_usuario/mostrar" class="btn btn-danger">close</a>
                    							</div>  
												<?php }?><!--foreach-->
											</form><!--form -->
										</div><!-- panel-body fin del cuerpo-->
									</div><!-- panel primary-->
								</div><!-- col-md-12-->
								<div class="modal-footer">
								</div><!-- modal-footer-->
							</div><!-- row-->
				</div><!-- modal-body-->
			</div><!-- modal-content-->
		</div><!-- modal fade-->
		</div><!-- page-wapper-->
		<!-- DataTables javascript-->
		
</body>
</html>
<script>
$(document).ready(function()
  {
  	$('#usuariomodal').modal("show");
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
			$('#diferente').html('<font color="green>"<h6>Las contraseñas coinciden</h6></font>');
			$('#ingresar').show();
			
		}
	}
	</script>