<html>
<head>
<title>Seu servidor de Lineage II</title>
<style type="text/css">
<!--
.style5 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style8 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; }
body {
	background-color: #EBEBEB;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head>
<body>
<?

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "l2react";


$conexao = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($banco, $conexao) or die(mysql_error());


$ordem = empty($_GET['o']) ? 'pvpkills' : base64_decode($_GET['o']);
$sql = mysql_query("SELECT * FROM characters ORDER BY ".$ordem." DESC LIMIT 10") or die(mysql_error());



$array = array('pvpkills' => 'PVP Kills',
			   'pkkills'  => 'PK Kills',
			   'level'    => 'Level',
			   'karma'    => 'Karma'
			  );
?>
<table width="100%" border="1" bordercolor="#EBEBEB">
  <tr bordercolor="#CCCCCC" bgcolor="#CCCCCC">
    <td width="8%"><span class="style5">Posi&ccedil;&atilde;o:</span></td>
    <td width="35%"><span class="style5">Nome do Char: </span></td>
    <td width="21%"><span class="style5"><?php echo $array[$ordem]; ?> </span></td>
    <td width="36%"><span class="style5">Clan:</span></td>
  </tr>
<?
$i = 1;
$cor = 0;
while($a = mysql_fetch_object($sql)) {
$cor = $cor + 1;
$bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';

if($i == 1) {
$img = "<img src=\"top1.gif\" alt=\"1&ordm; Lugar\">";
}elseif($i == 2) {
$img = "<img src=\"top2.gif\" alt=\"2&ordm; Lugar\">";
}elseif($i == 3) {
$img = "<img src=\"top3.gif\" alt=\"3&ordm; Lugar\">";
}else{
$img = $i."&ordm; lugar";
}

$clan = mysql_query("SELECT * FROM clan_data WHERE clan_id = '".$a->clanid."'") or die(mysql_error());
$clans = mysql_fetch_object($clan);


$clans->clan_name = empty($clans->clan_name) ? 'Sem info.' : $clans->clan_name;
?>
  <tr bordercolor="<?php echo $bg; ?>" bgcolor="<?php echo $bg; ?>" class="style8">
    <td><?php echo $img; ?></td>
    <td><?php echo $a->char_name; ?></td>
    <td><?php echo $a->$ordem; ?></td>
    <td><?php echo $clans->clan_name; ?></td>
  </tr>
<?
$i++;
}
?>
</table>
</body>
</html>