<?php
$array = [];
$i = 0;

while ($i<50){
    $array[$i] = rand(0,99);
    $i++;
}
$i = 0;
?>
<ul>
   <?php 
    while ($i<count($array)){
    ?>
    <li><?php echo $array[$i]; $i++;}?></li>
</ul>
