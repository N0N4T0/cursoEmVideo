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
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        for($c = 1; $c <= 10; $c++){
            $r = $n * $c;
            echo "$r x $c = $r <br>";
        }
        ?>
<br>
    <a href="" onclick="window.history.go(-1); return false;" class="botao">Voltar</a>

    </div>
</body>
</html>