<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $texto = isset($_GET["t"])?$_GET["t"]:"Texto generico.";
        $tam = isset($_GET["tam"])? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"])? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Interativo</title>
        <style>
            span.texto {
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>

</head>
<body>
    <h1>Texto Informado:</h1>
    <div>
        <?php    
         if(empty($texto)) {
            echo "<span class='texto'>Texto genérico.</span>" ;
          } else {
            echo "<span class='texto'>$texto</span>" ;
        }
        ?>
    </div>
    <br />    
       <a href="index.html">Voltar</a>
</body>
</html>