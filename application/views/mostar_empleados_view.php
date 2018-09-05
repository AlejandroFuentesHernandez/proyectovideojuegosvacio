<?php
/*<th>id_empeado</th>
				<th>numero_empleado</th>
				<th>nombre_empleado</th>
				<th>DUI_empleado</th>
				<th>direccion_empleados</th>
				<th>fecha_nacimiento</th>
				<th>cargo_empleado</th>
				<th>id_tienda</th>
				<th>estado_empleado</th>*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form name="tablae" action=""<?php echo site_url();?>Datos_empleados_controller/mostrar_empleados"" method="POST">
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