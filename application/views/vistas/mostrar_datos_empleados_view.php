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
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div align="center">
		<form name="tabla" id="tabla" action="" method="POST">
		<table border="solid">
			<thead>
			<tr><th>Numero del empleado:</th>
				<th>Nombre del empleado:</th>
				<th>DUI del empleado:</th>
				<th>Direccion del empleado:</th>
				<th>Fecha de nacimiento empleado:</th>
				<th>Cargo del empleado:</th>
				<th>Telefono del empleado:</th>
				<th>Id_tienda</th>
				<th>Estado_empleado</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
				<?php //foreach($usuarios as $u):?>
				<tr>
				<td><input type="radio" name="editar" value="<?=$u->id_empleados?>"/></td>
				<td><?=$u->numero_empleado?></td>
				<td><?=$u->nombre_empleado?></td>
				<td><?=$u->DUI_empleados?></td>
				<td><?=$u->direccion_empleado?></td>
				<td><?=$u->fecha_nacimiento?></td>
				<td><?=$u->cargo_empleado?></td>
				<td><?=$u->telefono_empleado?></td>
				<td><?=$u->id_tienda?></td>
				<td><?=$u->estado_empleado?></td>
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
			<td>Numero del empleado</td><td><input type="text" id="" name="numero_empleado"/></td>
		</tr>
		<tr>
			<td>Nombre del empleado</td><td><input type="text" id="" name="nombre_empleado"/></td>
		</tr>
		<tr>
			<td>DUI del empleado</td><td><input type="text" id="" name="DUI_empleados"/></td>
		</tr>
		<tr>
			<td>Direccion del empleado/td><td><input type="text" id="" name="direccion_empleado"/></td>
		</tr>
		<tr>
			<td>Fecha de nacimiento</td><td><input type="text" id="" name="fecha_nacimiento"/></td>
		</tr>
		<tr>
			<td>Cargo del empleado</td><td><input type="text" id="" name="cargo_empleado"/></td>
		</tr>
		<tr>
			<td>Telefono del empleado</td><td><input type="text" id="" name="telefono_empleado"/></td>
		</tr>
		<tr>
			<td>Id tienda</td><td><input type="text" id="" name="id_tienda"/></td>
		</tr>
		<tr>
			<td>Estado del empleado</td><td><input type="text" id="" name="estado_empleado"/></td>
		</tr>
	</table>
			<input type="submit"  value="Agregar" id="" name="agregar">
</form><br>
		<p>Eliminar</p>
		<form name="eliminar" id="" action="" method="POST"></form>
		<table>
			<tr>
				<td>Numero del empleado</td><td><input type="text" name="numero_empleado"/></td>
			</tr>
		</table>
			<input type="submit" id="" name="borrar" value="Borrar">
	
	</div>
</body>
</html>