<?
//Script cirado por _Dudu_1533
//www.portal1533.com.br
//www.virtualmu.com.br


$servidor = 'localhost';
$usuario  = 'root';
$senha    = '3427821';
$db       = 'l2acaopvp';

$con = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());
?>
<html>
<head>
<title>Listagem de player Heroes</title>
<style type="text/css">
<!--
.style5 {font-size: 15px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style8 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style4 {font-size: 17px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }

body {
	background-color: #EBEBEB;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head>
<body>


<p align="center"><img src="../imagens/logo.jpg" border="0" alt="Logo Stronger"><br><a href="../index.php">Voltar</a></p>
<table width="100% border="0" class="style4">
  <tr>
    <td align="center">Listando HEROES do servidor</td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0">
  <tr bgcolor="#CCCCCC" class="style5" align="center" height="30">
    <td>Nome char:</td>
    <td>Level:</td>
    <td>Classe:</td>
    <td>Clan:</td>
    <td>Count:</td>
  </tr>
<?

$sql = mysql_query("SELECT * FROM heroes ORDER BY char_name") or die(mysql_error());
$cor = 0;
while($c = mysql_fetch_array($sql)) {
      $cor = $cor + 1;
      $bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';

      $h = mysql_query("SELECT * FROM characters WHERE Obj_Id = '".$c['char_id']."'") or die(mysql_error());
      $n = mysql_fetch_array($h);
      $l = mysql_query("SELECT * FROM class_list WHERE id = '".$n['base_class']."'") or die(mysql_error());
      $g = mysql_fetch_array($l);
      $i = mysql_query("SELECT * FROM clan_data WHERE clan_id = '".$n['clanid']."'") or die(mysql_error());
      $j = mysql_fetch_array($i);
      $g['class_name'] = explode("_", $g['class_name']);
      $j['clan_name'] = empty($n['clanid']) ? 'Sem Clan.' : $j['clan_name'];

?>

  <tr bgcolor="<?php echo $bg; ?>" class="style8" align="center" height="23">
    <td><?php echo $n['char_name']; ?></td>
    <td><?php echo $n['level']; ?></td>
    <td><?php echo ucwords($g['class_name'][1]); ?></td>
    <td><?php echo $j['clan_name']; ?></td>
    <td><?php echo $c['count']; ?></td>
  </tr>
<?
}
?>
</table>
