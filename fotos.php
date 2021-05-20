<?php 
    $page = 'Fotos';
    include_once('dev/views/includes/head.php');
?>
<body onload="slickFotos()">
    <?php 
        $fotos = array(
            "imagens"=>array(
                "dist/img/fotos/1.png",
                "dist/img/fotos/3.png",
                "dist/img/fotos/2.png",
                "dist/img/fotos/5.png",
                "dist/img/fotos/6.png",
                "dist/img/fotos/4.png",
                "dist/img/fotos/7.png",
                "dist/img/fotos/8.png",
                "dist/img/fotos/9.png",
            ),
            "descricao"=>array(
                "Foto de uma banheira do hotel",
                "Foto da piscina",
                "Foto da sala de um dos quartos",
                "Foto do escritório",
                "Foto de um quarto com cama de casal",
                "Área de lazer externa com camas e piscina",
                "Foto de um quarto com cama de casal",
                "Foto de um quarto com cama de casal",
                "Foto do restaurante interno"
            ),
            "class"=>array(
                "fotos-grid-normal",
                "fotos-grid-maior",
                "fotos-grid-normal",
                "fotos-grid-normal",
                "fotos-grid-normal",
                "fotos-grid-maior",
                "fotos-grid-maior",
                "fotos-grid-normal",
                "fotos-grid-normal",
            )
        )
    ?>

    <?php include_once('./dev/views/components/header.php') ?>
    
    <section class="fotos-container">
        <div class="fotos-content">
            <h1>Fotos</h1>

            <div class="fotos-grid">
                <?php foreach ($fotos["imagens"] as $key => $foto) { ?>
                    <div>
                        <img class="<?= $fotos["class"][$key] ?>" src="<?= $foto ?>" alt="<?= $fotos["descricao"][$key] ?>">
                        <div class="ampliar-imagem">
                            <h2 >House & Hostel</h2>
                            <a data-lity data-lity-target="<?= $foto ?>" class="link-padrao" href="#">AMPLIAR IMAGEM</a>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
        
        <div class="fotos-slider">
            <?php foreach ($fotos["imagens"] as $key => $foto) { ?>
                <a data-lity data-lity-target="<?= $foto ?>"><img src="<?= $foto ?>" alt="<?= $fotos["descricao"][$key] ?>"></a>
            <?php } ?>
        </div>
        <div class="fotos-slider-buttons">
            <button id="estrutura-buttons-prev"><img src="dist/img/conheca-estrutura/slider/setas/left.png" alt="Seta indicando slide anterior."></button>
            <button id="estrutura-buttons-next"><img src="dist/img/conheca-estrutura/slider/setas/right.png" alt="Seta indicando próximo slide."></button>
        </div>
    </section>

    <?php include_once('./dev/views/components/whats-flutuante.php') ?>

    <?php include_once('./dev/views/components/footer.php') ?>
    
    
    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
    <script src="dev/js/lity.js"></script>
    
</body>
</html>