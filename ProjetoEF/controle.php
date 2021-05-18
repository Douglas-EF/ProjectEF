<?php
//Conexão
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
                        <th class="white-text">Data inicial</th>
                        <th class="white-text">Data final</th>
                    </tr>

                </thead>

                <?php
                $sql = "SELECT * FROM listControl WHERE fk_ativacao = true";
                $resultado = mysqli_query($connect, $sql);

                while ($dados = mysqli_fetch_array($resultado)) :
                ?>

                    <tbody>
                        <tr>
                            <td><?php echo $dados['nome_listControl']; ?></td>
                            <td><?php echo $dados['data_inicial_listControl']; ?></td>
                            <td><?php echo $dados['data_final_listControl']; ?></td>
                        </tr>
                    </tbody>

                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>

    <?php
    include_once 'php/includes/footer.php';
    ?>