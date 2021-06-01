<?
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '3427821';
$db       = 'l2acaopvp';

$con = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());
?>
<html>
<head>
<title>testando</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head>
<body>


<table width="100%" border="0">
  <tr>
    <td align="center"><h2>Candidatos a Heroes</h2></td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0">
    <td width="20%">Char</td>
    <td width="20%">Classe</td>
    <td width="10%">Pontos</td>
    <td width="10%">Lutas</td>
    <td width="20%">Clan</td>
    <td width="20%">Ally</td>

  </tr>
<?
$sql = mysql_query("SELECT * FROM olympiad_nobles") or die(mysql_error());
$cor = 0;
while($c = mysql_fetch_array($sql)) {
      $cor = $cor + 1;
      $bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';

      $h = mysql_query("SELECT * FROM characters WHERE charid = '".$c['charid']."'") or die(mysql_error());
      $n = mysql_fetch_array($h);
      $l = mysql_query("SELECT * FROM class_list WHERE id = '".$n['base_class']."'") or die(mysql_error());
      $g = mysql_fetch_array($l);
      $i = mysql_query("SELECT * FROM clan_data WHERE clan_id = '".$n['clanid']."'") or die(mysql_error());
      $j = mysql_fetch_array($i);
      $i = mysql_query("SELECT * FROM clan_data WHERE clan_id = '".$n['clanid']."'") or die(mysql_error());
      $j = mysql_fetch_array($i);
      $g['class_name'] = explode("_", $g['class_name']);
      $j['clan_name'] = empty($n['clanid']) ? 'Sem Clan.' : $j['clan_name'];
      $j['ally_name'] = empty($j['ally_id']) ? 'Sem Alliance.' : $j['ally_name'];

?>

  <tr id="sub" bgcolor="#ffffff" onMouseOver="MM_effectHighlight(this, 1000, '#FBF3DD', '#FEFBF3', '#ffffff', false)">
    <td><?php echo $h['charid']; ?></td>
    <td><?php echo ucwords($g['class_name'][1]); ?></td>
    <td><?php echo $c['clan_name']; ?></td>
    <td><?php echo $c['competitions_done']; ?></td>
    <td><?php echo $j['clan_name']; ?></td>
    <td><?php echo $j['ally_name']; ?></td>


  </tr>
<?
}
?>
</table>
</p>
</body>
</html>