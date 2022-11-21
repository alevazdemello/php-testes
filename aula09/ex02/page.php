<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Média</title>
</head>
<body>
    <h1>Calculo de Média</h1>
    <?php
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $media = ($nota1 + $nota2)/2;

    echo "Dados informados:<br />";
    echo "Nota 1 = $nota1<br />";
    echo "Nota 2 = $nota2 <br />";
    echo "Média das notas = $media <br />";


    if ($media <= 5) {
        echo "Situação: Reprovado.";
    } if ($media > 5 && $media < 7) {
        echo "Situação: Recuperação.";
    }  if ($media > 7) {
        echo "Situação: Aprovado.";
    }
    ?>

    <br /><br />
    <a href="index.html">Voltar</a>
</body>
</html>