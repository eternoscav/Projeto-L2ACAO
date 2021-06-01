<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TOP HEROIS</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table align="center" width="60%" cellpadding="1" cellspacing="1" border="1">

  <tr>
    <td align="center">Nome char:</td>
    <td align="center">Level:</td>
    <td align="center">Classe:</td>
    <td align="center">Count:</td>
  </tr>
<?php
include "../config.php";
$sql = mysql_query("SELECT * FROM heroes ORDER BY char_name LIMIT ".$top_herois."") or die(mysql_error());
$i = 1;
while($linha = mysql_fetch_array($sql)){
?>
  <tr>
    <td align="center">
	<?
	echo $i++;
	?></td>
    <td align="center"><?=$linha['char_name']?></td>
    <td align="center"><?=$linha['level']?></td>
    <td align="center"><?=$linha['class_name']?></td>
    <td align="center"><?=$linha['count']?></td>
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
