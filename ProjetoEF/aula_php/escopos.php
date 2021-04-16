<?php
//ACESSANDO ESCOPOS DIFERENTE

$num_1 = 10;
$num_2 = 55;
$num_3 = 32;

function soma()
{
    global$num_1;
    global$num_2;
    global$num_3;        
    echo $num_1 + $num_2 + $num_3;

    echo "<hr>";
    echo $GLOBALS['num_1'] + $GLOBALS['num_2'] + $GLOBALS['num_3'];
}

soma();
echo "<hr>";

//CONSTANTES
define("NOME", "Douglas Jerônimo da Silva");
define("IDADE", 18);
define("ALTURA", 1.70);
define("CASADO", false);
echo 'Nome: ' . NOME . ', IDADE: ' . IDADE . ', ALTURA: ' . ALTURA . ', CASADO: ' . CASADO;

echo '<hr>';
define("TIMES", ['Vasco', 'Flamengo', 'Palmeiras']);
//echo TIMES[2];

function exibeTime()
{
    echo (TIMES[0]);
}

exibeTime();