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
    <?php 
    $n = isset($_GET["num"]) ? $_GET["num"] : 0;
    $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

    switch($o){
        case 1:
            $r = $n * 2;
            break;

        case 2:
            $r = pow($n, 3);
            break;

        case 3:
            $r = number_format(sqrt($n), 2);
            // $r = sqrt($n);
            // $r = number_format($r, 2);
            break;
    }

    echo "O resultado da operação solicitada foi <span><strong>$r</strong></span>";

    ?>

    <br><br>
    <a class="botao" href="switch.html">Voltar</a>

</body>
</html>