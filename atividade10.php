<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10 - Contagem com while</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 10 - Contagem com while </h1>

    <?php
        
        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade10.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $contador = 1;

        while($contador <= 10)
        {
            echo "<p>Número $contador</p>";
            $contador++; 
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>