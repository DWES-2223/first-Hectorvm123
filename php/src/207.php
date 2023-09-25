<?php
extract($_GET);
$result = max($numero1, $numero2, $numero3);

if (isset($numero1, $numero2, $numero3)){
    
    echo "El nombre més gran entre $numero1, $numero2 i $numero3 és el $result";

    
}else{
    echo "Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString";
}
?>