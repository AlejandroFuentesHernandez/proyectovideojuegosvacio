<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
            <form id="gracia" action="<?php echo site_url(); ?>/Cliente/RegistroCliente" method="POST"  >
             <div align="center">
                <font color=""><h1>Registro de Clientes</h1></font>
             </div>
             <div align="center">
                <label>Nombre :</label>
                <input type="text" id="nombre" name="nombre_cliente">
             </div><br>
             <div align="center">
                <label>N° DUI:</label>
                <input type="text" id="numero" name="numero_DUI">
             </div><br>
             <div align="center">
                <label>N° NIT:</label>
                <input type="text" id="NIT" name="numero_NIT">
             </div><br>
             <div align="center">
                <label>Telefono:</label>
                <input type="text" id="telefono" name="telefono_cliente">
             </div><br>
             <div align="center">
                <button type='button' onclick="validar()">Ingresar cliente</button>
             </div>
             </form>
 </fieldset>
</body>
</html>

<script type="text/javascript">
    function validar()
    {
        if (document.getElementById("nombre").value=='' || document.getElementById("numero").value=='' ||
            document.getElementById("NIT").value=='' || document.getElementById("telefono").value=='') {
            alert("El / los campo(s) no puede(n) estar vacio(s)");          

          }
          else {
             document.getElementById("gracia").submit();
          }
    }

</script>
