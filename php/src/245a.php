<?php
$titulo = "Supermercat Sever";
include("cabeza.php");
?>
<h1><?= $titulo ?></h1><br>
<form method="post" action="245b.php">
            <?php
            extract($_GET);
            if (isset($quantitat)){
                if (is_numeric($quantitat)){
            $i = 0;
            while ($i < $quantitat) {
                ?>
                <label for="nom<?php echo $i?>">Nombre del producto:</label><br>
                <input id="nom<?php echo $i?>" name="nom<?php echo $i?>" type="text" required="required"><br>
                
                <label for="preu<?php echo $i?>">Precio:</label><br>
                <input id="preu<?php echo $i?>" name="preu<?php echo $i?>" type="text" required="required"><br><br>
                <?php 
                $i++; 
                }
                } else {
                    echo "Dades incorrectes";
                } 
                } else {
                    echo "Dades incorrectes";
                }
                ?>
            <button name="submit" type="submit">Submit</button>
            </form>

<?php
include("pie.html");
?>