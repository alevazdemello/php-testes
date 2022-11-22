<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dois valores</title>
</head>

<body>
    <h1>Soma de dois valores</h1>
    <?php
    $v1 = $_GET['v1'];
    $v2 = $_GET['v2'];



    function soma ($a, $b) {
        $s = $a + $b;
       echo "<p>A soma vale $s</p>";
    }

    soma($v1,$v2)   




    ?>

    <br />
    <a href="index.html">Voltar</a>
</body>

</html>