<?php

// Função sort()
$notas = [
    10,8,6,9,7
];

$notasString = [
    'Dez', 'Oito', 'Seis', 'Nove', 'Sete'
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);
sort($notasString);

echo 'Desordenadas';
var_dump($notas);

echo 'Ordenadas';
var_dump($notasOrdenadas);

echo 'Ordenar String';
var_dump($notasString);

// Função usort() usada para ordenar de forma específica Ex: com arrays Bidimensional

$notas = [
    [
        'Nome' => 'Rafael',
        'Nota' => 10
    ],
    [
        'Nome' => 'Ana',
        'Nota' => 8
    ],
    [
        'Nome' => 'Elis',
        'Nota' => 6
    ],
    [
        'Nome' => 'Nati',
        'Nota' => 9
    ],
    [
        'Nome' => 'Lucas',
        'Nota' => 7
    ],
];

// -1 Significa que o primeriro parâmetro vem antes
// 1 Significa que o primeiro parâmetro vem depois
// 0 Tanto faz a ordem
function ordenarNota(array $nota1, array $nota2): int
{
    // Duas formas de retornar a função
    // Primeira
    return $nota1['Nota'] <=> $nota2['Nota'];

    // Segunda
    if($nota1['Nota'] > $nota2['Nota']){
        return -1;
    }

    if($nota1['Notas'] < $nota2['Nota']){
        return 1;
    }

    return 0;
}

usort($notas, 'ordenarNota');
var_dump($notas);

// Descrição de cada função
// sort() => Ordena o arrary comparando os valores de forma crescente
// rsort() => Ordena o arrary comparando os valores de forma decrescente
// asort() => Ordena o arrary comparando os valores de forma crescente mantendo as chaves do array
// arsort() => Ordena o arrary comparando os valores de forma decrescente mantendo as chaves do array

// ksort() => Ordena o arrary comparando as chaves de forma crescente
// krsort() => Ordena o arrary comparando as chaves de forma decrescente

// OBS: Pode manter o mesmo padrão para usar a função usort()