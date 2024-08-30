<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4 - Verificação de Paridade</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 4 - Verificação de Paridade </h1>

    <?php

        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade4.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $numero = 17;

        if ($numero % 2 == 0) 
        {
            echo "O número $numero é par!";
        }
        else if ($numero % 2 == 1)
        {
            echo "O número $numero é impar!";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>