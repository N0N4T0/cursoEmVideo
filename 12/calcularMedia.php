<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
    $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;

    $media = ($nota1 + $nota2)/2;

    if($media >= 7){
        $situacao = "aprovado";
    }
    elseif($media >= 5 && $media < 7){
        $situacao = "recuperação";
    }
    else{
        $situacao = "reprovado";
    }

    echo "A média entre $nota1 e $nota2 é igual a " .number_format($media, 2) ."<br> A situação é $situacao.";
    ?>
    
</body>
</html>