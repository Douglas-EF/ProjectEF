<?php

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