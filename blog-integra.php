<?php 
    $page = 'Blog Integra';
    include_once('dev/views/includes/head.php');
?>
<body onload="socials()">

    <?php 
        $relacionados = array(
            0=> array("titulo"=>"O verão está chegando. Que tal uma vista para o mar?", "img"=>"dist/img/blog/noticias/4.png"),
            1=> array("titulo"=>"Principais Bares e Restaurantes em Santos", "img"=>"dist/img/blog/noticias/1.png"),
            2=> array("titulo"=>"Economia na Hora de Hospedar sua Família", "img"=>"dist/img/blog/noticias/2.png"),
            3=> array("titulo"=>"Como avaliar os serviços de um bom hotel para se hospedar?", "img"=>"dist/img/blog/noticias/3.png"),
        )
    ?>
    
    <?php include_once('./dev/views/components/header.php') ?>

    <section class="blog-integra-container">
        <div class="blog-integra-content">
            <span>13/08/2018</span>
            <h1>Como avaliar os serviços de um bom hotel para se hospedar?</h1>

            <div class="blog-integra-social"></div>
            
            <img src="dist/img/blog/integra/1.png" alt="Foto de pessoas fazendo reserva no hotel.">
            <p>
                Viajar é uma das melhores maneiras de descansar e curtir a família, mas para isso é importante acertar na escolha da hospedagem. 
                Se essa é a sua dúvida, não se preocupe, pois neste post vamos apresentar os pontos que fazem a diferença na hora de avaliar 
                os serviços de um bom hotel.
            </p>

            <p>
                Encontrar funcionários simpáticos, quartos confortáveis, boa infraestrutura e um delicioso café da manhã são alguns dos detalhes 
                que podem transformar uma viagem comum em uma experiência realmente memorável. Continue a leitura e saiba mais sobre 
                o assunto.
            </p>

            <h2><span>1.</span> Bom atendimento</h2>
            <p>
                A melhor forma de saber se um hotel oferece um bom atendimento é ler as avaliações feitas por outros viajantes. Dessa forma você 
                garante que encontrará uma equipe bem preparada e disposta a proporcionar dias especiais aos hóspedes.
            </p>

            <h2><span>2.</span> Relação custo-benefício</h2>
            <p>
                Opte por hospedagens que ofereçam fácil acesso a pontos turísticos, restaurantes e atividades que forem do seu interesse. 
                Estar em um hotel bem localizado pode até mesmo reduzir o custo da sua viagem.
            </p>

            <h2><span>3.</span> Infraestrutura</h2>
            <p>
                Ao avaliar os serviços de um bom hotel também é preciso levar em conta a sua infraestrutura. Verifique se o hotel dispõe de um 
                restaurante próprio, de garagem, piscina e outras comodidades que podem tornar a sua viagem mais confortável e bem aproveitada.
            </p>
        </div>
    </section>

    <section class="integra-leia_mais-container">
        <div class="integra-leia_mais-content">
            <h2><img src="dist/img/blog/icons/leia.png" alt="Ícone de um documento"> Leia também</h2>
            
            <div class="integra-leia_mais-relacionados">
                <?php foreach($relacionados as $key => $relacionado) {?>
                    <a href="blog-integra" class="integra-leia_mais-post">
                        <img src="<?= $relacionado["img"] ?>" alt="teste">
                        <h3><?= $relacionado["titulo"] ?></h3>
                        <span>+</span>
                    </a>
                <?php } ?>
            </div>
           
        </div>
    </section>
    <?php include_once('./dev/views/components/whats-flutuante.php') ?>

    <?php include_once('./dev/views/components/footer.php') ?>
    
    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>

</body>
</html>