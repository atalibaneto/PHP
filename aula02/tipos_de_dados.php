<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis</title>
    <link href="bootstrap.min.css"  rel="stylesheet">
</head>
<body>
<h2>Tipos de Dados</h2>
    <ul>
    <li><strong>String</strong><br>
            <?php
                $texto = "Eu sou uma variável do tipo string";
                echo $texto;
            ?>
        </li>
        <li><strong>Inteiro</strong><br>
            <?php
                //Inteiro - Números entre: -2.147.483.648 e 2.147.483.648
                $numero = 10;
                $numero2 = 20;
                echo $numero + $numero2."<br>"; 
            ?>
        </li>
        <li><strong>Float</strong><br>
            <?php
                //Float
                $numero = 3546.687;
                $numero2 = 6.02E-18;
                echo "$numero<br>$numero2<br>"; 
            ?>
        </li>
        <li><strong>Booleano</strong><br>
            <?php
                //Booleano
                $var1 = true;
                $var2 = false;
                echo "$var1<br>$var2<br>"; 
            ?>
        </li>
        <li><strong>Array</strong><br>
            <?php
                //Array
                $alunos = array("Gabriela","Gabriel","Julia","Pedro","Victor");
                echo $alunos[0]."<br>"; 
            ?>
        </li>
    </ul>
    <hr><br>
    <h2>Verificar qual navegador estamos usando</h2>
    <?php
    //echo $_SERVER['HTTP_USER_AGENT'];
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
    {
        echo "Este é o Firefox";
    } else {
        echo "Meu navegador é um lixo";
    }
    ?>
</body>
</html>