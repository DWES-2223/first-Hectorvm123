<!DOCTYPE html>
<html lang="en">
    <?php
    $edad = $_GET["edat"]??null;
    $edad2013 = $edad - 10;
    $edad2033 = $edad + 10;
    $jubilacion = 67;


    $anyoJubilacion = $jubilacion - $edad + 2023
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <?php
    if (isset($edad)){
        ?>
    <p>
        <?php echo $edad2013;?><br>
        <?php echo $edad2033;?><br>
        <?php echo $anyoJubilacion;?>
    </p>
    <?php
    }else{
        ?>

    <?php echo "Posa la teu edat actual a la variable edat pel QueryString"; }?>

</body>
</html>