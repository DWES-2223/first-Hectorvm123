<?php
$titulo = "Supermercat Sever";
include("cabeza.php");
?>
<h1><?= $titulo ?></h1><br>

<?php
        extract($_POST);
        
        $i = 0;
        $totalEuro = 0;
        $totalPeseta = 0;
        ?>

            <?php
            while ($i<(count($_POST)-1)/2){
                $totalEuro += (float)$_POST["preu$i"];
                $totalPeseta += (float)$_POST["preu$i"]*166;
            ?>
            <ul>
                <li><?php echo "Nombre: ", $_POST["nom$i"];?></li>
                <li><?php echo $_POST["preu$i"], "€";?></li>
                <li><?php echo ((float)$_POST["preu$i"]*166), " Ptas";?></li>
            </ul>
            <?php
            $i++;
            }
            ?>
            <h3>Totales</h3>
            <ul>
                <li><?php echo "Euros: $totalEuro";?></li>
                <li><?php echo "Pesetas: $totalPeseta";?></li>
            </ul>


<?php
include("pie.html");
?>