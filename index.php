<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermyr - Gerenciador de Notas Fiscais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'components/header.php' ?>

    <div id="banner-promocional"></div>

    <main class="principal">


        <h1 class="bold">Conheça o <span class="destaques">Hermyr</span>!</h1>

        <div class="grid-container">
            <div class="grid-image">
                <img src="assets/images/img 1.webp" alt="">
            </div>
            <div class="grid-text">
                <p class="destaques bold">Simplificamos a emissão de notas fiscais.</p>
                <p>O seu negócio com Hermyr terá mais rapidez em emitir Notas Fiscais.</p>
            </div>
            <div class="grid-text">
                <p class="destaques bold">Transforme a burocracia em algo simples e rápido.</p>
                <p>Com automação integrada e uma interface intuitiva, você emite notas fiscais em minutos, garantindo precisão e eficiência. Simplifique sua rotina e foque no crescimento do seu negócio</p>
                <a id="experimentar" class="bold" href="#">Experimente Grátis</a>
            </div>
            <div class="grid-image">
                <img src="assets/images/img 2.jpg" alt="">
            </div>
        </div>

        <br>

        <h2 id="vantagens" class="bold">Saiba todas as <span class="destaques">vantagens do Hermyr</span> para o seu negócio</h2>


        <!-- CARROCEL -->

        <div id="carouselVantagens" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselVantagens" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselVantagens" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselVantagens" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/img 1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/img 2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banner.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselVantagens" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselVantagens" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <a href="#">
            <h2 id="botao-grande-link">Entenda tudo que podemos fazer pelo seu negócio!</h2>
        </a>




    </main>

    <div id="newsletter">
        <h2 class="bold sub-titulo branco">Saiba todas as <span class="destaques">nossas novidades</span>!</h2>
        <h6 class="branco sub-titulo">Assine nossa newsletter e fique por dentro de tudo!</h3>

        <form action="#" id="nl-form">
            <input class="nl-input" id="nl-nome" type="text" placeholder="Seu nome">
            <input class="nl-input" id="nl-email" type="e-mail" placeholder="Seu e-mail">
            <button id="assinar">Assinar Newsletter!</button>
        </form>
    </div>

<?php include "components/footer.php" ?>

</body>



</html>