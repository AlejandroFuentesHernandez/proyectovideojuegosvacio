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
</head>
<body>
	<h1>Ingresar Empleado</h1>
	<div align="center">
		<form id='form' action="" method="POST">
			
			<div><label>Numero de empleado:</label><input type="text" id="numero_empleado" name="numero_empleado"></div><br>
			<div><label>Nombre del empleado:</label><input type="text"  id="nombre_empleado" name="nombre_empleado"></div><br>
			<div><label>DUI del empleado:</label><input type="text" id="DUI_empleado" name="DUI_empleado"></div><br>
			<div><label>Direccion del empleado:</label><input type="text" id="direccion_empleado" name="direccion_empleado"></div><br>
			<div><label>Fecha de nacimiento:</label><input type="date" id="fecha_nacimiento" name="fecha_nacimiento"></div><br>
			<div><label>Cargo del empleado:</label><input type="text" id="cargo_empleado" name="cargo_empleado"></div><br>
			<div><label>Id_tienda:</label><input type="text" id="id_empleados" name="id_tienda"></div><br>
			<div><label>Estado_usuario</label><input type="text" id="estado_usuario" name="estado_empleado"><select><option value="habilitado"></option><option value="inhabilitado"></option></select></div><br>
			<div><input type="submit"  id="ingresar" value="Ingresar"></div>

		</form>
</div>
</body>
</html>