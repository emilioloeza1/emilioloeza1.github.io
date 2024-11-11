<DOCTYPE html>
<html>
<head> <title> Práctica 3 </title> </head>
<body>
<?php
$a = 10;
$b = 5;
echo "La variable a=$a y la variable b=$b <br><br>";
echo "OPERADORES ARITMÉTICOS <br>";

echo "Esto es una suma $a + $b = " .($a + $b). "<br>";
echo "Esto es una resta $a - $b = " . ($a - $b) . "<br>";
echo "Esto es una multiplicación $a * $b = " . ($a * $b) . "<br>";
echo "Esto es una división $a / $b = " . ($a / $b) . "<br>";
echo "Esto es un módulo (resto de la división) $a % $b = " . ($a % $b) . "<br><br>";

echo "OPERADORES DE INCREMENTO Y DECREMENTO <br>";
$a++;
echo "Esto es un incremento (++), ahora a es igual a $a <br>";

$b--;
echo "Esto es un decremento (--), ahora b es igual a $b <br><br>";

$a = 10;
$b = 5;
echo " OPERADORES DE COMPARACIÓN <br>";
echo "Comparación de igualdad ($a == $b): " . ($a == $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de identidad ($a === $b): " . ($a === $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de diferencia ($a <> $b): " . ($a <> $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de diferencia ($a != $b): " . ($a != $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de no identidad ($a !== $b): " . ($a !== $b ? "verdadero" : "falso") . "<br>";
echo "Comparación mayor que ($a > $b): " . ($a > $b ? "verdadero" : "falso") . "<br>";
echo "Comparación menor que ($a < $b): " . ($a < $b ? "verdadero" : "falso") . "<br>";
echo "Comparación mayor o igual que ($a >= $b): " . ($a >= $b ? "verdadero" : "falso") . "<br>";
echo "Comparación menor o igual que ($a <= $b): " . ($a <= $b ? "verdadero" : "falso") . "<br> <br>";

echo " OPERADORES DE ASIGNACIÓN <br>";
echo " En estos operadores agregamos una variable c, a la cual le asignamos el valor a.<br><br>";
$c = $a;
echo "Asignación, ahora c es igual a = $c <br>";

$c += $b;
echo "Esto es una suma y asignación, ahora c = $c (resultado de $a + $b) <br>";

$c -= $b;
echo "Esto es una resta y asignación, ahora c = $c (resultado de $a - $b) <br>";

$c *= $b;
echo "Esto es una multiplicación y asignación, ahora c = $c (resultado de $a * $b) <br>";

$c /= $b;
echo "Esto es una división y asignación, ahora c = $c (resultado de $a / $b) <br>";

$c %= $b;
echo "Esto es un módulo y asignación, ahora c = $c (resto de $a % $b) <br> <br>";

echo "  OPERADORES LÓGICOS <br>";
echo "  Se agrega una nueva variable para asignar el posible resultado. <br><br>";
$d = ($a > 10) && ($b < 10);
echo "Esto es una operación lógica AND: (($a > 10) && ($b < 10)) es " . ($d ? "verdadero" : "falso") . "<br>";

$d = ($a > 10) || ($b > 10);
echo "Esto es una operación lógica OR: (($a > 10) || ($b > 10)) es " . ($d ? "verdadero" : "falso") . "<br>";

$d = !($a == $b);
echo "Esto es una operación lógica NOT: !($a == $b) es " . ($d ? "verdadero" : "falso") . "<br><br>";

echo " OPERADORES DE CADENA <br>";
echo "Tenemos la variable mensaje y le asignamos el valor Israel para luego juntarlo con la palabra Palma<br>";
$mensaje = "Israel";
echo "Concatenación de cadena con (.): " . $mensaje . " Palma<br><br>";
echo "Acá ya teniendo la variable anterior le asignaremos ahora la palabra Palma<br>";
$mensaje .= " Palma";
echo "Asignación con concatenación (.=): " . $mensaje . "<br>";
?>
    </body>
</html>
