<?php
include_once 'includs/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo de Cliente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn_cadastrar" class="btn">Cadastrar</button>
            <a href="index.php" type="submit" class="btn green">Lista de clientes</a>

        </form>
    </div>
</div>

<?php
include_once 'includs/footer.php';
?>