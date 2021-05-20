<?php 
    $page = 'Blog';
    include_once('dev/views/includes/head.php');
?>
<body onload="socials()">

    <?php 
        $posts = array(
            0=> array(
                "titulo"=>"O Verão está chegando. Que tal vista para o mar?",
                "descricao"=>"Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. 
                Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas.
                tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.",
                "data"=>"13/08/2018",
                "img"=>"dist/img/blog/noticias/4.png"
            ),
            1=> array(
                "titulo"=>"Principais Bares e Restaurantes em Santos",
                "descricao"=>"Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. 
                Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas.
                tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.",
                "data"=>"13/08/2018",
                "img"=>"dist/img/blog/noticias/1.png"
            ),
            2=> array(
                "titulo"=>"Economia na Hora de Hospedar sua Família",
                "descricao"=>"Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. 
                Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas.
                tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.",
                "data"=>"13/08/2018",
                "img"=>"dist/img/blog/noticias/2.png"
            ),
            3=> array(
                "titulo"=>"Como avaliar os serviços de um bom hotel para se hospedar?",
                "descricao"=>"Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. 
                Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas.
                tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.",
                "data"=>"13/08/2018",
                "img"=>"dist/img/blog/noticias/3.png"
            ),
        )
    ?>
    <?php include_once('./dev/views/components/header.php') ?>

    <section class="blog-container">
        <div class="blog-content">
            <div class="blog-header">
                <h1>Blog</h1>
                <form>
                    <input type="text" placeholder="Digite uma palavra chave">
                    <button type="button">Buscar</button> <!-- type 'button' só por enquanto -->
                </form>
            </div>
            <?php foreach($posts as $key => $post) { ?>
            <div class="blog-card">
                <div class="blog-card-img">
                    <img src="<?= $post["img"] ?>" alt="<?= $post["img"]?>">

                    <div class="blog-card-contato blog-integra-social"></div>
                </div>
                <div class="blog-card-info">
                    <span><?= $post["data"] ?></span>
                    <h2 class="sublinhar-titulo"><?= $post["titulo"] ?></h2>
                    <p><?= $post["descricao"] ?></p>
                    <a href="blog-integra">Continue lendo &#8594;</a>
                </div>
            </div>
            <?php } ?>

            <div class="blog-pagination">
                <button id="pagination-prev">Anterior</button>
                <a class="pagination-page" href="#">1</a>
                <a class="pagination-page active" href="#">2</a>
                <a class="pagination-page" href="#">3</a>
                <button id="pagination-next">Próximo</button>
            </div>
        </div>
        <?php include_once('./dev/views/components/whats-flutuante.php') ?>
    </section>

    <?php include_once('./dev/views/components/footer.php') ?>
    
    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>