<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitor de Maior Idade</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $nascimento = $_GET["nascimento"];


    if (empty($nome)) {
       $nome= "Você";
       echo "Nome: Não informado. <br />";
    } else {
        echo "Nome: $nome <br />";
    }

    if (empty($nascimento)) {
        $idade = "Não informado";
    } else {
        $idade = date('Y') - $nascimento;
        echo "Idade: $idade <br />"; 
        if ($idade >= 18) {
            echo "$nome, pode dirigir, caso tenha habilitação.<br />";
            } else {
            echo "$nome, não pode dirigir por ser menor de idade.<br />";
        }
    
        if ($idade < 16) {
            echo "$nome, ainda não atingiu a idade mínima para votar.";
        } elseif ($idade >= 16 && $idade < 18) {
               echo "$nome, pode votar. Com essa idade, o voto é opcional.";
            } if ($idade >= 65) {
                echo "$nome, no seu caso o voto é opcional.";
            } else  {
                echo "$nome, no seu caso o voto é obrigatório.";
            
        }

    }

    ?>
    <br /><br />
    <a href="index.html">Voltar</a>
</body>
</html>