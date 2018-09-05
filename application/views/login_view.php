<?php
include "url_include.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container-fluid" style="padding-right: 50px; padding-left: 50px; padding-top: 50px; padding-bottom: 50px;">
		<!-- columna 1 -->
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Inicio de sesion de usuarios</h1>
			</div>
		</div>
		<!-- columna2 -->
		<div class="row">
			<!-- parte 2-->
			<div class="col-md-6">
				<div class="panel panel-default">
					<!--<div class="panel-heading">Agregar</div>-->
					<!-- cuerpo -->
					<div class="panel-body">
						
						<form id="formlogin" action="<?php echo site_url(); ?>" method=POST>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Ingrese su usuario</label>
								<input type="text" name="usuario" placeholder="usuario" autocomplete="off" class="form-control">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Digite su contraseña<input type="password" name="password" placeholder="contraseña" ></label>
	  							 <input type="submit" name="login"  value="iniciar sesion" class="form-control">
							</div>
							</form>
					</div>

				</div>
			</div>
		</div>	
	</div>
</body>
</html>




