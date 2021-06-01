<?php
ini_set("display_errors", "OFF");
/////////////////////////////////////////////////
//         Script feito por _Dudu_1533         //
//			  dudu1533_php@hotmail.com         //
/////////////////////////////////////////////////

include('modules/config_sql.php');
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '3427821';
$banco    = 'l2acaopvp';

$conexao = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($banco, $conexao) or die(mysql_error());

?>
<html>
<head>
<title>Heroes</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(top/Dark Web By RevoltadOl/status/images/bg.jpg);
	background-repeat: no-repeat;
	background-color: #000;
}
body,td,th {
	color: #FFF;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 11px;
}
.title {
	font-family:Tahoma, Geneva, sans-serif;
	font-size:11px;
	color:#0C0;
}
.sign{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:11px;
	font-style:normal;
	color:#C00;
}
.sign2{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:11px;
	font-style:normal;
	font-weight:bold;
	color:#C00;
}
#Layer1 {
	position:absolute;
	width:754px;
	height:84px;
	z-index:1;
	left: 221px;
	top: 800px;
}
#Layer2 {
	position:absolute;
	width:144px;
	height:83px;
	z-index:1;
	left: 178px;
	top: 15px;
}
#Layer3 {
	position:absolute;
	width:161px;
	height:79px;
	z-index:2;
	left: 400px;
	top: 12px;
}
#Layer4 {
	position:absolute;
	width:138px;
	height:80px;
	z-index:3;
	left: 606px;
}
#Layer5 {
	position:absolute;
	width:219px;
	height:115px;
	z-index:1;
	left: 239px;
	top: 44px;
}
#Layer6 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 232px;
	top: -115px;
}
#Layer7 {
	position:absolute;
	width:200px;
	height:73px;
	z-index:2;
	left: 197px;
	top: 34px;
}
#Layer8 {
	position:absolute;
	width:200px;
	height:1px;
	z-index:1;
	top: -2px;
	left: 213px;
}
#Layer9 {
	position:absolute;
	width:261px;
	height:64px;
	z-index:2;
	left: 725px;
	top: 336px;
}
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>


<div align="center"><span class="style1">Heroes</span><br>
  <br>
</div>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#333399">Nome char</td>
    <td bgcolor="#333399">Classe</td>
    <td bgcolor="#333399">Clan</td>
    <td bgcolor="#333399">Quant.</td>
  </tr>
<?

$sql = mysql_query("SELECT * FROM heroes ORDER BY charid") or die(mysql_error());
$cor = 0;
while($c = mysql_fetch_array($sql)) {
      $cor = $cor + 1;
	$bg  = $cor % 2 == 0 ? '#808080' : '#333333';

      $h = mysql_query("SELECT * FROM characters WHERE charId = '".$c['charId']."'") or die(mysql_error());
      $n = mysql_fetch_array($h);
      $l = mysql_query("SELECT * FROM class_list WHERE id = '".$n['base_class']."'") or die(mysql_error());
      $g = mysql_fetch_array($l);
      $i = mysql_query("SELECT * FROM clan_data WHERE clan_id = '".$n['clanid']."'") or die(mysql_error());
      $j = mysql_fetch_array($i);
      $g['class_name'] = explode("_", $g['class_name']);
      $j['clan_name'] = empty($n['clanid']) ? 'Sem Clan.' : $j['clan_name'];

?>

  <tr>
    <td bgcolor="#336699"><b><?php echo $n['char_name']; ?></td>
    <td bgcolor="#336699"><b><?php echo ucwords($g['class_name'][1]); ?></td>
    <td bgcolor="#336699"><b><?php echo $j['clan_name']; ?></td>
    <td bgcolor="#336699"><b><?php echo $c['count']; ?></td>
  </tr>
<?
}
?>
</table>
<p align="center" class="style1">Competi&ccedil;&otilde;es
<table width="400" border="0" align="center">
  <tr class="cima">
    <td width="25%" bgcolor="#000000" ><strong>Nome:</strong></td>
    <td width="10%" bgcolor="#000000" ><strong>Pontos:</strong></td>
    <td width="10%" bgcolor="#000000" ><strong>Competi&ccedil;&otilde;es:</strong></td>
    <td width="25%" bgcolor="#000000" ><strong>Classe:</strong></td>
  </tr>
<?php
while($c = mysql_fetch_array($sql)) {
	$cor++;
	$bg = $cor % 2 == 0 ? '#F1F1F1' : '#FFFFFF';
?>
  <tr class="baixo" bgcolor="<?php echo $bg; ?>">
    <td bgcolor="#333333" ><?php echo $c['char_name']; ?></td>
    <td bgcolor="#333333" ><?php echo $c['olympiad_points']; ?></td>
    <td bgcolor="#333333" ><?php echo $c['competitions_done']; ?></td>
    <td bgcolor="#333333" ><?php echo $c['class_name']; ?></td>
  </tr>
<?
}
?>
</table></p>
