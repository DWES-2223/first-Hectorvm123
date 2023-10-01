<?php
include("atletes.php");
require("functions272.php");

echo "Record més antic: ", vell($records),"<br>";
$laureado = laureado($records);

echo "Club amb més títols: ", $laureado["club"],"<br>";
echo "Persona amb més records: ", $laureado["atleta"],"<br>";
echo "Ciutat més propicia: ", $laureado["ciudad"],"<br>";


$jove = jove(array_column_ext($records,'natalici',-1) ,array_column_ext($records,'data',-1));
$anysJove = $jove[array_key_first($jove)];
$atletaJove = $records[array_key_first($jove)]["atleta"];
echo "Mes jove en aconsegir el record: ", $atletaJove, " - ", $anysJove, " anys"; 

include("270a.php");
?>
