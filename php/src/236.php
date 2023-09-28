<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action="237.php">
        <?php
        $i = 0;

        extract($_POST);
        if(isset($quantitat)){
            while ($i < $quantitat){
                ?>
                <h3>Persona <?php echo $i+1?></h3><br>
                <label for= "nom<?php echo $i?>">Nombre</label>
                <input id="nom<?php echo $i ?>" name="nom<?php echo $i ?>" type="text" required="required" class="form-control"><br>

                <label for= "altura<?php echo $i?>">Altura</label>
                <input id="altura<?php echo $i ?>" name="altura<?php echo $i ?>" type="number" required="required" class="form-control"><br>

                <label for= "nom<?php echo $i?>">Email</label>
                <input id="email<?php echo $i ?>" name="email<?php echo $i ?>" type="email" required="required" class="form-control"><br><br>

              <?php $i++;
            }
            ?>

            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>    

        <?php
        } else {
            

            echo "Introduce datos en 236.html primero";
        }
        ?>
    </body>
</html>
        
        