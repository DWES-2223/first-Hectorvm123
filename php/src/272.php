<?php
include("atletes.php");
require("functions272.php");

echo "Record més antic: ", vell(array_column_ext($records,'data',-1)),"<br>";

echo "Club amb més títols: ", laureado(array_column_ext($records,'club',-1)),"<br>";
echo "Persona amb més records: ",laureado(array_column_ext($records,'atleta',-1)),"<br>";
echo "Ciutat més propicia: ", laureado(array_column_ext($records,'lloc',-1)),"<br>";


$jove = jove(array_column_ext($records,'natalici',-1) ,array_column_ext($records,'data',-1));
$anysJove = $jove[array_key_first($jove)];
$atletaJove = $records[array_key_first($jove)]["atleta"];
echo "Mes jove en aconsegir el record: ", $atletaJove, " - ", $anysJove, " anys"; 

include("270a.php");
?>
