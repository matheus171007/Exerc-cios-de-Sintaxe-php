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

        $ano = 2016;

        if ($ano % 4 == int)
        {
            echo "É bissexto";
        }
        else
        {
            echo "n é";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>