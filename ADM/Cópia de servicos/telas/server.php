<?php
//Coloca a porta do seu Loginserver e do gameserver
$loginserver = @fsockopen($db_loc_ip, 2106, $errno, $errstr, 2);
$gameserver = @fsockopen($db_loc_ip, 7777, $errno2, $errstr2, 2);
//Se tiver mais Servers, adiciona $gameserver# (#=numero), troca as portas e os $err (adicionando ao valor) e colocando na TAG abaixo comentada
?>
<style type="text/css">
<!--
.style1412 {color: #008800}
.style2412 {color: #FF0000}
.style10 {
font-size: 14px;
font-family: Arial, Helvetica, sans-serif;
color: #FFFFFF;
}
-->
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="23%" rowspan="2"><ul>
      <li>Loginserver: <?php echo $loginserver ? '<b><span class="style1412">Online</span></b>' : '<b><span class="style2412">Offline</span></b>'; ?> <br />
      </li>
      <li>Gameserver: <?php echo $gameserver ? '<b><span class="style1412">Online</span></b>' : '<b><span class="style2412">Offline</span></b>'; ?> </li>
      <?php //<li>Gameserver: <?php echo $gameserver# ? '<b><span class="style1412">Online</span></b>' : '<b><span class="style2412">Offline</span></b>'; ? > </li> ?>
    </ul>    </td>
    <td width="71%" rowspan="6"><form action="./index.php?t=conschars.php" method="POST">
Localizar Char pelo Nome:
				
				
				<input type="text" name="nomeChar" size="15" /><input type="submit" value="Localizar">
    </form><form action="./index.php?t=clans.php" method="POST">
Localizar Clan pelo Nome:
				<input type="text" name="nomeClan" size="15" >
				<input type="submit" value="Localizar"></form>
	
	</td>
    <td width="6%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="./index.php?t=accounts.php">Accounts:
      <?php 
	$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');   
	$totaccs=("SELECT * FROM accounts");
			$resultTAC=mysql_query($totaccs, $link) or die(mysql_error());
			$contaaccs = mysql_num_rows($resultTAC);
			echo "<b>"; echo $contaaccs; echo "</b>";
		?>
    </a><BR />
	
	<a href="./index.php?t=chars.php">Chars Online:
      <?php 
	$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');   
	$totcharson=("SELECT * FROM characters WHERE online='1'");
			$resultTCO=mysql_query($totcharson, $link) or die(mysql_error());
			$contacharson = mysql_num_rows($resultTCO);
			echo "<b>"; echo $contacharson; echo "</b>";
		?>
    </a><BR /> <a href="./index.php?t=allchars.php">Total Chars:
<?php 
	
	$totchars=("SELECT * FROM characters");
			$resultTC=mysql_query($totchars, $link) or die(mysql_error());
			$contachars = mysql_num_rows($resultTC);
			echo "<b>"; echo $contachars; echo "</b>";
		?>
</a><BR />
<a href="./index.php?t=clans.php">Clans: <b>
<?php $totclans=("SELECT * FROM clan_data");
$resultclan=mysql_query($totclans, $link) or die(mysql_error());
$contarclans = mysql_num_rows($resultclan);
echo $contarclans;
?>
</b></a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="./index.php?t=clanhall.php"></a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?PHP
	$cor = 0;
$sql = mysql_query("SELECT c.*, ct.*, o.*, SUBSTRING_INDEX(ct.ClassName, '_', -1) AS ClassName FROM characters AS c, char_templates AS ct, olympiad_nobles AS o WHERE c.charId = o.charId AND ct.ClassId = c.classid GROUP BY ct.ClassId ORDER BY c.classid, o.olympiad_points DESC") or die(mysql_error());

?>

<br>Candidatos a Hero<br />
<table width="80%" border="0">
 <tr class="style10">
    <td width="25%" align="center" bgcolor="#339933"><strong>Nome</strong></td>
    <td width="10%" align="center" bgcolor="#339933"><strong>Pontos</strong></td>
    <td width="15%" align="center" bgcolor="#339933"><strong>Competições</strong></td>
    <td width="32%" align="center" bgcolor="#339933"><strong>Classe</strong></td>
	<td width="18%"></td>
  </tr>
<?php
while($c = mysql_fetch_array($sql)) 
{
	$cor++;
	$bg = $cor % 2 == 0 ? '#A1FFA1' : '#77DD77';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\">{$c['char_name']}</td>
    <td align=\"center\">{$c['olympiad_points']}</td>
    <td align=\"center\">{$c['competitions_done']}</td>
    <td align=\"center\">{$c['ClassName']}</td>
	<td bgcolor=\"#ffffff\" valign=\"middle\"><form action=\"./index.php?t=detalheschar.php\" method=\"POST\">
				<input type=\"hidden\" name=\"charId\" value=\"{$c['charId']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td>
  </tr>";
}
?>
</table>
<p>&nbsp;</p>
<table width="88%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="46%"><?PHP
	$cor = 0;
$sqlb = mysql_query("SELECT * FROM accounts WHERE accessLevel<'0'") or die(mysql_error());
$resulul=mysql_num_rows($sqlb);

if ($resulul>'0')
{
echo "
<br>Banned Accounts: <b>{$resulul}</b><br />
<table border=\"0\">
 <tr class=\"style10\">
    <td align=\"center\" bgcolor=\"#993333\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
	<td align=\"center\" bgcolor=\"#993333\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Ip&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
<td bgcolor=\"#ffffff\" valign=\"middle\"></td>
  </tr>";
  
while($c = mysql_fetch_array($sqlb)) 
{
	$cor++;
	$bg = $cor % 2 == 0 ? '#FFBBBB' : '#DD7777';
	$txtcor = $cor % 2 == 0 ? '#000000' : '#FFFFFF';
	$bold = $cor % 2 == 0 ? '' : '<b>';
	$unbold = $cor % 2 == 0 ? '' : '</b>';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\"><font color=\"{$txtcor}\">{$bold}{$c['login']}{$unbold}</text></td>
    <td align=\"center\"><font color=\"{$txtcor}\">{$bold}{$c['lastIP']}{$unbold}</text></td>
	<td bgcolor=\"#ffffff\" valign=\"middle\"><form action=\"./index.php?t=unbanaccount.php\" method=\"POST\">
				<input type=\"hidden\" name=\"account\" value=\"{$c['login']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td>
	</tr>";
}
echo "</table>";
}
else
{
echo "<br>Nao ha contas banidas.";
}
?></td>
    <td width="54%"><?PHP
	$cor = 0;
$sqlc = mysql_query("SELECT * FROM characters WHERE accesslevel<'0'") or die(mysql_error());
$resulu=mysql_num_rows($sqlc);

if ($resulu>'0')
{
echo "
<br>Banned Chars: <b>{$resulu}</b><br />
<table border=\"0\">
 <tr class=\"style10\">
    <td align=\"center\" bgcolor=\"#663333\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
	<td align=\"center\" bgcolor=\"#663333\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
	<td bgcolor=\"#ffffff\"></td>
  </tr>";
  
while($c = mysql_fetch_array($sqlc)) 
{
	$cor++;
	$bg = $cor % 2 == 0 ? '#EEAAAA' : '#CC6666';
	$txtcor = $cor % 2 == 0 ? '#000000' : '#FFFFFF';
	$bold = $cor % 2 == 0 ? '' : '<b>';
	$unbold = $cor % 2 == 0 ? '' : '</b>';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\"><font color=\"{$txtcor}\">{$bold}{$c['char_name']}{$unbold}</text></td>
    <td align=\"center\"><font color=\"{$txtcor}\">{$bold}{$c['account_name']}{$unbold}</text></td>
	<td bgcolor=\"#ffffff\" valign=\"middle\"><form action=\"./index.php?t=detalheschar.php\" method=\"POST\">
				<input type=\"hidden\" name=\"charId\" value=\"{$c['charId']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td>
	</tr>";
}
echo "</table>";
}
else
{
echo "<br>Nao ha contas banidas.";
}
?></td>
  </tr>
</table>