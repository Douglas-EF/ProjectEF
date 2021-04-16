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
                        <th class="white-text">Nome da Cotação</th>
                        <th class="white-text">Status da </th>
                    </tr>

                </thead>

                <?php
                $sql = "SELECT * FROM cotacao INNER JOIN avaliacao_sd_cota ON cotacao.fk_avaliacao_sd_cota = 2 WHERE avaliacao_sd_cota.id_aval_sd_cota = 2";
                $resultado = mysqli_query($connect, $sql);

                while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tbody>
                        <tr>                            
                            <td><?php echo $dados['nome_cota']; ?></td>
                            <td><?php echo $dados['nome_aval_sd_cota']; ?></td>
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