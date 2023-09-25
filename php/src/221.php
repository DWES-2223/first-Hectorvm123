<?php
$numero = 10;
$total = 0;
$cadenaFinal = "";
$i = 0;
while ($i<$numero){
    $total += $numero - $i;

    $i++;
    if ($i != 10){
        $cadenaFinal = "$cadenaFinal$i+";
    }else{
        $cadenaFinal = "$cadenaFinal$i=$total";
    }
}
echo $cadenaFinal;