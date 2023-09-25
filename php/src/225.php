<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
    extract($_POST);
    $colCount = 1;
    $filCount = 0;
    
    while ($filCount < $columnes) {
        ?>
        <tr> <?php
            while ($colCount <= $files) {
                $rowLetter = 65 + $filCount;
                ?><td><?php echo "&#$rowLetter;$colCount"?></td> <?php 
                $colCount++;
            }
            ?></tr> <?php
    $colCount = 1;
    $filCount++;
    }
    ?>
    </table>
</body>