<?php
extract($_GET);

if (isset($hora,$minut,$segon)){
    $segon++;
    if ($segon>59){
        $segon = 0;
        $minut++;
    }
    if ($minut>59){
        $minut = 0;
        $hora++;
    }
    if ($hora>23){
        $hora = 0;
    }
    echo "$hora:$minut:$segon";
    
}else{
    echo "Posa les variables hora, minut i segon pel QueryString";
}
?>