<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 12 - Tabuada com for</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 12 - Tabuada com for </h1>

    <?php
        
        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade12.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $tabuada = 5;
        $resultado = 0;

        for($numero = 1; $numero <= 10; $numero++)
        {
            $resultado = $tabuada * $numero;
            echo "<p> $tabuada X $numero = $resultado</p>";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>