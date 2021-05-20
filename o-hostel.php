<?php 
    $page = 'O Hostel';
    include_once('dev/views/includes/head.php');
?>
<body onload="slickHome()">
    
    <?php include_once('./dev/views/components/header.php') ?>
    <?php include_once('./dev/views/includes/o-hostel.php') ?>
    <?php include_once('./dev/views/components/footer.php') ?>

    <?php include_once('./dev/views/components/whats-flutuante.php') ?>

    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>

</body>
</html>