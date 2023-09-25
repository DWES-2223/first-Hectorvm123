<html lang="es">
<?php
$altura = 10;
$anchura = 5;

define("FACTOR", 2);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula</title>
</head>
<body>
    <p>
        <?php
        $area = $altura * $anchura * FACTOR;
        echo "L'àrea del rectangle és: ", $area
        ?>
    </p>
</body>
</html>