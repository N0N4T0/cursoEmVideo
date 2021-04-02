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
            $frase = "Gosto de estudar Matemática";
            $novaFrase = str_replace("Matemática", "PHP", $frase);
            echo "$novaFrase";
        ?>
    </div>
</body>
</html>






<!-- Manipulações de strings
Algumas das funções (25)
1- printf = mostra coisas na tela formatado
    $p = "Leite";
    $pr = 4.5;
    // echo "O $p custa R$ " .number_format($pr,2);
    printf ("O %s custa R$ %.2f", $p, $pr);


2- print_r = mostra detalhes de uma variável, principalmente se for um vetor
    $v[0] = 4;
    $v[1] = 8;
    $v[2] = 3;

    $v2 = array(3,7,6,2,1,9);

    var_dump($v);
    var_export($v);

    print_r($v);
    print_r($v2);


3- wordwrap = cria quebra de linhas dentro do código
    // o número indica até onde quebra
    // o true ou false limita a quebrar até determinado numero de caractere
    $txt = "Este é um exemplo de uma string gigantesca que será utilizar para medir um tamanho desnecessário e verificar a formatação com o wordwrap";
    $res = wordwrap($txt, 5, "<br/>\n", false);
    echo $res;


4- strlen = calcula o comprimento de string
    $txt = "Curso em video";
    $tamanho = strlen($txt);
    echo $tamanho;


5- trim = é bastante útil para dados vindos de formulário. 
          Elimina espaços que vem no início e no final
        
    $nome = "   José da Silva   ";
    $x = strlen($nome);
    
    $novo = trim($nome);
    $y = strlen($novo);

    echo "<br>Sem usar o trim: ---$nome--- e tem $x caracteres";
    echo "<br>Usando o trim: $novo e tem $y caracteres";
    echo "<br><br> O trim elimina os espaços representados por -";


6- ltrim = só elimina os espaços do início.
        LEFT + trim


7- rtrim = só elimina os espaços do final.
        RIGHT + trim


8- str_word_count = me entrega a quantidade de palavras que existe dentro de uma string
    $frase = "Eu vou estudar PHP";
        
    // com 0 conta as palavras
    $cont = str_word_count($frase, 0);
    print($cont);


    // com 1 cria um vetor para cada palavra
    print_r($cont);

    // com 2 cria um vetor mantendo o posicionamento de cada palavra dentro da string


9- explode = procura por um caractere a ser explodido (nesse caso espaço) e 
        queIra dentro de um vetor;
        PEGA CADA PALAVRA E COLOCA NUM INDICE

    $site = "Curso em Vídeo";
    $vetor = explode(" ", $site);
    print_r($vetor);


10- str_split = mostra cada letra separada em um índice separado do vetor;
        PEGA CADA LETRA E COLOCA NUM INDICE

    $nome = "Maria";
    $vetor = str_split($nome);
    print_r($vetor);


11- implode = junta índices de um vetor
    join funciona tbm do mesmo jeito que a implode

    $vetor[0] = "Curso";
    $vetor[1] = "em";
    $vetor[2] = "Vídeo";
    $texto = implode(" ", $vetor);
    
    //$texto = join(" ", $vetor);
    // print($texto);
    echo "$texto";


12- chr = mostra qual letra está no código informado
    $letra = chr(67);
    echo "A letra de código 67 é $letra";


13- ord = mostra qual código está na letra informada
    letra = "C";
    $cod = ord($letra);

    echo "A letra $letra tem o código $cod";


14- strtolower = transformas as letras maiúsculas em minúsculas
    $nome = "Lúcio Nonato";
    echo "Seu nome é " . strtolower($nome);


15- strtoupper = transforma as letras minúsuclas em maiúsculas
    $nome = "lÚCIO nONATO";
    echo "Seu nome é " . strtoupper($nome);


16- ucfirst = coloca a primeira letra em maiúsculo
    $nome = "lúcio nonato";
    $nome2 = ucfirst($nome);
    echo "Seu nome é $nome2";


17- ucwords = coloca as primeira letras de todas as palavras em maiúsculo
    $nome = "lúcio nonato";
    $nome2 = ucwords($nome);
    echo "Seu nome é $nome2";


18- strrev = "string reverse"
    $nome = "lúcio nonato";
    $nome2 = strrev($nome);
    echo "Seu nome é $nome2";
    

19- strpos = verifica em qual posição uma substring
        se encontra dentro de uma string maior
    $frase = "Estou aprendendo PHP";
    $pos = strpos($frase, "PHP");
    echo "A string foi encontrada na posição $pos";


20- stripos = Independente de maiúscula ou minúsculo
        verifica em qual posição uma substring
        se encontra dentro de uma string maior
    $frase = "Estou aprendendo PHP";
    $pos = stripos($frase, "php");
    echo "A string foi encontrada na posição $pos";


21- substr_count = retorna quantas vezes uma string foi encontrada em uma frase
    $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
    $cont = substr_count($frase, "PHP");
    echo "PHP foi encontrada $cont vezes";


22- substr = fatia a string principal
    - o pimeiro valor no caso 0 é onde começa o fatiamento
    - o segundo valor nesse caso 5 é onde vai para o fatiamento
    $site = "Curso em Vídeo";
    $sub = substr($site, 0, 5);
    echo "$sub";


23- str_pad = faz um string caber em um determinado espaço
    $nome = "Lúcio";
    $novo = str_pad($nome, 30, "x", STR_PAD_RIGHT);
    echo "Novo nome $novo ficou extenso";

    // STR_PAD_CENTER
    // STR_PAD_LEFT


24- str_repeat = repeat a string quantas vezes forem informado
    $txt = str_repeat("PHP", 5);
    echo "O texto gerado foi $txt";


25- str_replace =  substitui uma palavra por outro informada
    $frase = "Gosto de estudar Matemática";
    $novaFrase = str_replace("Matemática", "PHP", $frase);
    echo "$novaFrase";
-->