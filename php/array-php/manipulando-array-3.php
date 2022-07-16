<?php

$alunos = [
    'Rafael',
    'Ana',
    'Julia',
    'Paulo',
    'Carlos'
];

// Para adicionar vários item a um array, será dicionado ao final do aarray
array_push($alunos, 'Patricia', 'Victor', 'Maria');

// Para adicionar somente um item, será dicionado ao final do aarray
$alunos[] = 'João';

// Para adicionar items no inicio do array
array_unshift($alunos, 'Pedro', 'Gabriel', 'Lucas');

// Essa função remover o primeiro item do arrary, e reorganiza os indices caso seja numéricos, caso string os mantém
echo array_shift($alunos) . PHP_EOL;

// Essa função remover o último item do arrary, e reorganiza os indices caso seja numéricos, caso string os mantém
echo array_pop($alunos) . PHP_EOL;

var_dump($alunos);

// Especificando o que cada função faz
// array_push() => Adiciona novos items ao final do array
// array_unshift() => Adiciona novos item no inicio do array
// array_shift() => Remove o primeiro item de um array
// array_pop() => Remove o ultimo item de um array