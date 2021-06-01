<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');
$castleid = $_POST['idCT'];
$ctname = $_POST['ctname'];
echo "Selecione que Clan devera receber o Castelo de <b>{$ctname}</b>:";
echo "<form action=\"./index.php?t=givecastlesave.php\" method=\"POST\">";
echo "Clan: <select name=\"clanId\" id=\"clanId\">";
	$querydistally=("SELECT DISTINCT * FROM clan_data WHERE hasCastle='0' GROUP BY clan_name ORDER BY clan_name ASC");
    $consulta=mysql_query($querydistally, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['clan_id']."'>".$dados['clan_name']."</option>");
}
echo "</select>
<input type=\"hidden\" name=\"castleid\" value=\"{$castleid}\">
<input type=\"hidden\" name=\"ctName\" value=\"{$ctname}\">
<br>
<input type=\"submit\" value=\"Dar Castelo\"></form>";


?>
<a href="./index.php?t=castle.php">Voltar ao Menu de Castelos</a>
