<style type="text/css">
<!--
.style1 {
	font-size: 13px;
	font-family: Arial, Helvetica, sans-serif;
}
.style10 {
	font-size: 14px; 
	font-family: Arial, Helvetica, sans-serif; 
	color: #ffffff;
	bgcolor: #999999;
}
.style15 {
	font-size: 12px; 
	font-family: Arial, Helvetica, sans-serif; 
}
-->
</style>
<?php

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');


		if ($_POST['kick_clan_id'])
{
	
$queryKICKally= "UPDATE clan_data SET ally_id='0', ally_name='', ally_crest_id='0' WHERE clan_id='".$_POST['kick_clan_id']."'";
		$resultKICK = mysql_query($queryKICKally, $link);
		echo "<i>Clan</i> <b>{$_POST['clan_nome']}</b> <i>retirado da Ally</i> <B>{$_POST['ally_nome']}</B>.<br>";
}
else
{
echo "";
}

if ($_POST['put_clan_id'])
{
	
$queryKICKally= "UPDATE clan_data SET ally_id='".$_POST['ally_id']."', ally_name='".$_POST['ally_nome']."', ally_crest_id='".$_POST['ally_crest_id']."' WHERE clan_id='".$_POST['put_clan_id']."'";
		$resultKICK = mysql_query($queryKICKally, $link);
		
		$queryCN = "SELECT clan_name FROM clan_data WHERE clan_id='".$_POST['put_clan_id']."'";
		$resultCN=mysql_query($queryCN, $link) or die(mysql_error());
		$fetchCN = mysql_fetch_row($resultCN);
		$clan_nome = $fetchCN['0'];
		
		echo "<i>Clan</i> <b>{$clan_nome}</b> <i>adicionado a Ally</i> <B>{$_POST['ally_nome']}</B>.<br>";
}
else
{
echo "";
}

$query = "SELECT * FROM clan_data WHERE ally_id='".$_POST['ally_id']."'";
		$result = mysql_query($query, $link);
		$dato= mysql_fetch_array($result);
		
		
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="49%" align="left" valign="top"><?php echo "<form action=\"./principal.php?t=editallyname.php\" method=\"POST\">"; 
	echo "Nome: <b>"; echo $dato['ally_name']; 
	echo "<input type=\"hidden\" name=\"clanAlly\" value=\"{$dato['ally_name']}\">
				<input type=\"submit\" value=\"Editar\"></form>"; ?></td>
    <td width="51%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><?php

$query = "SELECT * FROM clan_data WHERE ally_id='".$_POST['ally_id']."'";
		$resultCHAR = mysql_query($query, $link);
		
		echo "<table border=\"0\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: 000000;
                      font-family: arial;
                      font-size: 12px;
                    \">
   <tr class=\"style10\">
         <td>
         <b>Clan
         </td>
         <td>
          Level
         </td>
		 <td>Options</b></td>
        </tr>
 ";
 
 $cor= "c0c0c0";
 //pega os dados consultados
 while($data= mysql_fetch_array($resultCHAR))
 {
       /*if($cor == 'c0c0c0'){
          $cor= 'f0f0f0';
       }else
{
             $cor= 'c0c0c0';
       }*/
       
       //fazendo a mesma coisa do if acima agora com op. ternario
       $cor= $cor == 'c0c0c0' ? 'f0f0f0' : 'c0c0c0';
	   		echo "<tr bgcolor=\"$cor\">
              <td>{$data['clan_name']}</td>
              <td>
               {$data['clan_level']}
			   </td>
			   <td><form action=\"./principal.php?t=allydetails.php\" method=\"POST\">
				<input type=\"hidden\" name=\"kick_clan_id\" value=\"{$data['clan_id']}\">
				<input type=\"hidden\" name=\"clan_nome\" value=\"{$data['clan_name']}\">
				<input type=\"hidden\" name=\"ally_nome\" value=\"{$data['ally_name']}\">
				<input type=\"hidden\" name=\"ally_id\" value=\"{$data['ally_id']}\">
				<input type=\"submit\" value=\"Kick da Ally\"></form></td></tr>";
}

echo "</table>";
?>
<form action="./principal.php?t=allydetails.php" method="POST">
	Adicionar Clan: <select name="put_clan_id">			
				<?php
				
	$querydistally=("SELECT DISTINCT * FROM clan_data WHERE ally_id='0' GROUP BY clan_name ORDER BY clan_name ASC");
    $consulta=mysql_query($querydistally, $link) or die(mysql_error()); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['clan_id']."'>".$dados['clan_name']."</option>");
}		
echo "</select>";
echo "<input type=\"hidden\" name=\"ally_nome\" value=\"{$dato['ally_name']}\">
				<input type=\"hidden\" name=\"ally_id\" value=\"{$dato['ally_id']}\">
				<input type=\"hidden\" name=\"ally_crest_id\" value=\"{$dato['ally_crest_id']}\">";	
				?>								
				<input type="submit" value="Inserir na Ally"></form>
