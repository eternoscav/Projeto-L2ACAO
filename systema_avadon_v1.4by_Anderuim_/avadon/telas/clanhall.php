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
$sql = mysql_query("SELECT ch.*, cd.*, SUBSTRING_INDEX(ch.name, '_', -1) AS name FROM clanhall AS ch, clan_data AS cd WHERE ch.ownerId = cd.clan_id ORDER BY ch.name ASC") or die(mysql_error());

?>

<br>Clan Halls Ocupadas<br />
<table width="80%" border="0">
 <tr class="style10">
    <td width="25%" align="center" bgcolor="#666666"><strong>Nome</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Dono</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Local</strong></td>
  </tr>
<?php
while($c = mysql_fetch_array($sql)) 
{
	$cor++;
	$bg = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\"><form action=\"./principal.php?t=kickoffclanhallsave.php\" method=\"POST\"> {$c['name']}
	<input type=\"hidden\" name=\"chID\" value=\"{$c['id']}\">
	<input type=\"hidden\" name=\"clanName\" value=\"{$c['clan_name']}\">	
	<input type=\"hidden\" name=\"chName\" value=\"{$c['name']}\">
    <input type=\"submit\" value=\"Tirar ClanHall\"></form></td>
    <td align=\"center\"><form action=\"./principal.php?t=detalhesclan.php\" method=\"POST\">
	{$c['clan_name']}
	<input type=\"hidden\" name=\"idClan\" value=\"{$c['clan_id']}\">
    <input type=\"submit\" value=\"Ver Clan\"></form>
	</td>
    <td align=\"center\">{$c['location']}</td>
  </tr>";
}
?>
</table>
<br><br>
Clan Halls Vazias
<?php
$cor = 0;
$sql2 = mysql_query("SELECT * FROM clanhall WHERE ownerId = '0' ORDER BY location,name ASC") or die(mysql_error());

?>
<table width="80%" border="0">
 <tr class="style10">
    <td width="25%" align="center" bgcolor="#666666"><strong>Nome</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Dono</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Local</strong></td>
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
    <td align=\"center\"><form action=\"./principal.php?t=giveclanhall.php\" method=\"POST\">
	<input type=\"hidden\" name=\"idCH\" value=\"{$d['id']}\">
	<input type=\"hidden\" name=\"chname\" value=\"{$d['name']}\">
	<input type=\"hidden\" name=\"location\" value=\"{$d['location']}\">
    <input type=\"submit\" value=\"Dar ClanHall\"></form>
	</td>
    <td align=\"center\">{$d['location']}</td>
  </tr>";
}
?>
