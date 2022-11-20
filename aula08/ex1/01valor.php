<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
<?php 
$valor = $_GET["v"];
$rq = sqrt($valor);
//a função sqrt foi usada para calcular a raiz quadrada
echo "O valor enviado foi $valor.";
echo "<br> A raiz quadrada de $valor é " . number_format($rq,2)
?>
<br><br>
<a href="./index.html">Voltar</a>
</div>
</body>
</html>