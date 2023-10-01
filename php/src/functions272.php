<?php
function fecha_inglesa($fecha){
    $fechaArray = explode(".", $fecha);
    return implode("/", array_reverse($fechaArray));
}
function vell($fechas){
    $fechasInglesas = [];

    foreach($fechas as $fecha){
        $prueba = array_search($fecha, $fechas);
        $fechasInglesas[$prueba]=  fecha_inglesa($fecha);
    }
    return array_search(min($fechasInglesas), $fechasInglesas);
}


function laureado($records) {
    $ciudades = [];
    

    foreach($records as $record){
        if(array_key_exists($record, $ciudades)){
            $ciudades[$record]++;
        } else {
            $ciudades[$record] = 1;
        }
    }
    
    return array_search(max($ciudades), $ciudades);

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