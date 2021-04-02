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
        <pre>

            <?php
                for($i=1; $i<=3; $i++) { 
                    echo "Olá";
                }
            ?>

        </pre>
    </div>
</body>
</html>

<!-- Vetores e Matrizes
ARRAY
$n = array(3,5,8,2);
$n[] = 7; //cria uma nova poisção com valor sete no array n
print_r($n);

RANGE
- conta de acordo com o valor incial até o final estabelecido
- com um contador estabelecido
- nesse caso valor inicial 5, valor final 20, contador 2
$c = range(5,20,2);
print_r($c);


FOREACH
$c = range(5,20,2);
foreach($c as $v){
    echo "$v ";
}


CHAVES PERSONALIZADAS
=> associção
- a posição 1 está associado a A
$v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
print_r($v);


UNSET = desaloca uma posição do vetor
$v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
$v[] = "E";
// print_r($v);

unset($v[9]);
print_r($v);


CHAVES ASSOCIATIVAS
$cad = array(
    "nome"=>"Ana",
    "idade"=>23,
    "peso"=>78.5,
);

// print_r($cad);
$cad["fuma"] = true;
print_r($cad);


    ou


$cad = array(
    "nome"=>"Ana",
    "idade"=>23,
    "peso"=>78.5,
);

// print_r($cad);
$cad["fuma"] = true;

foreach($cad as $campo=>$valor){
    echo "O valor de $campo é $valor <br>";
}


MATRIZES EM PHP = VETORES DENTRO DE VETORES
$n = array(
    array(6,4),
    array(4,9),
    array(3,2,5)

);

print_r($n);



FUNÇÕES PARA VETORES
count() = mostra quantos elementos existem dentro de um vetor
$n = array(
    array(6,4),
    array(4,9),
    array(3,2,5)

);

echo "O vetor tem " .count($n) ." elementos<br>";

print_r($n);


GERENCIANDO ELEMENTOS
array_push($n,7);  ====== acrescenta um elemento ao vetor no final (último)

array_pop($n); ========== elimina elemento do vetor no final (último)

array_unshift($n, 7); === acrescenta um elemento ao vetor logo no início

array_shift($n); ======== elimina elmento do vetor logo no início

$sort($n); ============== ordena o vetor de acordo com o menor valor armazenado no vetor

$rsort($n); ============= ordena o vetor de acordo com o maior valor armazenado no vetor


ORDENAÇÃO ASSOCIATIVA
$asort($n); ============== ordena o vetor de acordo com o menor valor
                        armazenado no vetor, MANTENDO A POSIÇÃO DO VETOR EM
                        QUE O ELEMENTO ESTAVA

$arsort($n); ============== ordena o vetor de acordo com o maior valor
                        armazenado no vetor, MANTENDO A POSIÇÃO DO VETOR EM
                        QUE O ELEMENTO ESTAVA



ORDENAÇÃO POR CHAVES
$ksort($n); ============= coloca os índices em ordem crescente

$ksort($n); ============= coloca os índices em ordem decrescente

-->