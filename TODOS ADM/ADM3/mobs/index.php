<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mob'S</title>
<link rel="stylesheet" type="text/css" href="../estilo.css"/>
<style type="text/css">
<!--
#pesquisa {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	font-style: italic;
	color: #F00;
	border: 1px dashed #F00;
	text-align: center;
}
-->
</style>
</head>

<body>
<p>Busca e edição de MOB / <a href="../index.php">Voltar </a></p>
<p>
<form id="form1" name="form1" method="get" action="index.php">
  <center>
  <span class="style7"><span id="texto">Buscar Mob's:</span></span> 
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
$sql = "SELECT * FROM npc WHERE name like'$pesquisar' ORDER BY name";
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
<p>Mob <font color="#006600"><?=$linha['char_name'];?> / <?=$linha['id'];?> <a href="index.php">Voltar ao topo</a></font></p> 
<hr />
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="500" align="left" valign="top"><table width="368" border="0" cellspacing="1" cellpadding="1" bgcolor="#000000">
  <tr>
    <td width="120" align="left" valign="top" bgcolor="#F1F1F1">ID</td>
    <td width="241" align="left" valign="top" bgcolor="#F1F1F1"><?=$linha['id'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Mob Name</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['name'];?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#F1F1F1">Title</td>
    <td align="left" valign="top" bgcolor="#F1F1F1"><form id="form3" name="form3" method="post" action="add_title.php?id=<?=$linha['id'];?>">
      <?php
	if($linha['title'] != ''){
		echo ''.$linha['title'].'';	
	}else{
		echo 'Não tem Title.';	
	}
	?>
      <input name="title" type="text" id="title" size="10" />
      <input type="submit" name="button2" id="button2" value="Add" />
    </form></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Level</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['level'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Sexo</td>
    <td align="left" valign="top" bgcolor="#F1F1F1"><?=$linha['sex'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">Tipo</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['type'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Classe Base</td>
    <td align="left" valign="top" bgcolor="#F1F1F1"><?=$linha['class'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8">ServerSideName</td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><?=$linha['serverSideName'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">ServerSideTitle</td>
    <td align="left" valign="top" bgcolor="#F1F1F1"><?=$linha['serverSideTitle'];?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8E8E8"><strong>Max HP</strong></td>
    <td align="left" valign="top" bgcolor="#E8E8E8"><strong>
      <?=$linha['hp'];?>
    </strong></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F1F1F1">Max MP</td>
    <td align="left" valign="top" bgcolor="#F1F1F1"><?=$linha['mp'];?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top" bgcolor="#E8E8E8"><table width="368" border="0" cellspacing="1" cellpadding="1" bgcolor="#000000">
      <tr>
        <td colspan="6" align="center" valign="middle" bgcolor="#CCCCCC">DROP'S</td>
        </tr>
      <tr>
        <td align="center" valign="middle" bgcolor="#999999">Item</td>
        <td align="center" valign="middle" bgcolor="#999999">Min</td>
        <td align="center" valign="middle" bgcolor="#999999">Max</td>
        <td align="center" valign="middle" bgcolor="#999999">Categoria</td>
        <td align="center" valign="middle" bgcolor="#999999">Chance</td>
        <td align="center" valign="middle" bgcolor="#999999">Deletar</td>
      </tr>
      <?php
	  $sql_drop = mysql_query("SELECT * FROM droplist WHERE mobId = ".$linha['id']."");
	  while($linha_mob = mysql_fetch_array($sql_drop)){
		$cor = $cor + 1;
		$bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
	  ?>
      <tr bgcolor="<? echo $bg; ?>">
        <td align="center" valign="middle"><?=$linha_mob['itemId'];?></td>
        <td align="center" valign="middle"><?=$linha_mob['min'];?></td>
        <td align="center" valign="middle"><?=$linha_mob['max'];?></td>
        <td align="center" valign="middle"><?=$linha_mob['category'];?></td>
        <td align="center" valign="middle"><?=$linha_mob['chance'];?></td>
        <td align="center" valign="middle"><form id="form17" name="form17" method="post" action="del_drop.php?id=<?=$linha_mob['itemId'];?>&idmob=<?=$linha['id'];?>">
          <input type="submit" name="button16" id="button16" value="Deletar" />
        </form></td>
      </tr>
    <?php
}
	?>
    </table>
    </td>
    </tr>
    </table></td>
    <td width="250" align="left" valign="top">
    <form id="form2" name="form2" method="post" action="add_drop.php?id=<?=$linha['id'];?>">
      <table width="300" border="0" cellspacing="1" cellpadding="1" bgcolor="#000000">
        <tr>
          <td colspan="2" align="center" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">
          ADD DROP!! / <a href="../ids/ids.php">Items</a></td>
        </tr>
        <tr>
          <td width="76" align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte">Item ID</td>
          <td width="217" align="left" valign="middle" bgcolor="#F1F1F1"><input type="text" name="itemId" id="itemId" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Min</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><input type="text" name="min" id="min" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte">Max</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><input type="text" name="max" id="max" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E8E8E8" id="tabelafonte2">Categoria</td>
          <td align="left" valign="middle" bgcolor="#E8E8E8"><input type="text" name="category" id="category" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte2">Chance</td>
          <td align="left" valign="middle" bgcolor="#F1F1F1"><input type="text" name="chance" id="chance" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#F1F1F1" id="tabelafonte3"><input type="submit" name="button" id="button" value="Enviar" /></td>
          <td align="left" valign="middle" bgcolor="#F1F1F1">&nbsp;</td>
        </tr>
    </table>
    </form>
    </td>
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
