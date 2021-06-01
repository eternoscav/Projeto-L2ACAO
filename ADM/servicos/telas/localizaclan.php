<form action="./index2.php?t=localizaclan.php" method="POST">
Localizar Clan pelo Nome:
				<input type="text" name="nomeClan" >
				<input type="submit" value="Localizar"></form>
<style type="text/css">
<!--
.style1 {
	font-size: 13px;
	font-family: Arial, Helvetica, sans-serif;
}
.style10 {
	font-size: 14px; 
	font-family: Arial, Helvetica, sans-serif; 
	color: #FFFFFF;
}
.style15 {
	font-size: 12px; 
	font-family: Arial, Helvetica, sans-serif; 
}
-->
</style>
<body>
<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$totclans=("SELECT * FROM clan_data");
$result=mysql_query($totclans, $link) or die(mysql_error());
$contar = mysql_num_rows($result);


if ($contar > 0)
  	{
echo "<table width=\"100%\" border=\"0\">
  <tr class=\"style1\">
    <td align=\"center\">Clans no Servidor: <strong>{$contar}</strong></td>
  </tr>
</table>";

$query = "SELECT * FROM clan_data WHERE clan_name LIKE '%".$_POST['nomeClan']."%'";
		$result = mysql_query($query, $link);
		
		echo "<table border=\"0\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: 000000;
                      font-family: arial;
                      font-size: 12px;
                    \">
        <tr style=\"background-color: ffdd00;color: 000000; align: center;\">
         <td>
          Nome
         </td>
         <td>
          Level
         </td>
		 <td>Clan Hall</td><td>Castelo</td>
		 <td>Lider</td>
		 <td>Componentes</td>
		 <td>Ally</td>
		 <td>Options</td>
        </tr>
 ";
 
 $cor= "c0c0c0";
 //pega os dados consultados
 while($dato= mysql_fetch_array($result))
 {
       /*if($cor == 'c0c0c0'){
          $cor= 'f0f0f0';
       }else
{
             $cor= 'c0c0c0';
       }*/
       
       //fazendo a mesma coisa do if acima agora com op. ternario
       $cor= $cor == 'c0c0c0' ? 'f0f0f0' : 'c0c0c0';
	   		echo "
             <tr bgcolor=\"$cor\">
              <td>
               {$dato['clan_name']}
              </td>
              <td>
               {$dato['clan_level']}
			   </td>
			   <td>";
			   $queryCH = "SELECT name FROM clanhall WHERE ownerId='{$dato['clan_id']}'";
		$resultCH=mysql_query($queryCH, $link) or die(mysql_error());
		$fetchCH = mysql_fetch_row($resultCH);
		$resultaCH = $fetchCH['0'];
		 if ($resultaCH != '')
		 {
		 		echo " ";
		 echo $resultaCH; 
		 		echo " ";
		  }
		else
		{
		 echo " Sem Clan Hall ";
		} 
			   echo "</td><td>";
			   $queryCS = "SELECT name FROM castle WHERE id='{$dato['hasCastle']}'";
		$resultCS=mysql_query($queryCS, $link) or die(mysql_error());
		$fetchCS = mysql_fetch_row($resultCS);
		$resultaCS = $fetchCS['0'];
		
		if ($resultaCS != '')
		{
		echo " ";
		 echo $resultaCS; echo " Castle "; 
		}
		else
		{
		 echo " Sem Castelo ";
		}
			   echo "</td>
		 <td>";
		 $queryCL = "SELECT char_name FROM characters WHERE charId='{$dato['leader_id']}'";
		$resultCL=mysql_query($queryCL, $link) or die(mysql_error());
		$fetchCL = mysql_fetch_row($resultCL);
		$resultaCL = $fetchCL['0'];
		
		echo $resultaCL;
		
		 echo "</td>
		 <td>";
		 $totcharsclan=("SELECT * FROM characters WHERE clanid='{$dato['clan_id']}'");
			$resultTCC=mysql_query($totcharsclan, $link) or die(mysql_error());
			$contarchars = mysql_num_rows($resultTCC);
			echo $contarchars;
		 echo "</td>
		 <td>{$dato['ally_name']}</td>";
			  echo "<td><form action=\"./index2.php?t=detalhesclan.php\" method=\"POST\">
				<input type=\"hidden\" name=\"idClan\" value=\"{$dato['clan_id']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td></tr>";
}

echo "</table>";





} 
else //se nao tem contagem de clans no servidor
{
echo "Nao ha Clans no Servidor!";
}

?>



</body>
</html>
