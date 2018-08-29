<?php
/*
//id_usuarios		int
//nombre_usuarios		varchar
//contraseña_usuario	varchar
//rol_usuario		varchar
//id_empleado		int
//estado_usuario (enum varchar)	
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar usarios</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Ingresar usuarios</h1>
<div align="center">
		<form id='form' action="" method="POST">
			
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
</html>