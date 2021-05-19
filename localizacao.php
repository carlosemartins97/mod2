<?php 
    $page = 'Localização';
    include_once('dev/views/includes/head.php');
?>
<body>
    
    <?php include_once('./dev/views/components/header.php') ?>
    
    <section class="localizacao-container">
        <?php include_once('./dev/views/components/whats-flutuante.php') ?>
        <div class="localizacao-content">
            <h1 class="sublinhar-titulo-centralizado">Localização</h1>
            <a 
                target="_blank"
                href="https://www.google.com/maps/place/House+Hostel+Guaruj%C3%A1/@-23.9885877,-46.2038534,15z/data=!4m18!1m9!3m8!1s0x0:0xa11857dee4076aa5!2sHouse+Hostel+Guaruj%C3%A1!5m2!4m1!1i2!8m2!3d-23.9885877!4d-46.2038534!3m7!1s0x0:0xa11857dee4076aa5!5m2!4m1!1i2!8m2!3d-23.9885877!4d-46.2038534"
            >Avenida Miguel Stéfano, 4924, Enseada Guarujá</a>
        </div>

        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=-23.988588935623042,%20-46.20382793585921&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
        
    </section>
    
    <?php include_once('./dev/views/components/footer.php') ?>

    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>