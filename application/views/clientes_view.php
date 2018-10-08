<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro de clientes</title>

</head>

<body>

  <!--INICIA APLICACION-->

    <div class="container-fluid">
         <!-- Columna 2-->
        <div class="row" style=" padding-left: 435px;" > 
          <!--PARTE 2-->
            <div class="col-md-6">
                <div class="panel panel-primary"> 
                  <div class="panel-heading"><h1>Agregar Cliente</h1></div>
              <!-- Cuerpo-->
                      <div class="panel-body"> 
                        <form id="gracia" action="" method="POST">
                            <!------------------ESTO ESTARA OCULTO--------------------------------------
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Id:</label>
                      <input type="text" id="idCte" name="id_cliente" class="form-control">
                    </div>
                  <------------------------------------------------------------------------->

                            <!-- Primer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Nombre del cliente:</label>
                              <input type="text" id="nombre" name="nombre_cliente" class="form-control">
                           </div>
                            <!-- Segundo campo-->
                            <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Fecha de nacimiento cliente:</label>
                              <input type="date" id="fecha" onblur="calculaEdad()" name="fecha_nacimiento_cliente" class="form-control">
                           </div>
                            <!-- Tercer campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Edad de Cliente:</label>
                              <input type="text" id="edad" name="edad_cliente" class="form-control">
                           </div>
                             <!-- Cuarto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Número de DUI:</label>
                              <input type="text" id="DUI" name="numero_DUI" class="form-control" >
                           </div>
                             <!-- Quinto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Número de NIT:</label>
                              <input type="text" id="NIT" name="numero_NIT" class="form-control" >
                           </div>
                            <!-- Sexto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Estado de Cliente:</label>
                              <select class="form-control" id="estado" name="estado_cliente">
                                  <option value="Habilitado" class="form-control">Habilitado</option>
                                  <option value="Deshabilitado" class="form-control">Deshabilitado</option>
                              </select>
                           </div>
                            <!-- Sexto campo-->
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Telefono de cliente:</label>
                              <input type="text" id="telefono" name="telefono_cliente" class="form-control">
                           </div>

                           <div class="col-md-12 text-center">
                            <!-- Boton-->
                              <button type="button" class="btn btn-success" onclick="guardar()">Ingresar Cliente</button>
                          </div><br><br> 
                        </form>
                    </div> <!--Fin del cuerpo-->
                </div>
            </div>
        </div>
    </div> <!-- fin class container-->
    <hr>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="6" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">


                       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>

      </div>
     
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
jQuery(function($){
    $("#telefono").inputmask({"mask": " 9999-9999"});
    });

function guardar(){
    if($('#nombre').val()==''||$('#fecha').val()==''||$('#edad').val()==''||$('#DUI').val()==''||$('#NIT').val()==''||$('#estado').val()==''||$('#telefono').val()=='')
    {
      swal('Los campos no pueden estar vacios');
    }else {
      $.ajax({
      type:"POST",
      url:'<?php echo site_url();?>Clientes/RegistroCliente', 
      data: $('#gracia').serialize(),
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

  function calculaEdad()
{
    var hoy = new Date();
    var nac = new Date(document.getElementById('fecha').value);
    var edad = hoy.getFullYear()-nac.getFullYear();
    document.getElementById('edad').value=edad;
}

</script>

