<?php
// Conexão
include_once 'php_action/conexao.php';

// Header
include_once 'includs/header.php';

// Mensagem
include_once 'includs/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Lista de Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM cliente";

            $resultado = mysqli_query($connect, $sql);
            while ($dados = mysqli_fetch_array($resultado)) :
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $dados['nome_cli'] ?></td>
                        <td><?php echo $dados['email_cli'] ?></td>
                        <td><?php echo $dados['idade_cli'] ?></td>
                        <td><a href="" class="btn-floating orange"><i class="material-icons" \>edit</i></a></td>
                        <td><a href="" class="btn-floating red"><i class="material-icons" \>delete</i></a></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
        </table>
        <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>












<?php
include_once 'includs/footer.php';
?>