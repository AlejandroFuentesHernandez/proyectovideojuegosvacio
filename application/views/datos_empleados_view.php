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
	
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2kok7mbOyxpgUVvAK/HJ2jigOSYS2auK4pfzbm7uH60=" crossorigin="anonymous"></script>
		<!-- Bootstrap CDN -->
			<!-- Lastest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlGaslnGas1CJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXw1/Sp" crossorigin="anonymous">

	<!--Lastest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfuWVxZxUPnCJA712mCwNIpG9mGCD8wGNIcPD7Txa" crossoringin="anonymous"></script>

</head>
<body>
		<div class="container-fluid" style="padding-right: 50px; padding-right: 50px; padding-top: 50px; padding-bottom: 50px;">
			<!--columna1-->
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>Registro de proveedores</h1>
					</div>
				</div>
				<!--columna 2-->
				<div class="row" style="padding-left: 400px;">
					<!--parte 2 -->
					<div class="col-md-6">
						<div class="panel panel-default"></div>
						<!--<div class="panel-heading">Agregar </div>-->
						<!--cuerpo-->
						<div></div>
					</div>
				</div>
			</div>

	
		<form id='form' action="<?php echo site_url();?>/controller/datos_empleados_controller" method="POST">
			<div align="center">
				<font color=""><h1>Ingresar Empleado</h1></font>
			<div>
				<label>Numero de empleado:</label>
				<input type="text" id="numero_empleado" name="numero_empleado"></div><br>
				<div>
				<label>Nombre del empleado:</label>
				<input type="text"  id="nombre_empleado" name="nombre_empleado"></div><br>
					<div>
						<label>DUI del empleado:</label>
						<input type="text" id="DUI_empleado" name="DUI_empleado"></div><br>
							<div>
								<label>Direccion del empleado:</label>
								<input type="text" id="direccion_empleado" name="direccion_empleado"></div><br>
									<div>
									<label>Fecha de nacimiento:</label>
									<input type="date" id="fecha_nacimiento" name="fecha_nacimiento"></div><br>
										<div>
										<label>Cargo del empleado:</label>
										<input type="text" id="cargo_empleado" name="cargo_empleado"></div><br>
											<div>
											<label>Id_tienda:</label>
											<input type="text" id="id_empleados" name="id_tienda"></div><br>
												<div>
												<label>Estado_usuario</label>
												<input type="text" id="estado_usuario" name="estado_empleado">
												<select><option value="habilitado"></option><option value="inhabilitado"></option></select></div><br>
													<div><input type="submit"  id="ingresar" value="Ingresar"></div>

		</form>
	

	
		
</div>
</body>
</html>