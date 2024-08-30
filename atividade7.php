<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7 - Classificação de Nota Escolar</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 7 - Classificação de Nota Escolar </h1>

    <?php

        $nota = 71;

        if ($nota >= 90)
        {
            echo "O Aluno tirou nota A!";
        }
        else if ($nota >= 80)
        {
            echo "O Aluno tirou nota B!";
        }
        else if ($nota >= 70)
        {
            echo "O Aluno tirou nota C!";
        }
        else if ($nota >= 60)
        {
            echo "O Aluno tirou nota D!";
        }
        else if ($nota <= 59)
        {
            echo "O Aluno tirou nota F!";
        }

    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>