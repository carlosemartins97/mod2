<?php 
    $page = 'Contato';
    include_once('dev/views/includes/head.php');
?>
<body onload="reserva(), forms()">

<?php include_once('./dev/views/components/header.php') ?>
    
    <section class="contato-container">
        <div class="contato-content">
            <div class="contato-formulario">
                <span>Fale Conosco</span>
                <h1>Reserve sua hospedagem em Santos</h1>
                <form id="contato-form" action="reserva-confirmada.php" method="get">
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
                            placeholder="Ex: (13) 98877-6655" 
                            required data-msg="Por favor, preencha este campo."
                            data-rule-minlength="11" data-msg-minlength="Insira um número de telefone válido."
                            >
                        </div>
                        
                    </div>

                    <label for="assunto">Assunto:</label>
                    <select name="assunto" id="assunto" default="" required data-msg="Por favor, preencha este campo.">
                        <option value="">Selecione um assunto</option>
                        <option value="fazer-reserva">Fazer reserva</option>
                        <option value="info-reserva">Informações sobre reserva</option>
                        <option value="duvida-geral">Dúvidas gerais</option>
                    </select>

                    <label id="select-acomodacao" for="acomodacao">Acomodação:</label>
                    <select name="acomodacao" id="acomodacao" default="" required data-msg="Por favor, preencha este campo.">
                        <option value="">Selecione uma acomodação</option>
                        <option value="suite-master">Suíte Master</option>
                        <option value="suite-simples">Suíte Simples</option>
                        <option value="coletivo-3-beliches">Quarto coletivo com 3 beliches</option>
                        <option value="coletivo-3-beliches-feminino"> Quarto coletivo feminino com 3 beliches</option>
                        <option value="coletivo-acessibilidade">Quarto coletivo com acessibilidade</option>
                        <option value="coletivo-4-beliches">Quarto coletivo com 4 beliches</option>
                    </select>

                    <label id="label-check-in" for="check-in">Check-in:</label>
                    <input 
                        id="check-in" name="check-in" 
                        required data-msg="Por favor, preencha este campo."
                        placeholder="dd/mm/aaaa"
                    >

                    <label id="label-check-out" for="check-out">Check-out:</label>
                    <input 
                        id="check-out" name="check-out" 
                        required data-msg="Por favor, preencha este campo."
                        placeholder="dd/mm/aaaa"
                    >


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
                    </div>
                </form>
            </div>

            <div class="contato-info">
                <?php include_once('dev/views/components/fale-conosco.php') ?>
            </div>
        </div>
    </section>
    <?php include_once('./dev/views/components/whats-flutuante.php') ?>

    <?php include_once('./dev/views/components/footer.php') ?>

    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="dev/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
</body>
</html>