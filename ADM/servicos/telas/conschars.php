<form action="./index2.php?t=conschars.php" method="POST">
Localizar Char pelo Nome:
				<input type="text" name="nomeChar" >
				<input type="submit" value="Localizar"></form>
<?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$totchars=("SELECT * FROM characters");
$result=mysql_query($totchars, $link) or die(mysql_error());
$contarALL = mysql_num_rows($result);

$totcharsON=("SELECT * FROM characters WHERE online='1'");
$result=mysql_query($totcharsON, $link) or die(mysql_error());
$contarON = mysql_num_rows($result);

if ($contarALL > 0)
  	{
echo "<table width=\"100%\" border=\"0\">
  <tr class=\"style2\">
  <td align=\"center\"><a href=\"./index2.php?t=allchars.php\">Total de Chars no Servidor: <strong>{$contarALL} <br></a></strong>
		</td></tr><tr><td><br></td></tr><tr>
    <td align=\"center\"><a href=\"./index2.php?t=chars.php\">Chars Online no Servidor: <strong>{$contarON}</strong></td></tr>
</table>";
}
else
{
echo "";
}

$querycheckconsulta = "SELECT * FROM characters WHERE char_name LIKE '%".$_POST['nomeChar']."%'";
		$resulttt = mysql_query($querycheckconsulta, $link);
		
		
		if (mysql_num_rows($resulttt))
		{

if ($contarALL > 0)
  	{

$query = "SELECT * FROM characters WHERE char_name LIKE '%".$_POST['nomeChar']."%'";
		$result = mysql_query($query, $link);
		
		echo "<table border=\"0\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: 000000;
                      font-family: arial;
                      font-size: 12px;
                    \">
        <tr style=\"background-color: 009966;color: ffffff; align: center;\">
         <td>
          Nome
         </td>
         <td>
          Level
         </td>
		 <td>Clan</td>
		 <td>Race</td>
		 <td>Classe</td>
		 <td>Status</td>
		 <td></td>
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
               {$dato['char_name']}";
			    if ($dato['accesslevel'] > 0)
			   {
			   echo " <img src=\"./imagens/staff.gif\" title=\"Staff\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
			   
              echo "</td>
              <td>
               {$dato['level']}
			   </td>
			   <td>";
			   $queryCLAN = "SELECT clan_name FROM clan_data WHERE clan_id='{$dato['clanid']}'";
		$resultCLAN=mysql_query($queryCLAN, $link) or die(mysql_error());
		$fetchCLAN = mysql_fetch_row($resultCLAN);
		$resultaCLAN = $fetchCLAN['0'];
		 if ($resultaCLAN != '')
		 {
		 echo $resultaCLAN; 
		  }
		else
		{
		 echo "No Clan";
		} 
			   echo "</td><td>";
			   $queryCR = "SELECT race FROM characters WHERE charId='{$dato['charId']}'";
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
		 $queryCC = "SELECT ClassName FROM char_templates WHERE ClassId='{$dato['classid']}'";
		$resultCC=mysql_query($queryCC, $link) or die(mysql_error());
		$fetchCC = mysql_fetch_row($resultCC);
		$resultaCC= $fetchCC['0'];
			   echo $resultaCC;
		
		 echo "</td>
		 <td>";
		 if ($dato['online'] != 0)
		 {
		 echo "<font color=\"#0066cc\"><b>Online</b></font>";
		 }
		 else
		 {
		 echo "<font color=\"#993333\"><b>Offline</b></font>";
		 }
		 
		 echo "</td>
		 <td><form action=\"./modules.php?m=detalheschar.php\" method=\"POST\" target=\"charprop\" onsubmit=\"window.open('','charprop','width=800,height=400')\">
				<input type=\"hidden\" name=\"charId\" value=\"{$dato['charId']}\">
				<input type=\"submit\" value=\"Detalhes\"></form></td></tr>";
}

echo "</table>";
}
 
else //se nao tem contagem de clans no servidor
{
echo "Nao ha Clans no Servidor!";
}

}
else
{
echo "<br><b>Nenhum Char localizado!<br><br><a href=\"./index2.php?t=chars.php\">Voltar</a></b>";
}

?>