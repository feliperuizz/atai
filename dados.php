<?php
// VARIAVEIS DE INFORMAÇÕES PRINCIPAIS
$ATAI = "ATAI";
$descricao = "";
$keywords = "";

// ENDEREÇO ATAI
$endereco = "Av. Mackenzie - n° 905";
$bairro = "Tamboré";
$cidade = "Barueri/SP";
$cep = " CEP. 06460130";
$email = "atai@mackenzie.com.br";
$telefone = "(11) 98240-4294";
$telefone_link = (isset($telefone) && !empty($telefone)) ? "+55" . str_replace(array('(',')',' ','-','.'), "", $telefone) . "" : NULL;
$whatsapp = "(11) 98240-4294";
$whatsapp_link = (isset($whatsapp) && !empty($whatsapp)) ? "https://api.whatsapp.com/send?phone=55" . str_replace(array('(',')',' ','-','.'), "", $whatsapp) . "&text=Olá,%20estou%20entrando%20em%20contato%20pelo%20site!" : NULL;

// LINKS DAS REDES SOCIAIS(a atai ainda nao tem as redes)
$facebook = "https://www.facebook.com/";
$twitter = "https://twitter.com/";
$instagram = "https://www.instagram.com/";
$linkedin = "https://www.linkedin.com/";







