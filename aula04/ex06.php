<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function Primo($numero) {
            if ($numero < 2) {
                return false;
            }

            for ($i = 2; $i <=sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
        return true;
        }
        for ($i = 0; $i <= 100; $i++) {
            if (Primo($i)) {
                echo "$i é primo<br>";
            }
        }

    
    ?>
</body>
</html>