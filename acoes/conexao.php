<?php
    $server = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "AnimeHub";

    try {
        $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha); // Conectando ao Banco De Dados.
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $erro) {
        echo "Ocorreu um erro de conexão: {$erro->getMessage()}";
        $conexao = null;
    }

?>