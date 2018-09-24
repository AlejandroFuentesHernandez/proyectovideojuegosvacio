$('#exampleModalLong').on('shown.bs.modal',function(){
  $('#myInput').trigger('focus');
});
function numero_empleadov()
{
  var numero_empleado=document.getElementById("numero_empleado").value.trim();
  if(numero_empleado==''){
    $("#numero_empleado").focus();
  }
}
function nombre_empleadov()
{
  var nombre_empleado=document.getElementById("nombre_empleado").value;
  if(nombre_empleado==''){
    $('#nombre_empleado').focus();
  }
}
function Dui_empleadov()
{
  var DUI_empleado=document.getElementById("DUI_empleado").value.trim();
  if(DUI_empleado==''){
    $('#DUI_empleado').focus();
  }
}
function dirreccion_empleadov()
{
  var direccion_empleado=document.getElementById("direccion_empleado").value;
  if(direccion_empleado==''){
    $("#direccion_empleado").focus();
  }
}
function fecha_nacimientov()
{
  var fecha_nacimiento=document.getElementById("fecha_nacimiento").value;
  if(fecha_nacimiento==''){
    $("#fecha_nacimiento").focus();
  }
}
function cargo_empleadov()
{
  var cargo_empleado=document.getElementById("cargo_empleado").value.trim();
  if(cargo_empleado==''){
    $("#cargo_empleado").focus();
  }
}
