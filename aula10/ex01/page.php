<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do Valor Informado</title>
</head>
<body>
    <h1>Calculo do Valor Informado</h1>
    <h3>Dados informados:</h3>
    <?php
    $num = $_GET["num"];

    if (empty($num)) {
        echo "Informe um número.";
    } else { 
        $calculo = isset($_GET["calculo"])?$_GET["calculo"]:"Favor informar um tipo de cálculo.";
        $dobro = $num * 2;
        $cubo = pow($num,3);
        $raiz = sqrt($num);


        echo "Número informado: $num <br />Tipo de cálculo: $calculo<br /><br />";

        switch ($calculo) {
            case "dobro":
             echo "O dobro de $num é $dobro.";
            break;
            case "cubo":
                echo "O cubo de $num é $cubo.";
                break;
                case "raiz":
                    echo "A raiz de $num é $raiz.";
                    
        };

    }

    ?>
    <br />
    <br />
    <a href="index.html">Voltar</a>
</body>
</html>