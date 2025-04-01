<?php include 'includes/header.php';


$autenticado = true;
$admin = false;

if($autenticado || $admin) {  //o usando &&
    echo "Usuario autenticado";
} else {
    echo "Usuario no autenticado";
}


$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];


if (empty($cliente)) {
    echo 'El arreglo de cliente no esta vacio';

    if(!$cliente['saldo'] > 0){
        echo 'Sado disponible';
    } else {
        echo 'No hay saldo';
    }
} else {

}


if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo'] === 'Premium'){
    echo 'El cliente es premium';
} else {
    echo 'No hay cliente definido o no tiene saldo';
}


$tecnologia = 'PHP';


switch ($tecnologia) {
    case 'PHP':
        echo 'PHP, un excelente lenguaje';
        break;
    
    default:
        echo 'Un lenguaje que no se cual es';
        break;
}

include 'includes/footer.php';