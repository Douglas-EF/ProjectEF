<?php
// Conexão
require_once 'conexao_mysql.php';

//Sessão
session_start();

//Botão Enviar
if (isset($_POST['btn_entrar'])) :
    $erros = array();

    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($login) or empty($senha)) :
        $erros[] = "Prencha todos os campos!";

    else :
        $sql = "SELECT login_user FROM usuario WHERE login_user = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) :
            $senha = md5($senha);
            $sql = "SELECT * FROM usuario WHERE login_user = '$login' AND senha_user = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) == 1) :
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id_user'];
                header('Location: home.php');
            else :
                $erros[] = "Usuário ou senha incorretos!";
            endif;

        else :
            echo "<script> alert ('Usuário inexistente!');</script>";
        endif;
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="PT">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <?php
    if (!empty($erros)) :
        foreach ($erros as $erro) :
            echo "<script> alert ('$erro');</script>";
        endforeach;
    endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
        <label>Login</label><br>
        <input type="text" name="login"><br><br>

        <label>Senha</label><br>
        <input type="password" name="senha"><br><br>

        <button type="submit" name="btn_entrar">ENTRAR</button>

    </form>

</body>

</html>