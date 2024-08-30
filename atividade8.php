<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8 - Verificação de Ano Bissexto</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 8 - Verificação de Ano Bissexto </h1>

    <?php

        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade8.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $ano = 2014;

        if ($ano % 4 == 0)
        {
            echo "O ano $ano é Bissexto!";
        }
        else
        {
            echo "O ano $ano não é Bissexto!";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>