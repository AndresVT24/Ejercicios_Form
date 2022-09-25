<?php
$user_name= $_POST["user_name"];
$user_passw= $_POST["user_password"];
$cont = -1;
$ver = 0;
$usuarios = array(
    "123andres" => "andres",
    "123" => "pepe",
    "321" => "juan",
    "asd" => "admin"
);

foreach ($usuarios as $user){
    $cont = $cont + 1;
    $ver = $ver + 1;

    if ($user == $user_name and array_keys($usuarios)[$cont] == $user_passw){

        if (array_keys($usuarios)[$cont] == $user_passw){
            echo "Login Correcte!";
            break;
        }
        
        else{
            echo "Login Incorrecta";
            break;
        }
    }

    elseif ($ver == count($usuarios)){
        echo "Login Incorrecta!";
    }
}
?>