<?php
$titulo_pagina = "Entre em Contato";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>

<?php include_once('header.php'); ?>

<article class="background-white">

    <div class="container py-10 text-align-justify overflow-hidden">

        <h5 class="mb-1 font-weight-300"> Venha fazer uma parceria de sucesso! </h5>
        <h1 class="mb-5 cor-c3"> <?php echo $titulo_pagina ?> </h1>

        <div class="row">
            <div class="col-lg-4">
                <div class="text-align-justify text-align-lg-left d-flex flex-column align-items-start">
                    <h4 class="font-weight-300 mb-0"> Tem alguma dúvida? </h4>
                    <h2 class="h1 font-weight-400"> Fale <span class="font-weight-600">conosco agora </span></h2>
                    <p class="m-0"> Mande uma mensagem diretamente para nosso WhatsApp e vamos conversar sobre o seu caso. Você também pode nos enviar um e-mail direto usando o formulário. </p>
                    <p class="mb-0"> <a href="<?= $whatsapp_link ?>" target="_blank" class="bt bt-whats text-transform-uppercase mb-0 cor-c2" style="font-variant: small-caps;"> <i class="mr-1 fab fa-fw fa-whatsapp"></i> <small> Whatsapp </small> </a> </p>
                    <p class="mb-0"> <a href="tel:55<?= str_replace(array('(',')',' ','-','.'), "", $telefone) ?>" target="_blank" class="bt bt-b3 text-transform-uppercase mb-0 cor-c2" style="font-variant: small-caps;"> <i class="mr-1 fas fa-fw fa-phone-volume"></i> <small> Ligar </small> </a> </p>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1 mt-5 mt-lg-0">
                <div class="">
                    <h4 class="font-weight-300 mb-1"> Entre em <span class="font-weight-500">contato </span> e faça uma <span class="font-weight-500">parceria </span>de sucesso! </h4>
                    <h2 class="font-weight-300"> Interessado em nossos <span class="font-weight-500"> serviços</span>?</h2> 
                    <?php require_once("contato.php"); ?>
                </div>
            </div>
        </div>

    </div>

</article>

<?php include_once('footer.php'); ?>