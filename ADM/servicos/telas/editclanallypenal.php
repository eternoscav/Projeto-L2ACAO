<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$query="UPDATE clan_data SET hasCastle='0' WHERE clan_id='".$_POST['clanId']."'";
$result=mysql_query($query, $link) or die (mysql_error());

echo "A Castelo de <b>{$_POST['ctName']}</b> foi tirado do clan <b>{$_POST['clanName']}</b>.<BR>";

?>
<a href="./index2.php?t=castle.php">Voltar ao Menu de Castle</a>
