<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site dinamico</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">Logomarca</div>
            <nav class="desktop">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header><!--header-->

    <section class="banner-principal">
        <div class="center">
            <h2>Qual o seu melhor email?</h2>
            <form action="">
                <input type="email" name="email" required>
                <input type="submit" name="ação" value="cadastrar">
            </form> 
        </div>
        
    </section><!--banner-principal-->
 
    <section class="descricao-autor">
        <div class="w50">
            <h2>Alexsandro Silva</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam impedit, minus nisi est iusto veritatis exercitationem accusantium quas, tenetur minima dolor, non odit nostrum quis nulla doloremque voluptates veniam.
            </p>

            <br>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam impedit, minus nisi est iusto veritatis exercitationem accusantium quas, tenetur minima dolor, non odit nostrum quis nulla doloremque voluptates veniam.
            </p>   
        </div>

        <div class="w50">
            <img src="./images/Alex.jpg" alt="">
        </div>
    </section><!--descricao-autor-->

    <section calss="especialidades">
        <h2 calss="title">Especialidade</h2>
        <div class="center">
            <div class="box-especialidades">
                <h3>icone</h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga nam distinctio ex dolorem impedit officia culpa ut. Est veritatis maxime animi odit labore velit doloribus ipsum ullam molestiae veniam!</p>
            </div>
            <div class="box-especialidades">
                <h3>icone</h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga nam distinctio ex dolorem impedit officia culpa ut. Est veritatis maxime animi odit labore velit doloribus ipsum ullam molestiae veniam!</p>
            </div>
            <div class="box-especialidades">
                <h3>icone</h3>
                <h3>Javascript</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga nam distinctio ex dolorem impedit officia culpa ut. Est veritatis maxime animi odit labore velit doloribus ipsum ullam molestiae veniam!</p>
            </div>
        </div>
    </section><!--especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50">
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
            <div class="w50">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
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
        </div>
    </section>

    <footer>
        <div class="center">
            <p>Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>