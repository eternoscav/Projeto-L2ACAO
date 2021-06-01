<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$dia=$_POST['mes'];
$mes=$_POST['dia'];
$ano=$_POST['ano'];
$hora=" 00:00:00";
$data=$dia."/".$mes."/".$ano.$hora;
$dataplus=$mes."/".$dia."/".$ano;
$tempo= strtotime($data);

$query="UPDATE clanhall SET ownerId='".$_POST['clanId']."', paidUntil='".$tempo."', paid='1' WHERE id='".$_POST['clanhallid']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "A ClanHall de <b>{$_POST['chName']}</b> ira ficar com o clan ate <b>{$dataplus}</b>.<BR>";


?>
<a href="./principal.php?t=clanhall.php">Voltar ao Menu de Clan Hall</a>
