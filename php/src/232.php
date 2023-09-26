<?php
$letras = ["M", "F"];
$destino = [];
$arrayAsociativo = ["M" => 0, "F" => 0];
$arrayF = [];
$i = 0;

while ($i<100) {
    $destino[$i] = $letras[rand(0,1)];
    $i++;
}
$i = 0;

while ($i<count($destino)){
    if ($destino[$i] == "M"){
        $arrayAsociativo["M"]++;
    } else {
        $arrayAsociativo["F"]++;
    }
    $i++;
}
echo "M => ", $arrayAsociativo["M"], "<br>";
echo "F => ", $arrayAsociativo["F"];