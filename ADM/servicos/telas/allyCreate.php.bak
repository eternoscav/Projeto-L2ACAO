<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

if ($_POST['ally_create_name'])
{
	$queryCHECAally= "SELECT * FROM clan_data WHERE ally_name='".$_POST['ally_create_name']."'";
		$resultCSK = mysql_query($queryCHECAally, $link);
		
		if (mysql_num_rows ($resultCSK))
		{
		echo "Ja existe uma Ally com esse nome. Escolha outro.";
		}
		else
		{
		$queryCHECAally= "SELECT ally_id FROM clan_data order by ally_id desc limit 1";
		$resultALLYid = mysql_query($queryCHECAally, $link);
		$novaALLYid = $resultALLYid + $adutorallyid;
		
$queryCRIAally= "UPDATE clan_data SET ally_id='".$novaALLYid."', ally_name='".$_POST['ally_create_name']."' WHERE clan_id='".$_POST['idClan']."'";
		$resultCSK = mysql_query($queryCRIAally, $link);
		echo "<i>Allyance</i> <b>{$_POST['ally_create_name']}</b> <i>criada.</i><br>";
}
}
else
{
echo "";
}

?>

<form action="./index2.php?t=allyCreate.php" method="POST">
	Nome da Ally:<input type="text" name="ally_create_name" />
	Clan inicial: <select name="idClan">			
				<?php
				
	$querydistally=("SELECT DISTINCT * FROM clan_data WHERE ally_id='0' GROUP BY clan_name ORDER BY clan_name ASC");
    $consulta=mysql_query($querydistally, $link) or die(mysql_error()); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['clan_id']."'>".$dados['clan_name']."</option>");
}				
				?>	
							
				<input type="submit" value="Criar Ally"></form>