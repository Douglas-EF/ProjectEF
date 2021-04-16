<?php
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

//Função para tratar os dados inseridos contra Mysql Injector and Cross Site Scripting
function clearInput($input){
    global $connect;
    // SQL
    $var = mysqli_escape_string($connect, $input);
    // XSS
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn_cadastrar'])):
    $nome = clearInput($_POST['nome']);
    $email = clearInput($_POST['email']);
    $idade = clearInput($_POST['idade']);

    $sql = "INSERT INTO cliente (nome_cli, email_cli, idade_cli) VALUES ('$nome', '$email', $idade)";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Falha ao cadastrar cliente!";
        header('Location: ../index.php?');
    endif;

endif;