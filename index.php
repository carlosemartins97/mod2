<!DOCTYPE html>
<html lang="pt-br">
<?php 
    $page = 'home';
    include_once('dev/views/includes/head.php');
?>
<body onload="slickHome()">

    <?php include_once('./dev/views/components/header.php') ?>

    <section class="carousel">
        <div class="main-carousel-slides">
            <div class="slide-content">
                <span>SEJA BEM VINDO</span>

                <h1>RESERVE SUA HOSPEDAGEM EM GUARUJÁ</h1>

                <a href="contato">CLIQUE E FAÇA SUA RESERVA</a>
            </div>

        </div>
        <div class="main-carousel-slides">
            <div class="slide-content">
                <span>SEJA BEM VINDO</span>

                <h1>RESERVE SUA HOSPEDAGEM EM GUARUJÁ</h1>

                <a href="contato">CLIQUE E FAÇA SUA RESERVA</a>
            </div>
        </div>
    </section>

    <section class="acomodacoes">
        <div class="acomodacoes-titulo">
            <h1 class="sublinhar-titulo-centralizado">Nossas Acomodações</h1>
        </div>
        <div class="acomodacoes-container">
            <div class="acomodacoes-content">
                <img src="dist/img/acomodacoes/suite-master.png" alt="Acomodação Suíte Master">
                <div class="acomodacoes-info">
                    <h2>Suíte Master</h2>
                    <p>
                        Cama de casal queen,
                        Frigobar, Varanda com vista pro mar,
                        Banheiro individual
                    </p>
                    <a class="link-padrao" href="contato">Reservar</a>
                </div>
            </div>
            <div class="acomodacoes-content">
                <img src="dist/img/acomodacoes/suite-simples.png" alt="Acomodação Suíte Master">
                <div class="acomodacoes-info">
                    <h2>Suíte Simples</h2>
                    <p>
                        Acomodação para duas pessoas (casal) 
                        ou 1 pessoa (quarto individual)
                        Cama de casal Queen, Frigobar, 
                        Banheiro individual
                    </p>
                    <a class="link-padrao" href="contato">Reservar</a>
                </div>
            </div>
            <div class="acomodacoes-content">
                <img src="dist/img/acomodacoes/quarto-coletivo.png" alt="Acomodação Suíte Master">
                <div class="acomodacoes-info">
                    <h2>Quarto Coletivo</h2>
                    <p>
                        Acomodação coletiva para até 6 
                        pessoas 3 beliches, Frigobar Locker no 
                        quarto com 1 armazenamento
                        para cada pessoa
                    </p>
                    <a class="link-padrao" href="contato">Reservar</a>
                </div>
            </div>
        </div>
        <div class="acomodacoes-moreinfo">
            <a class="link-padrao" href="acomodacoes">Mais acomodações</a>
        </div>
    </section>

    <?php include('./dev/views/includes/o-hostel.php') ?> 

    <section class="fale-conosco">
        <div class="fale-conosco-container">
            <div class="fale-conosco-header">
                <span>Fale Conosco</span>
                <h1 class="sublinhar-titulo">Reserve sua hospedagem <br> em Guarujá</h1>
            </div>
            <div class="fale-conosco-contato">
                <div class="contato-atendimento">
                    <div class="contato-imagem">
                        <img src="dist/img/fale-conosco/phone.png" alt="Ícone de um telefone">
                    </div>
                    <div class="contato-info">
                        <h2>Atendimento</h2>
                        <a href=”tel:+55000000000000″>Fone fax: (00)0000-0000</a>
                        <a href="mailto:teste@teste.com?subject=Reserva">contato@house&hostel.com.br</a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=00000000000" class="contato-atendimento-whatsapp"><img src="dist/img/header/whats-icon.png" alt="ícone do whatsapp">(00) 0000-0000</a>
                    </div>
                    </div>
                <div class="contato-endereco">
                    <div class="contato-imagem">
                        <img src="dist/img/fale-conosco/endereco.png" alt="Ícone de endereço">
                    </div>
                    <div class="contato-info">
                        <h2>Endereço</h2>
                        <a 
                            target="_blank"
                            href="https://www.google.com/maps/place/House+Hostel+Guaruj%C3%A1/@-23.9886873,-46.2039534,17z/data=!4m18!1m9!3m8!1s0x94d201a1cef9bfff:0xa11857dee4076aa5!2sHouse+Hostel+Guaruj%C3%A1!5m2!4m1!1i2!8m2!3d-23.9885877!4d-46.2038534!3m7!1s0x94d201a1cef9bfff:0xa11857dee4076aa5!5m2!4m1!1i2!8m2!3d-23.9885877!4d-46.2038534"
                        >
                        Avenida Miguel Stéfano, 4923 <br> Enseada, Guarujá.</a>
                    </div>
                </div>
                <div class="contato-funcionamento">
                    <div class="contato-imagem">
                        <img src="dist/img/fale-conosco/time.png" alt="Ícone de um relégio">
                    </div>
                    <div class="contato-info">
                        <h2>Funcionamento</h2>
                        <span>Segunda à Sexta das 10h00 às 18h00</span>
                        <span>Sábado das 9h00 às 13h00</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('./dev/views/components/whats-flutuante.php') ?>

    <?php include_once('./dev/views/components/footer.php') ?>

    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>