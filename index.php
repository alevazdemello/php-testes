<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$nome = "Alexandre";
$age = 28;
$salario = 3780.35;
$cidade = "BH";

echo  "Nome $nome - Idade $age - Salário $salario - Cidade $cidade."; 

echo "<br/> "; 

$n1 = 10;
$n2 = 7;
$s = $n1 + $n2;

echo "A soma entre N1 e N2 é $s.";
//outra forma de mostrar é:
echo "<br/> "; 
echo "Outra forma de saída:";
echo "<br/> "; 
echo "A soma vale ". ($n1 + $n2);
echo "<br/> "; 

$n3 = 10;
$n4 = 5;
$subtra = $n3 - $n4;

echo "A subtração entre N3 e N4 é $subtra.";
echo "<br/> "; 
echo "A multiplicação entre 10 e 5 vale ". ($n3 * $n4);
echo "<br/> "; 
echo "A divisão entre 10 e 5 vale ". ($n3 / $n4);
echo "<br/> "; 
echo "O módulo entre 10 e 5 vale ". ($n3 % $n4);
echo "<br/> "; 
//recebendo valores pela URL



echo "<h2>FUNCOES ARITMETICAS</h2>";
echo "<br/> "; 

$v1 = 4;
$v2 = -3;
echo "Valores recebidos $v1 e $v2.";
echo "<br/>";
echo "O valor absoluto de $v1 é ". abs($v1);
echo "<br/>";
echo "O valor absoluto de $v2 é ". abs($v2);
echo "<br/>";
echo "O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
echo "<br/>";
echo "A raiz de $v1 é ". sqrt($v1);
echo "<br/>";
echo "A raiz de $v2 é ". sqrt($v2);
echo "<br/>";
echo "<br/>";
echo "Arredondando valores: ";
echo "<br/>";
$v3 = 6.6;
echo "Valor inicial $v3";
echo "<br/>";
echo "O valor $v3 arredondado é ". round($v3);
echo "<br/>";
$v4 = 6.2;
echo "Valor inicial $v4";
echo "<br/>";
echo "O valor $v4 arredondado é ". round($v4);

/*conforme a matematica ele pode ser arredondado para mais ou para menos. 
para arredondar para mais ou para menos de proposito, pode ser usado ceil ou floor */ 

echo "<br/>";
echo "<br/>";
echo "A parte inteira de $v3 é ". intval($v3);
echo "<br/>";
echo "O valor de $v3 em moeda é R$ ". number_format($v3, 2, ",");
//a virgula entre parenteses acima indica que a separação deve ser feita com virgula nao ponto
?>
</body>
</html>