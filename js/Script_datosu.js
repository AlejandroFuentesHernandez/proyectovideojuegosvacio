$('exampleModalLong').on('shown.bs.modal',function(){
	$('#myInput').trigger('focus');
});
function id_usuariov()
{
var id_usuario=document.getElementById("id_usuario").value.trim();
	if(id_usuario=='')
	{
		$("#id_usuario").focus();
	}
}
function nombre_usuariov()
{
	var nombre_usuario=document.getElementById("nombre_usuario").value;
	if(nombre_usuario=='')
	{
		$("#nombre_usuario").focus();
	}
}
function contraseña_usuariov()
{
	var contraseña_usuario=document.getElementById('contraseña_usuario').value.trim();
	if(contraseña_usuario=='')
	{
		$("#contraseña_usuario").focus();
	}
}
function rol_usuariov()
{
	var rol_usuario=document.getElementById("rol_usuario").value.trim();
	if(rol_usuario=='')
	{
		$("#rol_usuario").focus();
	}
}
