<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <table>
            <thead> 
                <tr> 
                    <th>Nom</th> 
                    <th>Alçada</th> 
                </tr> 
            </thead>
        <?php
        $array = ["paco" => 177, "pepe" => 180, "pope" => 160, "hector" => 177, "elena" => 160];
        foreach ($array as $clave => $valor) {
        ?>
        
        
            <tr>
                <td><?php echo $clave;?></td>
                <td><?php echo $valor;}?></td>
            </tr>
        </table>
    </body>
</html>