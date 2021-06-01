<?php

// BETA Anti Inject Base64 by Guaska
// Em faze BETA, caso ache bugs favor
// entrar em contato: miguelgetulio@gmail.com


// INSTRUÇÕES:
// COLOQUE A PAGINA NA MESMA PASTA ONDE ENCONTRA-SE A CONFIG.PHP
// APÓS ISSO, ABRA A CONFIG.PHP E ADICIONE A SEGUINTE LINHA:
// include ("anti-inject-base64.php");
// APÓS ISSO SALVE O ARQUIVO E TESTE SEU SITE SE ESTARÁ FUNCIONANDO 100%

// Bloqueia base64 na URL (GET)

function inject(){
	$data = date('d/m/Y G:i');
	$navegador = $_SERVER['HTTP_USER_AGENT'];
	$solicitada = $_SERVER['REQUEST_URI'];
	$metodo = $_SERVER['REQUEST_METHOD'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$fp=fopen("logs.txt", "a+");
	fputs($fp, "IP: $ip\nIP Reverso: $host\nData: $data\nNavegador: $navegador\nPagina $solicitada\nMetodo: $metodo\n--------------------------------------------------\n");
	fclose($fp);
		die("<script>window.alert('Caracteres especiais detectados. Por favor volte e corrija.');JavaScript:history.back(1)</script>");
}

$bloquear = array("==","LQ==","PQ==","Kw==","Kg==","JA==","XFxcXA==","Ow==","ZGVsZXRl","dXBkYXRl","d2hlcmU=","XCc=","LS0=","VXBkYXRl","bWVtYl9pbmZv","TUVNQl9JTkZP","Q2hhcmFjdGVy","XCdzaHV0ZG93bi0t","XCc7","VXBkYXRl","VVBEQVRF","VXBEYVRl","VVBkYXRl","Q0hBUkFDVEVS","U2VsZWN0","U0VMRUNU","XCdkZWx0ZSBtZW1iX2luZm8tLQ==","ZHJvcA==","RFJPUA==","V2hlcmU=","d2FyZWhvdXNl","ZnJvbQ==","RlJPTQ==","RnJvbQ==","c2V0","U2V0","U0VU","U3RyZW5naHQ=","c3RyZW5naHQ=","U1RSRU5HSFQ=","QWdpbGl0eQ==","YWdpbGl0eQ==","QUdJTElUWQ==","RW5lcmd5","ZW5lcmd5","RU5FUkdZ","Vml0YWxpdHk=","dml0YWxpdHk=","VklUQUxJVFk=","XCdkZWxldGU=","XCd1cGRhdGU=","XCdEZWxldGU=","XCdERUxFVEU=","XCdEZUxlVGU=","XCdVcERhdEU=","XCdVcERhVGU=","XCd1UGRBdEU=","XCdVUGRhVEU=","XCdEZWw=","XCdEZUw=","XCdkRWw=","XCdkRUw=","XCdERWw=","XCdkZUw=","XCdVcGQ=","XCd1UGQ=","XCd1cEQ=","XCdVcEQ=","XCd1UEQ=","XCdVUEQ=","XCd1cGQ=","XCdkZWw=","XCdVUGQ=","XCdTaHU=","XCdzSHU=","XCdzaFU=","XCdTSHU=","XCdzSFU=","XCdTaFU=","XCdkcm9wIENoYXJhY3Rlci0t","XCdkcm9wIE1FTUJfSU5GTy0t","XCdEcm9w","XCdEUm9w","XCdEUk9w","XCdEUk9Q","XCdkUk9Q","XCdkck9Q","XCdkcm9Q","XCdkUm9Q","XCdkck9w","XCdkUk9w","XCdEUm9Q","XCdkUm9w","XCdEck9Q","XCdEcm9Q","XCdEck9w","XCdkcm9w","dGFibGU=","VGFibGU=","VEFibGU=","VEFCbGU=","VEFCTGU=","dEFCTEU=","dGFCTEU=","dGFiTEU=","dGFibEU=","VGFCTEU=","VGFiTEU=","dEFiTEU=","dEFCbEU=","dEFCTGU=","VGFCTGU=","VEFiTEU=","VEFibEU=");

	foreach($_GET as $valor)
		foreach($bloquear as $palavra)
			if(substr_count(strtolower($valor), strtolower($palavra)) > 0)
				inject();
// Bloqueia Base64 no formulário (POST)

	foreach($_POST as $valor)
		foreach($bloquear as $palavra)
			if(substr_count(strtolower($valor), strtolower($palavra)) > 0)
				inject();
				
// Bloqueia Base64 por Session

	foreach($_SESSION as $valor)
		foreach($bloquear as $palavra)
			if(substr_count(strtolower($valor), strtolower($palavra)) > 0)
				inject();
				
// Bloqueia Base64 por COOKIE

	foreach($_COOKIE as $valor)
		foreach($bloquear as $palavra)
			if(substr_count(strtolower($valor), strtolower($palavra)) > 0)
				inject();
?>