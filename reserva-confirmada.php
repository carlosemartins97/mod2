<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva confirmada - House & Hostel</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="dev/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="dev/img/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" tpe="text/css" href="dist/css/styles.css">
</head>
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

        $check_in = new DateTime($_GET["check-in"]);
        $check_in_formatted = $check_in->format('d/m/Y');

        $check_out = new DateTime($_GET["check-out"]);
        $check_out_formatted = $check_out->format('d/m/Y');
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


                <p><?= ($_GET["check-in"]) ? ('<strong>Check-in:</strong> <br>'.$check_in_formatted) : '' ?></p>
                <p><?= ($_GET["check-out"]) ? ('<strong>Check-out:</strong> <br>'.$check_out_formatted) : '' ?></p>

                
                <p><?= ($_GET["text-mensagem"]) ? ('<strong>Mensagem:</strong> <br>'.$_GET["text-mensagem"]) : '' ?></p>
                <p class="p-center"><?= ($_GET["assunto"] == 'fazer-reserva') ? 'Esse pedido foi enviado com sucesso, e assim que possível entraremos em contato!' : "Assim que possível retornaremos o seu contato para esse email: <b>".$_GET["input-email"]."</b> com mais informações." ?></p>
            </div>
            
            <a href="index" class="link-padrao">Voltar à página inicial!</a>
        </div>
    </section>

    <?php include_once('dev/views/components/footer.php'); ?>

    <script type="text/javascript" src="dev/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="dev/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="dev/js/main-slider.js"></script>
    
</body>
</html>