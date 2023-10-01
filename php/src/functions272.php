<?php
function fecha_inglesa($fecha){
    $fechaArray = explode(".", $fecha);
    return implode("/", array_reverse($fechaArray));
}

function vell($records){
    $fechas = [];

    foreach($records as $record){
        $prueba = array_search($record, $records);
        $fechas[$prueba]=  fecha_inglesa($record["data"]);
    }
    return array_search(min($fechas), $fechas);
}


function laureado($records) {
    $ciudades = [];
    $clubs = [];
    $atletas = [];

    foreach($records as $record){
        if(isset($ciudades[$record["lloc"]])){
            $ciudades[$record["lloc"]]++;
        } else {
            $ciudades[$record["lloc"]] = 1;
        }

        if(isset($atletas[$record["atleta"]])){
            $atletas[$record["atleta"]]++;
        } else {
            $atletas[$record["atleta"]] = 1;
        }

        if(isset($clubs[$record["club"]])){
            $clubs[$record["club"]]++;
        } else {
            $clubs[$record["club"]] = 1;
        }
    }

    $club = array_search(max($clubs), $clubs);
    $atleta = array_search(max($atletas), $atletas);
    $ciudad = array_search(max($ciudades), $ciudades);

    return ["ciudad" => $ciudad, "atleta" => $atleta, "club" => $club];

}


function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;

}

function any($data){
    return substr($data,6,4);
}
function jove($arrayNatalici, $arrayData){
    $diferencias = [];
    
    foreach(array_keys($arrayNatalici) as $prova){
        $diferencias[$prova] = (int)any($arrayData[$prova]) - (int)$arrayNatalici[$prova];
    }

    
    return [array_search(min($diferencias), $diferencias) => min($diferencias)];
}


?>