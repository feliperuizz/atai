<footer class="background-light">

    <div class="clip clip-dw bkg"></div>
        <div class="container pt-10">
            <div class="row no-gutters">
                <div class="col-md">
                    <h2 class="mb-1"> Contato </h2>
                    <p> Precisa falar conosco? Preencha o formulário, nos envie um Whatsapp ou nos ligue que estaremos prontos para ajudar a solucionar seus problemas técnologicos.</p>
                    <div class="clip clip-up bkg mt-5"></div>
                    <div class="bkg p-4">
                        <div class="d-flex align-items-baseline">
                            <i class="mr-1 fas fa-fw fa-map-marker-alt bkg-b2 cor-cb d-flex align-items-center justify-content-center" style="border-radius: 50%; padding: 30px; width:50px; height:50px;"></i>
                            <div>
                                <h4 class="m-0"> Endereço </h4>
                                <p class="m-0"> <?= $endereco ?> – <?= $bairro ?> – <?= $cidade ?> – <?= $cep ?> </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-baseline mt-3">
                            <i class="mr-1 fas fa-fw fa-envelope bkg-b2 cor-cb d-flex align-items-center justify-content-center" style="border-radius: 50%; padding: 30px; width:50px; height:50px;"></i>
                            <div>
                                <h4 class="m-0"> E-Mail </h4>
                                <p class="m-0"> <a href="mailto:<?= $email ?>" style="word-break: break-word;"> <?= $email ?> </a> </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-baseline mt-3">
                            <i class="mr-1 fas fa-fw fa-phone bkg-b2 cor-cb d-flex align-items-center justify-content-center" style="border-radius: 50%; padding: 30px; width:50px; height:50px;"></i>
                            <div>
                                <h4 class="m-0"> Telefone </h4>
                                <p class="m-0 pt-1"> <a href="tel:55<?= str_replace(array('(',')',' ','-','.'), "", $telefone) ?>"> <span class="font-weight-400 h5"> <?= $telefone ?>  </span></a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="bkg-b1">
                        <div class="clip clip-dw bkg"></div>
                        <div class="p-4 cor-cb">
                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 fab fa-fw fa-lg fa-whatsapp bkg-b2 cor-cb d-flex align-items-center justify-content-center" style="border-radius: 50%; padding: 30px; width:50px; height:50px;"></i>
                                <div>
                                    <h4 class="m-0 font-weight-500"> Whatsapp </h4>
                                    <p class="m-0 pt-1 cor-cb"> <a href="<?= $whatsapp_link ?>" target="_blank"> <span class="h5 font-weight-400"> <?= $whatsapp ?> </span> </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.2279768841513!2d-46.83490728824979!3d-23.488296658825455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0218ff391401%3A0xdfa34abc51a29eca!2sColegio%20Presbiteriano%20Mackenzie!5e0!3m2!1spt-BR!2sbr!4v1699985493910!5m2!1spt-BR!2sbr" width="600" height="940" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    <div class="bkg-b1">
        <div class="container py-1">
            <p class="cor m-0 text-align-center" style="vertical-align: text-bottom;"><a target="_blank" rel="noopener noreferrer"> <a width="20px" alt="" class="position-relative" style="top: 4px;"> Desenvolvimento: Felipe Ruiz, Vitor Silva, Gabriel de Carra, Nickolas Varela, Rafael Siqueira e Mateus carvalho  </a> | <span class="cor-cb"><strong> <?= $ATAI ?> </strong></span></p>
        </div>
    </div>

    
</footer>

<!-- Arquivos JS -->
<script src="assets/js/jquery.mask.js"></script>
<script src="assets/js/cycle2.js"></script>
<script src="assets/js/cycle2.tile.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/scripts.js"></script>
