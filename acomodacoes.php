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

    <?php 
        $acomodacoes = array(
            0=> array("nome"=>"Suíte Master", "features"=>array(
                0=> "Cama de casal Queen",
                1=> "Frigobar",
                2=> "Varanda com vista pro mar",
                3=> "Banheiro individual"
            )),

            1=> array("nome"=>"Suíte Simples", "features"=>array(
                0=> "Acomodação para duas pessoas ou 1 pessoa(quarto individual)",
                1=> "Cama de casal Queen",
                2=> "Frigobar",
                3=> "Banheiro individual"
            )),

            2=> array("nome"=>"Quarto coletivo com 3 beliches", "features"=>array(
                0=> "Acomodação coletiva para até 6 pessoas",
                1=> "3 beliches",
                2=> "Frigobar",
                3=> "Locker no quarto com 1 armazenamento para cada pessoa"
            )),

            3=> array("nome"=>"Quarto coletivo feminino com 3 beliches", "features"=>array(
                0=> "Acomodação coletiva para até 6 pessoas",
                1=> "3 beliches",
                2=> "Frigobar",
                3=> "Locker no quarto com 1 armazenamento para cada pessoa",
                4=> "Banheiro coletivo no quarto com 1 sanitário privativo",
                5=> "1 chuveiro com vestiário"
            )),

            4=> array("nome"=>"Quarto de coletivo com acessibilidade", "features"=>array(
                0=> "Acomodação coletiva para até 6 pessoas",
                1=> "3 beliches",
                2=> "Frigobar",
                3=> "Locker no quarto com 1 armazenamento para cada pessoa",
                4=> "Banheiro coletivo no quarto com 1 sanitário e chuveiro com acessibilidade para deficiente",
                5=> "1 chuveiro coletivo sem acessibilidade",
                6=> "1 sanitário privativo com porta"
            )),

            5=> array("nome"=>"Quarto coletivo com 4 beliches", "features"=>array(
                0=> "Acomodação coletiva para até 8 pessoas",
                1=> "4 beliches",
                2=> "Frigobar",
                3=> "Locker no quarto com 1 armazenamento para cada pessoa"
            ), "obs"=>array(
                0=> "<br><span>Obs.:</span> no caso dos quartos coletivos com 3 e 4 beliches ambos terão 1 banheiro coletivo entre os dois para uso
                de ambos, segue descrição do banheiro:"
            )),
        )
    ?>

    <section class="pagina-acomodacoes">
    <div class="pagina-acomodacoes-content">
        <h1 class="sublinhar-titulo-centralizado">Acomodações</h1>

        <?php foreach ($acomodacoes as $key => $acomodacao) { ?>
        <div class="card-acomodacoes">
            <div class="card-acomodacoes-slider">
                <div class="slider-img-principal">
                    <img src="dist/img/acomodacoes/suite-master.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/quarto-4.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/quarto-coletivo.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/banheiro.png" alt="Suíte master">
                </div>

                <div class="slider-img-carousel">
                    <img src="dist/img/acomodacoes/suite-master.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/quarto-4.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/quarto-coletivo.png" alt="Suíte master">
                    <img src="dist/img/acomodacoes/banheiro.png" alt="Suíte master">
                </div>
            </div>
            <div class="card-acomodacoes-info">
                <h2 class="sublinhar-titulo"> <?php echo $acomodacao["nome"]; ?> </h2>
                <ul>
                    <?php foreach ($acomodacao["features"] as $key => $feats) { ?>
                    <li>
                        <?php echo $feats ?>
                    </li>
                    <?php } ?>
                </ul>
                <a class="link-padrao" href="/contato.php">RESERVAR AGORA</a>
            </div>
        </div>
        <?php } ?>
    </section>


    <?php include_once('./dev/views/components/footer.php') ?>
    

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>