<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <style type="text/css">
  body {
            font-family: Georgia, 
            "Times New Roman",
            Times, serif;
            color: purple;
            background-color: lightblue; 
        }

  input{
            width: 20%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }

  button{
            width: 10%;
            background-color: gray;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }



  </style>

    <title></title>
</head>

<body style="padding: 20px">
   <fieldset>
            <form id="gracia" action="<?php echo site_url(); ?>/Local/RegistroCompra" method="POST"  >
             <div align="center">
                <h1>Registro de compras</h1>
             </div>
             <div align="center">
                <label>Codigo de juego:</label>
                <input type="text" id="codigo" name="codigo_juego">
             </div><br>
             <div align="center">
                <label>Nombre de juego:</label>
                <input type="text" id="nombre" name="nombre_juego">
             </div><br>
             <div align="center">
            <div align="center">
                <label>Cantidad producto:</label>
                <input type="text" id="cantidad" name="cantidad_juego">
             </div><br>
             <div align="center">
                <label>Fecha de compra:</label>
                <input type="date" id="fecha" name="fecha_compra">
             </div><br>
             <div align="center">
                <label>Precio U.Compra:</label>
                <input type="text" id="precio" name="precio_unitario_compra">
             </div><br>
                <label>Total de compra:</label>
                <input type="text" id="total" name="total_compra">
             </div><br>
             <div align="center">
               <button type='button' onclick="validar()">Realizar compra</button> 
             </div>
             </form>
 </fieldset>
</body>
</html>

<script type="text/javascript">
    function validar()
    {
        if (document.getElementById("codigo").value=='' || document.getElementById("nombre").value=='' ||
            document.getElementById("cantidad").value=='' || document.getElementById("fecha").value=='' || 
            document.getElementById("precio").value=='' || document.getElementById("total").value=='') {
            alert("El / los campo(s) no puede(n) estar vacio(s)");          

          }
          else {
             document.getElementById("gracia").submit();
          }
    }

</script>
