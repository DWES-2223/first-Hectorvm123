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
                    <th>Email</th>
                </tr> 
            </thead>
        <?php
        $arrayBid = [["nom" => "paco", "alçada" => 177, "email" => "paco@email.com"],
                     ["nom" => "pepe", "alçada" => 180, "email" => "pepe@email.com"],
                     ["nom" => "pope", "alçada" => 160, "email" => "pope@email.com"],
                     ["nom" => "hector", "alçada" => 177, "email" => "hector@email.com"],
                     ["nom" => "elena", "alçada" => 160, "email" => "elena@email.com"]];
      
        foreach ($arrayBid as $array){
        ?>
        
        
            <tr>
                <td><?php echo $array["nom"];?></td>
                <td><?php echo $array["alçada"];?></td>
                <td><?php echo $array["email"];}?></td>
            </tr>
        </table>
    </body>
</html>