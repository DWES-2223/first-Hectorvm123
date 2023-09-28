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
        ?>

        <table>
            <thead>
                <th>Nom</th>
                <th>Preu</th>
            </thead>
            <?php
            while ($i<(count($_POST)-1)/2){
            ?>
            <tr>
                <td><?php echo $_POST["nom$i"];?></td>
                <td><?php echo $_POST["preu$i"];?></td>
            </tr>
            <?php
            $i++;
            }
            ?>


        </table>
    </body>
</html>