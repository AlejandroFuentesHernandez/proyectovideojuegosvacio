function campovacioemple()
{
	var v_numero_empleado=document.getElementsById("numero_empleado").value.trim();
	if(v_numero_empleado==''){
		$('numero_empleado').focus();
	}
	var v_nombre_empleado=document.getElementsById("nombre_empleado").value;
	if(v_nombre_empleado==''){
		$('').focus();
	}
	var v_DUI_empleado=document.getElementsById("DUI_empleado").value.trim();
	if(v_DUI_empleado==''){
		$('DUI_empleado').focus();
	}
	var v_direccion_empleado=document.getElementsById("direccion_empleado").value;
	if(v_direccion_empleado==''){
		$('direccion_empleado').focus();
	}
	var v_fecha_nacimiento=document.getElementsById("fecha_nacimiento").value;
	if(v_fecha_nacimiento==''){
		$('fecha_nacimiento').focus();
	}
	var v_cargo_empleado=document.getElementsById("cargo_empleado").value.trim();
	if(v_cargo_empleado==''){
		$('cargo_empleado').focus();
	}
	var v_id_tienda=document.getElementsById("id_tienda").value.trim();
	if(v_id_tienda==''){
		$('id_tienda').focus();
	}
	var v_estado_empleado=document.getElementsById("estado_empleado").value.trim();
	if(v_estado_empleado==''){
		$('estado_empleado').focus();
	}
}
function campovaciousuario()
{
	var v2_id_usuario=document.getElementsById('id_usuario').value.trim();
	if(v2_id_usuario=='')
	{
		$('id_usuario').focus();
	}
	var v2_nombre_usuarios=document.getElementsById('nombre_usuarios').value.trim();
	if(v2_nombre_usuarios=='')
	{
		$('nombre_usuarios').focus();
	}
	var v2_contraseña_usuario=document.getElementsById('contraseña_usuario').value.trim();
	if(v2_contraseña_usuario=='')
	{
		$('contraseña_usuario').focus();
	}
	var v2_rol_usuario=document.getElementsById('rol_usuario').value.trim();
	if(v2_rol_usuario=='')
	{
		$('rol_usuario').focus();
	}
	var v2_id_empleado=document.getElementsById('id_empleado').value.trim();
	if(v2_id_empleado=='')
	{
		$('').focus();
	}
	var v2_estado_usuario=document.getElementsById('estado_usuario').value.trim();
	if(v2_estado_usuario=='')
	{
		$('estado_usuario').focus();
	}

}
function numero_empleadov()
{
	var v_numero_empleado=document.getElementsById("numero_empleado").value.trim();
	if(v_numero_empleado==''){
		$('numero_empleado').focus();
	}
}