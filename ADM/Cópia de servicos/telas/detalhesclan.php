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

$clanid = $_POST['idClan'];

$query = "SELECT * FROM clan_data WHERE clan_id='".$clanid."'";
		$result = mysql_query($query, $link);
		$dato= mysql_fetch_array($result);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="49%" align="left" valign="top"><?php echo "<form action=\"./index.php?t=editclanname.php\" method=\"POST\">"; 
	echo "Nome: <b>"; echo $dato['clan_name']; 
	echo "<input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
	<input type=\"hidden\" name=\"clanName\" value=\"{$dato['clan_name']}\">
				<input type=\"submit\" value=\"Editar\"></form>"; ?></td>
    <td width="51%" align="left" valign="top"><?php echo "<form action=\"./index.php?t=editclanally.php\" method=\"POST\">";
	     echo "Ally: <b>";
		 if ($dato['ally_name'] != '')
		 {
		 echo $dato['ally_name'];
		 }
		 else
		 {
		 echo "Sem Ally.";
		 } 
	echo "</b><input type=\"hidden\" name=\"clanAlly\" value=\"{$dato['ally_name']}\">
	<input type=\"hidden\" name=\"clanAllyId\" value=\"{$dato['ally_id']}\">
	<input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
	<input type=\"hidden\" name=\"clanName\" value=\"{$dato['clan_name']}\">
				<input type=\"submit\" value=\"Editar\"></form>";?> </td>
  </tr>
  <tr>
    <td align="left" valign="top"><?php   echo "<form action=\"./index.php?t=editclanlevel.php\" method=\"POST\">";
	echo "Level: <b>"; 
	echo $dato['clan_level'];
	echo "<input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
	<input type=\"hidden\" name=\"clanLevel\" value=\"{$dato['clan_level']}\">
				<input type=\"submit\" value=\"Editar\"></form>";?></td>
    <td align="left" valign="top"><?php  echo "<form action=\"./index.php?t=editclanleader.php\" method=\"POST\">"; echo "Lider: <b>"; 
	$queryCL = "SELECT char_name FROM characters WHERE charId='{$dato['leader_id']}'";
		$resultCL=mysql_query($queryCL, $link) or die(mysql_error());
		$fetchCL = mysql_fetch_row($resultCL);
		$resultaCL = $fetchCL['0'];
		
		echo $resultaCL;
		echo "
				<input type=\"hidden\" name=\"lider\" value=\"{$resultaCL}\">
				<input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
				<input type=\"submit\" value=\"Trocar\"></form>";
	?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><?php 
	
	 $queryCHN = "SELECT name FROM clanhall WHERE ownerId='{$dato['clan_id']}'";
		$resultCHN=mysql_query($queryCHN, $link) or die(mysql_error());
		$fetchCHN = mysql_fetch_row($resultCHN);
		$resultaCHN = $fetchCHN['0'];
		
		$queryCHID = "SELECT id FROM clanhall WHERE ownerId='{$dato['clan_id']}'";
		$resultCHID=mysql_query($queryCHID, $link) or die(mysql_error());
		$fetchCHID = mysql_fetch_row($resultCHID);
		$resultaCHID = $fetchCHID['0'];
		 if ($resultaCHN != '')
		 {
		 echo "<form action=\"./index.php?t=kickoffclanhallsave.php\" method=\"POST\">
		Clan Hall: <b>";
		 echo $resultaCHN; 
		 	echo "<input type=\"hidden\" name=\"chID\" value=\"{$resultaCHID}\">
			 <input type=\"hidden\" name=\"clanName\" value=\"{$dato['clan_name']}\">
			 <input type=\"hidden\" name=\"chName\" value=\"{$resultaCHN}\">
				<input type=\"submit\" value=\"Despejar\"></form>";
		  }
		else
		{
		echo "<form action=\"./index.php?t=getclanhall.php\" method=\"POST\">";
		echo "Clan Hall: <b>Sem Clan Hall </b>";
		 
		 echo "	<input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
				<input type=\"submit\" value=\"Dar Clan Hall\"></form>";
		} 
		 ?></td>
    <td align="left" valign="top"><?php  
	
	$queryCS = "SELECT name FROM castle WHERE id='{$dato['hasCastle']}'";
		$resultCS=mysql_query($queryCS, $link) or die(mysql_error());
		$fetchCS = mysql_fetch_row($resultCS);
		$resultaCS = $fetchCS['0'];
		
		if ($resultaCS != '')
		{
echo "<form action=\"./index.php?t=kickoffcastlesave.php\" method=\"POST\">Castelo: <b>";
		echo $resultaCS; echo " Castle </b>
		<input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
		<input type=\"hidden\" name=\"clanName\" value=\"{$dato['clan_name']}\">
		<input type=\"hidden\" name=\"ctName\" value=\"{$resultaCS}\">
				<input type=\"submit\" value=\"Despejar\"></form>";  
		}
		else
		{
		 echo "<form action=\"./index.php?t=giveclancastle.php\" method=\"POST\">Castelo: <b> Sem Castelo </b>
		 <input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
		<input type=\"hidden\" name=\"clanName\" value=\"{$dato['clan_name']}\">
				<input type=\"submit\" value=\"Dar Castle\"></form>";  
	
		}
		
				
	?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><?php 	echo "<form action=\"./index.php?t=editclanrept.php\" method=\"POST\">";
	echo "Reputation: <b>"; echo $dato['reputation_score']; 
	echo "<input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
	<input type=\"hidden\" name=\"clanRept\" value=\"{$dato['reputation_score']}\">
				<input type=\"submit\" value=\"Editar\"></form>";?></td>
    <td align="left" valign="top"><?php echo "<b>PENALIDADES</b> "; 	
	
	echo "<form action=\"./index.php?t=editclanpenal.php\" method=\"POST\">";
	echo "por Ally: <b>"; echo $dato['ally_penalty_expiry_time']; 
	echo "</b><br>por Char: <b>"; echo $dato['char_penalty_expiry_time']; 
	echo "</b><br>por Dissolu&ccedil;&atilde;o: <b>"; echo $dato['dissolving_expiry_time']; 
	echo "<br><input type=\"hidden\" name=\"clanId\" value=\"{$dato['clan_id']}\">
	<input type=\"hidden\" name=\"ally_penalty_expiry_time\" value=\"{$dato['ally_penalty_expiry_time']}\">
	<input type=\"hidden\" name=\"char_penalty_expiry_time\" value=\"{$dato['char_penalty_expiry_time']}\">
	<input type=\"hidden\" name=\"dissolving_expiry_time\" value=\"{$dato['dissolving_expiry_time']}\">
				<input type=\"submit\" value=\"Alterar\"></form>"; ?></td>
  </tr>
</table>
<p>  COMPONENTES: (<img src="./imagens/leader.png" width="11" height="11"> = LIDER)
  <br>
  <?php

$query = "SELECT * FROM characters WHERE clanid='".$clanid."'";
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
         <B> Nome
         </td>
         <td>
          Level
         </td>
		 <td>Race</td>
		 <td>Classe</td>
		 <td>Status</td>
		 <td>Options</B></td>
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
              <td>
               ";
			   if ($data['char_name']==$resultaCL)
			   {
			   echo "<img src=\"./imagens/leader.png\" width=\"11\" height=\"11\">";
			   }
			   else
			   {
			   echo "";
			   }
              echo "{$data['char_name']}</td>
              <td>
               {$data['level']}
			   </td>
			   <td>";
			      $queryCR = "SELECT race FROM characters WHERE charId='{$data['charId']}'";
		$resultCR=mysql_query($queryCR, $link) or die(mysql_error());
		$fetchCR = mysql_fetch_row($resultCR);
		$resultaCR= $fetchCR['0'];
		if ($resultaCR == 0)
		{
		echo "Humano";
		}
		elseif ($resultaCR == 1)
		{
		echo "Elfo";
		}
		elseif ($resultaCR == 2)
		{
		echo "Dark Elfo";
		}
		elseif ($resultaCR == 3)
		{
		echo "Orc";
		}
		elseif ($resultaCR == 4)
		{
		echo "Dwarf";
		}
		elseif ($resultaCR == 5)
		{
		echo "Kamael";
		}
		else
		{
		echo "SRD???";
		}
			   
			   echo "</td>
			   <td>";
			   $queryCC = "SELECT ClassName FROM char_templates WHERE ClassId='{$data['classid']}'";
		$resultCC=mysql_query($queryCC, $link) or die(mysql_error());
		$fetchCC = mysql_fetch_row($resultCC);
		$resultaCC= $fetchCC['0'];
			   echo $resultaCC;
			   echo "</td><td>"; 
		if ($data['online'] != 0)
		 {
		 echo "<font color=\"#0066cc\"><b>Online</b></font>";
		 }
		 else
		 {
		 echo "<font color=\"#993333\"><b>Offline</b></font>";
		 }
		 

			   echo "</td>
		 <td><form action=\"./modules.php?m=detalheschar.php\" method=\"POST\" target=\"charprop\" onsubmit=\"window.open('','charprop','width=800,height=400')\">
				<input type=\"hidden\" name=\"charId\" value=\"{$data['charId']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td></tr>";
}

echo "</table>";
?>
  <br>
<table width="84%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50%" align="center" valign="top">WAR:<br />
          <?php

$query = "SELECT * FROM clan_data WHERE clan_id IN (SELECT clan2 FROM clan_wars WHERE clan1='".$clanid."') OR clan_id IN (SELECT clan1 FROM clan_wars WHERE clan2='".$clanid."')";
		$resultCID1 = mysql_query($query, $link);
		if (mysql_num_rows($resultCID1))
		{
		echo "<table border=\"0\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: 000000;
                      font-family: arial;
                      font-size: 12px;
                    \">
        <tr class=\"style10\">
         <td>
          Clan
         </td>
		 <td>
		 Level
		 </td>
		 <td></td>
        </tr>
 ";
 
 $cor= "c0c0c0";
 //pega os dados consultados
 while($data= mysql_fetch_array($resultCID1))
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
              <td>
               {$data['clan_name']}
              </td>
              <td>
               {$data['clan_level']}
			   </td>
			   <td><form action=\"./index.php?t=detalhesclan.php\" method=\"POST\">
				<input type=\"hidden\" name=\"idClan\" value=\"{$data['clan_id']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td></tr>";
}

echo "</table>";
}
else
{
echo "<br><b>Clan nao esta em WAR.</b><br>";
}
?></td>
      <td width="50%" align="center" valign="top">SKILLS:<br />
          <?php
echo "<form action=\"./index.php?t=addclanskill.php\" method=\"POST\">
				<input type=\"hidden\" name=\"clanid\" value=\"{$clanid}\">
				<input type=\"submit\" value=\"Detalhes\"></form>";
$query = "SELECT * FROM clan_skills WHERE clan_id='".$clanid."'";
		$resultCSK = mysql_query($query, $link);
		if (mysql_num_rows($resultCSK))
		{
		echo "
				<table border=\"0\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: 000000;
                      font-family: arial;
                      font-size: 12px;
                    \">
         <tr class=\"style10\">
         <td>
          Skill
         </td>
		 <td>
		 Level
		 </td>
        </tr>
 ";
 
 $cor= "c0c0c0";
 //pega os dados consultados
 while($data= mysql_fetch_array($resultCSK))
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
              <td>
               {$data['skill_name']}
              </td>
              <td>
               {$data['skill_level']}
			   </td>
			   </tr>";
}

echo "</table>";
}
else
{
echo "<br><b>Clan nao tem Skills.</b><br>";
}
?></td>
    </tr>
</table>
