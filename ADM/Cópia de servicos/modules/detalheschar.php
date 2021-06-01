<?php
include "./configs/config.php";
include "./configs/vars.php";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');



if ($_POST['editcharclasse'] !='')
{

if ($_POST['RaceId'] == 5)
{
	if ($_POST['editcharclasse'] =='123')
	{
	$sexodochar='0';
	}
	elseif ($_POST['editcharclasse'] =='125')
	{
	$sexodochar='0';
	}
	elseif ($_POST['editcharclasse'] =='127')
	{
	$sexodochar='0';
	}
	elseif ($_POST['editcharclasse'] =='128')
	{
	$sexodochar='0';
	}
	elseif ($_POST['editcharclasse'] =='131')
	{
	$sexodochar='0';
	}
	elseif ($_POST['editcharclasse'] =='132')
	{
	$sexodochar='0';
	}
	else
	{
	$sexodochar='1';
	}
}
else
{
$sexodochar=$_POST['classcharsex'];
}

if ($sexodochar !='')
{

$query="UPDATE characters SET classid='".$_POST['editcharclasse']."', race='".$_POST['RaceId']."', sex='".$sexodochar."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());

$query="DELETE FROM character_skills WHERE charId='".$_POST['charId']."' AND class_index='0'";
$clasfdfgbsskills=mysql_query($query, $link) or die (mysql_error());


if ($_POST['skillcheck'])
{
$query="SELECT DISTINCT * FROM skill_trees WHERE class_id='".$_POST['editcharclasse']."' AND min_level<='".$_POST['level']."' GROUP BY skill_id";
$classskills=mysql_query($query, $link) or die (mysql_error());

while ($skillsnovas = mysql_fetch_array($classskills)) 
{
$skill_id=$skillsnovas['skill_id'];

$querymaiorlevel= "SELECT level FROM skill_trees WHERE skill_id='".$skillsnovas['skill_id']."' ORDER BY level DESC LIMIT 1";
		$resultMLVL=mysql_query($querymaiorlevel, $link) or die(mysql_error());
		$fetchMLVL = mysql_fetch_row($resultMLVL);
		$maiorlevel= $fetchMLVL['0'];

$nomeskilla=$skillsnovas['name'];
$nomeskillb=addslashes($nomeskilla);
$querydaskills="INSERT INTO character_skills (charId, skill_id, skill_level, skill_name, class_index) VALUES
('".$_POST['charId']."','".$skill_id."','".$maiorlevel."','".$nomeskillb."','0')";
$maiorlevel=mysql_query($querydaskills, $link) or die (mysql_error());

}


}
else
{
}
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
}
}
else
{
echo "";
}










if ($_POST['editcharvip'] !='')
{
$query="UPDATE characters SET charVIP='".$_POST['editcharvip']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

if ($_POST['karma'] !='')
{
$query="UPDATE characters SET karma='".$_POST['karma']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

if ($_POST['pvp'] !='')
{
$query="UPDATE characters SET pvpkills='".$_POST['pvp']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

if ($_POST['pk'] !='')
{
$query="UPDATE characters SET pkkills='".$_POST['pk']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

if ($_POST['editcharsex'] !='')
{
$query="UPDATE characters SET sex='".$_POST['editcharsex']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

if ($_POST['editcharclan'] !='')
{
$query="UPDATE characters SET clanid='".$_POST['editcharclan']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

if ($_POST['clanput'] !='')
{
$query="UPDATE characters SET clanid='".$_POST['clanput']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

if ($_POST['editchartitle'] !='')
{
$query="UPDATE characters SET title='".$_POST['editchartitle']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}


if ($_POST['editcharname'] !='')
{
$query="UPDATE characters SET char_name='".$_POST['editcharname']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

if ($_POST['editcharacclevel'] != '')
{
$query="UPDATE characters SET accesslevel='".$_POST['editcharacclevel']."' WHERE charId='".$_POST['charId']."'";
$result=mysql_query($query, $link) or die (mysql_error());
echo "
<SCRIPT LANGUAGE=\"JavaScript\">
window.open('','charprop','width=400,height=400');
</SCRIPT>
";
}
else
{
echo "";
}

$queryCNM = "SELECT char_name FROM characters WHERE charId='{$_POST['charId']}'";
		$resultCNM=mysql_query($queryCNM, $link) or die(mysql_error());
		$fetchCNM = mysql_fetch_row($resultCNM);
		$resultaCNM = $fetchCNM['0'];
	$queryCHAR = "SELECT * FROM characters WHERE charId='{$_POST['charId']}'";
		$resultCHAR=mysql_query($queryCHAR, $link) or die(mysql_error());
	$dados=mysql_fetch_array($resultCHAR);
		
echo "<title>Detalhes de {$resultaCNM}</title>";

?>
<center>
<i>DETALHES DO CHAR</i></center>
<hr />
<table width="100%" border="0" align="left" valign="top" cellpadding="0" cellspacing="0">
  <tr>
    <td width="32%"><form action="./modules/editcharname.php" method="POST" target="charnameedit" onsubmit="window.open('','charnameedit','width=300,height=100')">Char: <b><?PHP echo $dados['char_name'];  ?></b> 
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="hidden" value="<?PHP echo $dados['char_name'];  ?>" name="char_name"/><?php 
	$nobless = mysql_query("SELECT * FROM characters WHERE charId='".$dados['charId']."' AND nobless='1'") or die(mysql_error());
			
		if (mysql_num_rows($nobless))
			   {
			   echo " <img src=\"./imagens/noble.png\" title=\"Char Noble\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
			   ?>
	<input type="submit" value="Editar" />
	
	</form></td>
    <td width="36%">Account: <b><?PHP echo $dados['account_name'];  ?></b>&nbsp;</td>
    <td width="32%"><form action="./modules/editcharaclevel.php" method="POST" target="characledit" onsubmit="window.open('','characledit','width=300,height=100')">
      <p>Access Level: <b><?PHP echo $dados['accesslevel'];  ?></b>
          <input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
          <input type="hidden" value="<?PHP echo $dados['accesslevel'];  ?>" name="accesslevel"/>
        <?php   if ($dados['accesslevel'] < 0)
			   {
			   echo " <img src=\"./imagens/banned.png\" title=\"Banned\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
			   
			   if ($dados['accesslevel'] > 0)
			   {
			   echo " <img src=\"./imagens/staff.png\" title=\"Staff\" width=\"11\" height=\"11\"> ";
			   }
			   else
			   {
			   echo "";
			   }
			   
			   ?>
        <input type="submit" value="Editar" />
        </p>
      </form></td>
  </tr>
  <tr>
     <td valign="top">Ultimo Login:
	  <strong>
	  <?PHP 
	$queryLACC = "SELECT lastAccess FROM characters WHERE charId='{$dados['charId']}'";
	$resultLACC=mysql_query($queryLACC, $link) or die(mysql_error());
		$fetchLACC = mysql_fetch_row($resultLACC);
		$resultaLACC = $fetchLACC['0'];
		$resultaLACCk = $resultaLACC / 1000;
		$lastaccess = date("d/m/Y G:i:s", $resultaLACCk);
	 echo $lastaccess;
	
	
	
	?>
	  </strong> </td>
     <td valign="top">Status: <?php
	if ($dados['online'] != 0)
	{
		 echo "<font color=\"#008855\"><b>Online</b></font>";
		 }
		 else
		 {
		 echo "<font color=\"#993333\"><b>Offline</b></font>";
		 }
	
	
	
?></td>
     <td valign="top">Tempo Online:
	
	<?php
	$onlinetime=$dados['onlinetime'];
	$calconline=$dados['onlinetime'];
	$horas='1';
	$minutos='1';
	$sessenta='60';
	
	while ( $calconline > $sessenta )
	{
		$calconline=$calconline-$sessenta;
		$minutos++;
	}
	
	$segundos=$onlinetime-($minutos*$sessenta);
	if ($segundos < 0)
	{
	$segundos=$sessenta+$segundos;
	}
	else
	{
	echo "";
	}
		
	while ($minutos > $sessenta)
	{
	$minutos=$minutos-$sessenta;
	$horas++;
	}
	
	
	
	echo "<b> {$horas}h {$minutos}min {$segundos}seg</b>";
	
	
	?></td>
  </tr>
  <tr>
     <td valign="top"><form action="./modules/editcharvip.php" method="POST" target="charvipedit" onsubmit="window.open('','charvipedit','width=250,height=80')">VIP: <b><?php
	if ($dados['charViP'] != '0')
	{
	echo "SIM";
	}
	else
	{
	echo "NAO";
	}
	
	
	?></b>
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="hidden" value="<?PHP echo $dados['charViP'];  ?>" name="charVIP"/>
	<input type="submit" value="Editar" /></form></td>
     <td valign="top"><form action="./modules/editchartitle.php" method="POST" target="chartitle" onsubmit="window.open('','chartitle','width=300,height=100')">Title: <b><?PHP echo $dados['title'];  ?></b>
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="hidden" value="<?PHP echo $dados['title'];  ?>" name="title"/>
	<input type="submit" value="Editar" /></form></td>
     <td valign="top">Ultimo IP: 
	  <strong>
	  <?PHP 
	$queryLIP = "SELECT lastIP FROM accounts WHERE login='{$dados['account_name']}'";
	$resultLIP=mysql_query($queryLIP, $link) or die(mysql_error());
		$fetchLIP = mysql_fetch_row($resultLIP);
		$resultaLIP = $fetchLIP['0'];
	 echo $resultaLIP;	
	?>
	  </strong> </td>
  </tr>
  <tr>
     <td valign="top"><form action="./modules/editcharrace.php" method="POST" target="charrace" onsubmit="window.open('','charrace','width=300,height=100')">Race:<b>
	<?php 
	if ($dados['race'] == 0)
		{
		echo "Humano";
		$classedochar="Humano";
		}
		elseif ($dados['race'] == 1)
		{
		echo "Elfo";
		$classedochar="Elfo";
		}
		elseif ($dados['race'] == 2)
		{
		echo "Dark Elfo";
		$classedochar="Dark Elfo";
		}
		elseif ($dados['race'] == 3)
		{
		echo "Orc";
		$classedochar="Orc";
		}
		elseif ($dados['race'] == 4)
		{
		echo "Dwarf";
		$classedochar="Dwarf";
		}
		elseif ($dados['race'] == 5)
		{
		echo "Kamael";
		$classedochar="Kamael";
		}
		else
		{
		echo "SRD???";
		}
	
	
	?></b><input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="hidden" value="<?PHP echo $dados['race'];  ?>" name="race"/>
		<input type="hidden" value="<?PHP echo $dados['level'];  ?>" name="level"/>
	<input type="hidden" value="<?PHP echo $classedochar;  ?>" name="charraces"/>
	<input type="submit" value="Editar" /></form ></td>
     <td valign="top"><form action="./modules/editcharclass.php" method="POST" target="charclass" onsubmit="window.open('','charclass','width=300,height=100')"><?php 
	$queryCC = "SELECT ClassName FROM char_templates WHERE ClassId='{$dados['classid']}'";
		$resultCC=mysql_query($queryCC, $link) or die(mysql_error());
		$fetchCC = mysql_fetch_row($resultCC);
		$resultaCC= $fetchCC['0'];
		echo "Classe: <b>";
			   echo $resultaCC;	 echo "</b>";
			   
			   $olly = mysql_query("SELECT charId FROM olympiad_nobles WHERE charId='".$dados['charId']."'") or die(mysql_error());
		if (mysql_num_rows($olly))
			   {
			   echo " <img src=\"./imagens/olly.png\" title=\"Nas Olympiads\" width=\"11\" height=\"11\">";
			   }
			   else
			   {
			   echo "";
			   }
			   
			    $hero = mysql_query("SELECT charId FROM heroes WHERE charId='".$dados['charId']."'") or die(mysql_error());

			    if (mysql_num_rows($hero))
			   {
			   echo " <img src=\"./imagens/crown.png\" width=\"11\" title=\"Char Hero\" height=\"11\">";
			   }
			   else
			   {
			   echo "";
			   }
	
	?><input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="hidden" value="<?PHP echo $dados['race'];  ?>" name="race"/>
	<input type="hidden" value="<?PHP echo $dados['classid'];  ?>" name="classid"/>
	<input type="hidden" value="<?PHP echo $resultaCC;  ?>" name="classname"/>
	<input type="submit" value="Editar" /></form ></td>
     <td valign="top"><form action="./modules/editcharsex.php" method="POST" target="charsex" onsubmit="window.open('','charsex','width=300,height=100')">Sexo:<b>
	<?php 
	if ($dados['sex'] == 0)
		{
		echo "Masculino";
		}
		else
		{
		echo "Feminino";
		}
		
	
	?>
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="hidden" value="<?PHP echo $dados['sex'];  ?>" name="sex"/>
	<input type="submit" value="Editar" /></form ></b> </td>
  </tr>
  <tr>
     <td valign="top"><form action="./modules.php?m=editcharkills.php" method="POST" target="charkills" onsubmit="window.open('','charkills','width=300,height=100')">PvPs:<b> <?php echo $dados['pvpkills']; ?></b> | PKs:<b> <?php echo $dados['pkkills']; ?></b> 	 
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="hidden" value="<?PHP echo $dados['pvpkills'];  ?>" name="pvp"/>
	<input type="hidden" value="<?PHP echo $dados['pkkills'];  ?>" name="pk"/>
	<input type="submit" value="Editar" /></form>
	 
	 
	 </td>
     <td valign="top"><?php 
	
	if ($dados['clanid'] != 0)
	{
	echo "<form action=\"./modules.php?m=detalhesclan.php\" method=\"POST\" target=\"clandetails\" onsubmit=\"window.open('','clandetails','width=800,height=600'); \">";
	$queryCLL= "SELECT leader_id FROM clan_data WHERE leader_id='{$dados['charId']}'";
		$resultCLL=mysql_query($queryCLL, $link) or die(mysql_error());
		$fetchCLL = mysql_fetch_row($resultCLL);
		$resultaCLL = $fetchCLL['0'];
		
		$queryCN = "SELECT clan_name FROM clan_data WHERE clan_id='{$dados['clanid']}'";
		$resultCN=mysql_query($queryCN, $link) or die(mysql_error());
		$fetchCN = mysql_fetch_row($resultCN);
		$resultaCN = $fetchCN['0'];
			   		echo "Clan: <b>"; echo $resultaCN; echo "</b>"; 
				
				if ($dados['charId']!=$resultaCLL)
			   {
			   echo "";
			   }
			   else
			   {
			   echo " <img src=\"./imagens/leader.png\" width=\"11\" title=\"Clan Leader\" height=\"11\"> ";
			   } 
			   
			   echo "</b>
	<input type=\"hidden\" value=\"{$dados['clanid']}\" name=\"idClan\"/>
	<input type=\"submit\" value=\"Detalhes\" /></form>
	<form action=\"./modules.php?m=editcharclan.php\" method=\"POST\" target=\"charclan\" onsubmit=\"window.open('','charclan','width=300,height=100')\">
	<input type=\"hidden\" value=\"{$dados['charId']}\" name=\"charId\"/>
	<input type=\"submit\" value=\"Trocar Clan\" /></form>";
	}
	else
	{
	echo "<form action=\"./modules/colocaemclan.php\" method=\"POST\" target=\"charclanput\" onsubmit=\"window.open('','charclanput','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,width=300,height=100,top=15,left=25') \"><b>CHAR SEM CLAN </b>
	<input type=\"hidden\" value=\"{$dados['charId']}\" name=\"charId\"/>
	<input type=\"submit\" value=\"Detalhes\" /></form>";
	}
	?></td>
     <td valign="top">Level:<b> <?php echo $dados['level']; ?></b></td>
  </tr>
  <tr>
     <td valign="top"><form action="./modules.php?m=editcharkarma.php" method="POST" target="charkarma" onsubmit="window.open('','charkarma','width=300,height=100')">Karma:
    <?php
	
	if ($dados['karma'] > 0)
	{
	echo "<font color=\"#FF0000\"><b>";
	echo $dados['karma']; 
	echo "</font></b>";
	}
	else
	{
	echo "<font color=\"0000FF#\"><b>";
	echo $dados['karma']; 
	echo "</font></b>";
	}
		?>
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="hidden" value="<?PHP echo $dados['karma'];  ?>" name="karma"/>
	<input type="submit" value="Editar" /></form></td>
     <td valign="top">&nbsp;</td>
     <td valign="top">XP:<b> <?php echo $dados['exp']; ?></b> </td>
  </tr>
  <tr>
    <td valign="top">Subclasses: 
    <?php
$querysubc = "SELECT * FROM character_subclasses WHERE charId='".$dados['charId']."'";
		$resultSCS = mysql_query($querysubc, $link);
		if (mysql_num_rows($resultSCS))
		{
		
  while($subs= mysql_fetch_array($resultSCS))
 {
 
  $querySNM = "SELECT ClassName FROM char_templates WHERE ClassId='".$subs['class_id']."'";
		$resultSNM=mysql_query($querySNM, $link) or die(mysql_error());
		$fetchSNM = mysql_fetch_row($resultSNM);
		$resultaCSN= $fetchSNM['0'];
 	   		echo "
               <br><b>{$resultaCSN}</b> level <b>{$subs['level']}</b>
              ";
}

}
else
{
echo "<br><b>Char nao tem SubClasses.</b>";
}
?></td>
     <td valign="top">
    <td valign="top">SP:<b> <?php echo $dados['sp']; ?></b></td>
  </tr>
</table>

<p>&nbsp;</p>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="32%" valign="top">FRIENDS<br />
    <?php
$query = "SELECT * FROM character_friends WHERE charId='".$dados['charId']."'";
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
         
 ";
 
 $cor= "c0c0c0";
 //pega os dados consultados
 while($amigo= mysql_fetch_array($resultCSK))
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
               <td valign=\"top\">
               {$amigo['friend_name']}
              </td>
               <td valign=\"top\">
			  <form action=\"modules.php?m=detalheschar.php\" method=\"POST\" target=\"charprop\" onsubmit=\"window.open('','charprop','width=800,height=400')\">
	<input type=\"hidden\" value=\"{$amigo['friendId']}\" name=\"charId\"/>
	<input type=\"submit\" value=\"Ver\" /></form>

			   </td>
			   </tr>";
}

echo "</table>";
}
else
{
echo "<br><b>Char nao tem Friends.</b><br>";
}
?></td>
    <td width="36%" valign="top"><form action="./modules.php?m=invchar.php" method="POST" target="charinv" onsubmit="window.open('','charinv','width=600,height=600')">
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="submit" value="  VER BAG " /></form>
	
	<form action="./modules.php?m=inusechar.php" method="POST" target="charuse" onsubmit="window.open('','charuse','width=600,height=600')">
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="submit" value="VER USADOS" /></form>
	
	<form action="./modules.php?m=inwarechar.php" method="POST" target="charware" onsubmit="window.open('','charware','width=600,height=600')">
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="submit" value="VER WAREHOUSE" /></form>
	
	<form action="./modules.php?m=infreightchar.php" method="POST" target="charfrei" onsubmit="window.open('','charfrei','width=600,height=600')">
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="submit" value="VER FREIGHT" /></form></td>
    <td width="32%" valign="top">
	
	<form action="./modules.php?m=vercharskills.php" method="POST" target="charskills" onsubmit="window.open('','charskills','width=290,height=900')">
	<input type="hidden" value="<?PHP echo $dados['charId'];  ?>" name="charId"/>
	<input type="submit" value="VER SKILLS" /></form></td>
  </tr>
</table>
<BR>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="33%" valign="top">
	
	</td>
    <td width="35%" valign="top">
	
	</td>
    <td width="32%" valign="top">
	
	</td>
  </tr>
</table>


