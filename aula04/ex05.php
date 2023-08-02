<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function palimdromo ($texto) {
            $texto = str_replace (' ','',strtolower($texto));
            $invTexto = strrev($texto);
            return $texto === $invTexto;
        }
    $texto1 = "osso";
    $texto2 = "Ana";
    $texto3 = "ovo";
    $texto4 = "socorram me subi no onibus em Marrocos";
    if (palimdromo($texto1)) {
        echo "O texto $texto1 é palíndromo!<br>";
    } else {
        echo "O texto $texto1 não é palíndromo!<br>";
    }
    if (palimdromo($texto2)) {
        echo "O texto $texto2 é palíndromo!<br>";
    } else {
        echo "O texto $texto2 não é palíndromo!<br>";
    }
    if (palimdromo($texto3)) {
        echo "O texto $texto3 é palíndromo!<br>";
    } else {
        echo "O texto $texto3 não é palíndromo!<br>";
    }
    if (palimdromo($texto4)) {
        echo "O texto $texto4 é palíndromo!";
    } else {
        echo "O texto $texto4 não é palíndromo!";
    }
    ?>
</body>
</html>