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
    <form action="tabuada.php" method="get">
        <select name="num" id="">
            
            <?php
                for($c = 1; $c <= 10; $c++){
                    echo "<option>$c</option>";
                }
            ?>

        </select>
        <input type="submit" value="Tabuada">
    </form>


  
    </div>
</body>
</html>

<!-- 
     for($i = 1; $i <= 10; $i++){
        echo "$i ";
    }
 -->

 <!-- Mostrar tabuada de modo dinâmico
usar um select -->