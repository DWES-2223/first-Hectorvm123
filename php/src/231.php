<?php
$array = [];
$i = 0;
$total = 0;

while ($i<33){
    $array[$i] = rand(0,100);
    $total += $array[$i];
    $i++;
}
$i = 0;

echo max($array),"<br>";
echo min($array),"<br>";
echo intdiv($total,count($array));
?>

