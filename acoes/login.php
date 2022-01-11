<?php
    require("conexao.php");

    if (isset($_POST["email"]) && isset($_POST["password"]) && $conexao != null) {
        $query = $conexao->prepare("SELECT * FROM Usuarios WHERE email = ? AND senha = ?");
        $query->execute(array($_POST["email"], $_POST["password"]));

        if ($query->rowCount()) {
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION["usuario"] = array($user["nick"], $user["cargo"], $user["email"], $user["data_cadastro"]);

            echo "<script>window.location = '../index.php'</script>";
        } else {
            echo "<script>window.location = '../login.php'</script>";
        }
    } else {
        echo "<script>window.location = '../login.php'</script>";
    }
?>