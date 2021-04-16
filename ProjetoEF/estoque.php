<?php
// Conexão
include_once 'php/conexao.php';

include_once 'php/includes/header.php';
?>

<link rel="stylesheet" href="css/">
<title>Eficiência&nbsp;Fiscal</title>
</head>

<body>

    <?php
    include_once 'php/includes/top.php';
    ?>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <table class="striped">
                <thead>
                    <tr>
                        <th class="white-text">Nome do Produto</th>
                        <th class="white-text">Quantidade</th>
                    </tr>

                </thead>

                <?php
                $sql = "SELECT * FROM estoque INNER JOIN produto ON produto.id_prod = estoque.fk_id_prod AND estoque.fk_ativacao = true";
                $resultado = mysqli_query($connect, $sql);

                while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $dados['nome_prod']; ?></td>
                            <td><?php echo $dados['quantidade_esto']; ?></td>
                        </tr>
                    </tbody>
                <?php
                endwhile;
                ?>
            </table>
        </div>

    </div>
</body>

<?php
include_once 'php/includes/footer.php';
?>