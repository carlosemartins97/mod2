<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - House & Hostel</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="dev/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="dev/img/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">
</head>
<body onload="forms()">

<?php include_once('./dev/views/components/header.php') ?>
    
    <section class="contato-container">
        <div class="contato-content">
            <div class="contato-formulario">
                <span>Fale Conosco</span>
                <h1>Reserve sua hospedagem em Santos</h1>
                <form id="contato-form" action="http://hub.fatecrl.edu.br/sobrino/recebe.php">
                    <label id="nome" for="input-nome"><span id="input-nome-span">•</span> Seu nome:</label>
                    <input 
                    type="text" 
                    name="input-nome" 
                    id="input-nome" 
                    placeholder="Nome completo" 
                    required data-msg="Por favor, preencha este campo."
                    data-rule-minlength="3" data-msg-minlength="Mínimo de 3 caracteres."
                    data-rule-maxlength="40" data-msg-maxlength="Máximo de 40 caracteres."
                    >
                    
                    <div class="contato-formulario-userinfo">

                        <div id="container-email">
                            <label id="email" for="input-email"><span id="input-email-span">•</span> Seu e-mail:</label>
                            <input 
                            type="email" 
                            name="input-email" 
                            id="input-email" 
                            placeholder="Ex: mail@exemplo.com.br" 
                            required data-msg="Por favor, insira um e-mail válido."
                            data-rule-maxlength="40" data-msg-maxlength="Máximo de 40 caracteres."
                            >
                        </div>
                        
                        <div id="container-telefone">
                            <label id="telefone" for="input-telefone"><span id="input-telefone-span">•</span> Telefone:</label>
                            <input 
                            type="tel" 
                            name="input-telefone" 
                            id="input-telefone" 
                            placeholder="Ex: 13 997586542" 
                            required data-msg="Por favor, preencha este campo."
                            data-rule-minlength="11" data-msg-minlength="Insira um número de telefone válido."
                            >
                        </div>
                        
                    </div>
                    <label id="mensagem" for="text-mensagem"><span id="input-mensagem-span">•</span> Mensagem:</label>
                    <textarea 
                    name="text-mensagem" 
                    id="text-mensagem" 
                    placeholder="Digite aqui a mensagem que deseja nos passar" 
                    required data-msg="Por favor, preencha este campo."
                    data-rule-maxlength="500"
                    data-msg-maxlength="Limite de 500 caracteres atingido."
                    ></textarea>
                    

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

    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="dev/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>