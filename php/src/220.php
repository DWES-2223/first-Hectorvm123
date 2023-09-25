<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>220</title>
    </head>
    <body>
        <?php
        $num = 50;
        $i = 1
        ?>
        
        <ul> <?php while ($i <= $num) {
            if ($i % 2 == 0) { ?><li><?php echo $i; ?></li><?php }
            $i++;
        }?></ul>
</body>
</html>
