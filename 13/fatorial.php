<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo "<h1>Calculando fatorial de $v</h1>";

        $c = $v;
        $fat = 1; 
        do{
            $fat = $fat *$c;
            $c--;
        }while($c >= 1);

        echo "<h2>$v! = $fat</h2>"

        ?>

    <a href="" onclick="window.history.go(-1); return false;" class="botao">Voltar</a>

    </div>
</body>
</html>


<!-- Calculo de fatorial -->