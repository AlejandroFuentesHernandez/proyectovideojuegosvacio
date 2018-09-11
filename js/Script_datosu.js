
function idvacio(){
	var idv=document.getElementById("id_usuario").value.trim();
	if(idv==''){
		alert('Ingrese numero empleado');
		document.getElementById("id_usuario").focus();
	}
}
function nombreuv(){
	var nomuv=document.getElementById("nombre_usuario").value;
	if (nomuv=='') {
		alert('Ingrese nombre usuario');
		document.getElementById("nombre_usuario").focus();
	}
}
function contraseñauv(){
	var contruv=document.getElementById("contraseña_usuario").value.trim();
	if(contruv==''){
		alert('Ingrese contraseña');
		document.getElementById("contraseña_usuario").focus();
	}
}
function rolusv(){
	var roluv=document.getElementById("rol_usuario").value.trim();
	if (roluv=='') {
		alert('Ingrese rol del usuario');
		document.getElementById("rol_usuario").focus();
	}
}
function estadouv(){
	var estav=document.getElementById("estado_usuario").value.trim();
	if(estav==''){
		alert('Ingrese estado');
		document.getElementById("estado_usuario").focus();
	}
}
function id_empv(){
	var idempv=document.getElementById("id_empleado").value.trim();
	if(idempv==''){
		alert('Ingrese id del empleado');
		document.getElementById("id_empleado").focus();
	}
}
$('#exampleModalLong').on('shown.bs.modal',function(){
		$('#myInput').trigger('focus')
});