<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');
$clanId = $_POST['clanId'];
$clname = $_POST['clanName'];
echo "Selecione que Castelo o clan <b>{$clname}</b> ira receber:";
echo "<form action=\"./principal.php?t=giveclancastlesave.php\" method=\"POST\">";
echo "Clan: <select name=\"castleid\" id=\"castleid\">";
	$querydistally=("SELECT * FROM castle WHERE id NOT IN (SELECT hasCastle FROM clan_data) ORDER BY name ASC");
    $consulta=mysql_query($querydistally, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['id']."'>".$dados['name']."</option>");
}
echo "</select>
<input type=\"hidden\" name=\"clanId\" value=\"{$clanId}\">
<input type=\"hidden\" name=\"clanName\" value=\"{$clname}\">
<br>
<input type=\"submit\" value=\"Dar Castelo\"></form>";


?>
<a href="./principal.php?t=castle.php">Voltar ao Menu de Castelos</a>
