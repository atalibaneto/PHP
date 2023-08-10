<?php

//objeto banco mysqli(host, usuario, senha, banco)
$banco = new mysqli("localhost", "root", "mysql", "bd_games");
if ($banco->connect_errno) {
    echo "Encontrei  um erro $banco->errno --> $banco->connect_error";
    die();
}

$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection='utf8'");
$banco->query("SET character_set_client='utf8'");
$banco->query("SET character_set_results='utf8'");

/* --------------------------------
//banco referência query dentro do objeto busca
$busca = $banco->query("SELECT * FROM generos");
if (!$busca) {
    echo "Falha na busca! $banco->error";
} else {
    //enquanto metodo fetch_object dentro de busca que é um objeto for possível...
    while ($reg = $busca->fetch_object()) {
        print_r($reg);
        echo "<br>";
    }
}
-----------------------------------*/
?>