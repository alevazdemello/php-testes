<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores</h1>
<?php 
    $preco = 59.00;

    echo "O valor do produto é R$ ". number_format($preco, 2, ",");
    $preco = $preco + ($preco*10/100);
    echo "<br/>";

    echo "O valor do produto acrescido de 10% é $preco";
    echo "<br/>";
    echo "---------------------------------------";
    echo "<br/>";
    echo "Mostrar o ano aterior ao ano atual";
    echo "<br/>";
    $ano = 2022;
    echo "Ano atual $ano.";
    $ano= --$ano;
    echo "<br/>";
    echo "Ano anterior $ano.";
    $ano = ++$ano;
    $ano = ++$ano;
    echo "<br/>";
    echo "Próximo ano $ano.";

    echo "<br/>";
    echo "---------------------------------------";
    echo "<br/>";
    echo "<h2>Variáveis referenciadas</h2>";
    $a = 5;
    $b = 7;
    echo "Os valores iniciais são $a e $b.";
    $b= &$a;
    $b += 5;
    echo "<br/>";
    echo "Os valores após referenciar as variáveis é $a e $b.";
    echo "<br/>";
    echo "---------------------------------------";
    echo "<br/>";
    echo "<h2>Variáveis de variáveis</h2>";
    $x = "abc";
    $$x = "def";
    echo "O conteúdo da variável X é $x.";
    echo "<br/>";
    echo "O conteúdo da variável criada recebeu o valor $abc.";
?>
</body>
</html>