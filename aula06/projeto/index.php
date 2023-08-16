<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="folha/style.css">
    <title>Listagem de Jogos</title>
</head>
<body>
    <?php
    require_once "includes/banco.php";
    require_once "includes/login.php";
    require_once "includes/funcoes.php";
    ?>
    <div id="corpo">
        <?php include "cabecalho.php"; ?>
        <h1>Escolha seu Jogo</h1>
        <table class="listagem">
        <?php
        $q = "SELECT j.id_jogo, j.nome, g.genero, p.produtora, j.descricao, j.nota, j.capa FROM jogos j JOIN generos g ON j.id_genero = g.id_genero JOIN produtoras p ON j.id_produtora = p.id_produtora ";
        $busca = $banco->query($q);
        while($reg=$busca->fetch_object()) {
            $t = thumb($reg->capa);
            echo "<tr><td><img src='$t' class='mini'/>";
            echo "<td><a href='detalhes.php?id_jogo=$reg->id_jogo'>$reg->nome</a>";
            echo " [$reg->genero]<br>";
            echo "$reg->produtora";
            echo "<td>ADM";
        }
        ?>
        </table>
    </div>
    <?php include "rodape.php";?>
</body>
</html>