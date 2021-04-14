<?php
//ARRAYS

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux"); //Definir o indice do Arrays
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