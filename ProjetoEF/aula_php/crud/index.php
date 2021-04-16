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

            if(mysqli_num_rows($resultado) > 0):

            while ($dados = mysqli_fetch_array($resultado)) :
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $dados['nome_cli'] ?></td>
                        <td><?php echo $dados['email_cli'] ?></td>
                        <td><?php echo $dados['idade_cli'] ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id_cli']; ?>=" class="btn-floating orange"><i class="material-icons" \>edit</i></a></td>

                        <td><a href="#modal<?php echo $dados['id_cli']; ?>" class="btn-floating red modal-trigger"><i class="material-icons" \>delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id_cli']; ?>" class="modal">
                            <div class="modal-content">
                                <h4>Opa!</h4>
                                <p>Tem certeza que deseja excluir este cliente?</p>
                            </div>
                            <div class="modal-footer">                                
                                <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id_cli']; ?>">

                                <button type="submit" name="btn_deletar" class="btn red">Confirmar</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Canelar</a>
                                </form>
                            </div>
                        </div>

                    </tr>
                <?php endwhile; 
                else: ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <?php
                endif;
                ?>
                </tbody>
        </table>
        <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>
<?php include_once 'includs/footer.php'; ?>












<?php
include_once 'includs/footer.php';
?>