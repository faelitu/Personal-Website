<!DOCTYPE html>
<?php require_once "../config.php" ?>
<html lang="<?php echo $lang; ?>">
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
    <link rel="icon" href="<?php echo $root; ?>assets/img/rm-black.png">
    <?php require_once "import.html"; ?>
    <?php require_once "../functions.php"?>
</head>
<body id="all">
    <?php require_once "../validate.php"; ?>
    <?php
    if (isset($valid) && $valid) {
    	require_once "table-functions.php";
        //echo "Login efetuado com sucesso!";
        ?>
        <nav id="barranav" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?=$root?>#home"><img src="../assets/img/rm-white.png" height="30" alt="Rafael Machado logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav roboto">
                        <!--<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>-->
                        <a class="nav-item nav-link" href="../system.php">Início</a>
                        <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
                    </div>
                    <div class="navbar-nav ml-auto roboto">
                        <a class="nav-item nav-link" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <?php
        require_once "body.php";
    } else {
        echo "Usuário não cadastrado.";
    }
    ?>
    <?php require_once "../import2.html"; ?>
</body>
</html>