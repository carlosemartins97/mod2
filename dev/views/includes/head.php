<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="dev/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="dev/img/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">
  
    <?php if($page == 'home'){ ?>
        <!-- Plugin Slick Slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <title>House&Hostel</title>
    <?php } ?>

    <?php if($page == 'O Hostel' || $page == 'Acomodações'){ ?>
        <!-- Plugin Slick Slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <?php } ?>

    <?php if($page == 'Fotos'){ ?>
           <!-- Plugin lightbox -->
        <link href="dist/css/utils/lity.css" rel="stylesheet">
    <?php } ?>

    <?php if($page == 'Contato' || $page == 'Reserva Confirmada'){ ?>
        <!-- Open Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!-- Jquery UI -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <?php } ?>

    <?php if($page == 'Blog' || $page == 'Blog Integra'){ ?>
        <!-- js socials -->
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
        <!-- Open Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <?php } ?>

    <title><?=$page?> - House&Hostel</title>
</head>