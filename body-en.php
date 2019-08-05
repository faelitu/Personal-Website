
    <div id="home">
        <div id="parallax">
            <div class="container inblock">
                <div id="desk" class="text-center">
                    <img id="profile-pic" onclick="transparent(this)" class="profile-pic" src="assets/img/pic-profile.jpg" alt="Rafael Machado foto perfil">
                    <h1 class="nome">Rafael Machado</h1>
                    <h2 class="dev">developer</h2>
                </div>
                <div id="mob" class="text-center>
                    <h1 class="nome">Rafael Machado</h1>
                    <img onclick="transparent(this)" class="profile-pic" src="assets/img/pic-profile.jpg" alt="Rafael Machado foto perfil">
                    <h2 class="dev">developer</h2>
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
                    <a class="nav-item nav-link" href="#about">About</a>
                    <a class="nav-item nav-link" href="#skills">Skills</a>
                    <a class="nav-item nav-link" href="<?php echo $root; ?>portfolio/?lang=en">Portfolio</a>
                    <a class="nav-item nav-link" href="#contact">Contact</a>
                    <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="?lang=pt-br">pt</a>
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
        <h2 class="titulo roboto-bold">About me</h2>
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
            echo "<p class='roboto'>Hello, I'm Rafael, I'm $idade years old and I'm passionate about technology, photography and music.</p>";
         ?>
        <p class="roboto">I am currently studying Computer Science at the Federal University of Alfenas (Unifal-MG) and I studied in Japan for a year with a scholarship from the brazilian government called Science without Borders.</p>
        <p class="roboto">Although still a graduate student, I also work as a freelancer developing websites.</p>
        <p class="roboto">I am a very honest and sociable person. I work very well in groups, I am organized and responsible with my daily tasks.</p>

        <h3 class="titulo roboto-bold">Exchange</h3>
        <p class="roboto">In August 2015 I was fortunate enough to be able to travel to Sapporo in Japan, where I lived for a year with the Science without Borders scholarship studying at Hokkaido University.</p>
        <p class="roboto">Living abroad was a very rewarding experience, as I acquired fluency in English and learned the basics of Japanese. In addition, I have matured enough and created bonds of friendship with people from all over the world!</p>
    </div>

    <div class="parallax2"></div>
    <img class="imagem" src="assets/img/tori.jpg">

    <div class="container bloco" id="skills">
        <h2 class="titulo text-center roboto-bold">Skills</h2>
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
                <li>Programming</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
                <li>Design</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <li>Photography</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
                <li>Guitar</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
                <li>Singing</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">try to</div>
                </div>
                <li>Trips</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">love it</div>
                </div>
                <li>English</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">99%</div>
                </div>
                <li>Portuñol</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">perfecto</div>
                </div>
                <li>Spanish</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">un poquito</div>
                </div>
                <li>Japanese</li>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">sukoshi</div>

            </ul>
        </div>
    </div>

    <div class="parallax3"></div>
    <img class="imagem" src="assets/img/wallpaper_dev_book.jpg">

    <?php require_once "contact.html"; ?>

    <div class="container text-center roboto-thin">
        <small>Rafael Machado - © Curriculum Vitae</small>
    </div>

    <!--Smooth Scroll-->
    <script type="text/javascript">
        <?php require_once "assets/js/smooth-scroll.js"; ?>
    </script>