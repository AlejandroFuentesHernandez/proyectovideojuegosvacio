<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Proveedores</title>
</head>
<body>
    <div class="container-fluid">

        <div class="row" style=" padding-left: 435px;"> 
          <!--PARTE 2-->
          <div class="col-md-6">
             <div class="panel panel-primary"> 
              <div class="panel-heading"><h1>Agregar Proveedores</h1></div>
              <!-- Cuerpo-->
              <div class="panel-body"> 
                <form id="formProv" action="" method="POST"> 
                   <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Nombre de la empresa:</label>
                      <input type="text" id="nombre" name="nombre_empresa" class="form-control">
                   </div>
                    <!-- Segundo campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Tipo de persona:</label>
                        <select class="form-control" id="tipo" name="tipo_persona">
                          <option value=""></option>
                          <option value="Natural">Natural</option>
                          <option value="Juridica">Juridica</option>
                        </select>
                    </div>                              
                    <!-- Tercero campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Representante:</label>
                      <input type="text" id="repre" name="representante_empresa" class="form-control">
                    </div>
                     <!-- Cuarto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Direccion:</label>
                      <textarea id="direccion" name="direccion_proveedores" class="form-control"></textarea> 
                    </div>
                    <!-- Quinto campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Email:</label>
                      <input type="email" id="correo" name="correo_proveedores" class="form-control">
                    </div>
                    <!-- sexto campo-->
                    <div class="col-md-12 form-group input-group">
                        <label for="" class="input-group-addon">Contacto:</label>
                        <input type="text" id="contacto" name="contacto_proveedores" class="form-control" placeholder="2222-2222">
                    </div>
                    <!-- septimo campo-->
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon">Estado:</label>
                        <select class="form-control" id="estado" name="estado_provedores">
                          <option value=""></option>
                          <option value="Habilitado">Habilitado</option>
                          <option value="Deshabilitado">Deshabilitado</option>
                        </select>
                    </div>

                    <div class="col-md-12 text-center">
                    <!-- nuevo-->
                      <a href="<?php echo site_url();?>Proveedores" class="btn btn-primary">Limpiar</a>
                    <!-- Boton-->
                      <button type="button" class="btn btn-success" onclick="guardar()">Guardar</button>
                    </div><br><br>
        
                </form>
              </div>   <!-- FIN DEL CUERPO -->          
             </div>  <!-- FIN DEL Panel -->       
          </div> 
        </div>
    </div> <!-- fin class container-->
    <hr>

</body>
</html>

<script>
jQuery(function($){
    $("#contacto").inputmask({"mask": " 9999-9999"});
    });

function guardar(){
    if($('#nombre').val()==''||$('#tipo').val()==''||$('#direccion').val()==''||$('#repre').val()==''||$('#correo').val()==''||$('#contacto').val()==''||$('#estado').val()=='')
    {
      swal('Los campos no pueden estar vacios');
    }else {
      $.ajax({
      type:"POST",
      url:'<?php echo site_url();?>Proveedores/Registrar_proveedores', 
      data: $('#formProv').serialize(),
      success: function(data)
      {
        if(data==1){
          swal("Datos ingresados exitosamente",'Excelente','success'); 
        }

        else{
           swal("Los datos no se pudieron introducir"); 
        }
      }
    });
      
    }
  }
</script>
