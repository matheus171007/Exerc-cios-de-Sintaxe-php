<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - Calculadora Simples</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 1 - Calculadora Simples </h1>

    <?php

        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade1.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $numero1 = 10;
        $numero2 = 2;
        $operacao = "divisão";

        if($operacao == "soma")
        {
            $operacao = $numero1 + $numero2;
            echo "A Soma dos números é: $operacao";
        }
        else if($operacao == "subtração")
        {
            $operacao = $numero1 - $numero2;
            echo "A Subtração dos números é: $operacao";
        }
        else if($operacao == "multiplicação")
        {
            $operacao = $numero1 * $numero2;
            echo "A Multiplicação dos números é: $operacao";
        }
        else if($operacao == "divisão")
        {
            $operacao = $numero1 / $numero2;
            echo "A Divisão dos números é: $operacao";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>