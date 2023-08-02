<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h2>Operadores aritméticos</h2>
    <ul>
        <li>+ soma<br>
            <?php
                $a = 5;
                $b = 4;
                $c = $a + $b;
                echo "$a + $b = $c";
            ?>
        </li>
        <li>- subtração<br>
            <?php
                $d = 78;
                $e = 34;
                $f = $d - $e;
                echo "$d - $e = $f";
            ?>
        </li>
        <li>* multiplicação<br>
            <?php
                $g = 234;
                $h = 222;
                $i = $g * $h;
                echo "$g * $h = $i";
            ?>
        </li>
        <li>/ divisão<br>
            <?php
                $j = 30;
                $k = 10;
                $l = $j / $k;
                echo "$j / $k = $l";
            ?>
        </li>
        <li>% módulo da divisão<br>
            <?php
                $m = 30;
                $n = 10;
                $o = $m % $n;
                echo "$m % $n = $o";
            ?>
        </li>
    </ul>
    <hr>
    <h2>Operadores Atribuição</h2>
    <ul>= atribuição simples<br>
        <?php
            $p = "PHP: ";
            $q = "Hypertext Preprocessor";
            echo "$p$q<br>";
        ?>
    </ul>
    <ul>+= atribuição com soma<br>
        <?php
            $r = 5;
            $r += 4;
            echo "$r<br>";
        ?>
    </ul>
    <ul>-= atribuição com subtração<br>
        <?php
            $s = 78;
            $s -= 34;
            echo "$s<br>";
        ?>
    </ul>
    <ul>*= atribuição com multiplicação<br>
        <?php
            $t = 234;
            $t *= 222;
            echo "$t<br>";
        ?>
    </ul>
    <ul>/= atribuição com divisão<br>
        <?php
            $u = 30;
            $u /= 10;
            echo "$u<br>";
        ?>
    </ul>
    <ul>%= atribuição com módulo<br>
        <?php
            $v = 30;
            $v %= 10;
            echo "$v<br>";
        ?>
    </ul>
    <ul>.= atribuição com concatenação<br>
        <?php
            $w = 50;
            $w .= 5;
            echo "$w<br>";
        ?>
    </ul>
    <ul>=& atribuição por referência<br>
        <?php
            $x = 50000;
            $y = 5;
            echo "O valor de x é: $x e o valor de y = $y<br>";
            $x =& $y;
            echo "Após o valor ser referenciado, x = $x e y = $y<br>";
        ?>
    </ul>
    <h2>Operadores Unários</h2>
    <ul>
    <li>++ incremento<br>
        <?php
            $z = 5;
            $aa = 8;
            $z = $aa++;
            echo "$z<br>";

            $ba = 5;
            $ca = 8;
            $da = ++$ca;
            echo "$da<br>";
        ?>
        </li>
        <li>-- decremento<br>
        <?php
            $ea = 5;
            $fa = 8;
            $ga = $fa--;
            echo "$ga<br>";

            $ia = 5;
            $ja = 8;
            $ka = --$ja;
            echo "$ka<br>";
        ?>
        </li>
    </ul>
</body>
</html>