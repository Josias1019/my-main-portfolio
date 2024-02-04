<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Portifolio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/menu.css'>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Adicione o jQuery antes do Slick Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Mova o jQuery para cá -->
    <link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css" />
    <script type="text/javascript" src="slick-master/slick/slick.min.js"></script>
    <script type="text/javascript" src="Script/main.js"></script>
</head>

<body>

    <header>

        <div class="logo-center">
            <?php
            // Caminho da imagem
            $caminhoDaImagem = 'image/JF-logo.jpg';

            // dimensões desejadas
            $novaLargura = 720;
            $novaAltura = 152;
            ?>

            <!-- Exibindo a imagem com dimensões ajustadas usando a tag img e aplicando o estilo responsivo -->
            <img src="<?php echo $caminhoDaImagem; ?>" alt="Minha Imagem" class="imagem-responsiva"
                width="<?php echo $novaLargura; ?>" height="<?php echo $novaAltura; ?>">
        </div><br>

    </header>

    <main>

        <div class="menu">

            <nav>
                <ul>

                    <li>

                        <div class="menu-li">

                            <span class="span-menu">Habilidades</span>

                        </div>

                        <ul class="submenu">
                            <li><a href="conteudo">Habilidade 1</a></li>
                            <li><a href="#">Habilidade 2</a></li>
                            <li><a href="#">Habilidade 3</a></li>
                        </ul>
                    </li>

                    <li>

                        <div class="menu-li">

                            <span class="span-menu">Cursos</span>

                        </div>

                        <ul class="submenu">
                            <li><a href=".cursos">Curso 1</a></li>
                            <li><a href=".cursos2">Curso 2</a></li>
                            <li><a href=".cursos3">Curso 3</a></li>
                        </ul>
                    </li>

                    <li>

                        <div class="menu-li">

                            <span class="span-menu">Projetos</span>

                        </div>

                        <ul class="submenu">
                            <li><a href="#">Projeto 1</a></li>
                            <li><a href="#">Projeto 2</a></li>
                            <li><a href="#">Projeto 3</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>

        </div>

        <div>
            <?php
            // Array de caminhos das imagens
            $imagens = array(
                'image/code1.png',
                'image/code2.png',
                'image/code3.png'
            );
            ?>

            <!-- Slider -->
            <div class="slider">

                <?php
                // Loop para exibir as imagens no slider
                foreach ($imagens as $imagem) {
                    echo "<img src='$imagem' alt='Imagem do Slider' style='width: 100%; height: 720px;'>";
                }
                ?>

            </div>

            <?php
            $nome = "Visitante";
            ?>

            <!-- conteúdo PHP -->
            <div class="section-cursos">

                <div class="section cursos">
                    <h1>Bem-vindo,
                        <?php echo $nome; ?>!
                    </h1>
                    <p>Este é um exemplo de conteúdo dentro de uma div usando PHP.</p>
    
                </div>
            </div>

            <!--conteúdo PHP -->
            <div class="section-cursos">

                <div class="section cursos2">
                    <h1>Bem-vindo,
                        <?php echo $nome; ?>!
                    </h1>
                    <p>Este é um exemplo de conteúdo dentro de uma div usando PHP.</p>
                    
                </div>

                <!-- conteúdo PHP -->
                <div class="section-cursos">

                    <div class="section cursos3">
                        <h1>Bem-vindo,
                            <?php echo $nome; ?>!
                        </h1>
                        <p>Este é um exemplo de conteúdo dentro de uma div usando PHP.</p>
                        
                    </div>

    </main>

    <script>
        document.querySelectorAll('a[href^=".cursos"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.slider').slick({
                autoplay: true,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    
                ]
            });
        });
    </script>

</body>

</html>