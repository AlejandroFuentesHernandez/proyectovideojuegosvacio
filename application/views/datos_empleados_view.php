<?php
/*
//id_empleados int
//numero_empleado varchar
//nombre_empleado varchar
//DUI_empleados		varchar
//direccion_empleado		varchar
//fecha_nacimiento date
//cargo_empleado	varchar
//telefono_ empleado varchar
//id_ tienda varchar
//estado_usuario (enum varchar)

*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Empleados</title>
	<meta charset="utf-8">
	
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<!-- Bootstrap CDN -->
			<!-- Lastest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!--Lastest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
		<div class="container-fluid" style="padding-right: 50px; padding-right: 50px; padding-top: 50px; padding-bottom: 50px;">
			<!--columna1-->
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>Ingresar Empleado</h1>
					</div>
				</div>
				<!--columna 2-->
				<div class="row" style="padding-left: 400px;">
					<!--parte 2 -->
					<div class="col-md-6">
						<div class="panel panel-default"></div>
						<!--<div class="panel-heading">Agregar </div>-->
						<!--cuerpo-->
						<div class="panel-body">
							<form id="formemple" action="<?php echo site_url();?>/datos_empleados_controller/agregar_empleado" method="POST">
								<!-- Esto estara oculto
									<div class="col-md-12 form-group input-group">
										<input type="text" id="idprov" name="id_" class="form-control">
									</div>
								-->
								<!-- primer campo-->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Numero de empleado:</label>
				<input type="text" id="numero_empleado" name="numero_empleado" class="form-control"></div><br>
								</div>
								<!-- segundo campo-->
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre del empleado:</label>
								<input type="text"  id="nombre_empleado" name="nombre_empleado" class="form-control"></div>
								<!--tercer campo-->
								<div class="col-md-12 form-group input-group" >
						<label for="" class="input-group-addon">DUI del empleado:</label>
						<input type="text" id="DUI_empleado" name="DUI_empleado" class="form-control"></div>
						<!--cuarto campo-->
						<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Direccion del empleado:</label>
								<input type="text" id="direccion_empleado" name="direccion_empleado" class="form-control"></div>
								<!--quinto campo-->
								<div class="col-md-12 form-group input-group">
									<label for="" class="input-group-addon">Fecha de nacimiento:</label>
									<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control"></div>
									<!--sexto campo -->
									<div class="col-md-12 form-group input-group">
										<label for="" class="input-group-addon">Cargo del empleado:</label>
										<input type="text" id="cargo_empleado" name="cargo_empleado" class="form-control"></div>
										<!-- septimo campo-->
									<div class="col-md-12 form-group input-group">
											<label>Id_tienda:</label>
											<input type="text" id="id_empleados" name="id_tienda" class="form-control"></div><br>
												<div>
							</form>
						</div>
					</div>
				</div>
			</div>

	
		
			
				
			
				
				<<br>
					
							
									
										
											
												<label>Estado_usuario</label>
												<input type="text" id="estado_usuario" name="estado_empleado">
												<select><option value="habilitado"></option><option value="inhabilitado"></option></select></div><br>
													<div><input type="submit"  id="ingresar" value="Ingresar"></div>

		</form>
	

	
		
</div>
</body>
</html>