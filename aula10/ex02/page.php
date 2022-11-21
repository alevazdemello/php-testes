<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias de Aula na Semana</title>
</head>

<body>
    <h1>Dias de Aula na Semana</h1>
    <p>Este programa informa quais dias da semana tem aula.</p>
    <br /><br />
    <?php
    $ds = isset($_GET["ds"])?$_GET['ds']:"n";


         switch($ds){
            case "Segunda":
                case "Terça":
                    case "Quarta":
                        case "Quinta":
                            case "Sexta":
                            echo "$ds, tem Aula!";
                            break;
                            case "Sabado":
                                case "Domingo":
                                    echo "Não tem aula!";
                                    break;
                                    case "n":
                                        echo "Informe um dia da semana!";
        }
    


    ?>
    <br /><br />

    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>

</html>