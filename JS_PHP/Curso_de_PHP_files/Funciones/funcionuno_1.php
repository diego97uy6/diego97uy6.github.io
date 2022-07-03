<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

       <?php
          

function calcular_Cuadrado($numero) {
              $calculo = $numero * $numero;
              return $calculo;
}

function calcular_Cubo($numero) {
             $calculo = $numero * $numero * $numero;
             return $calculo;
}

echo "Hola<br/>";
$raiz = calcular_Cuadrado(20);
echo "20 elevado al cudrado  es: ".$raiz.".<br/>";
echo "20 a la cubica  es: ".calcular_Cubo(20)."<br/>";

Fuente: https://www.ejemplode.com/20-php/98-ejemplo_de_funciones_en_php.html#ixzz6JphnGCbg
        ?>

    </body>
</html>