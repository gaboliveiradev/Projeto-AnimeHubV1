<?php
    session_start();

    if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
        $nick = $_SESSION["usuario"][0];
        $cargo = $_SESSION["usuario"][1];
        $email = $_SESSION["usuario"][2];
        $data_cadastro = $_SESSION["usuario"][3];
    } else {
        echo "<script>window.location = './login.php'</script>";
    }
?>

<html>
    <head>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="./css/index.css">
        <title>AnimeHub - O Melhor Site Para Assistir Animes Gratuito!</title>
        <meta charset="utf-8">
    </head>

    <body>
        <section>
            <div class="welcome">
                <h1>🎉Seja Bem Vindo(a) <span><?php echo $nick; ?></span>🎉</h1>
            </div> 
        </section>
    
        <section>
            <div class="dashboard">
                <div class="title">
                    <h1>Anime<span>Hub</span></h1>
                </div>
                <ul>
                    <li><a href="#"><i class='bx bx-user'></i>Perfil</a></li>
                    <li><a href="#"><i class='bx bx-tv'></i>Lista De Animes</a></li>
                    <li><a href="#"><i class='bx bx-movie-play'></i>Filmes</a></li>
                    <li><a href="#"><i class='bx bx-calendar'></i>Calendário</a></li>
                    <li><a name="premium" href="#"><i class='bx bx-money'></i>Seja Premium</a></li>
                    <?php if($cargo == 6): ?>
                        <li><a href="#"><i class='bx bx-upload' ></i>Upload Animes</a></li>
                        <li><a href="#"><i class='bx bx-data' ></i>Database</a></li>
                    <?php endif; ?>
                    <li name="logout"><a href="acoes/logout.php"><i class='bx bx-exit'></i>Logout</a></li>
                </ul>
            </div>
        </section>
    </body>
</html>