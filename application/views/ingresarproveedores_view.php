<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
        <title></title>
</head> 
    <body style="padding: 20px">
      <fieldset>
            <form id="formProv" action="<?php echo site_url(); ?>Proveedores/Registrar_proveedores" method="POST"  > 
             <div align="center">
                <font color=""><h1>Registro Proveedores</h1></font>
             </div>
             <div align="center">
                <label>Nombre de empresa :</label>
                <input type="text" id="nombre" name="nombre_empresa">
             </div><br>
             <div align="center">
                <label>Tipo de empresa:</label>
                <input type="text" id="tipo" name="tipo_empresa">
             </div><br>
             <div align="center">
                <label>Representante:</label>
                <input type="text" id="repre" name="representante_empresa">
             </div><br>
             <div align="center">
                <label>Contacto:</label>
                <input type="text" id="contacto" name="contacto_proveedores">
             </div><br>
             <div align="center">
                <label>Estado:</label>
                <input type="text" id="estado" name="estado_proveedores">
             </div><br>
             <?php echo $insertar; ?>
             <div align="center">
                <input type="submit" value="Enviar" name="boton"> 
             </div>
             </form>
 </fieldset>
    </body>
</html>

</body>
</html>