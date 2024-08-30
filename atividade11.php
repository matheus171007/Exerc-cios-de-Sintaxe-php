<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11 - Soma de Números com while</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 11 - Soma de Números com while </h1>

    <?php
        
        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade11.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $soma = 0;
        $numero = 1;

        while($numero <= 100)
        {
            $soma += $numero;
            $numero++; 
        }
        echo "A Soma dos números é : $soma";

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>