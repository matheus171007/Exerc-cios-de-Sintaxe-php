<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 13 - Fatorial com for</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 13 - Fatorial com for </h1>

    <?php
        
        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade13.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $numero = 7;
        $resultado = 0;

        //caso queria mudar para ver outro número fatorial é obrigatorio mudar o $numero = "numero" e mudar o $fatorial < "numero" no for
        for($fatorial = 1; $fatorial < 7; $fatorial++)
        {
            $numero *= $fatorial;
        }
        echo "A Fatorial é: $numero";

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>