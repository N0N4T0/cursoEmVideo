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
        include "funcoesExternas.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(4);
        ?>
    </div>
</body>
</html>

<!-- 
    Formas de envio de parâmetros

    PASSAGEM POR VALOR
    //pega o valor da variável e joga no parâmetro,
    //qualquer alteração no parâmetro não altera o valor da variável
            function teste($x){
            $x += 2;
            echo "<p>O valor de X é $x</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>O valor de A é $a</p>";


    PASSAGEM POR REFERÊNCIA
    //o valor está sendo passado por referência
    //qualquer alteração no parâmetro altera o valor da variável
        function teste(&$x){
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";


    TIPOS DE INCLUSÃO
    - include = usado várias vezes no mesmo script,
        se não encontrar o arquivo não trava o ssistema por completo
    - require= usado várias vezes no mesmo script,
        se não encontrar o arquivo trava o ssistema por completo
    - include_once = só carrega uma vez
    - require_once = só carrega uma vez
 -->
