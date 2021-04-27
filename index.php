<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">

    <title>House & Hostel</title>
</head>
<body>
    <?php include_once('./dev/views/includes/header.php') ?>

    <section class="carousel">
        <div class="main-carousel-slides">
            <div class="slide-content">
                <span>SEJA BEM VINDO</span>

                <h1>RESERVE SUA HOSPEDAGEM EM GUARUJÁ</h1>

                <a href="#">CLIQUE E FAÇA SUA RESERVA</a>
            </div>

        </div>
        <div class="main-carousel-slides">
            <div class="slide-content">
                <span>SEJA BEM VINDO</span>

                <h1>RESERVE SUA HOSPEDAGEM EM GUARUJÁ</h1>

                <a href="#">CLIQUE E FAÇA SUA RESERVA</a>
            </div>
        </div>
    </section>

    <section class="acomodacoes">
        <h1>Nossas Acomodações</h1>
        <div class="acomodacoes-container">
            <div class="acomodacoes-content">
                <img src="dist/img/acomodacoes/suite-master.png" alt="Acomodação Suíte Master">
                <div class="acomodacoes-info">
                    <h2>Suíte Master</h2>
                    <p>
                        Cama de casal queen,
                        Frigobar, Varanda com vista pro mar,
                        Banheiro individual
                    </p>
                    <a href="#">Reservar</a>
                </div>
            </div>
            <div class="acomodacoes-content">
                <img src="dist/img/acomodacoes/suite-simples.png" alt="Acomodação Suíte Master">
                <div class="acomodacoes-info">
                    <h2>Suíte Simples</h2>
                    <p>
                        Acomodação para duas pessoas (casal) 
                        ou 1 pessoa (quarto individual)
                        Cama de casal Queen, Frigobar, 
                        Banheiro individual
                    </p>
                    <a href="#">Reservar</a>
                </div>
            </div>
            <div class="acomodacoes-content">
                <img src="dist/img/acomodacoes/quarto-coletivo.png" alt="Acomodação Suíte Master">
                <div class="acomodacoes-info">
                    <h2>Quarto Coletivo</h2>
                    <p>
                        Acomodação coletiva para até 6 
                        pessoas 3 beliches, Frigobar Locker no 
                        quarto com 1 armazenamento
                        para cada pessoa
                    </p>
                    <a href="#">Reservar</a>
                </div>
            </div>
        </div>
        <div class="acomodacoes-moreinfo">
            <a href="#">Mais acomodações</a>
        </div>
    </section>

    <section class="conheca-estrutura-container">
        <div class="conheca-estrutura-content">
            <div class="apresentacao-container">
                <div class="conheca-estrutura-apresentacao">
                    <span>Bem vindo ao House & Hostel</span>
                    <h1>Um lugar pra relaxar</h1>

                    <p>
                        Cuidadosamente planejado em uma área de mais de 130 mil m², com exuberantes jardins de inspiração oriental, proporciona o clima de paz e tranquilidade 
                        ideal para fugir do stress da vida moderna.
                        Para quem procura um Hotel em meio à natureza com segurança e boa gastronomia contamos com uma completa infra estrutura, 96 amplas suítes com sacada privativa, 
                        uma área social de 400m², espaço para eventos com salas de convenções para até 350 
                        pessoas, restaurante com cozinha contemporânea, piscinas, centro fitness e as instalações do SPA com massagens, terapias, estética, hidromassagem e sauna.
                    </p>

                    <span>Conheça Nossa Estrutura <img src="./dist/img/conheca-estrutura/seta-baixo.png" alt="Seta apontando pra baixo"></span>
                </div>
                <div class="conheca-estrutura-imagem">
                    <img src="./dist/img/conheca-estrutura/conheca-estrutura.png" alt="Imagem de um quarto com vista para praia.">
                </div>
            </div>
        </div>
    </section>

    

    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>