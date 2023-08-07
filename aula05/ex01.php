<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Formulários</title>
</head>
<body>
    <h3>Faça um programa que receba dois números como entrada e retorne a soma deles.</h3>
    <?php
    $num1 = $_POST["num1"] ?? 0;
    $num2 = $_POST["num2"] ?? 0;
    ?>

    <form action="<?= $_SERVER['PHP_SELF']; ?>"method="post">
        <label for="num1">Digite o 1º Número: </label>
        <input type="number" name="num1" id="num1" value="<?php echo $num1?>">
        <br>
        <label for="num1">Digite o 2º Número: </label>
        <input type="number" name="num2" id="num2" value="<?=$num2?>">
        <input type="submit" value="Calcular">
    </form>

    <?php 
    if (($num1 == 0) && ($num2 == 0)) {
        echo '';
    } else {
    echo "<br>A soma dos números digitados $num1 e $num2 é ".($num1+$num2);
    }
    ?>

</body>
</html>