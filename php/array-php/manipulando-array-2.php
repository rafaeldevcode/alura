<?php

$alunos2021 = [
    'Rafael',
    'Ana',
    'Julia',
    'Paulo',
    'Carlos'
];

$novosAlunos = [
    'Pedro',
    'Maria',
    'João',
    'Paulo',
    'Carlos'
];

// Função para unir dois arrays, caso as chaves sejam numéricas as mesmas seram reorganizadas
// Caso as chaves sejam strings e forem repetidas a última chave sempre irá sobrescrever a primeira
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($novosAlunos);
echo '-----------------------------------------------'. PHP_EOL;

// Pode unir dois arrays utilizando o operado '+', mas nesse caso ele irá comparar as chaves
// e caso elas ja existam no segundo arrary ele írá ignorar
$alunos2022 = $alunos2021 + $novosAlunos;
var_dump($alunos2022);
echo '-----------------------------------------------'. PHP_EOL;

// É possivel utilizar tabém os '...' para unir dois arrays
// Nesse caso ele irá descompactar os dois arrais em um único array
// Nesse caso chamado de 'unpacking operator'
$alunos2022 = [...$alunos2021, ...$novosAlunos];
var_dump($alunos2022);
echo '-----------------------------------------------'. PHP_EOL;

// Os '...' em contextos diferentes podem ter resultados diferentes Ex:
// Nesse caso quando a função for chamada poderá ser passado vários parametros e na construção das mesma esses valores são unidos
// Nesse caso chamado de 'spread operator'
// OBS: os parâmetros deverão ser do mesmo tipo

// Ex-1:
function funcao1(array ...$array): void
{
    var_dump($array);
}

funcao1(['Um'], ['Dois'], ['Três'], ['Quatro']);

// Ex-2:
function funcao2(int ...$array): void
{
    var_dump($array);
}

funcao2(1, 2, 3, 4);

// Ex-3: Nesse caso está sendo passando um array como praâmetro quando a função é chamada e na hora de executar
// é feito o descompactamento desse array para seus respectivos parâmetros
function funcao3(int $a, int $b, int $c): void
{
    echo $a . PHP_EOL;
    echo $b . PHP_EOL;
    echo $c . PHP_EOL;
}

funcao3(...[1, 2, 3]);

// Especificando o que cada função faz
// array_merge() => Une dois arrays sempre adicionando o próximo array ao final