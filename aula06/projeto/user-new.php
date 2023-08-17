<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="folha/style.css">
    <title>Document</title>
</head>
<body>
<?php
    require_once "includes/banco.php";
    require_once "includes/login.php";
    require_once "includes/funcoes.php";
?>
    <div id="corpo">
<?php
include_once "cabecalho.php";
        if(!is_admin()) {
            echo "Você não tem permissão para ver esta página";
        } else {
            if (!isset($_POST['usuario'])) {
                require "user-new-form.php";
            } else {
                $usuario = $_POST['usuario'] ?? null;
                $nome = $_POST['nome'] ?? null;
                $senha1 = $_POST['senha1'] ?? null;
                $senha2 = $_POST['senha2'] ?? null;
                $tipo = $_POST['tipo'] ?? null;

                if ($senha1 === $senha2) {
                    if (empty($usuario) || empty($nome) || empty($senha1) || empty($senha2) || empty($tipo)) {
                        echo "Todos os campos são obrigatórios";
                    } else {
                        $senha = gerarHash($senha1);
                        $q = "INSERT INTO usuarios (usuario, nome, senha, tipo) VALUES ('$usuario', '$nome', '$senha', '$tipo')";
                        if ($banco->query($q)) {
                            echo "Usuário cadastrado com sucesso";
                        } else {
                            echo "Erro ao cadastrar usuário: $usuario";
                        }
                    }
                } else {
                    echo "As senhas não conferem";
                }
            }
        }
    ?>

    </div>
    <?php include "rodape.php";?>
</body>
</html>