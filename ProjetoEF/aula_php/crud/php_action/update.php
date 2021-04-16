<?php
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

if(isset($_POST['btn_atualizar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $id  = mysqli_escape_string($connect, $_POST['id']);
    $sql = "UPDATE cliente SET nome_cli = '$nome', email_cli = '$email', idade_cli = '$idade' WHERE id_cli = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente atualizado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Falha ao atualizar cliente!";
        header('Location: ../index.php?');
    endif;

endif;