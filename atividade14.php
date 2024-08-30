<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 14 - Números Pares com for</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 14 - Números Pares com for </h1>

    <?php
        
        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade14.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $par = 0;
        $impar = 0;
        $numero = 1;

        for($numero = 1; $numero <= 50; $numero++)
        {
            if ($numero % 2 == 0) 
        {
            echo "<p>O número $numero é par!</p>";
        }
        
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>