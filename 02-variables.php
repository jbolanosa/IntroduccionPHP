<?php include 'includes/header.php';

$nombre = 'Jose';


echo $nombre;
var_dump($nombre);


define('constante', "Este es el valor de la constante");

echo constante;


//no es tan comun la siguiente forma
const constante2 = "Hola3";

echo constante2;

include 'includes/footer.php';