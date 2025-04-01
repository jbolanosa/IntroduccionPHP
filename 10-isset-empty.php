<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];



//empty = revisa si un arreglo esta vacio
var_dump( empty($clientes));
var_dump( empty($clientes2));
var_dump( empty($clientes3));

//isset = revisa si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump( isset($clientes4));
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));

//isset = para revisar si exite una propiedad en un arreglo asociativo
var_dump( isset($cliente['nombre']));
var_dump( isset($cliente['codigo']));





include 'includes/footer.php';

