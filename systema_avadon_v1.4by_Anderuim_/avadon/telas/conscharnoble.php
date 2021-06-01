<form action="./principal.php?t=conscharnoble.php" method="POST">
Localizar Noble pelo Nome:
				<input type="text" name="nomeChar" >
				<input type="submit" value="Localizar"></form>
				<CENTER><i>PS.: APENAS CHARS NOBLESS APARECEM NA CONSULTA!</i></CENTER>
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
<img src=\"./imagens/olly.png\" width=\"11\" height=\"11\"> = OLLY
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=\"./imagens/crown.png\" width=\"11\" height=\"11\"> = HERO<br><br>";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');   

	$cor = 0;
$sql = mysql_query("SELECT c.*, ct.* FROM characters AS c, char_templates AS ct WHERE c.nobless = '1' AND ct.ClassId = c.classid AND c.char_name LIKE '%".$_POST['nomeChar']."%' ORDER BY c.char_name, c.classid DESC") or die(mysql_error());

?>

Chars Nobless <br />
<table width="80%" border="0">
  <tr class="style10">
    <td width="25%" align="center" bgcolor="#339999"><strong>Nome</strong></td>
    <td width="10%" align="center" bgcolor="#339999"><strong>Level</strong></td>
    <td width="15%" align="center" bgcolor="#339999"><strong>Status</strong></td>
    <td width="32%" align="center" bgcolor="#339999"><strong>Classe</strong></td>
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
		$olly = mysql_query("SELECT charId FROM olympiad_nobles WHERE charId='".$c['charId']."'") or die(mysql_error());
		
	$cor++;
	$bg = $cor % 2 == 0 ? '#A1FFFF' : '#77DDDD';
echo "  <tr class=
\"style15
\" bgcolor=\"{$bg}\">
    <td align=\"center\"><b><font color=\"#000000\">{$c['char_name']}";
	  
			   if ($c['charId']==$resultaCL)
			   {
			   echo " <img src=\"./imagens/leader.png\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
			   
             if (mysql_num_rows($olly))
			   {
			   echo " <img src=\"./imagens/olly.png\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
					 
			   if (mysql_num_rows($hero))
			   {
			   echo " <img src=\"./imagens/crown.png\" width=\"11\" height=\"11\"> ";
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
    <td align=\"center\"><b><font color=\"#000000\">{$c['level']}</font></b></td>
    <td align=\"center\"><b>";
	
	if ($c['online']!=0)
	{
	echo "<font color=\"#008800\">Online";
	}
	else
	{
	echo "<font color=\"#dd0000\">Offline";
	}
	echo "</font></b></td>
    <td align=\"center\"><b><font color=\"#000000\">{$c['ClassName']}</font></b></td>
	<form action=\"./modules.php?m=detalheschar.php\" method=\"POST\" target=\"charprop\" onsubmit=\"window.open('','charprop','width=800,height=400')\">
				<input type=\"hidden\" name=\"charId\" value=\"{$c['charId']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td>
  </tr>";
}
?>
</table>
<br />
