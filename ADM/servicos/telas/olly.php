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
  <?PHP

echo "<br><img src=\"./imagens/leader.png\" width=\"11\" height=\"11\"> = LIDER DE CLAN 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=\"./imagens/banned.png\" width=\"11\" height=\"11\"> = BANIDO
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=\"./imagens/noble.png\" width=\"11\" height=\"11\"> = NOBLE
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=\"./imagens/crown.png\" width=\"11\" height=\"11\"> = HERO<br>";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');   

	$cor = 0;
$sql = mysql_query("SELECT c.*, ct.* FROM characters AS c, char_templates AS ct WHERE c.nobless = '1' AND ct.ClassId = c.classid ORDER BY c.char_name, c.classid DESC") or die(mysql_error());

?>
  <br />
<?php
	$cor = 0;
$sql = mysql_query("SELECT c.*, ct.*, o.* FROM characters AS c, char_templates AS ct, olympiad_nobles AS o WHERE c.charId = o.charId AND ct.ClassId = c.classid ORDER BY c.classid, o.olympiad_points DESC") or die(mysql_error());

?>
 Chars nas Olly <br />

<table width="80%" border="0">
  <tr class="style10">
    <td width="25%" align="center" bgcolor="#333399"><strong>Nome</strong></td>
    <td width="10%" align="center" bgcolor="#333399"><strong>Pontos</strong></td>
    <td width="15%" align="center" bgcolor="#333399"><strong>Competi&ccedil;&otilde;es</strong></td>
    <td width="32%" align="center" bgcolor="#333399"><strong>Classe</strong></td>
    <td width="18%"></td>
  </tr>
  <?php
while($c = mysql_fetch_array($sql)) 
{
$queryCL = "SELECT charId FROM characters WHERE charId IN (SELECT leader_id FROM clan_data) AND char_name='".$c['char_name']."'";
		$resultCL=mysql_query($queryCL, $link) or die(mysql_error());
		$fetchCL = mysql_fetch_row($resultCL);
		$resultaCL = $fetchCL['0'];
		$hero = mysql_query("SELECT charId FROM heroes WHERE charId='".$c['charId']."'") or die(mysql_error());
		$nobless = mysql_query("SELECT * FROM characters WHERE charId='".$c['charId']."' AND nobless='1'") or die(mysql_error());
	$cor++;
	$bg = $cor % 2 == 0 ? '#A1A1FF' : '#7777DD';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\"><b><font color=\"#ffffff\">{$c['char_name']}";
	
  
			   if ($c['charId']==$resultaCL)
			   {
			   echo " <img src=\"./imagens/leader.png\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
			   
             if (mysql_num_rows($nobless))
			   {
			   echo " <img src=\"./imagens/noble.png\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
			 
			 	 if ($c['accesslevel']<0)
			   {
			   echo " <img src=\"./imagens/banned.png\" alt=\"Banned\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
			   	   
	echo"</font></b></td>
    <td align=\"center\"><b><font color=\"#ffffff\">{$c['olympiad_points']}</font></b></td>
    <td align=\"center\"><b><font color=\"#ffffff\">{$c['competitions_done']}</font></b></td>
    <td align=\"center\"><b><font color=\"#ffffff\">{$c['ClassName']}";
	
	  if (mysql_num_rows($hero))
			   {
			   echo " <img src=\"./imagens/crown.png\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
	
	echo "</font></b></td>
	<td bgcolor=\"#ffffff\" valign=\"middle\">
	<form action=\"./modules.php?m=detalheschar.php\" method=\"POST\" target=\"charprop\" onsubmit=\"window.open('','charprop','width=800,height=400')\">
				<input type=\"hidden\" name=\"charId\" value=\"{$c['charId']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td>
  </tr>";
}
?>
</table>
<br />
<?PHP
	$cor = 0;
$sql = mysql_query("SELECT c.*, ct.*, o.*, SUBSTRING_INDEX(ct.ClassName, '_', -1) AS ClassName FROM characters AS c, char_templates AS ct, olympiad_nobles AS o WHERE c.charId = o.charId AND ct.ClassId = c.classid GROUP BY ct.ClassId ORDER BY c.classid, o.olympiad_points DESC") or die(mysql_error());

?>

Candidatos a Hero<br />
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
$queryCL = "SELECT charId FROM characters WHERE charId IN (SELECT leader_id FROM clan_data) AND char_name='".$c['char_name']."'";
		$resultCL=mysql_query($queryCL, $link) or die(mysql_error());
		$fetchCL = mysql_fetch_row($resultCL);
		$resultaCL = $fetchCL['0'];
		$hero = mysql_query("SELECT charId FROM heroes WHERE charId='".$c['charId']."'") or die(mysql_error());
		
	$cor++;
	$bg = $cor % 2 == 0 ? '#A1FFA1' : '#77DD77';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\">{$c['char_name']}";
	
  
			   if ($c['charId']==$resultaCL)
			   {
			   echo " <img src=\"./imagens/leader.png\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
             
			 
			 
	echo"</td>
    <td align=\"center\">{$c['olympiad_points']}</td>
    <td align=\"center\">{$c['competitions_done']}</td>
    <td align=\"center\">{$c['ClassName']}";
	
	 if (mysql_num_rows($hero))
			   {
			   echo " <img src=\"./imagens/crown.png\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }	
	
	echo "</td>
	<td bgcolor=\"#ffffff\" valign=\"middle\">
	<form action=\"./modules.php?m=detalheschar.php\" method=\"POST\" target=\"charprop\" onsubmit=\"window.open('','charprop','width=800,height=400')\">
				<input type=\"hidden\" name=\"charId\" value=\"{$c['charId']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td>
  </tr>";
}
?>
</table>
<br />
