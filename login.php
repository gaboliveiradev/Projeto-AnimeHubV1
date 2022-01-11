<html>
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="./css/login.css">
        <title>AnimeHub - Faça Login</title>
        
    </head>

    <body>
        <section>

            <div class="logo">
                <h1>Anime<span>Hub</span></h1>
            </div>
            <div class="box-login">
                <div class="box-title">
                    <h1>Fazer Login</h1>
                </div>

                <form class="login" method="POST" action="acoes/login.php">
                    <label>E-mail
                        <input type="email" name="email">
                    </label>
                    <label>Senha
                        <input type="password" name="password">
                    </label>
                    <input class="logar-btn" type="submit" value="Entrar">
                </form>

                <div class="outros">
                    <a href="#">Crie uma Conta</a>
                    <a class="esqueci-senha" href="#">Esqueci minha senha</a>
                </div>
            </div>
        </section>
    </body>
</html>