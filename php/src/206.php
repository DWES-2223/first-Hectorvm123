<?php
$numero = $_GET["numero"];
$result = "El número $numero és zero";

if (isset($numero)){
    if ($numero > 0){
        $result = "El número $numero és positiu";
    } elseif ($numero < 0){
        $result = "El número $numero és negatiu";
    }
    echo $result;
}else{
    echo "Posa el numero a comprobar a la variable numero del QueryString";
}
?>