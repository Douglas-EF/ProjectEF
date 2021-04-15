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
        $quantidadeArquivos = count($_FILES['arquivo']['name']); //Pegamos a quantidade de arquivos selecionados
        $contador = 0; //Inicializamos o contador com o valor 0

        while ($contador < $quantidadeArquivos) :
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
            //echo "O formato deste arquivo selecionado(" . $extensao . ") não é suportado!" . "<br><br>";

            if (in_array($extensao, $formatosPermitidos)) :
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                $novo_nome = uniqid() . ".$extensao";

                if (move_uploaded_file($temporario, $pasta . $novo_nome)) :
                    echo "<script>alert ('Upload feito com sucesso para $pasta.$novo_nome!');</script>";
                else :
                    echo "<script>alert ('Erro, ao enviar $temporario!');</script>";
                endif;

            else :
                echo "<script>alert ('$extensao não é permitido!');</script>";

            endif;
            $contador++;

        //echo "<script>alert ('$mensagem');</script>";
        endwhile;
    //header('Location:index.php');
    endif;
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <!-- enctype é obrigatório para enviar arquivos -->

        <input type="file" name="arquivo[]" multiple><br><br>
        <!--Add multiple para permitir add + de 1 arquivo AND como vamos selecionar mais de um arquivos osses arquivos vão como Array-->
        <button type="submit" name="enviar_formulario">ENVIAR</button>

    </form>
    <?phpvar_dump($FILES); ?>
</body>

</html>