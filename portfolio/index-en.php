<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119621238-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119621238-1');
    </script>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio - Rafael Machado</title>
    <link rel="icon" href="../assets/img/rm-black.png">
    <?php require_once "../import.html"; ?>
    <link rel="stylesheet" href="../assets/css/portfolio.css">
</head>
<body>
    <div id="portfolio">
        <div class="parallax">
            <h1 class="text-center h1">PORTFOLIO</h1>
        </div>
    </div>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://rafaelmachado.info/index-en.php"><img src="../assets/img/rm-white.png" height="30" alt="Rafael Machado logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav roboto">
                    <a class="nav-item nav-link" href="http://rafaelmachado.info/index-en.php">Home</a>
                    <a class="nav-item nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container bloco" id="port-list">
        <ul class="list-unstyled">
            <li class="media">
                <a href="http://paulacom.info/"><img class="mr-3 port-img borda" src="../assets/img/pcom.png" alt="Pcom landing page"></a>
                <div class="media-body">
                    <h5 class="mt-0 mb-1 roboto-bold">Paula Machado Comunicação</h5>
                    <p class="roboto">Professional page developed with WordPress.<br>Well placed on Google with SEO work.</p>
                </div>
            </li>
            <br>
            <li class="media my-4">
                <div class="media-body direita">
                    <h5 class="mt-0 mb-1 roboto-bold">G2Ma - Arquitetura e Construções</h5>
                    <p class="roboto">Architecture office page developed with WordPress.</p>
                </div>
                <a href="http://g2ma.com.br/"><img class="mr-3 port-img borda" src="../assets/img/g2ma.png" alt="G2Ma landing page"></a>
            </li>
        </ul>
    </div>

    <div class="container bloco" id="port-list-mob">
        <ul class="list-unstyled">
            <li>
                <a href="https://paulacom.info/"><img class="mr-3 port-img borda" src="../assets/img/pcom.png" alt="Pcom landing page"></a>
                <br>
                <div>
                    <h5 class="mt-0 mb-1 roboto-bold">Paula Machado Comunicação</h5>
                    <p class="roboto">Professional page developed with WordPress.<br>Well placed on Google with SEO work.</p>
                </div>
            </li>
            <br>
            <li>
                <a href="http://g2ma.com.br/"><img class="mr-3 port-img borda" src="../assets/img/g2ma.png" alt="G2Ma landing page"></a>
                <br>
                <div>
                    <h5 class="mt-0 mb-1 roboto-bold">G2Ma - Arquitetura e Construções</h5>
                    <p class="roboto">Architecture office page developed with WordPress.</p>
                </div>
            </li>
        </ul>
    </div>

    <?php require_once "../contact.html"; ?>

    <div class="container bloco text-center roboto-thin">
        <small>Rafael Machado - © Portfolium</small>
    </div>

    <script type="text/javascript">
        <?php require_once "../assets/js/smooth-scroll.js"; ?>
    </script>
</body>
</html>