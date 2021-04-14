<?php

$nome_cli = $_GET['nome'];
$email_cli = $_GET['email'];

echo "<br>"."Seu nome é $nome_cli, e seu email é $email_cli. <br><br>";

var_dump($_GET);

echo "<hr>".$_GET['idade']."<br>".$_GET['sobrenome'];

?>