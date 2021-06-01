<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entrega de Doacao!</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#tabela {
	background: URL('items/tabela_fatia.gif') repeat-x;
}
#tabela2 {
	background: URL('items/tabela_titulo.gif') repeat-x;
}
-->
</style>
</head>

<body>
<p><a href="index.php">Voltar</a></p>
<hr>
<p>Pesquisar Items</p>
<?php
if($_GET['tabela'] == "weapon") {
$w = " selected";
}elseif($_GET['tabela'] == "armor") {
$a = " selected";
}else{
$i = " selected";
}
$char = $_GET['id'];
?>
<form id="form1" name="form1" method="get">
  <center>
  <span class="style7"><span id="texto">Buscar Item:</span></span>
  <label>
  <input name="pesquisar" type="text" id="pesquisar" size="25" maxlength="18" />
  </label>
  <label>
	    <select name="tabela" class="style1" id="tabela1">
          <option value="etcitem"<?php echo $i; ?>>&Iacute;tem</option>
          <option value="weapon"<?php echo $w; ?>>Armas</option>
          <option value="armor"<?php echo $a; ?>>Roupas</option>
  </select>
  </label>
  <label>
  <input type="submit" name="submit" id="submit" value="Buscar" />
  </label>
  <label>
  ID do Char: <input type="text" name="id" size="8" id="submit" value="<? echo $char; ?>" />
  </label>
  </center>
</form>
<?php
$pesquisar = $_GET['pesquisar'];
$tabela    = $_GET['tabela'];

if($pesquisar == ''){
	exit();
}

include "../config.php";

$sql    = mysql_query("SELECT * FROM ".$tabela." WHERE name LIKE '%".$pesquisar."%' ORDER BY item_id") or die(mysql_error());
$contar = mysql_num_rows($sql);
?>
<?php
if($contar < 1){
?>
<center><font color="#000000">Sua pesquisa não encontrou nada!</font></center>
<?php
exit();
}
?>
<p id="pesquisa"><center>Você esta pesquisando por: <font color="#000000"><i><b><? echo $pesquisar; ?></i></b></font> / Achou: <font color="#000000"><i><b><? echo $contar; ?></i></b></font> Resultado(s).</center></p>
<table border="0" width="70%" align="center" bgcolor="#000000" cellspacing="1" cellpadding="1">
  <!-- Linha dos titulos -->
  <tr height="25" id="tabela">
    <td align="center">Imagem</td>
	<td align="center">Nome</td>
	<td align="center">Item ID</td>
	<td align="center">Ação</td>
  </tr>
  <!-- Linha dos items -->
<?php
while($linha = mysql_fetch_array($sql)){
$cor = $cor + 1;
if($cor % 2 == 0) {
	$bg = '#E7E7E7';
}else {
	$bg = '#F7F7F7';
}
?>
  <tr bgcolor="<?php echo $bg; ?>">
    <td align="center" valign="center">
		<?php
			if(file_exists("items/5-".$linha['item_id'].".gif")) {
				$img = "<img src=\"items/5-".$linha['item_id'].".gif\" alt=\"".$linha['name']."\">";
				echo $img;
			}else{
				$img = "<img src=\"items/sem_img.gif\" alt=\"Sem imagem para este ítem.\">";
				echo $img;
			}
		?>
	</td>
	<td><b><?=$linha['name']?></b></td>
	<td align="center"><?=$linha['item_id']?></td>
	<td align="center">
	  <form method="POST" action="add_doacao.php?id=<? echo $char; ?>&id_item=<?=$linha['item_id']?>">
	    Enchant: <input type="text" name="enchant" size="3"> - Qnt: <input type="text" name="quantidade" size="3"> <input type="submit" name="submit" value="Doar">
	  </form>
	</td>
  </tr>
<?
}
?>
</table>
</body>
</html>
<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
