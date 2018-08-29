<?php
/*
//id_usuarios		int
//nombre_usuario		varchar
//contraseña_usuario	varchar
//rol_usuario		varchar
//id_empleado		int
//estado_usuario (enum varchar)	
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<div align="center">
		<form name="tabla" id="tabla" action="" method="POST">
		<table border="solid">
			<thead>
			<tr><th>Id del usuario:</th>
				<th>Nombre del usuario:</th>
				<th>Contraseña usuario:</th>
				<th>Rol del usuario:</th>
				<th>Id del empleado:</th>
				<th>Estado del usuario:</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
				<?php //foreach($usuarios as $u):?>
				<tr>
				<td><input type="radio" name="editar" value="<?=$u->id_usuario?>"/></td>
				<td><?=$u->id_usuario?></td>
				<td><?=$u->nombre_usuario?></td>
				<td><?=$u->contraseña_usuario?></td>
				<td><?=$u->rol_usuario?></td>
				<td><?=$u->id_empleado?></td>
				<td><?=$u->estado_usuario?></td>
				</tr>
				<?php //endforeach;?>
			</tbody>
		</table>
				<input type="submit"  id="editar" name="Editar"/>
		</form><br>
<p>Agregar</p><br>
<form name="agregar" id="agregar" action="" method="POST">
	<table>
		<tr>
			<td>id_usuario</td><td><input type="text" id="" name="id_usuario"/></td>
		</tr>
		<tr>
			<td>Nombre del usuario</td><td><input type="text" id="" name="nombre_usuario"/></td>
		</tr>
		<tr>
			<td>Contraseña del usuario</td><td><input type="text" id="" name="contraseña_usuario"/></td>
		</tr>
		<tr>
			<td>Rol del usuario/td><td><input type="text" id="" name="rol_usuario"/></td>
		</tr>
		<tr>
			<td>Id del empleado</td><td><input type="text" id="" name="id_empleado"/></td>
		</tr>
		<tr>
			<td>Estado del usuario</td><td><input type="text" id="" name="estado_usuario"/></td>
		</tr>
	</table>
			<input type="submit"  value="Agregar" id="" name="agregar">
</form><br>
		<p>Eliminar</p>
		<form name="eliminar" id="" action="" method="POST"></form>
		<table>
			<tr>
				<td>Id del empleado</td><td><input type="text" name="id_empleado"/></td>
			</tr>
		</table>
			<input type="submit" id="" name="borrar" value="Borrar">
	
	</div>
</body>
</html>