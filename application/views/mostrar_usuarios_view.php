<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form name="tablau" action=""<?php echo site_url(); ?>datos_usuarios_controller"" method="POST">
		<table border="solid">
			<thhead>
				<tr>
					<!-- <th>id del usuario</th>-->
					<th>Nombre del usuario</th>
					<th>Contraseña del usuario</th>
					<th>Rol del usuario</th>
					<th>Id del empleado</th>
					<th>Estado del usuario</th>
				</tr>
			</thhead>
			<tbody>
				<?php foreach($variable as $du):?>
					<tr>
						<!--<td><input type="radio" name="editar" value="<?=$u->id?>"/></td> -->
						<td><?=$du->nombre_usuario?></td>
						<td><?=$du->contraseña_usuario?></td>
						<td><?=$du->rol_usuario?></td>
						<td><?=$du->id_empleado?></td>
						<td><?=$du->estado_usuario?></td>
					</tr>

				<?php endforeach;?>
			</tbody>
		</table>
		<!--<input type="submit" value="Editar" -->
	</form>

</body>
</html>