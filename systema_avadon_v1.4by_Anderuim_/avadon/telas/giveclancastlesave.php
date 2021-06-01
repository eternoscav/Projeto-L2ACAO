<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

		$querycastlename = "SELECT name FROM castle WHERE id='".$_POST['castleid']."'";
		$resultCn=mysql_query($querycastlename, $link) or die(mysql_error());
		$fetchCn = mysql_fetch_row($resultCn);
		$resultaCn = $fetchCn['0'];
		

$query="UPDATE clan_data SET hasCastle='".$_POST['castleid']."' WHERE clan_id='".$_POST['clanId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "O castelo de de <b>{$resultaCn}</b> esta agora com o clan <b>{$_POST['clanName']}</b>.<BR>";


?>
<a href="./principal.php?t=castle.php">Voltar ao Menu de Castelos</a>
