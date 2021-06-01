EDITAR ALLY DO CLAN

<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');
$allycheck = $_POST['clanAllyCheck'];
$clanally = $_POST['clanAlly'];
$clanname = $_POST['clanName'];
echo "<form action=\"./principal.php?t=editclanallyancesave.php\" method=\"POST\">";
if ($allycheck == 0)
{
echo "<br>O Clan <b>{$clanname}</b> nao esta em nenhuma ally.<br>";
}
else
{
echo "<br>O Clan <b>{$clanname}</b> esta na ally <b>{$clanally}</b>.<br><br>";
}


echo "<select name=\"clanAlly\" id=\"clanAlly\">";
	$querydistally=("SELECT DISTINCT * FROM clan_data GROUP BY ally_name ORDER BY ally_name ASC");
    $consulta=mysql_query($querydistally, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['ally_name']."'>".$dados['ally_name']."</option>");
}
echo "</select><input type=\"hidden\" name=\"clanName\" value=\"{$clanname}\">
<input type=\"hidden\" name=\"clanId\" value=\"{$dados['clan_id']}\">
<input type=\"hidden\" name=\"allyant\" value=\"{$clanally}\">";
echo "<input type=\"submit\" value=\"Trocar Ally\"></form>";


?>
<a href="./principal.php?t=clans.php">Voltar ao Menu de Clans</a>
