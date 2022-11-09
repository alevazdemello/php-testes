<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores Relacionais</h1>



<?php 
$a = 3;
$b = "3";
$r = ($a == $b)? "SIM":"NÃO";
echo "Diferença do == para o ===:<br/><br/>";
echo "As variávesi $a e $b são iguais? $r.";
$r2 = ($a === $b)? "SIM":"NÃO";
echo "<br/>";
echo "As variávesi $a e $b são idênticas? $r2.";
echo "<br/>";
$medFinal = 8;
$sit = $medFinal < 7? "Recuperação":"Aprovado";
echo "<br/>";
echo "Teste do operador unário:";
echo "<br/>";
echo "Acima de 7, aprovado.";
echo "<br/>";
echo "A média final foi de $medFinal . A situação do aluno é $sit.";
echo "<br/>";
echo "Outra forma de encontrar a resposta:";
echo "<br/>";
$nota = 6.7;
echo "A nota obtida foi $nota. A situação do aluno é " . (($nota<7)?"REPROVADO":"APROVADO");

echo "<br/>";
echo "<br/>";
echo "<h2>Operadores Lógicos</h2>";
echo "<br/>";
$idade = 20;
$tipo = ($idade >= 18 && $idade <65)? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
echo "Com $idade anos o voto é $tipo.";
$idade = 10;
$tipo = ($idade >= 18 && $idade <65)? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
echo "<br/>";
echo "Com $idade anos o voto é $tipo.";
echo "<br/>";
$idade = 65;
$tipo = ($idade >= 18 && $idade <65)? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
echo "Com $idade anos o voto é $tipo.";
?>
</body>
</html>