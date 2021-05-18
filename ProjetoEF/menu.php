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
        <button class="row_1" id="btn_compra" onclick="window.location.href = 'compra.php'"> <img src="img/buy.png" class="img"> <br> COMPRA</button>
        <button class="row_1" id="btn_controle" onclick="window.location.href = 'controle.php'"> <img src="img/controle.png" class="img"> <br> CONTROLE</button>
        <button class="row_1" id="btn_cotacao" onclick="window.location.href = 'cotacao.php'"> <img src="img/cotacao.png" class="img"> <br> COTAÇÃO</button>
    </div>

</body>

<!-- SZ.chat - Código para o Webchat -->
<script type="text/javascript">
    (function(s, z, c, h, a, t) {
        s.SZchat = s.SZchat || function() {
            (s.SZchat.q = s.SZchat.q || []).push(arguments);
        };
        t = z.createElement(c),
            a = z.getElementsByTagName(c)[0];
        t.async = 1;
        t.src = 'https://cdn.webchat.sz.chat/szchat.js';
        a.parentNode.insertBefore(t, a);
        s.SZchat('cid', '60384b218df9bc079852cb62');
        s.SZchat('host', h);

        s.SZchat('szf_name', 'Douglas Jerônimo');
        s.SZchat('szf_email', 'douglaswwaff@gmail.com');
        
    })(window, document, 'script', 'https://eficiencia.sz.chat');
</script>

<?php
include_once 'php/includes/footer.php';
?>