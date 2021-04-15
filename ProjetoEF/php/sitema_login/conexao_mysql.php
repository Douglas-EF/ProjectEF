<?php

$server_name = "localhost";
$user_name = "root";
$senha = "";
$bd_name = "system_login";

$connect = mysqli_connect($server_name, $user_name, $senha, $bd_name);

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;

?>