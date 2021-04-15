<?php

$server_name = "localhost";
$user_name = "root";
$senha = "";
$bd_name = "system";

$connect = mysqli_connect($server_name, $user_name, $senha, $bd_name);
mysqli_set_charset($connect, "UTF-8");

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;

?>