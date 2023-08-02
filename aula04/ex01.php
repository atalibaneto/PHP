<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fracao = 5786.735;
        echo "<h1>".number_format($fracao, 3, ",",".")."</h1>";
        $inteiro = (int) $fracao;
        echo "<h1>$inteiro</h1>";
        $ddv = $fracao - $inteiro;
        echo "<h1>".number_format($ddv, 3, ",",".")."</h1>";
    ?>
</body>
</html>