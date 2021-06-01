<style type="text/css">
<!--
.style1 {
	font-size: 13px;
	font-family: Arial, Helvetica, sans-serif;
}
.style10 {
	font-size: 14px; 
	font-family: Arial, Helvetica, sans-serif; 
	color: #FFFFFF;
}
.style15 {
	font-size: 12px; 
	font-family: Arial, Helvetica, sans-serif; 
}
-->
</style>

<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

	$cor = 0;
$sql = mysql_query("SELECT ca.*, cd.*, SUBSTRING_INDEX(ca.name, '_', -1) AS name FROM castle AS ca, clan_data AS cd WHERE ca.id = cd.hasCastle ORDER BY ca.name ASC") or die(mysql_error());

?>

<br>Castelos Ocupadas<br />
<table width="80%" border="0">
 <tr class="style10">
    <td width="25%" align="center" bgcolor="#666666"><strong>Nome</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Dono</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Tax</strong></td>
	    <td width="10%" align="center" bgcolor="#666666"><strong>Siege</strong></td>
  </tr>
<?php
while($c = mysql_fetch_array($sql)) 
{
	$cor++;
	$bg = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\"><form action=\"./index2.php?t=kickoffcastlesave.php\" method=\"POST\"> {$c['name']}
	<input type=\"hidden\" name=\"clanId\" value=\"{$c['clan_id']}\">
	<input type=\"hidden\" name=\"clanName\" value=\"{$c['clan_name']}\">	
	<input type=\"hidden\" name=\"ctName\" value=\"{$c['name']}\">
    <input type=\"submit\" value=\"Tirar Castelo\"></form></td>
    <td align=\"center\"><form action=\"./index2.php?t=detalhesclan.php\" method=\"POST\">
	{$c['clan_name']}
	<input type=\"hidden\" name=\"idClan\" value=\"{$c['clan_id']}\">
    <input type=\"submit\" value=\"Ver Clan\"></form>
	</td>
    <td align=\"center\">{$c['taxPercent']}%</td>
	<td align=\"center\">";
	$siegeUNIXtimeK=$c['siegeDate'];
	$mil='1000';
	$siegeTStime=$siegeUNIXtimeK/$mil;
	$siegedate=date("d/m/Y G:i:s", $siegeTStime);	
	echo $siegedate; echo "</td>
  </tr>";
}
?>
</table>
<br><br>
Castelos Vazios
<?php
$cor = 0;
$sql2 = mysql_query("SELECT * FROM castle WHERE id NOT IN (SELECT hasCastle FROM clan_data) ORDER BY name ASC") or die(mysql_error());

?>
<table width="80%" border="0">
 <tr class="style10">
    <td width="25%" align="center" bgcolor="#666666"><strong>Nome</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Dono</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Siege</strong></td>
  </tr>
<?php
while($d = mysql_fetch_array($sql2)) 
{
	$cor++;
	$bg = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\">{$d['name']}</td>
    <td align=\"center\"><form action=\"./index2.php?t=givecastle.php\" method=\"POST\">
	<input type=\"hidden\" name=\"idCT\" value=\"{$d['id']}\">
	<input type=\"hidden\" name=\"ctname\" value=\"{$d['name']}\">
	<input type=\"submit\" value=\"Dar Castelo\"></form>
	</td>
    <td align=\"center\">";
	$siegeUNIXtimeK=$d['siegeDate'];
	$mil='1000';
	$siegeTStime=$siegeUNIXtimeK/$mil;
	$siegedate=date("d/m/Y G:i:s", $siegeTStime);	
	echo $siegedate; echo "</td>
  </tr>";
}
?>
