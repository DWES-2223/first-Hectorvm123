<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post" action="244b.php">
            <?php
            extract($_GET);
            $i = 0;
            while ($i < $quantitat) {
                ?>
                <label for="nom<?php echo $i?>">Nombre del producto:</label><br>
                <input id="nom<?php echo $i?>" name="nom<?php echo $i?>" type="text" required="required"><br>
                
                <label for="preu<?php echo $i?>">Precio:</label><br>
                <input id="preu<?php echo $i?>" name="preu<?php echo $i?>" type="text" required="required"><br><br>
                <?php $i++; } ?>
            <button name="submit" type="submit">Submit</button>
            </form>
    </body>
</html>