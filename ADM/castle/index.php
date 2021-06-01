<?php
include "verifica.php";

include "config/config.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body {
	background-image: url(../logo2.jpg);
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Castle Siege</title>
<link href="css.css" rel="stylesheet" type="text/css" />


<?
include("cfg/acao.php");
?>
<script language="JavaScript">
function abrir(URL) {

  var width = 500;
  var height = 250;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}
</script>
</head>
<p align="center"><img src="../imagens/1.png" border="0" alt="Logo Stronger">

<body>
<div align="center">
  <h3>Selecione um Castelo para saber mais sobre ele</h3>
</div>
<div align="center"><a href="javascript:abrir('dion.php');"><img src="botoes/dion.png" width="135" height="65" border="0" /></a><a href="javascript:abrir('gludio.php');"><img src="botoes/gludio.png" width="135" height="65" border="0" /></a><a href="javascript:abrir('rune.php');"><img src="botoes/rune.png" width="135" height="65" border="0" /></a><a href="javascript:abrir('innadril.php');"><img src="botoes/innadril.png" width="135" height="65" border="0" /></a><a href="javascript:abrir('giran.php');"><img src="botoes/giran.png" width="135" height="65" border="0" /></a><br />
  <a href="javascript:abrir('oren.php');"><img src="botoes/oren.png" width="135" height="65" border="0" /></a><a href="javascript:abrir('goddard.php');"><img src="botoes/goddard.png" width="135" height="65" border="0" /></a><a href="javascript:abrir('schuttgart.php');"><img src="botoes/schuttgart.png" width="135" height="65" border="0" /></a><a href="javascript:abrir('aden.php');"><img src="botoes/aden.png" width="135" height="65" border="0" /></a><br />
  
  <br><a href="../index.php">VOLTAR</a></p>
</div>
</body>
</html>
