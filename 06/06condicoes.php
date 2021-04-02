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
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
   
    if($i<16){
        $tipoVoto = "nao vota";
    }
    elseif(($i>=16 && $i<18) || ($i>65)){
        $tipoVoto = "voto opcional";
    }
    else{
        $tipoVoto = "voto obrigatório";
    }

    echo "Idade de $i anos, e $tipoVoto.";
    ?>
</body>
</html>

<!--  
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e terá $i anos. <br>";

    if($i>=18){
        $v = "ja pode votar";
        $d = "ja pode dirigir";
    }
    else{
        $v = "não pode votar";
        $d = "não pode dirigir";
    }
    echo "Com essa idade você $v e também $d.";




    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
   
    if($i<16){
        $tipoVoto = "nao vota";
    }
    else{
        if(($i>=16 && $i<18) || ($i>65)){
            $tipoVoto = "voto opcional";
        }
        else{
            $tipoVoto = "voto obrigatório";
        }
    }

    echo "Com essa idade de $i anos, e $tipoVoto.";




    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
    
        if($i<16){
            $tipoVoto = "nao vota";
        }
        elseif(($i>=16 && $i<18) || ($i>65)){
            $tipoVoto = "voto opcional";
        }
        else{
            $tipoVoto = "voto obrigatório";
        }

        echo "Idade de $i anos, e $tipoVoto.";

-->