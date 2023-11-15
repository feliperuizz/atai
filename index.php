<?php
$titulo_pagina = "Bem vindo ao nosso site";
$descricao_pagina = "Somos uma Empresa de terceirização de serviços de contabilidade, constituída por profissionais com larga experiência nas áreas em que atuamos: Contábil - Tributária - Fiscal e Trabalhista.";
$index = true;
?>
<?php include_once('header.php'); ?>

<section class="">
    <div class="bkg"> 
        <div class="container py-10"><div id="servicos"></div>
            <div class="row">
                <div class="col-md-auto">
                <h2 class="mb-1"> Outros <span class="cor-c2">Serviços</span> </h2>
                <h4 class="m-0 font-weight-400">Conheça alguns de nossos serviços.</h4>
                <p class="my-3"> <a href="form.html" target="_self" class="bt bt-b2"> Quero uma <strong> proposta</strong></a> </p>
                </div>
                <div class="col-md text-align-center">
                    <p class="d-inline-block background-light py-1 px-2 m-1"> <i class="fas fa-check"></i> Suporte 24hrs </p>
                    <p class="d-inline-block background-light py-1 px-2 m-1"> <i class="fas fa-check"></i> Grupo de apoio </p>
                    <p class="d-inline-block background-light py-1 px-2 m-1"> <i class="fas fa-check"></i> Recursos on-line </p>
                    <p class="d-inline-block background-light py-1 px-2 m-1"> <i class="fas fa-check"></i> Assessoria de redes sociais </p>
                    <p class="d-inline-block background-light py-1 px-2 m-1"> <i class="fas fa-check"></i> Assessoria de segurança</p>
                    <p class="d-inline-block background-light py-1 px-2 m-1"> <i class="fas fa-check"></i> Assessoria para aprender a tecnologia do 0 </p>

                </div>
            </div>    


            <div class="row mt-10"><div id="empresa"></div>
                <div class="col-sm-auto">
                    <img src="assets/imgs/i5.jpg" alt="" style="height:300px; width:auto;">
                </div>
                <div class="col-sm d-flex justify-content-center flex-column">
                    <h2 class="mb-1"> Conte com a <span class="cor-c2"><strong> <?= $ATAI ?> </strong></span> , aqui transformamos desafios em conquistas digitais, porque a idade não é um obstáculo, mas sim uma jornada única. </h2>
                    <h4 class="m-0 font-weight-400">Conectando gerações, facilitando vidas. Sua jornada tecnológica começa aqui!</h4>
                    <p class="my-3"> <a href="<?= $whatsapp_link ?>" target="_blank" class="bt bt-b2"> Quer <strong> saber mais</strong>?</a> </p>
                </div>
            </div>
            <p class="mb-0 text-align-center"> Trabalhamos fornecendo todas as informações e suporte técnico , com visitas periódicas para verificações e acompanhamento, elaborando relatórios para a comunicação das divergências ou sugestões, além de fornecer respostas a consultas por telefone e pessoalmente. </p>
        </div>


    </div>

    <div class="img img-h2"> 
        <div class="clip clip-dw bkg"></div>
            <div class="container position-relative cor py-10">
                <div class="row">
                    <div class="col-md-7"> 
                        <h2 class="h1"> Do clique ao conforto: proporcionando experiências tecnológicas personalizadas para a melhor idade. </h2>
                        <h3 class="mb-1">Valorizamos a qualidade e eficiência de nossos serviços. </h3>
                        <p class="m-0 cor">Te ajudaremos com todas as duvidas e problemas pessoais.</p>
                        <a href="<?= $whatsapp_link ?>" target="_blank" rel="noopener noreferrer" class="bt bt-b2 mt-5">Fale com um de <strong> nossos especialistas </strong></a>
                    </div> 
                    <div class="col-md">
                        <!-- <img src="assets/imgs/i3.png" alt="" style="height:300px; width:auto;"> -->
                    </div>
                </div> <div id="servicos"></div>
            </div>
        <div class="clip clip-up bkg mt-5"></div> 
    </div>

    <div class="bkg">  
        <div class="container">
            <div class="row pos">
                <div class="col-md-4">
                    <div class="rectangle p-4">
                        <div class="position-relative text-align-center">
                            <div class="bord">
                                <i class="far fa-lightbulb fa-fw fa-2x cor-c2"></i> 
                            </div>
                            <h2 class="my-2"> Trabalhamos com Inteligência </h2>
                            <p class="m-0"> Nós trabalhamos com indicadores de atendimento, apresentamos para você onde é necessário concentrar o esforço. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mt-md-0">
                    <div class="rectangle p-4">
                        <div class="position-relative text-align-center">
                            <div class="bord">
                                <i class="fas fa-cogs fa-fw fa-2x cor-c2"></i>
                            </div>
                            <h2 class="my-2"> Ferramentas de Suporte </h2>
                            <p class="m-0"> Nós temos ferramentas de suporte e atendimento, sua equipe trabalha junto com a nossa.  </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mt-md-0">
                    <div class="rectangle p-4">
                        <div class="position-relative text-align-center">
                            <div class="bord">
                                <i class="fas fa-users-cog fa-fw fa-2x cor-c2"></i> 
                            </div>
                            <h2 class="my-2"> Conheça A ATAI </h2>
                            <p class="m-0"> Estamos de portas abertas, venha nos visitar. Temos o espaço que você precisa para reuniões ou treinamentos. </p>
                        </div>
                    </div>
                </div>
            </div>
           

        

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="text-align: center;">
    <iframe src="https://www.youtube.com/embed/0EWXGZaCjQ4" frameborder="1" allowfullscreen width="920" height="615"></iframe>
</body>
</html>



</section>

<?php include_once('footer.php'); ?>



