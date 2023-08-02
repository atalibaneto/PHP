<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h2>Funções</h2>
    <ul>
        <li>abs() - número absoluto<br>
            <?php
                $numero = -2356.74;
                echo abs($numero)."<br>";
            ?>
        </li>
        <li>base_convert()<br>
            <?php
                $hex = "E196"; 
                echo base_convert($hex,16,8)."<br>";
                $oct = "160626";
                echo base_convert($oct,8,10)."<br>";
                $dec = "57750";
                echo base_convert($dec,10,16)."<br>";   
            ?>
        </li>
        <li>ceil(), floor(), round() - arredondamentos<br>
            <?php
                $arred = 4897.87;
                echo "O número que irá ser arredondado é: $arred<br>";
                echo "Arredondamento para cima ".ceil($arred)."<br>";
                echo "Arredondamento para baixo ".floor($arred)."<br>";
                echo "Arredondamento ".round($arred)."<br>";
            ?>
        </li>
        <li>hypot() - hipotenusa​<br>
            <?php
                $hip = hypot(3,4);
                echo "A hipotenusa onde os catetos são 3 e 4 é: $hip<br>";
            ?>
        </li>
        <li>intdiv()<br>
            <?php
                echo intdiv(8, 4) . "<br>";
                echo intdiv(5, 2) . "<br>";
            ?>
        </li>
        <li>max(), min()<br>
            <?php
                echo max(1, 2, 3, 4, 5, 6, 7, 8, 9, 10). "<br>";
                echo min(1, 2, 3, 4, 5, 6, 7, 8, 9, 10). "<br>";
            ?>
        </li>
        <li>pow() - pontência<br>
            <?php
                echo "O resulta de 2 elevado a 4 é: ".(pow(2,4) . "<br>");
            ?>
        </li>
        <li>sqrt() - raiz quadrada<br>
            <?php
                $raiz = 255;
                echo "A raiz quadrada de $raiz é: ". number_format(sqrt($raiz), 2, ",", ".")."<br>";
            ?>
        </li>
    </ul>
</body>
</html>