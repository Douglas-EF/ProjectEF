<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Arquivo</title>
</head>

<body>

    <?php
    if (isset($_POST['enviar_formulario'])) :
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        echo "O formato deste arquivo selecionado(" . $extensao . ") não é suportado!" . "<br><br>";

        if (in_array($extensao, $formatosPermitidos)) :
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novo_nome = uniqid() . ".$extensao";

            if (move_uploaded_file($temporario, $pasta . $novo_nome)) :
                $mensagem = "Upload feito com sucesso!";
            else :
                $mensagem = "Erro, não foi possivel realizar o upload!";
            endif;

        else :
            $mensagem = "Formato Inválido!";

        endif;

        echo "<script>alert ('$mensagem');</script>";

    //header('Location:index.php');
    endif;
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <!-- enctype é obrigatório para enviar arquivos -->

        <input type="file" name="arquivo"><br><br>
        <button type="submit" name="enviar_formulario">ENVIAR</button>

    </form>
    <?phpvar_dump($FILES); ?>
</body>

</html>