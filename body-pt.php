
    <div id="home">
        <div id="parallax">
            <div class="container inblock">
                <div id="desk" class="text-center">
                    <img id="profile-pic" onclick="transparent(this)" class="profile-pic" src="assets/img/pic-profile.jpg" alt="Rafael Machado foto perfil">
                    <h1 class="nome">Rafael Machado</h1>
                    <h2 class="dev">desenvolvedor</h2>
                </div>
                <div id="mob" class="text-center">
                    <h1 class="nome">Rafael Machado</h1>
                    <img onclick="transparent(this)" class="profile-pic" src="assets/img/pic-profile.jpg" alt="Rafael Machado foto perfil">
                    <h2 class="dev">desenvolvedor</h2>
                </div>
            </div>
        </div>
    </div>

    <nav id="barranav" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
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
                    <a class="nav-item nav-link" href="<?php echo $root; ?>portfolio/">Portfólio</a>
                    <a class="nav-item nav-link" href="#contact">Contato</a>
                    <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="?lang=en">en</a>
                    
                    <li id="drop" class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='fas fa-angle-down'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="assets/img/rm-black.png" height="30" alt="Rafael Machado logo">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="loginForm" action="" method="POST">
                        <div class="form-group">
                            <label for="user" class="col-form-label font-weight-normal">Usuário</label>
                            <input type="text" class="form-control" id="user" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label font-weight-normal">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember">
                                <label class="custom-control-label font-weight-normal" for="remember">
                                    Lembre de mim
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </div>
        </div>
    </div>

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
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
                <li>Python for Data Science</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <li>C/C++</li>
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
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">perfecto</div>
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

    <!--Smooth Scroll-->
    <script type="text/javascript">
        <?php require_once "assets/js/smooth-scroll.js"; ?>
    </script>