<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6 - Verificação de Número Positivo, Negativo ou Zero</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 6 - Verificação de Número Positivo, Negativo ou Zero </h1>

    <?php

        $numero = -17;

        if ($numero <= -1)
        {
            echo "O Número $numero é Negativo!";
        }
        else if ($numero >=1)
        {
            echo "O Número $numero é Positivo!";
        }
        else if ($numero == 0)
        {
            echo "O Número $numero é Zero!";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>