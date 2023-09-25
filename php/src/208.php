<?php
$edat = $_GET["edat"];

if (isset($edat)){
    switch ($edat){
        case 3 > $edat:
            echo "ets un bebe";
            break;
        case 3 <= $edat && $edat <= 12:
            echo "ets un xiquet";
            break;
        case 13 <= $edat && $edat <= 17:
            echo "ets un adolescent";
            break;

        case 18 <= $edat && $edat <= 66:
            echo "ets un adult";
            break;

        case 67 <= $edat:
            echo "ets un jubilat";
            break;

    }
    
}else{
    echo "Posa la teu edat actual a la variable edat pel QueryString";
}
?>