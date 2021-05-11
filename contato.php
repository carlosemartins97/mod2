<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - House & Hostel</title>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">
</head>
<body>

<?php include_once('./dev/views/components/header.php') ?>
    
    <section class="contato-container">
        <div class="contato-content">
            <div class="contato-formulario">
                <span>Fale Conosco</span>
                <h1>Reserve sua hospedagem em Santos</h1>
                <form action="">
                    <label id="nome" for="input-nome"><span>•</span> Seu nome:
                        <input type="text" id="input-nome" placeholder="Nome completo">
                    </label>
                    <div class="contato-formulario-userinfo">
                        <label id="email" for="input-email"><span>•</span> Seu e-mail:
                            <input type="text" id="input-email" placeholder="EX: mail@exemplo.com.br">
                        </label>
                        <label id="telefone" for="input-telefone"><span>•</span> Telefone:
                            <input type="text" id="input-telefone" placeholder="EX: 13 997586542">
                        </label>
                    </div>
                    <label id="mensagem" for="text-mensagem"><span>•</span> Mensagem:
                        <textarea name="text-mensagem" id="text-mensagem" placeholder="Digite aqui a mensagem que deseja nos passar"></textarea>
                    </label>

                    <div class="contato-formulario-enviar">
                        <button type="submit">ENVIAR</button>

                        <span><img src="dist/img/contato/check-mark.png" alt="Imagem de um sinal de positivo."> Dados enviados com sucesso!</span>
                    </div>
                </form>
            </div>

            <div class="contato-info">
                <div class="fale-conosco-contato">
                    <div class="contato-atendimento">
                        <div class="contato-imagem">
                            <img src="dist/img/fale-conosco/phone.png" alt="Ícone de um telefone">
                        </div>
                        <div class="contato-info">
                            <h2>Atendimento</h2>
                            <a href="#">Fone fax: (00)0000-0000</a>
                            <a href="#">contato@house&hostel.com.br</a>
                            <a href="#" class="contato-atendimento-whatsapp"><img src="dist/img/header/whats-icon.png" alt="ícone do whatsapp">(00) 0000-0000</a>
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
        </div>
    </section>

    <?php include_once('./dev/views/components/footer.php') ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>