function validar()
{
	if(document.getElementyById("nombre").value==''|| document.getElementyById("numero").value==''||
		document.getElementyById("NIT").value==''|| document.getElementyById("telefono").value=='')
	{
		alert("El / los campo(s) no puede(n) estar vacio(s");
	}
	else{
		document.getElementyById("gracia").submit();
	}
}