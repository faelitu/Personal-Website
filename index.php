<!DOCTYPE html>
<?php require_once "config.php" ?>
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
    <link rel="icon" href="assets/img/rm-black.png">
    <?php require_once "import.html"; ?>
    <?php require_once "functions.php"?>
</head>
<body>
    <?php 
    if ($lang === "pt-br") {
        require_once "body-pt.php";
    } else {
        require_once "body-en.php";
    }
    ?>
    <?php require_once "import2.html"; ?>
</body>
</html>