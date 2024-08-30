<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5 - Verificação de Faixa Etária</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 5 - Verificação de Faixa Etária </h1>

    <?php

        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade5.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $idade = 16;

        if ($idade <= 12)
        {
            echo "A pessoa tem $idade anos, então ela é uma Criança!";
        }
        else if ($idade <= 17)
        {
            echo "A pessoa tem $idade anos, então ela é um Adolescente!";
        }
        else if ($idade <= 64)
        {
            echo "A pessoa tem $idade anos, então ela é um Adulto!";
        }
        else if ($idade >= 65)
        {
            echo "A pessoa tem $idade anos, então ela é um Idoso!";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>