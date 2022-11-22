<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de parâmetros por referência</title>
</head>
<body>
    <h1>Passagem de parâmetros por referência</h1>
    <?php
    function teste (&$x) {
        $x = $x + 2;
        echo "O valor de x é $x. <br />"; 
    
     }


    $a = 3;
    teste ($a);
    echo "O valor de a é $a. <br />";





    ?>    
</body>
</html>