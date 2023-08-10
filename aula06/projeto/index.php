<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="folha/style.css">
    <title>Listagem de Jogos</title>
    <?php
        function thumb($arq) {
            $caminho = "fotos/$arq";
            if (is_null($arq) || !file_exists($caminho)) {
                return "fotos/indisponível.png";
            } else {
                return $caminho;
            }
        }
    ?>
</head>
<body>
    <?php require_once "includes/banco.php"; ?>
    <div id="corpo">
        <h1>Escolha seu Jogo</h1>
        <table class="listagem">
            <?php
                $q = "SELECT j.id_jogo, j.nome, g.genero, p.produtora, j.descricao, j.nota, j.capa
                FROM jogos j JOIN generos g ON j.id_genero = g.id_genero JOIN produtoras p ON j.id_produtora = p.id_produtora";
                $busca = $banco->query($q);
                if (!$busca) {
                    echo "<tr><td>Infelizmente a busca deu errado";
                } else {
                    if ($busca->num_rows == 0) {
                        echo "<tr><td>Nenhum registro encontrado</p>";
                    } else {
                        while ($reg=$busca->fetch_object()) {
                            $t = thumb($reg->capa);
                            //testar antes com fotos/$reg->capa
                            echo "<tr><td><img src='$t' class='mini'/>";
                            echo "<td><a href='detalhes.php?id_jogo=$reg->id_jogo'>$reg->nome</a>";
                            echo " [$reg->genero]<br>";
                            echo "$reg->produtora";
                            echo "<td>Adm";
                        }
                    }
                }
            ?>
            <tr><td>Foto<td>Nome<td>Adm
            <tr><td>Foto<td>Nome<td>Adm
            <tr><td>Foto<td>Nome<td>Adm
            <tr><td>Foto<td>Nome<td>Adm
        </table>
    </div>
    <?php $banco->close(); ?>
</body>
</html>