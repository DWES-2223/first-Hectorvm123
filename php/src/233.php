<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
    $dinero = $_GET["quantitat"];
    $billetesM = [500, 200, 100, 50, 20, 10, 5, 2, 1];
    $numBilletes = ["500"=>0, "200"=>0, "100"=>0, "50"=>0, "20"=>0, "10"=>0, "5"=>0, "2"=>0, "1"=>0];

    if (isset($dinero)){
        foreach ($billetesM as $billete){
            $numBilletes["$billete"] = intdiv($dinero, $billete);
            $dinero -= $numBilletes["$billete"] * $billete;
        }
    ?>
    <ul><?php foreach ($billetesM as $billete){
            if ($numBilletes["$billete"] != 0){ 
        ?>
        <li><?php
            if($billete>2) {
                echo $numBilletes["$billete"], " bitllet de $billete";
            } else {
                echo $numBilletes["$billete"], " moneda de $billete";
            }}}?></li>
    </ul>
    <?php
    } else {
        echo "Posa la quantitat a la variable quantitat pel QueryString";
    }
    ?>
    </body>
</html>