<?php require_once('config.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilos/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>./estilos/style.css">
    <title>Site dinamico</title>
</head>
<body>

    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if($url == "contato") $contato = true;

        switch($url)
        {
            case 'sobre':
                echo '<target target="sobre">';
                break;
            case 'servicos':
                echo '<target target="servicos">';
        }
    ?>

    <header>
        <div class="center">
            <h1 class="logomarca left">Logomarca</h1>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" arial-hiden="true"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header><!--header-->

    <?php 
        

        if(file_exists("pages/$url.php"))
        {
            require_once("pages/$url.php");
        }
        else
        {
            if($url != 'sobre' && $url != 'servicos')
            {
                $page404 = true;
                require_once("pages/404.php");
            }
            else
            {
                require_once("pages/home.php");
            }
            
        }
        

    ?>

    <footer <?php if((isset($page404) && $page404 == true) || (isset($contato) && $contato == true)) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>js/nav_mobile.js"></script>
</body>
</html>