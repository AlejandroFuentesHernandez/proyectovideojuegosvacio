<?php
/*
//id_empleado int 						//id_usuarios		int
//numero_empleado varchar
//nombre_empleado varchar				//nombre_usuarios		varchar
//DUI_empleados		varchar				//contraseña_usuario	varchar
//direccion_empleado		varchar		//rol_usuario		varchar
//fecha_nacimiento date(format)			//estado_usuario (enum varchar)
//cargo_empleado	varchar
//telefono_ empleado varchar
//estado_usuario (enum varchar)


//id_ tienda varchar
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar</title>
	<meta charset="utf-8">
	<script src="<?php echo base_url();?>/js/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid"><!--columna 1-->
		<div class="row">
			<div class="col-md-12 text-center"><h1>Ingresar Empleado</h1></div>
		</div>
	</div>
		<!--Columna2 -->
		<div class="row">
			<!--Parte2 -->
			<div class="col-md-4">
				<div class="panel panel-defaul">
					<div class="panel-heading">Ingreso empleados</div>
					<div class="panel-body">
						<form id='formempleado' action="jquery.min.js" method="POST">
			<!------------------ESTO ESTARA OCULTO--------------------------------------
                            <div class="col-md-12 form-group input-group">
                                <label for="" class="input-group-addon"> Id:</label>
                                <input type="text" id="idprov" name="id_proveedor" class="form-control">
                            </div>
                            <------------------------------------------------------------------------->
                            <!-- Primer campo-->
			<div class="col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Numero de empleado:</label>
				<input type="text" id="numero_empleado" name="numero_empleado" class="form-control"></div><br>
							<!-- segundo campo-->
			<div class="col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Nombre del empleado:</label>
			<input type="text"  id="nombre_empleado" name="nombre_empleado" class="form-control"></div><br>
							<!--Tercero campo-->
			<div class="col-md-12 form-control input-group">
				<label for="" class="input-group-addon">DUI del empleado:</label>
				<input type="text" id="DUI_empleado" name="DUI_empleado" class="form-control"></div><br>
							<!-- cuarto campo -->
			<div class="col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Direccion del empleado:</label>
				<input type="text" id="direccion_empleado" name="direccion_empleado" class="form-control"></div><br>
							<!--quinto campo -->
			<div class="col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Fecha de nacimiento:</label>
				<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control"></div><br>
							<!--sexto campo -->
			<div class="col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Cargo del empleado:</label>
				<input type="text" id="cargo_empleado" name="cargo_empleado" class="form-control"></div><br>
							<!-- septimo campo -->
			<div class=" col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Id_tienda:</label>
				<input type="text" id="id_empleados" name="id_tienda" class="form-control"></div><br>
							<!-- octavo campo-->
			<div class="col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Estado</label>
				<input type="text" id="estado_usuario" name="estado_empleado" class="form-control">
				<!--<select><option value="habilitado"></option><option value="inhabilitado"></option></select>--></div><br>
			<div class="col-md-12 text-center">
				<!-- nuevo-->
				<button type="submit"  id="ingresar" value="Ingresar" class="btn btn-success">Ingresar empleado</button></div><br>
			<div class="col-md-12 text-center">
				<!--ingresar usuarios  -->
					<button type="button" class="bt"></button>
			</div>
			
			

		</form>
					</div>
				</div>
				
			</div>
			
		</div>



</div>
</body>
<script src='<?php echo base_url()?>/js/Script_ingusuempl.js'></script>
</html>