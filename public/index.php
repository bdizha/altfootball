<?php

function compute($array)
{
    $sequences = [];

    $sequence = [];
    foreach ($array as $key => $item) {
        if($key === 5){
            print_r($sequences);
        }
        $sequences = sequence($array, $sequences, $key, $key + 1);
    }

    print_r($sequences);
}

function sequence($array, $sequences, $key1, $key2){
    $sequence = [];
    foreach($array as $key => $item){
        if($key1 < $key && ($key2 != $key || $key2 == $key1)) {
            $sequence[] = $array[$key];
        }
    }

    $sequences[] = $sequence;

    echo count($array). " vs {$key2}\n";

    $key2 = $key2 + 1;
    if($key2 >= count($array)){
        return $sequences;
    }
    return sequence($array, $sequences, $key1, $key2);
}

$A = [6, 10, 6, 9, 7, 8];

compute($A);
