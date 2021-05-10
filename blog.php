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
            <div class="blog-card">
                <div class="blog-card-img">
                    <img src="dist/img/acomodacoes/suite-master.png" alt="teste">
                    <div class="blog-card-contato">
                        <a href="#"><img src="dist/img/blog/icons/face.png" alt="Logo do facebook"></a>
                        <a href="#"><img src="dist/img/blog/icons/insta.png" alt="Logo do instagram"></a>
                    </div>
                </div>
                <div class="blog-card-info">
                    <span>13/08/2018</span>
                    <h2 class="sublinhar-titulo">O Verão está chegando. Que tal vista para o mar?</h2>
                    <p>
                        Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. 
                        Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas.
                        tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                    </p>
                    <a href="#">Continue lendo &#8594;</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-card-img">
                    <img src="dist/img/acomodacoes/suite-master.png" alt="teste">
                    <div class="blog-card-contato">
                        <a href="#"><img src="dist/img/blog/icons/face.png" alt="Logo do facebook"></a>
                        <a href="#"><img src="dist/img/blog/icons/insta.png" alt="Logo do instagram"></a>
                    </div>
                </div>
                <div class="blog-card-info">
                    <span>13/08/2018</span>
                    <h2 class="sublinhar-titulo">O Verão está chegando. Que tal vista para o mar?</h2>
                    <p>
                        Phasellus portasce susct vus mi. Cum sociis nat pentibus et magnis dis parturient montnascetur  ridiculus mus. 
                        Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem Maecenas.
                        tristique orci ac sem. Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                    </p>
                    <a href="#">Continue lendo &#8594;</a>
                </div>
            </div>
            <div class="blog-pagination">
                <button id="pagination-prev">Anterior</button>
                <a class="pagination-page" href="#">1</a>
                <a class="pagination-page active" href="#">2</a>
                <a class="pagination-page" href="#">3</a>
                <button id="pagination-next">Próximo</button>
            </div>
        </div>
    </section>

    <?php include_once('./dev/views/components/footer.php') ?>
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
    <script src="dev/js/jssocials.min.js"></script>
</body>
</html>