<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">

</head>
<body style="padding: 40px">
<form action="<?php echo site_url(); ?>/Usuario/crearsesion" method=POST>
	<font color="green"><h1>Ingresar nuevos usuario</h1></font>
<div class="inset">
 <table>
		<tr>
	<td>Ingrese su usuario<input type="text" name="newusuario" placeholder="Nombre de usuario" required></td>
	</tr>
	<tr>
	<td>Digite su contraseña<input type="password" id="pass" name="newpassword"  placeholder="contraseña" required></td>
	</tr>
	<tr>
	<td>Vuelva a ingresar la contraseña <input type="password" id="verificar" name="newpassword" placeholder="contraseña" onblur="border()"><label id="holi"></label></td>
	</tr>
	<tr>
		<td><input type="submit" name="ingresar" id="boton"  value="ingresar datos"></td>
	</tr>
</table>
</div>
</form>
</body>
</html>

<script type="text/javascript">

	function border()
	{
		if($('#verificar').val()!=$('#pass').val())
		{
			//alert( 'si se esta haciendo');
			$('#holi').html();
			$('#holi').html('<font color="red"><h3>Las contraseñas no coinciden</h3></font>');
			$('#holi').addClass('error');
			$('#boton').hide();
		}else{
			$('#holi').html();
			$('#holi').html('<font color="green>"<h3>Las contraseñas coinciden</h3></font>');
			$('#boton').show();
			
		}
	}

</script>
 