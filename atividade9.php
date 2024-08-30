<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 9 - Verificação de Tamanho de Senha</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 9 - Verificação de Tamanho de Senha </h1>

    <?php

        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade9.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $senha = "senha";

        if(strlen($senha) > 8)
        {
            echo "Sua senha ultrapassa o limite de 8 caracteres, sua senha está reprovada, tente outra senha!";
        }
        else
        {
            echo "Sua tem está dentro dos padrões de 8 caracteres, sua senha está aprovada!";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>