<?php
extract($_POST);
include("246password.php");
$encontrado = false;
$correcto = false;
if (isset($usuari, $password)){
    foreach($users as $user){
        if($user["usuari"] === $usuari){
            $encontrado = true;
        }
    }

    if($encontrado){
        foreach($users as $user){
            if($user["password"] === $password){
                $correcto = true;
            }
        }
        if($correcto){
            echo "Benvingut $usuari";
        } else {
            echo "Password incorrecte";
        }

    } else {
        echo "Usuari no existent";
    }

}
?>