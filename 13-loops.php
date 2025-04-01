<?php include 'includes/header.php';

//WHILE
$i = 0;

while($i < 10) {

    echo $i . "<br>";

    $i++;

}

//Do while

$i = 0;

do {

    echo $i . "<br>";

    $i++;

} while( $i < 10 );

//for

// for($i = 1; $i < 1000; $i++){
//     if($i % 15 === 0 && $i % 5 === 0){
//         echo $i . " - FIZZ BUZZ <br>";
//     }
//     else if($i % 3 === 0){
//         echo $i . " - Fizz <br>";
//     } else if($i % 5 === 0) {
//         echo $i . " - BUZZ <br>";
//     } else {
//         echo $i . " <br> ";
//     }
// }

//for each

$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $value) {
    echo $value . "<br>";
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ($cliente as $key => $valor){
    echo $valor . '<br>';
}

include 'includes/footer.php';