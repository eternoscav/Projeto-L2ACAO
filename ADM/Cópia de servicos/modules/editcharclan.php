<div align="left"><form action="./modules.php?m=detalheschar.php" method="POST" target="charprop" onsubmit="window.open('','charprop','width=200,height=100'); window.close();">
Colocar no clan: 
<?php
include "../configs/config.php";
include "../configs/vars.php";


$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

echo "<select name=\"editcharclan\" id=\"editcharclan\">";
	$querydistally=("SELECT DISTINCT * FROM clan_data GROUP BY clan_id ORDER BY clan_name ASC");
    $consulta=mysql_query($querydistally, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['clan_id']."'>".$dados['clan_name']."</option>");
}
echo "</select>
<input type=\"hidden\" name=\"charId\" value=\"{$_POST['charId']}\"><br>
<input type=\"submit\" value=\"Colocar no Clan\">";


?></form></div>