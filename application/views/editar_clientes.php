<!--<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- DataTables CSS --
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS --
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <title>Editar clientes</title>
      <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <!-- Bootstrap CDN --
        <!-- Latest compiled and minified CSS --
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme --
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript --
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <!--SOLICITAMOS LA NEVEGACION Y EL PANEL--
  <?php //require 'application/views/Plantilla/nav.php' ;?>
</head>

<body style="padding: 20px">
    <div class="container-fluid " style="padding-right: 50px; padding-left: 50px; padding-top: 50px; padding-bottom: 50px;">
        <!--columna 1--
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Modificar  Clientes</h1>
            </div>
        </div>
         <!-- Columna 2--
        <div class="row" style=" padding-left: 400px;" > 
          <!--PARTE 2--
            <div class="col-md-6">
                <div class="panel panel-defaul"> 
                      <div class="panel-body"> 
                        <form id="gracia" action="<?php// echo site_url(); ?>Clientes/modificar" method="POST">
                            <!------------------ESTO ESTARA OCULTO--------------------------------------
                    <div class="col-md-12 form-group input-group">
                      <label for="" class="input-group-addon"> Id:</label>
                      <input type="text" id="idCte" name="id_cliente" class="form-control">
                    </div>
                  <-------------------------------------------------------------------------
                  <?php// foreach ($variable as $item) { ?>

                           
                              <input type="hidden" id="id" name="id_cliente" class="form-control" value="<?php //echo $item['id_cliente'];?>">
                   
                          <!-- Primer campo--
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Nombre del cliente:</label>
                              <input type="text" id="nombre" name="nombre_cliente" class="form-control" value="<?php //echo $item['nombre_cliente'];?>" required>
                           </div>
                            <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Fecha de nacimiento cliente:</label>
                              <input type="date" id="fecha" onblur="calculaEdad()" name="fecha_nacimiento_cliente"  value="<?php //echo $item['fecha_nacimiento_cliente'];?>" class="form-control" required>
                           </div>
                            <!-- Segundo campo--
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Edad de Cliente:</label>
                              <input type="text" id="edad" name="edad_cliente" class="form-control"  value="<?php //echo $item['edad_cliente'];?>" required>
                           </div>
                             <!-- Tercer campo--
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Número de DUI:</label>
                              <input type="text" id="DUI" name="numero_DUI" class="form-control"  value="<?php// echo $item['numero_DUI'];?>" required>
                           </div>
                             <!-- Cuarto campo--
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Número de NIT:</label>
                              <input type="text" id="NIT" name="numero_NIT" class="form-control"  value="<?php //echo $item['numero_NIT'];?>" required>
                           </div>
                            <!-- Quinto campo--
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Estado de Cliente:</label>
                              <select name="estado_cliente">
                        
                                <?php //if($item['estado_cliente']=='Habilitado'){?>
                                  <option value="Habilitado" class="form-control" selected="true">Habilitado</option>
                                  <option value="Deshabilitado" class="form-control">Deshabilitado</option>
                                <?php// }//else{?>
                                  <option value="Habilitado" class="form-control" >Habilitado</option>
                                  <option value="Deshabilitado" class="form-control" selected="true">Deshabilitado</option>
    
                                <?php// }?>
                                
                              </select>
                  
                           </div>
                            <!-- Sexto campo--
                           <div class="col-md-12 form-group input-group">
                              <label for="" class="input-group-addon"> Telefono de cliente:</label>
                              <input type="text" id="telefono" name="telefono_cliente"  value="<?php// echo $item['telefono_cliente'];?>" class="form-control" required>
                           </div>
                           <div class="col-md-12 text-center">
                            <!-- Boton--
                              <button type="submit" class="btn btn-success">Actualizar Datos</button>
                          </div><br><br>
                         
                        </form>
                  <?php // } ?>
                    
                    </div> <!--Fin del cuerpo--
                </div>
            </div>
        </div>
    </div> <!-- fin class container--
  <!--FINALIZA APLICACION--
  <?php //require 'application/views/Plantilla/footer.php' ;?>

</body>
</html>-->














<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <title>Inventario</title>
          <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <!-- Bootstrap CDN --
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <?php require 'application/views/Plantilla/navbar.php';?>

</head>
<body>
  

<!-- INICIO MODAL EN EL SE PODRA EDITAR EL INVENTARIO-->
<div id="page-wrapper">
    <div class="modal fade" data-backdrop="static"  id="inventario"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document"> <!-- Establece el ancho y el margen del modal-->
            <div class="modal-content">
                <div class="modal-body">
                    
                        <!-- Fila 2-->
                        <div class="row"> 
                              <!--PARTE 2-->
                          <div class="col-md-12">
                            <div class="panel panel-primary"> 
                              <div class="panel-heading">Editar Cliente</div>
                                  <!-- Cuerpo-->
                              <div class="panel-body"> 
                                <form form id="gracia" action="<?php echo site_url(); ?>Clientes/modificar" method="POST"> 
                                <?php foreach ($variable as $item) { ?> 
                                  <!-- Primer campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <!---ID-->
                                     <input type="hidden" id="id" name="id_cliente" class="form-control" value="<?php echo $item['id_cliente'];?>">
                                  <label for="" class="input-group-addon"> Nombre del cliente:</label>
                                  <input type="text" id="nombre" name="nombre_cliente" class="form-control" value="<?php echo $item['nombre_cliente'];?>"> 
                                  </div>  
                                  <!-- Segundo campo-->
                                  <div class="col-md-12 form-group input-group">
                                  <label for="" class="input-group-addon"> Fecha de nacimiento cliente:</label>
                                   <input type="date" id="fecha" onblur="calculaEdad()" name="fecha_nacimiento_cliente"  value="<?php echo $item['fecha_nacimiento_cliente'];?>" class="form-control" >
                                  </div>                              
                                  <!-- Tercero campo-->
                                  <div class="col-md-12 form-group input-group">
                                      <label for="" class="input-group-addon"> Edad de Cliente:</label>
                                       <input type="text" id="edad" name="edad_cliente" class="form-control"  value="<?php echo $item['edad_cliente'];?>" >
                                  </div>
                                  <!-- Cuarto campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon"> Número de DUI:</label>
                                    <input type="text" id="DUI" name="numero_DUI" class="form-control"  value="<?php echo $item['numero_DUI'];?>" required>
                                  </div>

                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon"> Número de NIT:</label>
                                  <input type="text" id="NIT" name="numero_NIT" class="form-control"  value="<?php echo $item['numero_NIT'];?>" required>
                                  </div>

                                  <div class="col-md-12 form-group input-group">
                                  <label for="" class="input-group-addon"> Estado de Cliente:</label>
                                  <select name="estado_cliente">
                        
                                 <?php if($item['estado_cliente']=='Habilitado'){?>
                                  <option value="Habilitado" class="form-control" selected="true">Habilitado</option>
                                  <option value="Deshabilitado" class="form-control">Deshabilitado</option>
                                 <?php }else{?>
                                  <option value="Habilitado" class="form-control" >Habilitado</option>
                                  <option value="Deshabilitado" class="form-control" selected="true">Deshabilitado</option>
    
                                <?php }?>
                                
                              </select>
                                  </div>
                                  <!-- Quinto campo-->
                                  <div class="col-md-12 form-group input-group">
                                     <label for="" class="input-group-addon"> Telefono de cliente:</label>
                                     <input type="text" id="telefono" name="telefono_cliente"  value="<?php echo $item['telefono_cliente'];?>" class="form-control" required>
                                  </div>
                                
                                  <div class="col-md-12 text-center">
                                    
                                    <!-- Boton-->
                                    <button type="submit" class="btn btn-success">Guardar Datos</button>
                                  </div>
                                </form>
                                   <?php }?>
                              </div>   <!-- FIN DEL CUERPO -->          
                            </div>  <!-- FIN DEL Panel -->       
                          </div> 
                        </div>   
                       
                       
                </div>
                <div class="modal-footer">
                  <a href="<?php echo base_url();?>Clientes/mostrar" class="btn btn-secondary">Close</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<hr>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>


</body>
</html>
<script type="text/javascript">
  function calculaEdad()
{
    var hoy = new Date();
    var nac = new Date(document.getElementById('fecha').value);
    var edad = hoy.getFullYear()-nac.getFullYear();
    document.getElementById('edad').value=edad;
}

</script>