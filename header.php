<?php require_once("dados.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
    <?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php $titulo_pagina = (isset($pagina_noticias) && !isset($max)) ? $json[0]->titulo : $titulo_pagina; ?>
    <?php $descricao_pagina = (isset($pagina_noticias) && !isset($max)) ? limitar_texto(strip_tags(html_entity_decode($json[0]->texto)), 300) : $descricao_pagina; ?>
    <title> <?= $ATAI; ?> - <?= $titulo_pagina; ?></title>

    <!-- Arquivos CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?= "<style>" ?>
        <?= file_get_contents('assets/css/support.min.css'); ?>
        <?= file_get_contents('assets/css/bootstrap-grid.min.css'); ?>
        <?= file_get_contents('assets/css/style.min.css'); ?>
        <?= file_get_contents('assets/css/owl.carousel.min.css'); ?>
        <?= file_get_contents('assets/css/owl.theme.default.min.css'); ?>
    <?= "</style>" ?>    
    
    <!-- Arquivos JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/x-icon">

    <!-- SEO metaTags -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $ATAI; ?>" />
    <meta property="og:image" content="assets/imgs/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $ATAI; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $ATAI; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />
</head>

<body>

<!-- whatsapp -->
<a class="d-flex align-items-center justify-content-center" href="<?= $whatsapp_link ?>" style="position:fixed; width:50px;height:50px;bottom:10px;right:10px;background-color:#25d366;color:#FFF;border-radius:50px; font-size:25px;z-index:1000;" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<header>
    <div class="topo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-auto d-flex justify-content-center justify-content-md-start">
                    <div class="logo py-1">
                        <a href="index.php" target="_self"> <img src="assets/imgs/logo.png" alt=""> </a>
                    </div>
                </div>
                <div class="col-md">
                    <nav class="text-align-center">
                        <a class="d-md-none botao-responsivo"> <i class="fa fa-lg fa-fw fa-bars pull-right"></i> Menu principal </a>
                        <ul class="d-none d-md-flex flex-wrap align-items-center justify-content-center justify-content-md-end main-menu">
                            <li><a href="javascript:movimenta('#empresa');"> Empresa </a></li>
                            <li><a href="javascript:movimenta('#servicos');"> Serviços </a></li>
                            <p class="d-flex align-items-center cor p-1" style="border-radius: 5px; background: #4fce5d;"> <i class="fab fa-fw fa-lg fa-whatsapp"></i> <a href="<?= $whatsapp_link ?>" target="_blank"> <span class="font-weight-600"> <?= $whatsapp ?> </span> </a> </p>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="zero"></div> -->

    <div class="container py-10">
        <h1 class="mb-1 text-align-center" style="word-break: break-word;"> Venha para a <?= $ATAI ?> </h1>
        <p class="m-0 text-align-center"> Escolha a <strong><?= $ATAI ?></strong> e dê adeus às preocupações com a internet. </p>
    </div>

   
    <div class="banner">
        <div class="banner-foto" style="background:url(assets/imgs/b1c.jpg) right top; background-repeat: no-repeat; background-size :cover;" data-cycle-fx=tileSlide data-cycle-tile-count=8> </div>
        <!-- <div class="banner-foto" style="background:url(assets/imgs/b2.png) right top; background-repeat: no-repeat; background-size :contain;" data-cycle-fx=tileSlide data-cycle-tile-count=8> </div> -->
    </div>
        
    <div class="altura last d-flex flex-column align-items-center justify-content-center">
        <div class="container py-10">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-start">
    
                    
                    <h2 class="mb-1"> Assessoria completa para idosos </h2>
                    <h4>Conheça um pouco mais sobre nossa Empresa:</h4>
                    <p> A ATAl é uma empresa focada em ajudar os idosos na terceira idade a usar a técnologia com seguraçca e conforto.
Atualmente idosos entre 55 a 80 anos vem sofrendo grandes dificuldades para acompanhar o desenvolvimento tecnológico que o mundo vem desempenhando ano após ano, com esse crescimento desenfreado muitos sofrem dificuldades de realizarem atividades virtuais básicas com seus celulares ou computadores, e tendo pouco suporte da grande massa, sendo assim necessário algo para ensinar e demonstrar o básico como comunicação e controle de seus dados pessoais, para assim conseguir desfrutar da tecnologia que é extremamente benéfica para pessoas de idade avançada.
 </p>
                    
                </div>
                <div class="col-md-5 offset-md-1 mt-8 mt-md-0">2
                    <div class="rectangle rectangle-bar p-4 cor-c1"> <div id="form"></div>
                        <p class="position-relative m-0"><strong> <?=$ATAI ?> </strong> - <span class="cor-c2">Proposta on-line</span></p>
                        <h4 class="position-relative font-weight-400 my-2"> Preencha o formulário para receber o contato de um de nossos especialistas </h4>
                        <?php require_once("contato.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clip clip-up bkg"></div>

    <div class="social-pos">
        <div class="d-flex flex-column justify-content-center">
            <?php if(isset($twitter) && !empty($twitter)): ?><a href="<?= $twitter; ?>" target="_blank" class="social fab fa-fw fa-twitter"> </a><?php endif; ?>
            <?php if(isset($facebook) && !empty($facebook)): ?><a href="<?= $facebook; ?>" target="_blank" class="social fab fa-fw fa-facebook-f"> </a><?php endif; ?>
            <?php if(isset($linkedin) && !empty($linkedin)): ?><a href="<?= $linkedin; ?>" target="_blank" class="social fab fa-fw fa-linkedin-in"> </a><?php endif; ?>
            <?php if(isset($instagram) && !empty($instagram)): ?><a href="<?= $instagram; ?>" target="_blank" class="social fab fa-fw fa-instagram"> </a><?php endif; ?>
            <!-- <?php if(isset($whatsapp) && !empty($whatsapp)): ?><a href="<?= $whatsapp_link ?>" target="_blank" class="social fab fa-fw fa-whatsapp"> </a><?php endif; ?> -->
        </div>
    </div>

</header>

<?php if (!isset($index)) : ?>
    <style>
        .altura{ min-height: auto !important; }
        .last{ display: none !important; }
    </style>
<?php endif; ?>