<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>Localização - House & Hostel</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">
</head>
<body>
    
    <?php include_once('./dev/views/components/header.php') ?>
    
    <section class="localizacao-container">
        <div class="localizacao-content">
            <h1>Localização</h1>
            <a 
                target="_blank"
                href="https://www.google.com/maps/place/House+Hostel+Guaruj%C3%A1/@-23.9885877,-46.2038534,15z/data=!4m18!1m9!3m8!1s0x0:0xa11857dee4076aa5!2sHouse+Hostel+Guaruj%C3%A1!5m2!4m1!1i2!8m2!3d-23.9885877!4d-46.2038534!3m7!1s0x0:0xa11857dee4076aa5!5m2!4m1!1i2!8m2!3d-23.9885877!4d-46.2038534"
            >Avenida Miguel Stéfano, 4924, Enseada Guarujá</a>
        </div>

        <div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=%20Avenida%20Miguel%20Estefno%20-%20Loteamento%20Joao%20Batista%20Juliao,%20Guaruj%C3%A1%20-%20SP&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe><a href="https://www.online-timer.net"></a>
            </div>
        </div>
    </section>
    
    <?php include_once('./dev/views/components/footer.php') ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>