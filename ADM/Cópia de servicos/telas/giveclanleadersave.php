<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

		$querycharname = "SELECT char_name FROM characters WHERE charId='".$_POST['charId']."'";
		$resultChn=mysql_query($querycharname, $link) or die(mysql_error());
		$fetchChn = mysql_fetch_row($resultChn);
		$resultaChn = $fetchChn['0'];
		
		$queryclanname = "SELECT clan_name FROM clan_data WHERE clan_id='".$_POST['clanId']."'";
		$resultCln=mysql_query($queryclanname, $link) or die(mysql_error());
		$fetchCln = mysql_fetch_row($resultCln);
		$resultaCln = $fetchCln['0'];
		

$query="UPDATE clan_data SET leader_id='".$_POST['charId']."' WHERE clan_id='".$_POST['clanId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "O Clan <b>{$resultaCln}</b> e agora liderado pelo char <b>{$resultaChn}</b>.<BR>";


?>
<a href="./index.php?t=clans.php">Voltar ao Menu de Clans</a>
