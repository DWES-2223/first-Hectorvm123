<?php
extract($_GET);

if(isset($exponent, $base)){
    if ($exponent == 0){
        echo "$base^$exponent = 1";
    } else {

        $resultado = $base;

        for ($i = 1; $i<$exponent; $i++){
            $resultado = $resultado*$base;
        }

        echo "$base^$exponent = $resultado";
    }
} else {
    echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
}

?>