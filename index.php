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
        <title>AnimeHub - O Melhor Site Para Assistir Animes Gratuito!</title>
        <meta charset="utf-8">

        <style>
            * {
                padding: 0;
                margin: 0;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }

            body {
                width: 100%;
                height: 100%;
                background-color: #333;
            }
            
            header {
                background-color: #262626;
                width: 20%;
                height: 100%;
                float: left;
            }

            .welcome {
                width: 100%;
                height: 10%;
                border-bottom: 1px solid gray;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .nav-box {
                width: 85%;
                height: 85%;
                margin: 5% 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .welcome h1 {
                color: #fff;
                font-size: 20px;
            }

            .welcome span {
                color: goldenrod;
                font-size: 18px;
                font-weight: bold;
            }

            .nav-box ul li {
                list-style-type: none;
                padding: 20px;
            }

            .nav-box ul li a {
                padding-bottom: 2px;
                text-decoration: none;
                color: #fff;
            }

            .nav-box ul li a[type="logout"] {
                color: #F86776;
            }

            .nav-box ul li a:hover, .nav-box ul li a:active {
                color: goldenrod;
                border-bottom: 2px solid goldenrod;
            }

            .nav-box ul li a[type="logout"]:hover {
                color: #F74C5C;
                border: none;
            }

            i {
                padding-right: 5px;
            }

            section {
                position: absolute;
                right: 0;
                width: 80%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: goldenrod;
                font-size: 32px;
            }

        </style>
    </head>

    <body>

        <header>
            <div class="welcome">
                <h1>🎉Seja Bem Vindo(a)🎉</h1>
                <span>
                    <?php echo $nick;?>
                </span>
            </div>
            <div class="nav-box">
                <ul>
                    <li><a href="#" id="btn-inicio"><i class='bx bxs-home'></i>Inicio</a></li>
                    <?php if($cargo == 0): ?>
                        <li><a href="#" id="btn-perfil"><i class='bx bxs-user'></i>Minha Conta</a></li>
                    <?php endif; ?>
                    <li><a href="#"><i class='bx bxs-movie-play'></i>Lista De Animes</a></li>
                    <li><a href="#"><i class='bx bxs-camera-movie'></i>Lista De Filmes</a></li>
                    <li><a href="#"><i class='bx bxs-calendar-check'></i>Calendário</a></li>
                    <li><a href="#"><i class='bx bxs-diamond' ></i>Seja Premium</a></li>
                    <li><a href="#"><i class='bx bxl-discord-alt'></i>Nosso Discord</a></li>
                    <li><a href="#"><i class='bx bxs-store'></i>Nossa Loja</a></li>
                    <?php if($cargo == 6): ?>
                        <li><a href="#"><i class='bx bxs-dashboard' ></i>Dashboard</a></li>
                    <?php endif; ?>
                    <li><a type="logout" href="acoes/logout.php"><i class='bx bxs-exit'></i>Fazer Logout</a></li>
                </ul>
            </div>
        </header>

        <section class="inicio">
            <h1>Página Inicio</h1>
        </section>
    </body>
</html>