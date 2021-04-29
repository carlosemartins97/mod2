<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">

    <title>Acomodações - House & Hostel</title>
</head>
<body>

    <?php include_once('./dev/views/components/header.php') ?>


    <section class="pagina-acomodacoes">
    <div class="pagina-acomodacoes-content">
        <h1 class="sublinhar-titulo-centralizado">Acomodações</h1>
        <div class="card-acomodacoes">
            <div class="card-acomodacoes-slider">
                <div id="slider-img-principal">
                    <img src="dist/img/acomodacoes/suite-master.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/quarto-4.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/quarto-coletivo.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/banheiro.png" alt="Suíte master">
                </div>

                <div id="slider-img-carousel">
                    <img src="dist/img/acomodacoes/suite-master.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/quarto-4.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/quarto-coletivo.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/banheiro.png" alt="Suíte master">
                </div>
            </div>
            <div class="card-acomodacoes-info">
                <h2 class="sublinhar-titulo">Suíte Master</h2>
                <ul>
                    <li>
                        Frigobar
                    </li>
                    <li>
                        Piscina
                    </li>
                </ul>
                <a class="link-padrao" href="#">RESERVAR AGORA</a>
            </div>
        </div>
    
    </section>


    <?php include_once('./dev/views/components/footer.php') ?>
    

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>