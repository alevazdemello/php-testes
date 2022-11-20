<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PAGE</title>
</head>
<body>

<h3>Dados informados:</h3>
    <div>
        <?php 
        $nome = $_POST["nome"];
        $nascimento = $_POST["nascimento"];
        $genero = isset($_POST["genero"])?$_POST[genero]:"Não informado";
        $ano = date('Y');


        
        if (empty($nome)) {
            echo "Nome não informado.<br/>";
        }
        else {
            echo "Nome: $nome <br/>";
        };

        if (empty($nascimento)) {
            echo "Ano de nascimento não informado.<br/>";
        }
        else {
            $idade = $ano - $nascimento;
            echo "Idade: $idade <br/>";
        };

        if (empty($genero)) {
            echo "Gênero não informado. <br/>";
        }
        else {
            echo "Genero: $genero <br/>";
        };

   
        ?>
    </div>

    <a href="index.html">Voltar</a>
</body>
</html>