    <!DOCTYPE html>
<html lang="pt-br">
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
    <title>Rafael Machado</title>
    <link rel="icon" href="assets/img/rm-black.png">
    <?php require_once "import.html"; ?>
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div id="home">
        <div id="parallax">
            <div class="container inblock">
                <div id="desk">
                    <img class="mx-auto d-block profile-pic" src="assets/img/pic-profile.jpg" alt="Rafael Machado foto perfil">
                    <h1 class="text-center nome">Rafael Machado</h1>
                    <h2 class="text-center dev">desenvolvedor</h2>
                </div>
                <div id="mob">
                    <h1 class="text-center nome">Rafael Machado</h1>
                    <img class="mx-auto d-block profile-pic" src="assets/img/pic-profile.jpg" alt="Rafael Machado foto perfil">
                    <h2 class="text-center dev">desenvolvedor</h2>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#home"><img src="assets/img/rm-white.png" height="30" alt="Rafael Machado logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav roboto">
                    <!--<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>-->
                    <a class="nav-item nav-link" href="#about">Sobre</a>
                    <a class="nav-item nav-link" href="#skills">Habilidades</a>
                    <a class="nav-item nav-link" href="#hobbies">Hobbies</a>
                    <a class="nav-item nav-link" href="/portfolio/">Portfólio</a>
                    <a class="nav-item nav-link" href="#contact">Contato</a>
                    <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="index-en.php">en</a>
                    <a id="scroll" class="nav-item nav-link" href="#about"><i class="fas fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function resize () {
            document.getElementById("parallax").style.height = (window.innerHeight - 58) + "px";
        }
        resize();
        window.onresize = function() {
            resize();
        };
    </script>

    <div class="container text-center bloco" id="about">
        <h2 class="titulo roboto-bold">Sobre mim</h2>
        <?php 
            // Calcular idade em tempo real

            $data = "05/05/1995";
            // Separa em dia, mês e ano
            list($dia, $mes, $ano) = explode('/', $data);
   
            // Descobre que dia é hoje e retorna a unix timestamp
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            // Descobre a unix timestamp da data de nascimento do fulano
            $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   
            // Depois apenas fazemos o cálculo já citado :)
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
            echo "<p class='roboto'>Olá, sou o Rafael, tenho $idade anos e sou apaixonado por tecnologia, fotografia e música.</p>";
         ?>
        <p class="roboto">Atualmente curso Ciência da Computação na Universidade Federal de Alfenas (Unifal-MG) e fiz graduação sanduíche no Japão durante um ano pela bolsa do Ciência sem Fronteiras.</p>
        <p class="roboto">Apesar de ainda ser estudante de graduação, também trabalho como freelancer desenvolvendo sites.</p>
        <p class="roboto">Sou uma pessoa muito honesta e sociável. Trabalho muito bem em grupo, sou organizado e responsável com minhas tarefas diárias.</p>

        <h3 class="titulo roboto-bold">Intercâmbio</h3>
        <p class="roboto">Em Agosto de 2015 tive a sorte de conseguir viajar para Sapporo no Japão, onde morei durante um ano com a bolsa do Ciência sem Fronteiras estudando na Hokkaido University.</p>
        <p class="roboto">Morar no exterior foi uma experiência muito gratificante, pois adquiri fluência no inglês e aprendi o básico de japonês. Além disso, amadureci bastante e criei laços de amizade com pessoas de todas as partes do mundo!</p>
    </div>

    <div class="parallax2"></div>
    <img class="imagem" src="assets/img/tori.jpg">

    <div class="container bloco" id="skills">
        <h2 class="titulo text-center roboto-bold">Habilidades</h2>
        <div class="barras">
            <ul class="list-unstyled roboto">
                <li>HTML 5</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
                <li>CSS 3</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
                <li>JavaScript</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
                <li>PHP 7</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
                <li>Python for Data Science</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <li>C</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
                <li>Illustrator</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
                <li>Photoshop</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <li>Programação</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
                <li>Design</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <li>Fotografia</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
                <li>Violão</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
                <li>Canto</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">tento</div>
                </div>
                <li>Viagens</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">amo</div>
                </div>
                <li>Inglês</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">99%</div>
                </div>
                <li>Portunhol</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">perfeito</div>
                </div>
                <li>Espanhol</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">malemá</div>
                </div>
                <li>Japonês</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">sei me virá</div>
                </div>
            </ul>
        </div>
    </div>

    <div class="parallax3"></div>
    <img class="imagem" src="assets/img/wallpaper_dev_book.jpg">

    <?php require_once "contato.html"; ?>

    <div class="container text-center roboto-thin">
        <small>Rafael Machado - © Curriculum Vitae</small>
    </div>

    <script type="text/javascript">
        <?php require_once "assets/js/smooth-scroll.js"; ?>
    </script>

</body>
</html>