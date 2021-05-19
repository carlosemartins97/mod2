<!DOCTYPE html>
<html lang="pt-br">
<?php 
    $page = 'Reserva Confirmada';
    include_once('dev/views/includes/head.php');
?>
<body>

    <?php 
        switch($_GET["acomodacao"]) {
            case 'suite-master':
                $acomodacao = 'Suíte Master';
                break;
            case 'suite-simples':
                $acomodacao = 'Suíte Simples';
                break;
            case 'coletivo-3-beliches':
                $acomodacao = 'Quarto coletivo com 3 beliches';
                break;
            case 'coletivo-3-beliches-feminino':
                $acomodacao = 'Quarto coletivo feminino com 3 beliches';
                break;
            case 'coletivo-acessibilidade':
                $acomodacao = 'Quarto coletivo com acessibilidade';
                break;
            case 'coletivo-4-beliches':
                $acomodacao = 'Quarto coletivo com 4 beliches';
                break;
            default:
                break;
        }
    ?>

    <?php include_once('dev/views/components/header.php'); ?>

    <section class="resposta-form-container">
        <div class="resposta-form-content">
            <h1 class="sublinhar-titulo-centralizado">Sua solicitação foi confirmada!</h1>
            <div id="resposta-info">
                <p class="p-center"><?= ($_GET["assunto"] == 'fazer-reserva') ? 'Você realizou um pedido de <strong>reserva</strong> com os seguintes dados:' : "Suas dúvidas foram enviadas com sucesso!" ?></p>
                <p><strong> Nome:</strong><br> <?=$_GET["input-nome"] ?></p>
                <p><strong>Email:</strong><br> <?= $_GET["input-email"] ?></p>
                <p><strong>Telefone:</strong><br> <?= $_GET["input-telefone"] ?></p>
                
                <p><?= ($_GET["acomodacao"]) ? ('<strong>Acomodação:</strong> <br>'.$acomodacao) : '' ?></p>


                <p><?= ($_GET["check-in"]) ? ('<strong>Check-in:</strong> <br>'.$_GET["check-in"]) : '' ?></p>
                <p><?= ($_GET["check-out"]) ? ('<strong>Check-out:</strong> <br>'.$_GET["check-in"]) : '' ?></p>

                
                <p><?= ($_GET["text-mensagem"]) ? ('<strong>Mensagem:</strong> <br>'.$_GET["text-mensagem"]) : '' ?></p>
                <p class="p-center"><?= ($_GET["assunto"] == 'fazer-reserva') ? 'Esse pedido foi enviado com sucesso, e assim que possível entraremos em contato!' : "Assim que possível retornaremos o seu contato para esse email: <b>".$_GET["input-email"]."</b> com mais informações." ?></p>
            </div>
            
            <a href="/carlos-martins/house-hostel/" class="link-padrao">Voltar à página inicial!</a>
        </div>
    </section>

    <?php include_once('dev/views/components/footer.php'); ?>

    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="dev/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
    
</body>
</html>