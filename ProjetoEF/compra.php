<?php
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
            <a href="sub_compra/new_comp.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
            <table class="striped">
                <thead>
                    <tr>
                        <th class="white-text">Nome da Lista</th>
                        <th class="white-text">Data inicial</th>
                        <th class="white-text">Data final</th>
                    </tr>

                </thead>

                <?php
                $sql = "SELECT * FROM lista WHERE fk_ativacao = true";
                $resultado = mysqli_query($connect, $sql);

                while ($dados = mysqli_fetch_array($resultado)) :
                ?>

                    <tbody>
                        <tr>
                            <td><?php echo $dados['nome_list']; ?></td>
                            <td><?php echo $dados['data_inicial_list']; ?></td>
                            <td><?php echo $dados['data_final_list']; ?></td>
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