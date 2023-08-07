<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nome = $_REQUEST["nome"];
    $idade = $_REQUEST["idade"];
    echo "<h1>Meu nome é $nome e tenho $idade anos</h1>"
    ?>
</body>
</html>