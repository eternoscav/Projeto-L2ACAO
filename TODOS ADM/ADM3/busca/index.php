<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#texto {
	font-size: 18px;
}
#fonte {
	color: #FFF;
}
#pesquisa {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	font-style: italic;
	color: #F00;
	border: 1px dashed #F00;
	text-align: center;
}
#tabela {
	background-color: #000;	
}
#tabelafonte {
	color: #F00;
}
#tabelafonte2 {
	color: #090;
}
-->
</style>
</head>

<body>
<p>BUSCAR / <a href="../index.php">Voltar </a></p>
<p><font color="#009900"><? echo date ("d/m/Y, H:i:s "); ?></font>
</p>
<form id="form1" name="form1" method="get" action="index.php">
  <center>
  <span class="style7"><span id="texto">Buscar Char:</span></span> 
  <label>
  <input name="pesquisar" type="text" id="pesquisar" size="25" maxlength="18" />
  </label>
  <label>
  <input type="submit" name="submit" id="submit" value="Buscar" />
  </label>
  </center>
</form>
<?php
 
include "../config.php";
$pesquisar = $_GET['pesquisar'];
$sql = "SELECT * FROM characters WHERE char_name like'%$pesquisar%' ORDER BY char_name";
$qr = mysql_query($sql) or die(mysql_error());
$contar = mysql_num_rows($qr);
?>
<?php
if($pesquisar == ''){
	exit();
}
if($contar < 1){
?>
<center><font colro="#CCCCCC">Sua pesquisa não encontrou nada!</font></center>
<?php
}
?>
<p id="pesquisa">Você esta pesquisando por: <font color="#000000"><? echo $pesquisar; ?></font> / Achou: <font color="#000000"><? echo $contar; ?></font> Resultado(s).</p>
<?php
while($linha = mysql_fetch_array($qr)){
?>

<table width="700" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td><form id="form17" name="form17" method="post" action="items.php?id=<?=$linha['obj_Id'];?>">
      Char <font color="#006600"><?=$linha['char_name'];?> - <?=$linha['obj_Id'];?></font>
/ 
<input type="submit" name="button16" id="button16" value="Mostrar Items" />
    </form></td>
  </tr>
</table>
<hr />
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="500" align="left" valign="top"><table width="368" border="0" cellspacing="1" cellpadding="1" id="tabela">
  <tr>
    <td width="120" align="left" valign="top" bgcolor="#F1F1F1">Acc Name</td>
    <td width="241" align="left" valign="top" bgcolor="#F1F1F1"><a href="conta.php?id=<?=$linha['account_name'];?>"><?=$linha['account_name'];?></a></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Char Name</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['char_name'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Email</td>
    <td align="left" valign="top" bgcolor="#F1F1F1">
	<?php
		$sql_mail = mysql_query('SELECT * FROM accounts WHERE login = "'.$linha["account_name"].'"');
		$email = mysql_fetch_array($sql_mail);
		echo ''.$email["email"].'';
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Level</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['level'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Sexo</td>
    <td align="left" valign="top" bgcolor="#F1F1F1">
	<?php
	if($linha['sex'] == 0){
		echo "Masculino";	
	}else{
		echo "Feminino";	
	}
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Clan</td>
    <td align="left" valign="top" bgcolor="#E8E8E8">
	<?php
    if($linha['clanid'] <= 0){
		echo "Não tem clan";	
	}else{
		$sql_clan = mysql_query('SELECT * FROM clan_data WHERE clan_id = '.$linha["clanid"].'');
		$mostra = mysql_fetch_array($sql_clan);
		echo ''.$mostra["clan_name"].'';
	}
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Classe Base</td>
    <td align="left" valign="top" bgcolor="#F1F1F1">
	<?php
    if($linha['base_class'] >= 0){
		$sql_cla = mysql_query('SELECT * FROM class_list WHERE id = '.$linha["base_class"].'');
		$mostra2 = mysql_fetch_array($sql_cla);
		echo ''.$mostra2["class_name"].'';
	}
    ?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Access Level</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['accesslevel'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Online</td>
    <td align="left" valign="top" bgcolor="#F1F1F1">
    <?php
    	if($linha['online'] == 0){
		echo "<font color='#FF0000'>Offline</font>";	
	}else{
		echo "<font color='#006600'>Online</font>";	
	}
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Ultimo Acesso</td>
    <td align="left" valign="top" bgcolor="#E8E8E8">
	<?php
	$tempo = $linha['lastAccess']/1000;
    $datahora  = gmstrftime("%d.%m.%Y | %H:%M:%S", $tempo);
	echo '<font color="#006600">'.$datahora.'</font>';
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Tempo Online</td>
    <td align="left" valign="top" bgcolor="#F1F1F1">
	<?php
	$tempo2 = $linha['onlinetime'];
    $datahora2  = gmstrftime("%H:%M:%S", $tempo2);
	echo '<font color="#006600">'.$datahora2.'</font>';
	?>
   </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Jail</td>
    <td align="left" valign="top" bgcolor="#E8E8E8">
	<?php
	if($linha['in_jail'] == 0){
		echo "<font color='#006600'>Não</font>";	
	}else{
		echo "<font color='#FF0000'>Sim</font>";
	}
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Nobre</td>
    <td align="left" valign="top" bgcolor="#F1F1F1">
    <?php
	if($linha['nobless'] == 1){
		echo "<font color='#006600'>Sim</font>";	
	}else{
		echo "<font color='#FF0000'>Não</font>";
	}
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Hero</td>
    <td align="left" valign="top" bgcolor="#E8E8E8">
    <?php
	if($linha['hero'] == 1){
		echo "<font color='#006600'>Sim</font>";	
	}else{
		echo "<font color='#FF0000'>Não</font>";
	}
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Donater</td>
    <td align="left" valign="top" bgcolor="#F1F1F1">
    <?php
	if($linha['donator'] == 1){
		echo "<font color='#006600'>Sim</font>";	
	}else{
		echo "<font color='#FF0000'>Não</font>";
	}
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Karma</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['karma'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">PvP Kills</td>
    <td align="left" valign="top" bgcolor="#F1F1F1"><?=$linha['pvpkills'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">PK Kills</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['pkkills'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Ban</td>
    <td align="left" valign="top" bgcolor="#F1F1F1">
    <?php
	if($linha['accesslevel'] < 0){
		echo "<font color='#FF0000'>Sim</font>";	
	}else{
		echo "<font color='#006600'>Não</font>";
	}
	?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8"><strong>Max HP</strong></td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><strong>
      <?=$linha['maxHp'];?>
    </strong></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Max MP</td>
    <td align="left" valign="top" bgcolor="#F1F1F1"><?=$linha['maxMp'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Max CP</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['maxCp'];?></td>
  </tr>
    </table></td>
    <td width="250" align="left" valign="top">
      <table width="300" border="0" cellspacing="1" cellpadding="1" bgcolor="#000000">
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte2">Entregar Donate</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1">
            <form id="form2" name="form2" method="post" action="doacao.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
              <input type="submit" name="button" id="button" value="Entrega Donate" />
            </form>
          </td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Desbugar Char</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8">
            <form id="form2" name="form2" method="post" action="desbugar.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
              <input type="submit" name="button" id="button" value="Desbugar" />
            </form>
          </td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte">Kikar</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form3" name="form3" method="post" action="kick.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button2" id="button2" value="Kikar" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Desbanir</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form4" name="form4" method="post" action="desban.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button3" id="button3" value="Desbanir" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte">Banir
          </td>
          <td align="left" valign="middle" bgcolor="#F1F1F1">
            <form id="form5" name="form5" method="post" action="ban.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
              <input type="submit" name="button4" id="button4" value="Banir" />
            </form>
          </td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Entregar Hero</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form6" name="form6" method="post" action="hero.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button5" id="button5" value="Botar Hero" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte2">Entregar Nobre</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form7" name="form7" method="post" action="nobre.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button6" id="button6" value="Botar Nobre" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Entregar ViP</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form8" name="form8" method="post" action="donate.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button7" id="button7" value="Botar ViP" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte2">Entregar ADM</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form9" name="form9" method="post" action="adm.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button8" id="button8" value="Botar ADM" />
          </form></td>
    </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Entregar GM</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form10" name="form10" method="post" action="gm.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button9" id="button9" value="Botar GM" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte">Tirar Hero</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form11" name="form11" method="post" action="tira_hero.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button10" id="button10" value="Tirar Hero" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte">Tirar Nobre</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form12" name="form12" method="post" action="tira_nobre.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button11" id="button11" value="Tirar Nobre" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte">Tirar ViP</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form13" name="form13" method="post" action="tira_donate.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button12" id="button12" value="Tirar ViP" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte">Tirar ADM</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form14" name="form14" method="post" action="tira_adm.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button13" id="button13" value="Tirar ADM" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte">Tirar GM</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form15" name="form15" method="post" action="tira_gm.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button14" id="button14" value="Tirar GM" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Tirar da Jail</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form16" name="form16" method="post" action="tira_jail.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button15" id="button15" value="Tirar Jail" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte2">Add Augment</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form18" name="form18" method="post" action="augments.php?id=<?=$linha['obj_Id'];?>">
            <input type="submit" name="button17" id="button17" value="Add Augment" />
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Inserir AIO</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form18" name="form18" method="post" action="aio.php?id=<?=$linha['obj_Id'];?>&voltar=<?=$linha['char_name'];?>">
            <input type="submit" name="button17" id="button17" value="Add AIO" />
          </form></td>
        </tr>
        
    </table></td>
  </tr>
<p>

</table>

</p>
<?php
}
?>
</body>
</html>
<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
