<?php
// Conexão
include_once 'php_action/conexao.php';

include_once 'includs/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM cliente WHERE id_cli = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Edição de Cliente</h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id_cli'];?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome_cli']?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php echo $dados['email_cli']?>">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade_cli']?>">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn_atualizar" class="btn">Atualizar</button>
            <a href="index.php" type="submit" class="btn green">Lista de clientes</a>

        </form>
    </div>
</div>

<?php
include_once 'includs/footer.php';
?>