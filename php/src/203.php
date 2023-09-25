<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    extract($_POST)
    ?>

<table>
    <td>Nom</td>
    <td><?php echo $nom;?></td>
    <td>Cognoms</td>
    <td><?php echo trim("$cognom1 $cognom2");?></td>
    <td>Email</td>
    <td><?php
        echo $email;
        ?>
        </td>
    <td>Natalici</td>
    <td><?php
        echo $any;
        ?>
        </td>
    <td>Telèfono</td>
    <td>
        <?php
        echo $telefon;
        ?>
        </td>
</table>
</body>
</html>
