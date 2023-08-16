<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="folha/style.css">
    <title>Logout</title>
</head>
<body>
<?php
    require_once "includes/banco.php";
    require_once "includes/login.php";
    require_once "includes/funcoes.php";
?>

    <div id="corpo">
        <h1>Tchau!</h1>
        <?php
            logout();
            header("Location: index.php");
        ?>
    </div>
    <?php include "rodape.php";?>
</body>
</html>