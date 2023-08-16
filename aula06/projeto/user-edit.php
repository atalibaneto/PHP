<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="folha/style.css">
    <title>Editar usuário</title>
</head>
<body>
<?php
    require_once "includes/banco.php";
    require_once "includes/login.php";
    require_once "includes/funcoes.php";
?>
    <div id="corpo">
        <h1>Editar usuário</h1>
<?php
    if(!is_logado()) {
        echo "Faça o <a href='user-login.php'>login</a> para continuar!";
    } else {
        if(!isset($_POST['usuario'])) {
            include "user-edit-form.php";
        } else {
            $usuario = $_POST['usuario'] ?? null;
            $nome = $_POST['nome'] ?? null;
            $tipo = $_POST['tipo'] ?? null;
            $senha1 = $_POST['senha1'] ?? null;
            $senha2 = $_POST['senha2'] ?? null;
        
        $q = "UPDATE usuarios SET usuario = '$usuario', nome = '$nome'";

        if (empty($senha1) || is_null($senha1)) {
            echo "Senha antiga mantida";
        } else {
            if ($senha1 === $senha2) {
                $senha = gerarHash($senha1);
                $q .= ", senha='$senha'";
            } else {
                echo "As senhas não conferem!";
            }
        }
        $q .= " WHERE usuario = '".$_SESSION['user']."'";
        if ($banco->query($q)) {
            echo "Usuário editado com sucesso!";
            logout();
            echo "<a href='user-login.php'>Login</a>";
        } else {
            echo "Erro ao editar usuário!";
        }
        }
        
    }
    
?>


    </div>
    <?php include "rodape.php";?>
</body>
</html>