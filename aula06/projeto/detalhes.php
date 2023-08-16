<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="folha/style.css">
    <title>Detalhes do Jogo</title>
</head>
<body>
    <?php
    require_once "includes/banco.php";
    require_once "includes/login.php";
    require_once "includes/funcoes.php"; ?>
    <div id="corpo">
        <?php 
            $cod = $_GET['id_jogo'];
            $busca = $banco->query("SELECT * FROM jogos WHERE id_jogo='$cod'");
        ?>
        <h1>Detalhes do Jogo</h1>
        <table class="detalhes">
            <?php
                if (!$busca) {
                    echo "Busca falhou! $banco->error";
                } else {
                    if ($busca->num_rows == 1) {
                        $reg = $busca->fetch_object();
                        $t = thumb($reg->capa);
                        echo "<tr><td rowspan='3'><img src='$t' class='full'/>";
                        echo "<td><h2>$reg->nome</h2>";
                        echo "Nota: $reg->nota";
                        echo "<tr><td>$reg->descricao";
                        echo "<tr><td>ADM";
                    } else {
                        echo "<tr><td>Nenhum registro encontrado";
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>