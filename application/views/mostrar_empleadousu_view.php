<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form name="tablae" action=""<?php echo site_url();?> ingresar_empleadousua_controller/Ingresar_empleados_us method="POST">
		<table border="solid">
		<thead>
			<tr>
				<!--<th>Id empleado</th>-->
				<th>Numero del empleado</th>
				<th>Nombre del empleado</th>
				<th>DUI del empleado</th>
				<th>direccion del empleado</th>
				<th>fecha de nacimiento</th>
				<th>cargo del empleado</th>
				<th>Id tienda</th>
				<th>estado del empleado</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dempleados as $de):?>
			<tr>
				<!--<td><input type="radio" name="editar" value="<?=$u->id?>"/></td> -->
				<td><?=$de->numero_empleado?></td>
				<td><?=$de->nombre_empleado?></td>
				<td><?=$de->DUI_empleado?></td>
				<td><?=$de->direccion_empleado?></td>
				<td><?=$de->fecha_nacimiento?></td>
				<td><?=$de->cargo_empleado?></td>
				<td><?=$de->id_tienda?></td>
				<td><?=$de->estado_empleado?></td>
			</tr>	
			<?php endforeach;?>
		</tbody>
		<!--<input type="submit" value="Editar"/> -->
	</form>

</body>
</html>