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
        <form action="09repeticao2.php" method="get">
            <?php
            $c = 1;
            while($c <= 5){
            echo "
                Valor $c: <input type='number' name='v$c' max='100' min='0' value='0' id=''> <br>";
                $c++;
            }
            ?>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>

<!--  $c = 0;
    while($c <= 10){
        echo $c ."<br>";
        $c++;
    } -->