<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $c = 19;
        function CelsiusParaFahrenheit ($celsius)
            {
                // Fórmula para conversão Fahrenheit = (Celsius * 9/5) + 32
                $f = ($celsius * 9/5) + 32;
                return $f;
            }
        $tempF = CelsiusParaFahrenheit($c);
        echo "<h1>A temperatura ".$c."ºC equivale a ".$tempF."ºF</h1>";
    ?>
    <button type="button" onclick="javascript:history.back();">Voltar</button>

</body>
</html>