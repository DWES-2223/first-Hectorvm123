<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        extract($_POST);
        
        $i = 0;
        $totalEuro = 0;
        $totalPeseta = 0;
        ?>

        <table>
            <thead>
                <th>Nom</th>
                <th>Preu €</th>
                <th>Preu peseta</th>
            </thead>
            <?php
            while ($i<(count($_POST)-1)/2){
                $totalEuro += (float)$_POST["preu$i"];
                $totalPeseta += (float)$_POST["preu$i"]*166;
            ?>
            <tr>
                <td><?php echo $_POST["nom$i"];?></td>
                <td><?php echo $_POST["preu$i"];?></td>
                <td><?php echo ((float)$_POST["preu$i"]*166);?></td>
            </tr>
            <?php
            $i++;
            }
            ?>
            <tr>
                <th>Totales</th>
                <td><?php echo $totalEuro;?></td>
                <td><?php echo $totalPeseta;?></td>


        </table>
    </body>
</html>