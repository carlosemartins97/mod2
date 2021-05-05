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
            0=> array(
                "nome"=>"Suíte Master", 
                "id"=>"slide1",
                "nav"=>"nav1",
                "features"=>array(
                    0=> "Cama de casal Queen",
                    1=> "Frigobar",
                    2=> "Varanda com vista pro mar",
                    3=> "Banheiro individual"
                ), 
                "imgs"=>array(
                    0=> "dist/img/acomodacoes/suite-master.png",
                    1=> "dist/img/acomodacoes/quarto-4.png",
                    2=> "dist/img/acomodacoes/quarto-coletivo.png",
                    3=> "dist/img/acomodacoes/banheiro.png"
                    
                )),

            1=> array(
                "nome"=>"Suíte Simples", 
                "id"=>"slide2",
                "nav"=>"nav2",
                "features"=>array(
                0=> "Acomodação para duas pessoas ou 1 pessoa(quarto individual)",
                1=> "Cama de casal Queen",
                2=> "Frigobar",
                3=> "Banheiro individual"
            ),
            "imgs"=>array(
                0=> "dist/img/acomodacoes/suite-simples.png",
                1=> "dist/img/acomodacoes/quarto-4.png",
                2=> "dist/img/acomodacoes/quarto-coletivo.png",
                3=> "dist/img/acomodacoes/banheiro.png"
                
            )),

            2=> array(
                "nome"=>"Quarto coletivo com 3 beliches", 
                "id"=>"slide3",
                "nav"=>"nav3",
                "features"=>array(
                0=> "Acomodação coletiva para até 6 pessoas",
                1=> "3 beliches",
                2=> "Frigobar",
                3=> "Locker no quarto com 1 armazenamento para cada pessoa"
            ),
            "imgs"=>array(
                0=> "dist/img/acomodacoes/quarto-coletivo.png",
                1=> "dist/img/acomodacoes/quarto-4.png",
                2=> "dist/img/acomodacoes/suite-simples.png",
                3=> "dist/img/acomodacoes/banheiro.png"
                
            )),

            3=> array(
                "nome"=>"Quarto coletivo feminino com 3 beliches", 
                "id"=>"slide4",
                "nav"=>"nav4",
                "features"=>array(
                0=> "Acomodação coletiva para até 6 pessoas",
                1=> "3 beliches",
                2=> "Frigobar",
                3=> "Locker no quarto com 1 armazenamento para cada pessoa",
                4=> "Banheiro coletivo no quarto com 1 sanitário privativo",
                5=> "1 chuveiro com vestiário"
            ),
            "imgs"=>array(
                0=> "dist/img/acomodacoes/quarto-4.png",
                1=> "dist/img/acomodacoes/suite-master.png",
                2=> "dist/img/acomodacoes/quarto-coletivo.png",
                3=> "dist/img/acomodacoes/banheiro.png"
                
            )),

            4=> array(
                "nome"=>"Quarto de coletivo com acessibilidade", 
                "id"=>"slide5",
                "nav"=>"nav5",
                "features"=>array(
                0=> "Acomodação coletiva para até 6 pessoas",
                1=> "3 beliches",
                2=> "Frigobar",
                3=> "Locker no quarto com 1 armazenamento para cada pessoa",
                4=> "Banheiro coletivo no quarto com 1 sanitário e chuveiro com acessibilidade para deficiente",
                5=> "1 chuveiro coletivo sem acessibilidade",
                6=> "1 sanitário privativo com porta"
            ),
            "imgs"=>array(
                0=> "dist/img/acomodacoes/banheiro.png",
                1=> "dist/img/acomodacoes/quarto-4.png",
                2=> "dist/img/acomodacoes/quarto-coletivo.png",
                3=> "dist/img/acomodacoes/suite-simples.png"
                
            )),

            5=> array(
                "nome"=>"Quarto coletivo com 4 beliches", 
                "id"=>"slide6",
                "nav"=>"nav6",
                "features"=>array(
                0=> "Acomodação coletiva para até 8 pessoas",
                1=> "4 beliches",
                2=> "Frigobar",
                3=> "Locker no quarto com 1 armazenamento para cada pessoa"
            ), "obs"=>array(
                    "2 chuveiros com vestiários embutidos",
                    "1 sanitário privativo com porta",
                    "1 pia dupla com espelho",
                    "1 mictório"
            ),
            "imgs"=>array(
                0=> "dist/img/acomodacoes/quarto-coletivo2.png",
                1=> "dist/img/acomodacoes/quarto-4.png",
                2=> "dist/img/acomodacoes/quarto-coletivo.png",
                3=> "dist/img/acomodacoes/banheiro.png"
                
            )),
        )
    ?>

    <section class="pagina-acomodacoes">
        <h1 class="sublinhar-titulo-centralizado">Acomodações</h1>
        <div class="pagina-acomodacoes-content">

        <?php foreach ($acomodacoes as $i => $acomodacao) { ?>
        <div class="card-acomodacoes">
            <div class="card-acomodacoes-slider">
                <div class="slider-img-principal" id="<?php echo $acomodacao["id"] ?>">
                    <?php foreach ($acomodacao["imgs"] as $key => $img) { ?>
                        <img src="<?php echo $img ?>" alt="Acomodação do House & Hostel.">
                    <?php } ?>
                </div>

                <div class="slider-img-carousel" id="<?php echo $acomodacao["nav"] ?>">
                    <?php foreach ($acomodacao["imgs"] as $key => $img) { ?>
                        <img src="<?php echo $img ?>" alt="Acomodação do House & Hostel.">
                    <?php } ?>
                </div>
            </div>
            <div class="card-acomodacoes-info">
                <h2 class="sublinhar-titulo"> <?php echo $acomodacao["nome"]; ?> </h2>
                <?php if($acomodacoes[5] == $acomodacao) { ?>
                    <ul>
                        <?php foreach ($acomodacao["features"] as $key => $feats) { ?>
                            <li>
                                <?php echo $feats ?>
                            </li>
                        <?php } ?>
                            
                            <p class="card-observacoes-texto">
                                <strong>Obs.:</strong> no caso dos quartos coletivos com 3 e 4 beliches ambos 
                                terão 1 banheiro coletivo entre os dois para uso de ambos, segue descrição do banheiro:
                            </p>
                            
                            <p class="card-observacoes-texto">
                                Banheiro coletivo (dois banheiros coletivos, hum para cada 2 quartos):
                            </p>
                            <ul class="card-observacoes-itens">
                                <?php foreach ($acomodacao["obs"] as $key => $obs) { ?>
                                    <li>
                                        <?= $obs ?>
                                    </li>
                                <?php } ?>
                            </ul>
                    </ul>
                <?php } else {?>
                    <ul>
                        <?php foreach ($acomodacao["features"] as $key => $feats) { ?>
                            <li>
                                <?php echo $feats ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>

                
                <a class="link-padrao display-none-1170" href="/contato.php">RESERVAR AGORA</a>
            </div>
            <a class="link-padrao display-none-fullresolution" href="/contato.php">RESERVAR AGORA</a>
        </div>
        <?php } ?>
        <?php include_once('./dev/views/components/whats-flutuante.php') ?>
    </section>


    <?php include_once('./dev/views/components/footer.php') ?>
    

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>