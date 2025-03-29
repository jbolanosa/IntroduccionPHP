<?php include 'includes/header.php';


$nombreCliente = "Juan Pablo";

//tamaño de un string
echo strlen($nombreCliente);

$texto = trim($nombreCliente);
echo strlen($texto);


echo strtoupper($nombreCliente);

echo strtolower($nombreCliente);

echo str_replace('Juan', 'J', $nombreCliente);


echo strpos($nombreCliente, 'Pablo');

$tipoCliente = "Premium";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;

//esta deprecado
//echo "El cliente {$nombreCliente} es ${tipoCliente}";

include 'includes/footer.php';