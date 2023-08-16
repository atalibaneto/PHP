<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="folha/style.css">
    <title>Login de Usuário</title>
</head>
<body>
    <?php
        require_once "includes/banco.php";
        require_once "includes/login.php";
        require_once "includes/funcoes.php";
    ?>
    <div id="corpo">
       <?php
            $u = $_POST['usuario'] ?? null;
            $s = $_POST['senha'] ?? null;

            if(is_null($u) || is_null($s)) {
                require "user-login-form.php";
            } else {
                $q = "SELECT usuario, nome, senha, tipo FROM usuarios WHERE usuario = '$u' LIMIT 1";
                $busca = $banco->query($q);
                if(!$busca) {
                    echo "Falha ao acessar o banco de dados!";
                } else {
                    if ($busca->num_rows > 0) {
                        $reg = $busca->fetch_object();
                        if (testarHash($s, $reg->senha)) {
                            echo "Logado com sucesso";
                            $_SESSION['user'] = $reg->usuario;
                            $_SESSION['nome'] = $reg->nome;
                            $_SESSION['tipo'] = $reg->tipo;
                        } else {
                            echo "Senha incorreta!";
                        }
                    } else {
                        echo "Usuário não encontrado!";
                    }
                }
            }

       ?>
    </div>
    <?php include "rodape.php";?>
</body>
</html>