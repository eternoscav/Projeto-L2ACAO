<?php


$servidor_smtp = 'mail.hostcheap.com.br';
$usuario_smtp  = 'suporte@hostcheap.com.br';
$senha_smtp    = '';
$nome_servidor = 'L2Noblesse';
$site_servidor = 'http://www.l2noblesse.com.br';  //Com HTTP://

$email_recebimento = array('dudu1533_php@hotmail.com', 'dudu1533_php@hotmail.com'); //Emails no qual as doa��es ser�o enviadas.
$habilitar_anexo = TRUE;
$habilitar_captcha = TRUE;

//N�o se esque�a de colocar o ; no final da string.
$formas_pgto .= 'Dep�sito Banco do Brasil;';
$formas_pgto .= 'MoIP;';
$formas_pgto .= 'Pagseguro;';


//Lista de op��es para doa��o:
//N�o se esque�a de colocar o ; no final da string.
$lista_items .= 'Draconic Armor;';
$lista_items .= 'Infinity Bow;';



//N�o mecha abaixo!!!

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