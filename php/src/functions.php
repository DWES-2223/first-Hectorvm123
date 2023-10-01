<?php

function esParell(int $num) : bool {
    return $num %2 == 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $i = 0;
    $array = [];
    while ($i<$tam) {
        $array[$i] = rand($min, $max);
        $i++;
    }
    return $array;
}
function countParells(array &$array): int {
    $count = 0;
    $i = 0;
    while ($i<count($array)){
        if ($array[$i] % 2){
            $count++;
        }
        $i++;
    }
    return $array;
}

function major(): int {
    $numeros = func_get_args();
    $mayor = 0;

    foreach ($numeros as $numero){
        if ($numero > $mayor){
            $mayor = $numero;
        }
    }
    return $mayor;
}

function concatenar() : string {
    $palabras = func_get_args();
    $frase = implode(" ", $palabras);
    
    return $frase;
}

function digits(int $num): int {
    $string = (string)$num;
    return strlen($string);
}

function digitsN(int $num, int $post): int {
    $string = (string)$num;
    return (int)$string[$post];
}

function llevaDarrere(int $num, int $cant): int {
    $string = (string)$num;
    $nuevaLen = strlen($string) - $cant;
    $nuevaCadena = substr($string, 0, $nuevaLen);

    return (int)$nuevaCadena;
}

function llevaDavant(int $num, int $cant): int {
    $string = (string)$num;
    $nuevaCadena = substr($string, $cant, strlen($string));

    return (int)$nuevaCadena;
}

function euro2peseta(int $euro,$cotitzacion = 166): float {
    return $euro * $cotitzacion;
}

function peseta2euro(int $peseta): float {
    return $peseta / 166;
}
?>