<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos - House & Hostel</title>

    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">
</head>
<body>
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
                            <a class="link-padrao" href="#">AMPLIAR IMAGEM</a>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </section>

    <?php include_once('./dev/views/components/footer.php') ?>
    
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
</body>
</html>