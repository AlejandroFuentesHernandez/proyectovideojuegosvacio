<?php

include "url_include.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script url=""></script>
</head>
<body>
	<div class="container-fluid" style="padding-right: 50px; padding-left: 50px; padding-top: 50px; padding-bottom: 50px;">
		<div class="row">
		<div class="col-md-12 text-center">
			<h1>Cambiar password</h1>
		</div>
	</div>
	<!-- columa2-->
	<div class="row" style="padding-left: 430px;">
		<!--parte2 -->
		<div class="panel panel-default">
			<!--<div class="panel- heading"> --->
			<!--cuerpo -->
		<div class="panel-body">
			<form id="formpass" action="" method="POST">
				
				<!--primer campo -->
			<div class="col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Ingrese password</label>
				<input type="text"  id="passwordnueva" name="passwordnueva" class="form-control">
			</div>
			<div class="col-md-12 form-group input-group">
				<label for="" class="input-group-addon">Repita la password</label>
				<input type="text"  id="passwordnueva2" name="passwordnueva" class="form-control">
			</div>
			<div class="col-md-12 text-center">
				<button type="submit" id="cambiar" class="btn btn-success">Cambiar password</button>
			</div>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>