<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$query="UPDATE clan_data SET ally_penalty_expiry_time='0', char_penalty_expiry_time='0', dissolving_expiry_time='0' WHERE clan_id='".$_POST['clanId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "TODAS Penalidades do Clan foram ZERADAS.<BR>";

?>
<a href="./principal.php?t=clans.php">Voltar ao Menu de Clans</a>






