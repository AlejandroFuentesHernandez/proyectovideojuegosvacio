<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="tabla" action=""<?php echo site_url(); ?>Proveedores/mostrar_proveedores"" method="POST">
 		<table border="solid">
 		<thead>
			 <tr>
			 <th>Nombre</th>
			 <th>Tipo de empresa</th>
			 <th>Representante de la empresa</th> 
			 <th>Contacto</th>
			 <th>Estado<th>
			 </tr>
 		</thead>
 		<tbody>
			 <?php foreach ($dproveedores as $dp):?>
 
			 <tr>
			 <!-- <td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td> -->
			 <td><?=$dp->nombre_empresa?></td>
			 <td><?=$dp->tipo_empresa?></td>
			 <td><?=$dp->representante_empresa?></td>
			 <td><?=$dp->contacto_proveedores?></td>
			 <td><?=$dp->estado_provedores?></td>
			 </tr>
			 
 			<?php endforeach;?>
			 </tbody>
			 </table>
			  <!--<input type="submit" value="Editar" />-->
			 </form>

</body>
</html>