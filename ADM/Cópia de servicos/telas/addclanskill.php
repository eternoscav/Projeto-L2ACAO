<?php

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

//func add skill
if ($_POST['cskillIdAd'])
{
	$queryskillnameA = "SELECT name FROM pledge_skill_trees WHERE skill_id='".$_POST['cskillIdAd']."' LIMIT 1";
		$resultCsnA=mysql_query($queryskillnameA, $link) or die(mysql_error());
		$fetchCsnA = mysql_fetch_row($resultCsnA);
		$resultaCsnA = $fetchCsnA['0'];

$queryADDsk= "INSERT INTO clan_skills SET clan_id='".$_POST['clanid']."', skill_id='".$_POST['cskillIdAd']."', skill_level='".$_POST['cskillLvl']."', skill_name='".$resultaCsnA."'";
		$resultCSK = mysql_query($queryADDsk, $link);
}
else
{
echo "";
}

//func deleta skill
if ($_POST['cskillIdDe'])
{
	$queryskillnameB = "SELECT name FROM pledge_skill_trees WHERE skill_id='".$_POST['cskillIdDe']."' LIMIT 1";
		$resultCsnB=mysql_query($queryskillnameB, $link) or die(mysql_error());
		$fetchCsnB = mysql_fetch_row($resultCsnB);
		$resultaCsnB = $fetchCsnB['0'];

$queryDELsk= "DELETE FROM clan_skills WHERE clan_id='".$_POST['clanid']."' AND skill_id='".$_POST['cskillIdDe']."'";
		$resultCSK = mysql_query($queryDELsk, $link);
}
else
{
echo "";
}

//func altera skill
if ($_POST['cskillIdAl'])
{
	$queryskillnameC = "SELECT name FROM pledge_skill_trees WHERE skill_id='".$_POST['cskillIdAl']."' LIMIT 1";
		$resultCsnC=mysql_query($queryskillnameC, $link) or die(mysql_error());
		$fetchCsnC = mysql_fetch_row($resultCsnC);
		$resultaCsnC = $fetchCsnC['0'];

$queryALTsk= "UPDATE clan_skills SET skill_level='".$_POST['cskillLvl']."' WHERE clan_id='".$_POST['clanid']."' AND skill_id='".$_POST['cskillIdAl']."'";
		$resultCSK = mysql_query($queryALTsk, $link);
}
else
{
echo "";
}

//skills do Clan

$query = "SELECT * FROM clan_skills WHERE clan_id='".$_POST['clanid']."' ORDER BY skill_name";
		$resultCSK = mysql_query($query, $link);
		if (mysql_num_rows($resultCSK))
		{
		echo "<table border=\"0\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: 000000;
                      font-family: arial;
                      font-size: 12px;
                    \">
        <tr style=\"background-color: ff9933;color: ffffff; align: center;\">
         <td>
          Skill
         </td>
		 <td>
		 Level
		 </td>
		 <td></td><td></td>
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
               {$data['skill_name']} - ID {$data['skill_id']}
              </td>
              <td>
               {$data['skill_level']}
			   </td>
			   <td><form action=\"./index.php?t=addclanskill.php\" method=\"POST\">
			   <input type=\"hidden\" name=\"cskillIdDe\" value=\"{$data['skill_id']}\" >
				<input type=\"hidden\" name=\"clanid\" value=\"{$_POST['clanid']}\">
				<input type=\"submit\" value=\"Deletar\">
			   </form></td><td><form action=\"./index.php?t=addclanskill.php\" method=\"POST\">
			   <input type=\"hidden\" name=\"cskillIdAl\" value=\"{$data['skill_id']}\" >
			   <input type=\"text\" size=\"3\" name=\"cskillLvl\" value=\"{$data['skill_level']}\" >
				<input type=\"hidden\" name=\"clanid\" value=\"{$_POST['clanid']}\">
				<input type=\"submit\" value=\"Level\">
			   </form></td>
			   </tr>";
}

echo "</table>";
}
else
{
echo "<br><b>Clan nao tem Skills.</b><br>";
}




//func ver skills

echo "<br><form action=\"./index.php?t=addclanskill.php\" method=\"POST\">";
echo "Skill: <select name=\"cskillIdAd\" id=\"cskillIdAd\">";
	$querycharsclan=("SELECT DISTINCT * FROM pledge_skill_trees WHERE skill_id NOT IN (SELECT skill_id FROM clan_skills WHERE clan_id='".$_POST['clanid']."') GROUP BY name ORDER BY name,level ASC");
	$consulta=mysql_query($querycharsclan, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
echo("<option value='".$dados['skill_id']."'>".$dados['name']."</option>");
}
echo "</select>
 Level: <input type=\"text\" size=\"3\" name=\"cskillLvl\" >
<input type=\"hidden\" name=\"clanid\" value=\"{$_POST['clanid']}\">
<input type=\"submit\" value=\"Adicionar Skill\"></form>";

if ($_POST['cskillIdAd'])
{
echo "<br><br>Skill <b>{$resultaCsnA} Level {$_POST['cskillLvl']}</b> adicionada.<br>";
}
else
{
echo "";
}

if ($_POST['cskillIdDe'])
{
echo "<br><br>Skill <b>{$resultaCsnB}</b> deletada.<br>";
}
else
{
echo "";
}

if ($_POST['cskillIdAl'])
{
echo "<br><br>Skill <b>{$resultaCsnC}</b> alterada para Level {$_POST['cskillLvl']}.<br>";
}
else
{
echo "";
}
?>
