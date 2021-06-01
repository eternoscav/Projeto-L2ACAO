<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');
$clanhallid = $_POST['idCH'];
$chname = $_POST['chname'];
$local = $_POST['location'];
echo "Selecione que Clan devera receber a ClanHall <b>{$chname}</b> de <b>{$local}</b>:";
echo "<form action=\"./principal.php?t=giveclanhallsave.php\" method=\"POST\">";


echo "Clan: <select name=\"clanId\" id=\"clanId\">";
	$querydistally=("SELECT DISTINCT * FROM clan_data WHERE clan_id NOT IN (SELECT ownerId FROM clanhall) GROUP BY clan_name ORDER BY clan_name ASC");
    $consulta=mysql_query($querydistally, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['clan_id']."'>".$dados['clan_name']."</option>");
}
echo "</select>
<input type=\"hidden\" name=\"clanName\" value=\"{$dados['clan_name']}\">
<input type=\"hidden\" name=\"clanhallid\" value=\"{$clanhallid}\">
<input type=\"hidden\" name=\"chName\" value=\"{$chname}\">
<br><input size=\"1\" type=\"text\" name=\"dia\" value=\"DD\"> /
 <input size=\"1\" type=\"text\" name=\"mes\" value=\"MM\"> / 
 <input size=\"3\" type=\"text\" name=\"ano\" value=\"AAAA\">
<input type=\"submit\" value=\"Dar ClanHall\"></form>";


?>
<a href="./principal.php?t=clans.php">Voltar ao Menu de Clans</a>
