<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3 - Conversor de Temperatura</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 3 - Conversor de Temperatura </h1>

    <?php

        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade3.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $temperaturaCelsius = 19;
        $temperaturaFahrenheit = 0;

        $temperaturaFahrenheit = ($temperaturaCelsius * 9/5) + 32;

        echo "A temperatura de Celsius para Fahrenheit é: $temperaturaFahrenheit";

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>