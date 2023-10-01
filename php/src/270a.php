<?php
$proves = array_keys($records);
?>
<table>
    <thead>
        <tr><th>Prova</th>
            <th>Marca</th>
            <th>Atleta</th>
            <th>Natalici</th>
            <th>Club</th>
            <th>Data</th>
            <th>Lloc</th>
        </tr>
    </thead>
    <?php
        foreach($proves as $prova){
        ?><tr><td><?=$prova?></td> <?php
        foreach($records[$prova] as $record){
        ?><td><?=$record?></td>
        <?php
        }
        ?></tr>
    <?php
    }
    ?>
</table>
