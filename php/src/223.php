<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
        extract($_GET);
        $i = 1;
        if (isset($nombre)){
        ?>

        <table>
            <tr>
                <th>a</th>
                <th>*</th>
                <th>b</th>
                <th>=</th>
                <th>a*b</th>
            </tr>
            <?php
            while($i<=10){
            ?>
            <tr> <td><?php echo $nombre?></td>
                <td>*</td>
                <td><?php echo $i?></td>
                <td>=</td>
                <td><?php echo $i * $nombre?></td>
            </tr>
            <?php $i++;}
            } else {
                echo "Posa el nombre pel QueryString";
            }
            ?>
        </table>
    </body>
</html>