<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>
<?php 
define("IVA","16");
$total = 1160;
$total_iva = $total+($total*IVA)/100;
echo "precio mas iva: ".$total_iva;
?>

    </body>
</html>