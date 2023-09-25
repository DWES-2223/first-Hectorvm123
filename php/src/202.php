<html lang="es">
<?php
$nombre = "Hector";
$primerApellido = "Valls";
$segundoApellido = "Mira";
$email = "correo@gmail.com";
$anyoNacimiento = "2003";
$telefono = "642010493";

define("FACTOR", 2);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
<table>
  <tr>
    <td>Nom</td>
    <td>
    <?php
        echo $nombre;
        ?>
    </td>
  </tr>
  <tr>
    <td>Cognoms</td>
    <td>
    <?php
        echo "$primerApellido $segundoApellido";
        ?>
    </td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?php
        echo $email;
        ?>
        </td>
  </tr>
  <tr>
    <th>Natalici</th>
    <td><?php
        echo $anyoNacimiento;
        ?>
        </td>
  </tr>
  <tr>
    <th>Telèfono</th>
    <td><?php
        echo $telefono;
        ?>
        </td>
  </tr>
</table>
    
</body>
</html>