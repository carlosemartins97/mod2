<?php 
    $base_url = '/carlos-martins/house-hostel';

    $paginaLink = basename($_SERVER['SCRIPT_NAME']);    
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
        <a href="index"><img id="header-logo-collapse" src="dist/img/header/full-logo.png" alt="logo da empresa Hostel"></a>
    </div>

    <button id="header-menu-button" type="button"></button>
    <div class="apresentacao">
        <div class="menu-contato">
            <a class="display-none-1170" href="#"><img src="dist/img/header/whats-icon.png" alt="logo do whatsapp"> (00) 0000-0000</a>
        </div>
        <ul class="menu-items1">
            <li class="<?= $paginaLink == 'o-hostel.php' ? 'nav-active' : '' ?>"><a href="o-hostel">O HOSTEL</a></li>
            <li class="<?= $paginaLink == 'acomodacoes.php' ? 'nav-active' : '' ?>"><a href="acomodacoes">ACOMODAÇÕES</a></li>
            <li class="<?= $paginaLink == 'fotos.php' ? 'nav-active' : '' ?>"><a href="fotos">FOTOS</a></li>
        </ul>
    </div>
    <a href="index"><img id="header-logo" src="dist/img/header/full-logo.png" alt="logo da empresa Hostel"></a>
    <div class="reserva">
        <div class="menu-reserva">
            <a class="faca-reserva display-none-1170" href="reserva"><img src="dist/img/header/calendario.png" alt="imagem de um calendário">Faça sua Reserva</a>
        </div>
        <ul class="menu-items2">
            <li class="<?= $paginaLink == 'blog.php' ? 'nav-active' : '' ?>"><a href="blog">BLOG</a></li>
            <li class="<?= $paginaLink == 'localizacao.php' ? 'nav-active' : '' ?>"><a href="localizacao">LOCALIZAÇÃO</a></li>
            <li class="<?= $paginaLink == 'reserva.php' ? 'nav-active' : '' ?>"><a href="reserva">CONTATOS</a></li>
            
        </ul>
        <div class="contato-reserva display-none-fullresolution">
            <a class="header-logo-contato" href="#"><img src="dist/img/header/whats-icon.png" alt="logo do whatsapp"> (00) 0000-0000</a>
            <a class="faca-reserva" href="reserva"><img src="dist/img/header/calendario.png" alt="imagem de um calendário">Faça sua Reserva</a>
        </div>
    </div>
</nav>