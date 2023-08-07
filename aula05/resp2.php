<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
</head>
<body>
<h1>Número Antecessor e Sucessor</h1>
    <?php
    $num = $_POST["num"];
    $ant = $num - 1;
    $suc = $num + 1;
    echo "<p>O número digitado foi $num, seu sucessor é $suc e seu antecessor é $ant</p>";
    echo "<p>O número digitado foi $num, seu sucessor é ".($num + 1)." e seu antecessor é ".($num -1)."</p>";
    ?>
</body>
</html>