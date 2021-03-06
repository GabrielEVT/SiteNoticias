<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/meusProjetos/SiteNoticias/site/">
    <link rel="stylesheet" href="./Styles/css/style.css">
    <link rel="shortcut icon" href="./Midias/img/logotipo.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <title>NPB | VER NOTÍCIAS</title>
</head>
<body>
    <header class="cabecalho">
        <div class="cabecalho-logo"><img src="Midias/img/logotipo.svg" alt="Logo"></div>
        <form class="search-caixa"
            method="GET" action="process.php">
            <input class="search-input" type="search" placeholder="Procure por..." name="search">
            <button class="search-button__link" type="submit">
                <img class="search-button__imagem" src="Midias/img/search-img.png" alt="Lupa">
            </button>
        </form>
        
        <input type="checkbox" id="menu-hamburguer">
        <label for="menu-hamburguer">
            <span class="hamburguer"></span>
        </label>
        <nav class="menu-principal">
            <ul class="menu-principal__lista">
                <li class="menu-principal__itens">
                    <a href="exibir_noticias" class="menu-principal__links menu-principal__links">ver notícias</a>
                </li>
                <li class="menu-principal__itens">
                    <a href="cadastro_noticias" class="menu-principal__links">cadastrar notícias</a>
                </li>
                <li class="menu-principal__itens">
                    <a href="cadastro_categorias" class="menu-principal__links">cadastrar categorias</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- MAIN -->
    <?php 
        $this->carregarViewNoTemplate($nomeView, $dadosModel);
    ?>
    <!-- /MAIN -->
    <footer class="rodape">
        <div class="footer-superior">
            <div class="cabecalho-logo">
                <!-- logotipo da empresa fictícia -->
                <img src="Midias/img/logotipo.svg" alt="Logo">
            </div>
            <div class="footer-menu">
                <div class="footer-menu-links">
                    <h1>Mobile App</h1>
                    <h3>Android</h3>
                    <h3>IOS</h3>
                    <h3>APK</h3>
                </div>
                <div class="footer-menu-links">
                    <h1>Regulamentação</h1>
                    <h3>Privacidade e Cookies</h3>
                    <h3>Termos de Uso</h3>
                </div>
                <div class="footer-menu-links">
                    <h1>Empresa</h1>
                    <h3>Sobre Nós</h3>
                    <h3>Contato</h3>
                    <h3>Localização</h3>
                </div>
            </div>
            <div class="footer-mapa">
                <!-- colocar mapa -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2114084592063!2d-46.65876171607244!3d-23.560849546486768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-PT!2sbr!4v1611673042678!5m2!1spt-PT!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <hr class="rodape-linha-horizontal">
        <div class="footer-inferior">
            <div class="footer-copyright">
                <h1>Copyright 2021 © Todos os direitos reservados.</h1>
            </div>           
            <div class="footer-redes_sociais">
                <h1>Siga-nos</h1>
                <img src="https://img.icons8.com/metro/2x/ffffff/instagram-new.png" alt="Instagram">
                <img src="https://img.icons8.com/android/2x/ffffff/facebook.png" alt="Facebook">
                <img src="https://img.icons8.com/pastel-glyph/2x/ffffff/whatsapp.png" alt="WhatsApp">
                <img src="https://img.icons8.com/android/2x/ffffff/twitter.png" alt="Twitter">
            </div>
        </div>
    </footer>
</body>
</html>