<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <?php
        $resultado = 0;
        $i = 0;

        extract($_POST);
        if(isset($quantitat)){
            while ($i < $quantitat){
                ?>
                <input id="quantitat<?php echo $i ?>" name="quantitat<?php echo $i ?>" type="number" required="required" class="form-control">
                <?php $i++;
            }
            ?>

            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>    

        <?php
        } else {
            $quantitat = $_POST;

            do {
                $resultado += $quantitat["quantitat$i"];
                $i++;
            } while ($i < count($quantitat)-1);

            echo $resultado;
        }
        ?>
        
        