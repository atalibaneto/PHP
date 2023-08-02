<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$a = 1;
$b = 2;
$c = 3;
echo "O valor da variável \$a é = $a<br>";
echo "O valor da variável \$b é = $b<br>";
echo "O valor da variável \$c é = $c<br>";
$soma = $a + $b + $c;
echo "A soma entre as variáveis é: $soma<br>";
var_dump($soma);
$texto = "Olá Mundo!!!";
var_dump($texto);
$alunos = array("Gabriela","Gabriel","Julia","Pedro","Victor");
echo "<br><br>";
var_dump($alunos);
echo "<br><hr><br>";
//exemplos de variáveis globais e locais

function dobro() {
    $numero = 50;
    //global $numero, $dobro;
    $dobro = $numero * $numero;
    echo "O dobro de $numero é: $dobro<br><br>";
}
//dobro();
echo "O dobro de $numero é: $dobro<br><br>";
//exemplo de constantes

const PI = 3.14;
echo "O valor da constante PI é: ".PI."<br>";


    ?>
</body>
</html>