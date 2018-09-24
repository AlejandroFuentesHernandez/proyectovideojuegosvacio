$('exampleModalLong').on('shown.bs.modal',function(){
	$('#myInput').trigger('focus');
});
function id_usuariov()
{
var id_usuario=document.getElementsById('id_usuario').value.trim();
	if(id_usuario=='')
	{
		$('id_usuario').focus();
	}
}
function nombre_usuariov()
{
	var nombre_usuarios=document.getElementsById('nombre_usuarios').value.trim();
	if(nombre_usuarios=='')
	{
		$('nombre_usuarios').focus();
	}
}
function contraseña_usuariov()
{
	var contraseña_usuario=document.getElementsById('contraseña_usuario').value.trim();
	if(contraseña_usuario=='')
	{
		$('contraseña_usuario').focus();
	}
}
function rol_usuariov()
{
	var rol_usuario=document.getElementsById('rol_usuario').value.trim();
	if(rol_usuario=='')
	{
		$('rol_usuario').focus();
	}
}
