<?php include 'includes/header.php';


//podemos definir el tipo devuelto
function usuarioAutenticado(bool $autenticado) : ?string {
    if($autenticado){
        return "El usuario esta autenticado";
    } else {
        return null;
    }
}

function usuarioAutenticado2(bool $autenticado) : string|int {
    if($autenticado){
        return "El usuario esta autenticado";
    } else {
        return 20;
    }
}



$usuario = usuarioAutenticado(true);

echo $usuario;



include 'includes/footer.php';