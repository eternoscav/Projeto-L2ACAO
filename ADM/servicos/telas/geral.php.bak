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
    <td width="71%" rowspan="6"><form action="./index2.php?t=conschars.php" method="POST">
Localizar Char pelo Nome:
				
				
				<input type="text" name="nomeChar" size="15" /><input type="submit" value="Localizar">
    </form><form action="./index2.php?t=clans.php" method="POST">
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
    <td><a href="./index2.php?t=chars.php">Chars Online:
      <?php 
	$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');   
	$totcharson=("SELECT * FROM characters WHERE online='1'");
			$resultTCO=mysql_query($totcharson, $link) or die(mysql_error());
			$contacharson = mysql_num_rows($resultTCO);
			echo "<b>"; echo $contacharson; echo "</b>";
		?>
    </a><BR /> <a href="./index2.php?t=allchars.php">Total Chars:
<?php 
	
	$totchars=("SELECT * FROM characters");
			$resultTC=mysql_query($totchars, $link) or die(mysql_error());
			$contachars = mysql_num_rows($resultTC);
			echo "<b>"; echo $contachars; echo "</b>";
		?>
</a><BR />
<a href="./index2.php?t=clans.php">Clans: <b>
<?php $totclans=("SELECT * FROM clan_data");
$resultclan=mysql_query($totclans, $link) or die(mysql_error());
$contarclans = mysql_num_rows($resultclan);
echo $contarclans;
?>
</b></a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="./index2.php?t=clanhall.php"></a></td>
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
$sql = mysql_query("SELECT c.*, ct.*, o.*, SUBSTRING_INDEX(ct.ClassName, '_', -1) AS ClassName FROM characters AS c, char_templates AS ct, olympiad_nobles AS o WHERE c.charId = o.charId AND ct.ClassId = c.classid ORDER BY c.classid, o.olympiad_points DESC") or die(mysql_error());

?>

<br>Candidatos: <strong><?php echo $contar; ?><br />
<table width="80%" border="0">
 <tr class="style10">
    <td width="25%" align="center" bgcolor="#666666"><strong>Nome:</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Pontos:</strong></td>
    <td width="10%" align="center" bgcolor="#666666"><strong>Competições:</strong></td>
    <td width="25%" align="center" bgcolor="#666666"><strong>Classe:</strong></td>
  </tr>
<?php
while($c = mysql_fetch_array($sql)) 
{
	$cor++;
	$bg = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\">{$c['char_name']}</td>
    <td align=\"center\">{$c['olympiad_points']}</td>
    <td align=\"center\">{$c['competitions_done']}</td>
    <td align=\"center\">{$c['ClassName']}</td>
  </tr>";
}
?>
</table>