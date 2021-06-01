<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$clanallyname = $_POST['clanAlly'];
$clanname=$_POST['clanName'];
$allyant=$_POST['allyant'];
$clanid=$_POST['clanId'];

		$sqlquery = "SELECT ally_id FROM clan_data WHERE ally_name='".$clanallyname."'";
		$resulta=mysql_query($sqlquery, $link) or die(mysql_error());
		$fetcha = mysql_fetch_row($resulta);
		$resultado = $fetcha['0'];


echo "Clan <b>{$clanname}</b> transferido da ally <b>{$allyant}</b> para a ally <b>{$clanallyname}.</b><br><br>";

$queryupd="UPDATE clan_data SET ally_name='".$clanallyname."', ally_id='".$resultado."' WHERE clan_name='".$clanname."'";
$result=mysql_query($queryupd, $link) or die (mysql_error());


?>
<a href="./index2.php?t=clans.php">Voltar ao Menu de Clans</a>
