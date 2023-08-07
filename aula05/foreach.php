<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php

        $vetor = array("Marcos", "Gabriela", "Victor", "Gabriel", "Julia", "Pedro");
        foreach($vetor as $nomes)
        {
            echo "Os alunos da TI32 são: $nomes<br>";
        }
        //Função count() faz a contagem de número de elementos do vetor
        echo "A turma TI32 é composta por ".count($vetor)." alunos<br><br>";

        $vetor = array("Marcos" => "p&b", "Gabriela" => "Roxo", "Victor" => "Roxo", "Gabriel" => "Azul", "Julia" => "Amarelo", "Pedro" => "Verde");
        foreach($vetor as $aluno => $corF)
        {
            echo "O aluno(a): $aluno tem a cor favorita $corF<br>";
        }


    ?>
</body>
</html>