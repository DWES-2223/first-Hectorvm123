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

    $leftWrite = 1;
    $rightWrite = 0;

    
    while ($filCount < $files) {
        ?>
        <tr> <?php
            while ($colCount <= $columnes) {
                $rowLetter = 65 + $filCount;
                ?><td>
                    <?php
                    if ($colCount == $leftWrite){
                        echo "&#$rowLetter;$colCount";
                    }
                    if ($colCount == $columnes-$rightWrite){
                        if ($colCount == $leftWrite){
                            $rightWrite++;
                        } else {
                            echo "&#$rowLetter;$colCount";
                            $rightWrite++;
                        }
                    }
                 ?>
                </td> 
                
                <?php 
                $colCount++;
                
            }
            $leftWrite++;
            ?></tr> <?php
    $colCount = 1;
    $filCount++;
    }
    ?>
    </table>
</body>