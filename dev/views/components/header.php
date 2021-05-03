<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
        $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $home_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
    ?>
    
    <header class="header">
        <div class="content-header">
            <div class="header-address">
                <a href="#"><img src="dist/img/header/gps2.png" alt="Imagem de um 'markup' de localização."> Avenida Miguel Shifano, 4923, Enseada Guarujá</a>
                <div class="header-address-contato">
                    <a href="#" id="logo-face"><img src="dist/img/header/face.png" alt="logo do facebook"></a>
                    <a href="#" id="logo-insta"><img src="dist/img/header/insta.png" alt="logo do instagram"></a>
                </div>
            </div>
        </div>
    </header>
    <nav class="header-menu" title="Hostel & House">
        <div id="link-logo-collapse">
            <a href="/carlos-martins/house-hostel/"><img id="header-logo-collapse" src="dist/img/header/full-logo.png" alt="logo da empresa Hostel"></a>
        </div>

        <button id="header-menu-button" type="button"></button>
        <div class="apresentacao">
            <div class="menu-contato">
                <a class="display-none-1170" href="#"><img src="dist/img/header/whats-icon.png" alt="logo do whatsapp"> (00) 0000-0000</a>
            </div>
            <ul class="menu-items1">
                <li><a href=" <?= $home_url .'o-hostel.php' ?>">O HOSTEL</a></li>
                <li><a href="#">ACOMODAÇÕES</a></li>
                <li><a href="#">FOTOS</a></li>
            </ul>
        </div>
        <a href="/carlos-martins/house-hostel/"><img id="header-logo" src="dist/img/header/full-logo.png" alt="logo da empresa Hostel"></a>
        <div class="reserva">
            <div class="menu-reserva">
                <a class="faca-reserva display-none-1170" href="#"><img src="dist/img/header/calendario.png" alt="imagem de um calendário">Faça sua Reserva</a>
            </div>
            <ul class="menu-items2">
                <li><a href="#">O BLOG</a></li>
                <li><a href="#">LOCALIZAÇÃO</a></li>
                <li><a href="#">CONTATOS</a></li>
                
            </ul>
            <div class="contato-reserva">
                <a class="header-logo-contato" href="#"><img src="dist/img/header/whats-icon.png" alt="logo do whatsapp"> (00) 0000-0000</a>
                <a class="faca-reserva" href="#"><img src="dist/img/header/calendario.png" alt="imagem de um calendário">Faça sua Reserva</a>
            </div>
        </div>
    </nav>