<?php
$dinero = $_GET["quantitat"];
$billetes = [500, 200, 100, 50, 20, 10, 5];
$numBilletes = [0,0,0,0,0,0,0];
$monedas = [2, 1];
$numMonedas =[0, 0];

if (isset($dinero)){
    for ($i=0; $i<count($billetes); $i++){
        $numBilletes[$i] = intdiv($dinero, $billetes[$i]);
        $dinero -= $numBilletes[$i] * $billetes[$i];
        echo "$numBilletes[$i] bitllet de $billetes[$i]<br>";
    } 

    for ($i=0; $i<count($monedas); $i++){
        $numMonedas[$i] = intdiv($dinero, $monedas[$i]);
        $dinero -= $numMonedas[$i] * $monedas[$i];
        echo "$numMonedas[$i] moneda de $monedas[$i]<br>";

    } 
} else {
    echo "Posa la quantitat a la variable quantitat pel QueryString";
}


?>