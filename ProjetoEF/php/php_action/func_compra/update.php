<?php
require_once '../../conexao.php';

if (isset($_POST['btn_atualizar'])) {
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $data_inicial = mysqli_escape_string($connect, $_POST['data_inicial']);
    $data_final = mysqli_escape_string($connect, $_POST['data_final']);

    $sql = "UPDATE lista SET nome_list = '$nome', data_inicial_list = '$data_inicial', data_final_list = '$data_final'";

    mysqli_query($connect, $sql);

    header('Location: ../../../compra.php');
}
