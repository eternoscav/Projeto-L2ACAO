<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$query="UPDATE clan_data SET ally_penalty_expiry_time='".$_POST['ally_penalty_expiry_time']."' WHERE clan_id='".$_POST['clanId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "Penalidade de Deletamento/Saida de Ally do Clan trocado para <b>{$_POST['ally_penalty_expiry_time']}</b>.<BR>";

?>
<a href="./principal.php?t=clans.php">Voltar ao Menu de Clans</a>
