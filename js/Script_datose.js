$('#exampleModalLong').on('shown.bs.modal',function(){
	$('#myInput').trigger('focus');
});


function numero_vacio(){
	var numv=document.getElementById("numero_empleado").value.trim();
	if(numv==''){
		alert('Ingrese numero empleado');
		document.getElementById("numero_empleado").focus();
	}
}
function nombre_vacio(){
	var nomv=document.getElementById("nombre_empleado").value;
	if(nomv==''){
		alert('Ingrese nombre empleado');
		document.getElementById("nombre_empleado").focus();
	}
}
function dui_vacio(){
	var duiv=document.getElementById("DUI_empleado").value.trim();
	if(duiv==''){
		alert('Ingrese DUI empleado');
		document.getElementById("DUI_empleado").focus();
	}
}
function dirrecion_vacio(){
	var dirrecionv=document.getElementById("direccion_empleado").value.trim();
	if(dirrecionv==''){
		alert('Ingrese dirrecion empleado');
		document.getElementById("direccion_empleado").focus();
	}
}
function fecha_vacio(){
	var fechav=document.getElementById("fecha_nacimiento").value.trim();
	if(fechav==''){
		alert('Ingrese fecha empleado');
		document.getElementById("fecha_nacimiento").focus();
	}
}
function cargo_vacio(){
	var cargov=document.getElementById("cargo_empleado").value.trim();
	if(cargov==''){
		alert('Ingrese cargo empleado');
		document.getElementById("cargo_empleado").focus();
	}
}
function correo_vacio(){
	var correov=document.getElementById("correo_empleado").value.trim();
	if(correov==''){
		alert('Ingrese correo empleado');
		document.getElementById("correo_empleado").focus();
	}
}
function telefono_vacio(){
	var telefonov=document.getElementById("telefono_empleado").value.trim();
	if(telefonov==''){
		alert('Ingrese telefono empleado');
		document.getElementById("telefono_empleado").focus();
	}
}
function estado_vacio(){
	var estadov=document.getElementById("estado_empleado").value.trim();
	if(estadov==''){
		alert('Ingrese estado empleado');
		document.getElementById("estado_empleado").focus();
	}
}
/*function validacion_vacio(){
	switch()
	{
		case 1:
		var numv=document.getElementById("numero_empleado").value.trim();
			if(numv==''){
				alert('Ingrese numero empleado');
				document.getElementById("numero_empleado").focus();
		break;
	}
		case2:
		var nomv=document.getElementById("nombre_empleado").value;
			if(nomv==''){
				alert('Ingrese nombre empleado');
				document.getElementById("nombre_empleado").focus();
	}
