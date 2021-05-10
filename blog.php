<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>O Blog - House & Hostel</title>

    <!-- Main css -->
    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">

    <link rel="stylesheet" tpe="text/css" href="dist/css/utils/jssocials.css">
    <link rel="stylesheet" tpe="text/css" href="dist/css/utils/jssocials-theme-flat.css">;

    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">

</head>
<body>

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
                    <img src="<?= $post["img"] ?>" alt="teste">
                    <div class="blog-card-contato">
                        <a href="#"><img src="dist/img/blog/icons/face.png" alt="Logo do facebook"></a>
                        <a href="#"><img src="dist/img/blog/icons/insta.png" alt="Logo do instagram"></a>
                    </div>
                </div>
                <div class="blog-card-info">
                    <span><?= $post["data"] ?></span>
                    <h2 class="sublinhar-titulo"><?= $post["titulo"] ?></h2>
                    <p><?= $post["descricao"] ?></p>
                    <a href="#">Continue lendo &#8594;</a>
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
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
    <script src="dev/js/jssocials.min.js"></script>
</body>
</html>