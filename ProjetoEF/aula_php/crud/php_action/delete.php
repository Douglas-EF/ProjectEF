<?php
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

if(isset($_POST['btn_deletar'])):    
    $id  = mysqli_escape_string($connect, $_POST['id']);
    $sql = "DELETE FROM cliente WHERE id_cli = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente deletado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Falha ao deletar cliente!";
        header('Location: ../index.php?');
    endif;

endif;