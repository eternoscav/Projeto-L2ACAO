<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

		$queryclanname = "SELECT clan_name FROM clan_data WHERE clan_id='".$_POST['clanId']."'";
		$resultCn=mysql_query($queryclanname, $link) or die(mysql_error());
		$fetchCn = mysql_fetch_row($resultCn);
		$resultaCn = $fetchCn['0'];
		

$query="UPDATE clan_data SET hasCastle='".$_POST['castleid']."' WHERE clan_id='".$_POST['clanId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "O castelo de de <b>{$_POST['ctName']}</b> esta agora com o clan <b>{$resultaCn}</b>.<BR>";


?>
<a href="./principal.php?t=castle.php">Voltar ao Menu de Castelos</a>
