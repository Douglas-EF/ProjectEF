<?php
// Conexão
include_once 'php/conexao.php';

include_once 'php/includes/header.php';
?>

<link rel="stylesheet" href="css/menu_sd.css">
<title>Eficiência&nbsp;Fiscal</title>
</head>

<body>
    <?php
    include_once 'php/includes/top.php';
    ?>
    <nav class="menu">
        <ul>
            <li><a href="#">Produtos para avaliação</a></li>
            <li><a href="superior_direto_cot.php">Cotações para avaliação</a></li>
        </ul>
    </nav>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light white-text">Cotações para Avaliação</h3>
            <table class="striped">
                <thead>
                    <tr>
                        <th class="white-text">Nome da Lista</th>
                        <th class="white-text">Nome da Item</th>
                        <th class="white-text">Quantidade</th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT * FROM itens_lista INNER JOIN lista ON lista.id_list = itens_lista.fk_id_list AND itens_lista.fk_avaliacao_sd = 1 AND itens_lista.fk_ativacao = true";

                $resultado = mysqli_query($connect, $sql);

                while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $dados['nome_list']; ?></td>
                            <td><?php echo $dados['nome_iten_list']; ?></td>
                            <td><?php echo $dados['quantidade_iten_list']; ?></td>
                            <td><a class="btn-floating orange"><i class="material-icons">done</i></a></td>
                            <td><a class="btn-floating red modal-trigger"><i class="material-icons">clear</i></a></td>
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