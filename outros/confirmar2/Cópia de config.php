<?php


$servidor_smtp = 'smtp.gmail.com';
$usuario_smtp  = 'staffacao@gmail.com';
$senha_smtp    = '3258503marcos';
$nome_servidor = 'L2Ação';
$site_servidor = 'http://www.l2acao.ddns.com.br';  //Com HTTP://

$email_recebimento = array('staffacao@gmail.com', 'eternoscavaleiros@hotmail.com'); //Emails no qual as doações serão enviadas.
$habilitar_anexo = TRUE;
$habilitar_captcha = TRUE;

//Não se esqueça de colocar o ; no final da string.
$formas_pgto .= 'Depósito Banco do Brasil;';
$formas_pgto .= 'MoIP;';
$formas_pgto .= 'Pagseguro;';


//Lista de opções para doação:
//Não se esqueça de colocar o ; no final da string.
$lista_items .= 'Draconic Armor;';
$lista_items .= 'Infinity Bow;';



//Não mecha abaixo!!!

$exp_items = explode(";", $lista_items);
$exp_formas = explode(";", $formas_pgto);
$i = 0;
foreach($exp_items as $array_items) {
	if((!empty($array_items))) {
		$array_lista_items['item'][$i] = $array_items;
	}
	$i++;
}

$i = 0;
foreach($exp_formas as $array_formas) {
	if((!empty($array_formas))) {
		$array_lista_formas['forma'][$i] = $array_formas;
	}
	$i++;
}
?>