<?php

$notasBimestre1 = [
    'Rafael' => 10,
    'Ana'    => 7,
    'Julia'  => 7,
    'Paulo'  => 6,
    'Carlos' => 8
];

$notasBimestre2 = [
    'Rafael' => 10,
    'Ana'    => 7,
    'Carlos' => 8
];

// Retorana uma array contendo os valores que não contém nos demais
// Essa fução leva em consideração os valores e não as chaves
var_dump(array_diff($notasBimestre1, $notasBimestre2));
echo '-----------------------------------------------'. PHP_EOL;

// Retorana uma array contendo as chaves que não contém nos demais
// Essa fução leva em consideração as chaves desses valores
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
echo '-----------------------------------------------'. PHP_EOL;

// Retorana uma array contendo os valores e chaves que não contém nos demais
// Essa funçaõ leva em consideração tanto as chaves quanto os valores
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
echo '-----------------------------------------------'. PHP_EOL;

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

// Função para pegar somente as chaves do array
$nomeAlunos = array_keys($alunosFaltantes);

// Função para pegar somente os valores do array
$notasAlunos = array_values($alunosFaltantes);

// Função para combinar dois arrays, caso o tamanho dos arrays sejam direfentes é retornado um erro
// É passado dois arrays uma para ser as chaves e o outro os valores
$novasNotas = array_combine($notasAlunos, $nomeAlunos);
var_dump($novasNotas);
echo '-----------------------------------------------'. PHP_EOL;

// Função para inverter, troca as chaves pelos valores
var_dump(array_flip($novasNotas));

// Especificando o que cada função faz
// array_diff() => Retorna um novo array onde os valores não existem nos demais
// array_diff_key() => Retorna um novo array onde as chaves não existem nos demais
// array_diff_assoc() => Retorna um array onde as chaves e os valores não exitem nos demais
// array_keys() => Retorna um array contendo somente as chaves desse arrary
// array_values() => Retorna um novo array contento apenas os valores desse aarray
// array_combine() => Combina dois arrays utilizando um array para as cahves e um array para os valores
// array_flip() => Inverete as chaves pelos valores do array