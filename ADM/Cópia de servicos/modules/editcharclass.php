<div align="left">
<form action="./modules.php?m=detalheschar.php" method="POST" target="charprop" onsubmit="window.open('','charprop','width=200,height=100'); window.close();">
<em><strong><U>PRESTE ATENCAO AO LEVEL DO CHAR PARA DAR A CLASSSE!</U></strong></em><BR />
<?php
include "../configs/config.php";
include "../configs/vars.php";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');


echo "Race escolhida: <b>"; 

if ($_POST['race'] == 0)
		{
		echo "Humano";
		$racedochar="Humano";
		}
		elseif ($_POST['race'] == 1)
		{
		echo "Elfo";
		$racedochar="Elfo";
		}
		elseif ($_POST['race'] == 2)
		{
		echo "Dark Elfo";
		$racedochar="Dark Elfo";
		}
		elseif ($_POST['race'] == 3)
		{
		echo "Orc";
		$racedochar="Orc";
		}
		elseif ($_POST['race'] == 4)
		{
		echo "Dwarf";
		$racedochar="Dwarf";
		}
		else
		{
		echo "Kamael";
		$racedochar="Kamael";
		}
		echo "</b>"; 
?>  LEVEL <B><?PHP  echo $_POST['level']; ?></B><br />
Nova Class do Char: <?php 
echo "<select name=\"editcharclasse\" id=\"editcharclasse\">";
if ($_POST['race'] == 0)
		{
		$querylistaclass=("SELECT * FROM char_templates WHERE RaceId='".$_POST['race']."'");
    $classlista=mysql_query($querylistaclass, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($classes = mysql_fetch_array($classlista)) 
{
echo("<option value='".$classes['ClassId']."'>".$classes['ClassName']."</option>");
}
echo "</select>";
		}
		elseif ($_POST['race'] == 1)
		{
		$querylistaclass=("SELECT * FROM char_templates WHERE RaceId='".$_POST['race']."'");
    $classlista=mysql_query($querylistaclass, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($classes = mysql_fetch_array($classlista)) 
{
echo("<option value='".$classes['ClassId']."'>".$classes['ClassName']."</option>");
}
echo "</select>";
		}
		elseif ($_POST['race'] == 2)
		{
		$querylistaclass=("SELECT * FROM char_templates WHERE RaceId='".$_POST['race']."'");
    $classlista=mysql_query($querylistaclass, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($classes = mysql_fetch_array($classlista)) 
{
echo("<option value='".$classes['ClassId']."'>".$classes['ClassName']."</option>");
}
echo "</select>";
		}
		elseif ($_POST['race'] == 3)
		{
		$querylistaclass=("SELECT * FROM char_templates WHERE RaceId='".$_POST['race']."'");
    $classlista=mysql_query($querylistaclass, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($classes = mysql_fetch_array($classlista)) 
{
echo("<option value='".$classes['ClassId']."'>".$classes['ClassName']."</option>");
}
echo "</select>";
		}
		elseif ($_POST['race'] == 4)
		{
		$querylistaclass=("SELECT * FROM char_templates WHERE RaceId='".$_POST['race']."'");
    $classlista=mysql_query($querylistaclass, $link); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($classes = mysql_fetch_array($classlista)) 
{
echo("<option value='".$classes['ClassId']."'>".$classes['ClassName']."</option>");
}
echo "</select>";
		}
		else
		{
		
		$racedochar="5";
		
echo("<option value='123'>Male Soldier</option>
<option value='125'>Male Trooper</option>
<option value='127'>Male Berseker</option>
<option value='131'>Male Doombringer</option>
<option value='128'>Male Soul Breaker</option>
<option value='132'>Male Soul Hound</option>
<option value='124'>Female Soldier</option>
<option value='126'>Female Warder</option>
<option value='130'>Female Abalaster</option>
<option value='134'>Female Trickster</option>
<option value='129'>Female Soul Breaker</option>
<option value='133'>Female Soul Hound</option>");
}
echo "</select>";
		

?>
<br />
<?PHP
if ($_POST['race'] == 5)
	{
	echo "<i><b>O Sexo e escolhido de acordo com a classe.</b></i>";
	}
	else
	{
	echo "Selecione o Sexo do Char:
	<select name=\"classcharsex\">
	<option value=\"0\">MASCULINO</option>
	<option value=\"1\">FEMININO</option>
	</select>";
	}
?>
<br />
<b>As skills do Char serao resetadas. <br />
Para inserir as Skills da Classe de acordo com o level, selecione isso</b><i> >> </i><input type="checkbox" name="skillcheck" value="1" /> .
    <input type="hidden" value="<?PHP echo $_POST['charId'];  ?>" name="charId"/>
	    <input type="hidden" value="<?PHP echo $_POST['level'];  ?>" name="level"/>
	    <input type="hidden" value="<?PHP echo $_POST['race'];  ?>" name="RaceId"/>
    <input type="submit" value="Salvar" />
  </form>
</div>
