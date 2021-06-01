<?PHP

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$clanid = $_POST['clanId'];

$queryCHN = "SELECT name FROM clanhall WHERE ownerId='{$clan_id}'";
		$resultCHN=mysql_query($queryCHN, $link) or die(mysql_error());
		$fetchCHN = mysql_fetch_row($resultCHN);
		$resultaCHN = $fetchCHN['0'];
echo "<form action=\"./index2.php?t=giveclanhallsave.php\" method=\"POST\">";
 
		 echo "Escolha a Clan Hall:<select name=\"clanhallid\" id=\"clanhallid\">";
		 $queryCH=("SELECT * FROM clanhall WHERE ownerId='0' ORDER BY location,name ASC");
    
	$consulta=mysql_query($queryCH, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['id']."'>".$dados['location']." - ".$dados['name']."</option>");
}
echo "</select>
<input type=\"hidden\" name=\"clanName\" value=\"{$dados['clan_name']}\">
<input type=\"hidden\" name=\"clanId\" value=\"{$clanid}\">
<input type=\"hidden\" name=\"chName\" value=\"{$chname}\">
<br>Data de Devolucao: <input size=\"1\" type=\"text\" name=\"dia\" value=\"DD\"> /
 <input size=\"1\" type=\"text\" name=\"mes\" value=\"MM\"> / 
 <input size=\"3\" type=\"text\" name=\"ano\" value=\"AAAA\">
<input type=\"submit\" value=\"Dar ClanHall\"></form>";

?>