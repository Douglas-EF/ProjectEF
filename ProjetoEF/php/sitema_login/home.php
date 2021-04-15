<?php
// Conexão
require_once 'conexao_mysql.php';

// Sessão
session_start();

// Verificação
if (!isset($_SESSION['logado'])) :
    header('Location: index.php');
endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE id_user = '$id'";
$resultado = mysqli_query($connect, $sql);

$dados = mysqli_fetch_array($resultado);

mysqli_close($connect); // Close conexão
?>

<!DOCTYPE html>
<html lang="PT">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>

    <h1>Olá <?php echo $dados['nome_user']; ?></h1>
    <a href="logout.php">Exit</a>

</body>

</html>