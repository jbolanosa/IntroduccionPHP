<?php include 'includes/header.php';



$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 == $numero4);
echo "<br/>";

var_dump($numero2 === $numero4);
echo "<br/>";

var_dump($numero1 <=> $numero2);
echo "<br/>";

//si es mayor el de la izquierda da -1, si son iguales 0, si es mayor el otro 1
var_dump($numero2 <=> $numero2);
echo "<br/>";

include 'includes/footer.php';