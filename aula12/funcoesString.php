<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String</title>
</head>
<body>
    <h1>Funções String</h1>
    <?php
    $p = "Leite";
    $pr = "4.5";


    printf("O %s custa R$%.2f", $p, $pr);
    echo "<br /><br />";
    //exibe na tela "O Leite custa 4.50"
    //a primeira variavel foi substituida por s pois é string
    //a segunda por f pois é float(n real)
    //o .2 antes do f é para formatação de 2 casas



    $v [0] = 4;
    $v [1] = 8;
    $v [2] = 3;
    print_r($v);
    //a funcao printr é muito mais usada em periodo de teste do que como saída de dados do programa

    ?>
</body>
</html>