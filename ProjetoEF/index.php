<?php
$nome = "123";

//var_dump($nome);
if (is_string($nome)) :
    echo "É uma String!";

else :
    echo "Não é uma String!";
endif;
echo "<hr>";
class  Cliente
{
    private $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Douglas");
var_dump($cliente);

//ACESSANDO ESCOPOS DIFERENTE

$num_1 = 10;
$num_2 = 55;
$num_3 = 32;

function soma()
{
    /*global$num_1;
    global$num_2;
    global$num_3;        
    echo $num_1 + $num_2 + $num_3;*/

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

//ARRAYS

//$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux"); //Definir o indice do Arrays
$carros = array("BMW", "Veloster", "Hilux");
$carros[] = "Amarok";
print_r($carros);

echo "<hr>", $carros[1], "<hr>";

$motos = array();
$motos[] = "Fazer 250";
$motos[] = "CB 300";
$motos[] = "XRE 300";
$motos[] = "XJ6";

print_r($motos);
echo "<hr>";

$cliente = ["Rodrigo", "Filipe", "Douglas"];
print_r($cliente);
echo "<hr>", "O Array cliente possui: ", count($cliente), " clientes...", "<hr>", "Array Motos <br>";

//FOREACH
foreach ($motos as $valor) { //Para cada elemento do Array, será atribuida a variavel valor(Cada elemento do Array motos sera atribuido a variaval valor)!
    echo  $valor . "<br>";
}
echo "<hr>", "Array Carros <br>";
foreach ($carros as $modelo) {
    echo $modelo, "<br>";
}
echo "<hr>";

//ARRAY ASSOCIATIVOS(Quando os indices são String e não int)
$pessoa = array("nome" => "Douglas", "idade" => 18, "peso" => 80);
echo $pessoa["nome"];
$pessoa["cidade"] = "Ji-Paraná";
echo "<hr>";
print_r($pessoa);
echo "<hr>";

foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

//ARRAY MULTIDIMENSIONAIS
$times = array(
    "cariocas"  => array("1º Cololcado" => "Vasco", "2º Cololcado" => "Flamengo", "3º Cololcado" => "Botafogo"),
    "paulistas" => array("1º Cololcado" => "Santos", "2º Cololcado" => "São paulo", "3º Cololcado" => "Palmeiras"),
    "baianos"    => array("1º Cololcado" => "Bahia", "2º Cololcado" => "Vitória", "3º Cololcado" => "Itabuna")
);
//echo "<hr>".$times["cariocas"][0];
echo "<hr>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice . ": " . $valor . "<br>";
}
echo "<hr>";
foreach ($times["paulistas"] as $indice => $valor) {
    echo $indice . ": " . $valor . "<br>";
}
echo "<hr>";
foreach ($times["baianos"] as $indice => $valor) {
    echo $indice . ": " . $valor . "<br>";
}

//FUNCÕES PHP
$numeros = array("Um", "Dois", "Três", "Quatro", "Cinco");
$keys = array("Campeão", "Vice-campeão", "Terceiro");
$nome_times = array("Vasco", "Flamengo", "Botafogo");
echo is_array($num_1); //Se é um Array

if (in_array("Douglas", $pessoa)) :  //Se possui determinada inf no array
    echo "Existe no Array";
else :
    echo "Não existe no Array";
endif;
echo "<hr>";

$name_times = array_keys($times); //Retorna um novo Array com as chaves(indices) do Array passado como parâmetro
print_r($name_times);
echo "<hr>";

$values = array_values($pessoa); //Retorna um novo Array com valores do Array passado como parâmetro
print_r($values);
echo "<hr>";

$veiculos = array_merge($pessoa, $numeros); //Agregar valores de dois Arrays
print_r($veiculos);
echo "<hr>";

echo "Delelei o: " . array_pop($numeros) . "<hr>"; //Exclui a ultima posição do Array
print_r($numeros);
echo "<hr>";

echo "Delelei o: " . array_shift($numeros) . "<hr>"; //Exclui a primeira posição do Array
print_r($numeros);
echo "<hr>";

array_unshift($numeros, "0", "1"); //Adiciona um ou mais itens no inicio do Array
print_r($numeros);
echo "<hr>";

array_push($numeros, "0", "1"); //Adiciona um ou mais itens no final do Array
print_r($numeros);
echo "<hr>";

$combine = array_combine($keys, $nome_times); //Para mesclar dois Arrays
print_r($combine);
echo "<hr>";

$soma =  array(5, 6, 7, 10);
$result = array_sum($soma); //Realiza a soma de um Array
echo $result . "<hr>";

$data = "13/04/2021";
$frase = "Programação é uma montanha russa de amor e ódio";

$nova_data = explode('/', $data); //Explode - Transforma Strings em um Array
$nova_frase = explode(" ", $frase);
print_r($nova_data);
echo "<br>";
print_r($nova_frase);
echo "<hr>";


$nomes = array("Douglas", "Dayane", "Maria", "Amanda",);
$nomes_novos = implode(", ", $nomes); //Transforma um Array em uma Strig
print_r($nomes_novos);
echo "<hr>";

//CONDICIONAI
$media = 6;
echo ($media >= 6) ? "Aprovado" : "Reprovado"; //Operador ternário(If Else simplificado)
echo "<hr>";

$cor = "Amarelo";
switch ($cor):
    case "Vermelho":
        echo "Cor vermelha!";
        break;

    case "Azul":
        echo "Cor azul!";
        break;

    case "Amarelo":
        echo "Cor Amarela!";
        break;

    default:
        echo "Bem estranho sua cor!";  

endswitch;

//INCREMENTO
$numero_teste = 55;
echo "<hr>";
//echo ++$numero_teste;
//echo $numero_teste++;
//echo $numero_teste;
echo "<br>";
//echo --$numero_teste;
//echo $numero_teste--;
echo $numero_teste;

$var0 = 45;
$var1 = 55;

$var0 += $var1; // Equivalente a ($var0 = $var0 + $var1) -- %(para capturar o reto da divisão)

//OPERADORES DE COMPARAÇÃO
/*
10 == 10 - Igual
10 === 10 - Identico
10 !== 10 - Não identico


*/


