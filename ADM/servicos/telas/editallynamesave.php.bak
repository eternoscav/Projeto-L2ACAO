<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$checkallynames =("SELECT ally_name FROM clan_data WHERE ally_name='".$_POST['clanAlly']."'");
$resultCAN=mysql_query($checkallynames, $link) or die (mysql_error());
if (mysql_num_rows($resultCAN))
{
echo "Ja existe uma ally com este nome.<br>";
}
else
{
$query=("UPDATE clan_data SET ally_name='".$_POST['clanAlly']."' WHERE ally_name='".$_POST['clanAllyAnt']."'");
$result=mysql_query($query, $link) or die (mysql_error());
$AllyName=$_POST['clanAlly'];
echo "Nome da Ally mudado para <b>{$AllyName}</b>.<br>";
}

?>
<a href="./index2.php?t=ally.php">Voltar ao Menu de Allyes</a>
