<!DOCTYPE html>
<html lang="en">
    <?php require 'application/views/Plantilla/navbar.php';?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
          <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <!-- Bootstrap CDN -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo site_url();?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo site_url();?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo site_url();?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url();?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo site_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">


<!--ESTO ES EL ESPACIO PARA MOSTRAR EN PANTALLA-->
        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inventario
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
 <!-- TABLA PARA MOSTRAR DATOS-->
                       <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                            <tr>
                                <th >Nombre de cliente</th>
                                <th>Fecha de nacimiento</th>
                                <th>Edad de cliente</th>
                                <th>Número de DUI</th> 
                                <th>Número de NIT</th>
                                <th>Estado de cliente</th>
                                <th>Telefono de cliente</th>
                               <!-- <th>Eliminar</th>-->
                                <th>Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dcliente as $dc):?>
 
                            <tr>
                                <!-- <td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td> -->
                                <td><?=$dc->nombre_cliente?></td>
                                <td><?=$dc->fecha_nacimiento_cliente?></td>
                                <td><?=$dc->edad_cliente?></td>
                                <td><?=$dc->numero_DUI?></td>
                                <td><?=$dc->numero_NIT?></td>
                                <td><?=$dc->estado_cliente?></td>
                                <td><?=$dc->telefono_cliente?></td>
                              <!--  <td><a href="<?php echo base_url(); ?>Clientes/eliminar?id=<?php echo $dc->id_cliente;?>">Eliminar</a></td>-->
                                <td><a href="<?php echo base_url(); ?>Clientes/comoYoQuiero?id=<?php echo $dc->id_cliente;?>">Modificar</a></td>
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

  
    <!--FINALIZA APLICACION-->
  <?php require 'application/views/Plantilla/footer.php' ;?>   
</body>

</html>

  
    <script>
    $(document).ready(function() {
        //Page-Level Demo Scripts - Tables - Use for reference 
        $('#dataTables-example').DataTable({
            responsive: true,
            "language": {
                "url": "js/lenguaje.js"
            }
             
        });
    });
    </script>













    
        