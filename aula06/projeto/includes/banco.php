<?php

//banco mySQLi(host, usuario, senha, banco)
$banco = new mysqli("localhost", "root", "", "bd_games");
if ($banco->connect_errno) {
    echo "Encontrei um erro  --> $banco->connect_error";
    die();
}

$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection='utf8'");
$banco->query("SET character_set_client='utf8'");
$banco->query("SET character_set_results='utf8'");

/*$busca = $banco->query("SELECT * FROM generos");
    if (!$busca) {
        echo "Falha na busca";
    } else {
        while ($dados = $busca->fetch_object()) {
            print_r($busca);
            echo "<br>";
        }
    }
*/
?>