<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="Seven Plus">
        <meta property="og:description" content="Plataforma de streaming">
        <meta property="og:image" content="#">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
        <link rel="stylesheet" href="css/style-pagina-inicial.css">
        <?php include_once ("headerEfooter/import-css.php");?>
        <title>Seven Plus</title>
    </head>
    <body class="corpo">
        <header class="cabecalho">
            <?php include_once("headerEfooter/header.html");?>
        </header>
        <main>
            <div id="caixa-corpo">
                <div id="caixa-corpo2">
                    <div id="texto1">
                        Filmes, Séries e muito mais!
                    </div>
                    <div id="texto2">
                        Assista na sua TV!<br>
                        Aproveite a tela grande para ver com amigos e família.
                    </div>
                    <form action="login.php">
                        <input type="submit" class="btn-login" value="Faça login">
                    </form>
                    <form action="cadastro.php">
                        <input type="submit" class="btn-cadastro" value="Crie sua conta">
                    </form>
                    <div id="texto3">
                        Baixe conteúdo para assistir Offline.<br>
                        Enorme catálogo de filmes e séries para você assistir de onde quiser.
                    </div>
                </div>
            </div>
        </main>
        <footer class="rodape">
            <?php include_once("headerEfooter/footer.html");?>
        </footer>
    </body>
</html>