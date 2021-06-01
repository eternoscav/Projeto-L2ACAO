<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TOP PVP</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table align="center" width="60%" cellpadding="1" cellspacing="1" border="1">

  <tr>
	<td align="center">Nome</td>
	<td align="center">Level</td>
	<td align="center">PvP Kills</td>
	<td align="center">PK Kills</td>
	<td align="center">Karma</td>
  </tr>
<?php
include "config.php";
$sql = mysql_query("SELECT * FROM characters WHERE online = 1 ORDER BY char_name");
$contar = mysql_num_rows($sql);
while($linha = mysql_fetch_array($sql)){
?>
  <tr>
    <td align="center"><?=$linha['char_name']?></td>
    <td align="center"><?=$linha['level']?></td>
    <td align="center"><?=$linha['pvpkills']?></td>
    <td align="center"><?=$linha['pkkills']?></td>
    <td align="center"><?=$linha['karma']?></td>
  </tr>
  
  <tr>
	<td colspan="5" align="center">Total de <? echo $contar; ?> Players Online.<b></b></td>
  </tr>
<?
}
?>
</table>
<a href="index.php">Voltar</a>
</body>
</html>
<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
