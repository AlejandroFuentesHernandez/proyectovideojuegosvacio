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
<h1>Ingresar Empleado</h1>
<div id="ingrempleado"  name="ingrempleado" align="">
<form id='formempleado' action="jquery.min.js" method="POST">
			
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
<button type="button" id="ingresarusuario" onclick="">Asignar usuario</button>

</div>
<div id="ingreusuario" name="ingreusuario" align="">
<form id='form' action="jquery.min.js" method="POST">
			
			<div><label>Id usuario:</label><input type="text" id="id_usuarios" name="id_usuarios"></div><br>
			<div><label>Nombre usuario:</label><input type="text"  id="nombre_usuarios" name="nombre_usuarios"></div><br>
			<div><label>Contraseña:</label><input type="text" id="contraseña_usuario" name="contraseña_usuario"></div><br>
			<div><label>Rol usuario:</label><input type="text" id="rol_usuario" name="rol_usuario"></div><br>
			<div><label>Id del empleado:</label><input type="text" id="id_empleado" name="id_empleado"></div><br>
			<div><label>Estado_usuario</label><input type="text" id="estado_usuario" name="estado_usuario"><select><option value="habilitado"></option><option value="inhabilitado"></option></select></div><br>
			<div><input type="submit"  id="ingresar" value="Ingresar"></div>

		</form>
</div>
</body>
<script src='<?php echo base_url()?>/js/Script_ingusuempl.js'></script>
</html>