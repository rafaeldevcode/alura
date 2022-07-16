<?php

$dados1 = ['Rafael', 23, 10];

// Atribui cada valor do array a uma variáve
list($nome, $idade, $nota) = $dados1;
// Ou
[$nome, $idade, $nota] = $dados1;
var_dump($nome, $idade, $nota);
echo '-----------------------------------------------'. PHP_EOL;

// Caso as chaves sejam strings deve-se passar as chaves
$dados2 = [
    'Nome'  => 'Rafael',
    'Idade' => 23,
    'Nota'  => 10
];

['Nome' => $nome, 'Idade' => $idade, 'Nota' => $nota] = $dados2;
var_dump($nome, $idade, $nota);
echo '-----------------------------------------------'. PHP_EOL;

// Função utilizado para extrair os dados de um array e guarda-las em uma variavel
extract($dados1);
var_dump($nome, $idade, $nota);

// Função utilizada para compactar variaveis para um array
$novosDados = compact('nome', 'idade', 'nota');
var_dump($novosDados);
echo '-----------------------------------------------'. PHP_EOL;