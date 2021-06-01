Trocar o Lider de um Clan
<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

echo "<br>O Lider atualmente e <b>{$_POST['lider']}</b>. Para trocar, escolha um dos componentes da lista:";
echo "<form action=\"./index2.php?t=giveclanleadersave.php\" method=\"POST\">";
echo "Char: <select name=\"charId\" id=\"charId\">";
	$querycharsclan=("SELECT * FROM characters WHERE clanid ='".$_POST['clanId']."' ORDER BY char_name ASC");
    $consulta=mysql_query($querycharsclan, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['charId']."'>".$dados['char_name']."</option>");
}
echo "</select>
<input type=\"hidden\" name=\"clanId\" value=\"{$_POST['clanId']}\">
<br>
<input type=\"submit\" value=\"Trocar Lider\"></form>";
?>
<a href="./index2.php?t=clans.php">Voltar ao Menu de Clans</a>