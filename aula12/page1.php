<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Funções em PHP</h1>
    <?php
    function soma() {
        $p = func_get_args();
        $t = func_num_args();
        $s = 0;
        for ($i=0; $i<$t; $i++) {
            $s = $s + $p[$i];
        }
        return $s;
    }

    $r = soma(3,5,2);
    echo "$r";


    ?>
    
</body>
</html>