<?php

$array = [
    1 => 'Um',
    2 => 'Dois',
    3 => 'Três'
];

foreach($array as $indice => $item){
    echo "{$indice} em português é: $item" . PHP_EOL;
}

echo 'Total: ' . count($array);