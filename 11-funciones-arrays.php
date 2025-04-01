<?php include 'includes/header.php';


//in array = buscar elementos en un arreglo

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Audifonos', $carrito));
var_dump(in_array('Tablet', $carrito));

//ordenar elementos de un arreglo
$numeros = [1, 3, 4, 5, 1, 2];
sort($numeros); //de menor a mayor
rsort($numeros); //de mayor a menor

echo '<pre>';
var_dump($numeros);
echo '</pre>';

//ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo '<pre>';
var_dump($cliente);
echo '</pre>';

asort($cliente);  //ordena los valores (orden alfabetico)
arsort($cliente); // ordena por valores (Z primero)
ksort($cliente);   //ordena las llaves (orden alfabetico)
krsort($cliente);   //ordena por llaves (orden alfabetico de la Z a la A)

echo '<pre>';
var_dump($cliente);
echo '</pre>';

include 'includes/footer.php';