<?php

require_once '../../../php/conexao.php';

function clearInput($var)
{
    global $connect;
    $var = mysqli_escape_string($connect, $var);
    $var = htmlspecialchars($var);

    return $var;
}

if (isset($_POST['btn_cadastrar'])) {
    $nome = $_POST['nome'];
    $data_inicial = ClearInput($_POST['data_inicial']);
    $data_final = $_POST['data_final'];
    $ativacao = 1;

    $sql = "INSERT INTO lista (nome_list, data_inicial_list, data_final_list, fk_ativacao) VALUES('$nome', '$data_inicial', '$data_final', $ativacao)";

    mysqli_query($connect, $sql);
    echo "<script> Alert ('Lista criada com Sucesso!');</script>";
}
