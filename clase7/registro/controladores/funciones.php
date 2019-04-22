<?php
function dd($valor){
    echo "<pre>";
        var_dump($valor);
        exit;
    echo "</pre>";
}

function validar($datos){
    $errores = [];
    $nombre = trim($datos["nombre"]);
    if (empty($nombre)){
        $errores["nombre"]="Complete su nombre";
    }
    $email = trim($datos["email"]);
    if(empty($email)){
        $errores["email"]="Complete el email";
    }elseif (!filter_var($email,    FILTER_VALIDATE_EMAIL)){
        $errores["email"]="Email  inválido";
    
    }
    $password = trim($datos["password"]);
    $repassword = trim($datos["repassword"]);
    if(empty($password)){
        $errores["password"] = "Introduzca su password";
    }elseif (strlen($password)<6) {
        $errores["password"] = "La contraseña debe tener mínimo seis carácteres";
    }elseif ($password != $repassword) {
        $errores["repassword"]= "Hermano querido no coinciden las contraseñas";
    }

return $errores;
}

function persistir($campo){
    if(isset($_POST[$campo])){
        return $_POST[$campo];
    }
}

function crearRegistro($datos){
    $usuario = [
        "nombre"=>$datos["nombre"],
        "email"=>$datos["email"],
        "password"=> password_hash($datos["password"],PASSWORD_DEFAULT)
    ];
    return $usuario;
}

function guardar($usuario){
    $jsusuario = json_encode($usuario);
    file_put_contents("usuarios.json", $jsusuario . PHP_EOL ,FILE_APPEND);
}