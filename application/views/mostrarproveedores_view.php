<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mostrar Proveedores</title>
</head>

<body>

    <div id="wrapper">


<!--ESTO ES EL ESPACIO PARA MOSTRAR EN PANTALLA-->
        <div id="page-wrapper" class="responsive">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <h3> Proveedores</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" class="table-responsive">
                        <!-- TABLA PARA MOSTRAR DATOS-->
                      <table width="100%" class="table table-striped table-bordered table-hover" id="tab_proveedores">
                         <thead style="text-align:center;"> 
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo de persona</th>
                                <th>Representante</th> 
                                <th>Direccion</th>
                                <th>Correo</th>
                                <th>Contacto</th>
                                <!--<th>Estado</th>-->
                                <th>Acciones</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dproveedores as $dp):
                             ?>
 
                            <tr>
                                <td><?=$dp->nombre_empresa?></td>
                                <td><?=$dp->tipo_persona?></td>
                                <td><?=$dp->representante_empresa?></td>
                                <td><?=$dp->direccion_proveedores?> </td>
                                <td><?=$dp->correo_proveedores?> </td>
                                <td><?=$dp->contacto_proveedores?></td>
                                <!--<td><?//=$dp->estado_provedores?></td>-->
                                <td>
                                  <a href="<?php echo base_url();?>Proveedores/mostrarId?idp=<?php echo $dp->id_proveedores;?>" class="btn btn-info">Editar</a><br><br>
                                  <!--<a href="<?php echo base_url();?>Proveedores/eliminar?idp=<?php echo $dp->id_proveedores;?>" class="btn btn-info">Eliminar </a>-->
                                </td>
                          
                              </tr>
             
                            <?php endforeach;?>
                        </tbody>
                      </table>
  
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
        <!-- /AQUI TERMINA LO QUE SE MUESTRA -->

    </div>
    <!-- /#wrapper -->

    <!-- DataTables JavaScript -->
    <script src="<?php echo site_url();?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo site_url();?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo site_url();?>vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url();?>dist/js/sb-admin-2.js"></script>  
</body>

</html>

  
<script>
$(document).ready(function() {
//Page-Level Demo Scripts - Tables - Use for reference 
    $('#tab_proveedores').DataTable({
        responsive: true,
        "language": {
        "url": "js/lenguaje.js"
    }    

  });
});


</script>





