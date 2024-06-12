<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./estilos/style.css">
    <title>Site dinamico</title>
</head>
<body>
    <header>
        <div class="center">
            <h1 class="logomarca left">Logomarca</h1>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" arial-hiden="true"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header><!--header-->

    <section class="banner-principal">
        <div class="overlap"></div>
        <div class="center form">
            <h2>Qual o seu melhor email?</h2>
            <form  action="">
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="submit" name="ação" value="cadastrar">
            </form> 
        </div>
        
    </section><!--banner-principal-->
 
    <section class="center descricao-autor">
        <div class="w50 left">
            <h2>Alexsandro Silva</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam impedit, minus nisi est iusto veritatis exercitationem accusantium quas, tenetur minima dolor, non odit nostrum quis nulla doloremque voluptates veniam.</p>

            <br>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam impedit, minus nisi est iusto veritatis exercitationem accusantium quas, tenetur minima dolor, non odit nostrum quis nulla doloremque voluptates veniam.</p>   
        </div>

        <div class="w50 left">
            <img class="right"  src="./images/Alex.jpg" alt="">
        </div>
        <div class="clear"></div>
    </section><!--descricao-autor-->
    

    <section class="especialidades">
        <div class="center">
            <h2 calss="title">Especialidades</h2>
            <div class="box-especialidades w33 left">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga nam distinctio ex dolorem impedit officia culpa ut. Est veritatis maxime animi odit labore velit doloribus ipsum ullam molestiae veniam!</p>
            </div>
            <div class="box-especialidades w33 left">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga nam distinctio ex dolorem impedit officia culpa ut. Est veritatis maxime animi odit labore velit doloribus ipsum ullam molestiae veniam!</p>
            </div>
            <div class="box-especialidades w33 left">
                <h3><i class="fa fa-codepen" aria-hidden="true"></i></h3>
                <h4>Javascript</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga nam distinctio ex dolorem impedit officia culpa ut. Est veritatis maxime animi odit labore velit doloribus ipsum ullam molestiae veniam!</p>
            </div>
        </div>
        <div class="clear"></div>
    </section><!--especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos">
                <h2 calss="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores eligendi debitis magni? Laudantium aspernatur doloribus non dolores! Dolore, animi qui quidem obcaecati cum vitae odit totam eaque perferendis consequuntur quos.</p>
                    <p class="nome-autor">nome</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores eligendi debitis magni? Laudantium aspernatur doloribus non dolores! Dolore, animi qui quidem obcaecati cum vitae odit totam eaque perferendis consequuntur quos.</p>
                    <p class="nome-autor">nome</p>
                </div>
            </div>
            <div class="w50 left servicos">
                <h2 class="title">Serviços</h2>
                <div>
                    <ul>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem cumque dolor, reiciendis repellendus sapiente laboriosam quasi ad necessitatibus voluptas, reprehenderit iure. Unde sit maiores rerum, dicta soluta quos facilis earum.
                        </li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem cumque dolor, reiciendis repellendus sapiente laboriosam quasi ad necessitatibus voluptas, reprehenderit iure. Unde sit maiores rerum, dicta soluta quos facilis earum.
                        </li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem cumque dolor, reiciendis repellendus sapiente laboriosam quasi ad necessitatibus voluptas, reprehenderit iure. Unde sit maiores rerum, dicta soluta quos facilis earum.
                        </li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem cumque dolor, reiciendis repellendus sapiente laboriosam quasi ad necessitatibus voluptas, reprehenderit iure. Unde sit maiores rerum, dicta soluta quos facilis earum.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <footer>
        <div class="center">
            <p>Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="./js/jquery.js"></script>
    <script src="./js/nav_mobile.js"></script>
</body>
</html>