<?php
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

if(isset($_POST['btn_cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $sql = "INSERT INTO cliente (nome_cli, email_cli, idade_cli) VALUES ('$nome', '$email', $idade)";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Falha ao cadastrar cliente!";
        header('Location: ../index.php?');
    endif;

endif;