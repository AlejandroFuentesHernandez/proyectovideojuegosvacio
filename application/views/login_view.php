<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css">
</head>
<body style="padding: 40px">
<form action="<?php echo site_url(); ?>/Login/iniciosesion" method=POST>
	<font color="#0184ff"><h1>Inicio de sesion de usuarios </h1></font>
<div class="inset">
       <label>Ingrese su usuario<input type="text" name="usuario" placeholder="usuario" autocomplete="off"></label>
	   <label>Digite su contraseña<input type="password" name="password" placeholder="contraseña" ></label>
	   <input type="submit" name="login"  value="iniciar sesion">
</div>
</form>
				
</body>
</html>




