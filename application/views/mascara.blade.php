<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js" type="text/javascript"></script>

</head>
 
<body>
<form action="">
      
  <div>
    <label for="phone">Phone</label>
    <!-- or set via JS -->
    <input id="phone" type="text" />
  </div>
<input type="text"  pattern="^[0]{3}[\-][0]{7}[\-][0]{1}" title="000-0000000-0">
</form>
</body>
</html>
<script type="text/javascript">
    jQuery(function($){
    $("#phone").inputmask({"mask": " 9999-9999"});
    });
 </script>