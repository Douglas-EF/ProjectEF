<?php
include_once 'php/includes/header.php';
?>

<link rel="stylesheet" href="css/style.css">
<title>Eficiência&nbsp;Fiscal</title>
</head>

<body>

    <?php
    include_once 'php/includes/top.php';
    ?>



    <div class="botoes_row0">

        <button class="row_0" id="btn_superior_direto" onclick="window.location.href = 'superior_direto_prod.php'"> <img src="img/superior_direto.png" class="img"> <br> SUPERIOR&nbsp;DIRETO</button>
        <button class="row_0" id="btn_usuarios" onclick="window.location.href = 'usuarios.php'"> <img src="img/users.png"> <br>USUÁRIOS</button>
        <button class="row_0" id="btn_estoque" onclick="window.location.href = 'estoque.php'"> <img src="img/stock.png"> <br>ESTOQUE</button>
    </div>

    <div class="botoes_row1">
        <button class="row_1" id="btn_compra" onclick="window.location.href = 'compra.php'"> <img src="img/buy1.png" class="img"> <br> COMPRA</button>
        <button class="row_1" id="btn_controle" onclick="window.location.href = 'controle.php'"> <img src="img/controle.png" class="img"> <br> CONTROLE</button>
        <button class="row_1" id="btn_cotacao" onclick="window.location.href = 'cotacao.php'"> <img src="img/cotacao.png" class="img"> <br> COTAÇÃO</button>
    </div>

</body>

<?php
include_once 'php/includes/footer.php';
?>