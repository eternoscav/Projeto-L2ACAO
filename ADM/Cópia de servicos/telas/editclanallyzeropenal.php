<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$query="UPDATE clanhall SET ownerId='0', paidUntil='0', paid='0' WHERE id='".$_POST['chID']."'";
$result=mysql_query($query, $link) or die (mysql_error());

echo "A ClanHall de <b>{$_POST['chName']}</b> foi tirada do clan <b>{$_POST['clanName']}</b>.<BR>";

?>
<a href="./principal.php?t=clanhall.php">Voltar ao Menu de Clan Hall</a>
