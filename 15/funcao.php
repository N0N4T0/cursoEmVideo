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
        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for($i=0; $i<$t; $i++){
                $s += $p[$i]; 
            }

            return $s;
        }

        $r = soma(5,2,3, 8,9,4);

        echo("A soma dos valores é $r");
        ?>

    </div>
</body>
</html>


<!-- 
    Funções
function soma($a, $b){
            $s = $a + $b;
            return $s;
        }

        $x = 3;
        $y = 4;
        $r = soma($x, $y);

        echo "<p>A soma entre $x e $y é igual a $r</p>";

    Rotinas com Parâmetros Dinâmicos
    func_get_args(); ---------- pega todos os argumentos e coloca dentro de um vetor
    func_num=args(); ---------- retorna o número de argumtos que foram passados


 -->