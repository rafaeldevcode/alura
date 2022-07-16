<?php

$notas = [
    'Rafael' => 10,
    'Ana'    => 7,
    'Julia'  => 9,
    'Paulo'  => 6,
    'Carlos' => 8
];

// retorna true caso a variavel seja um array e false caso não seja
if(is_array($notas)){
    echo 'É um array' . PHP_EOL;
}

// Verifica se um array tem suas chaves numéicas começando com '0' e de forma crescente sem pular digítos
// retornaa true ou false
var_dump(array_is_list($notas));

// Vefifica se a chave existe em um array
if(array_key_exists('Rafael', $notas)){
    echo 'Rafael fez a prova' . PHP_EOL;
}

// Para verificar o valor de uma chave pode usar a função isset()
var_dump(isset($notas['Rafael'])) . PHP_EOL;

// Verifica se um valor existe dentro de um array
// Terceiro parâmetro é utilizado para veficar não só o valor mas tabém o tipo da váriavel
// Pode ser true ou false, nã passar esse parâmetro será utilizado o false por pdrão
echo 'Alguém tirou nota 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true)) . PHP_EOL;

// Retornar a chave do valor pesquisado
// Terceiro parâmetro é utilizado para veficar não só o valor mas tabém o tipo da váriavel
// Pode ser true ou false, nã passar esse parâmetro será utilizado o false por pdrão
echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas, true);

// Especificando o que cada função faz
// is_array() => Verifica se a variável é um array
// array_key_exists() => Verifica se a chave existe em um array
// isset() => Verifica se uma chave existe e não é nula
// in_array() => Verifica se um valor existe em um array
// array_search() => Retorana a chave do valor pesquisado ou false caso não exsta