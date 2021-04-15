<?php

$senha = "vero208v";

$nova_senha = base64_encode($senha);
echo $nova_senha."<br>";
echo "Sua senha é:".base64_decode($nova_senha)."<hr>";

echo "MD5: ".md5($nova_senha)."<br>";
echo "Sha1: ".sha1($nova_senha);

$options = [
    'cost' => 10,
];

$senha_segura = password_hash($senha, PASSWORD_DEFAULT/*, $options*/); // Podemos informar tbm um Array de opoções($options)
$senha_db = '$2y$10$mygeyjRn8VgVF6iYv6YxpebDr5k0JSaKQ5zJY8.MhVeGMpwkO2AMS';
echo "<hr>"."Hash ".$senha_segura."<hr>";

if(password_verify($senha, $senha_db)):
    echo "Senha Válida!";
else:
    echo "Senha Inválida!";
endif;