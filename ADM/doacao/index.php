<?php
include "verifica.php";

include "config/config.php";

?>
<style type="text/css">
body {
	background-image: url(../logo2.jpg);
}
</style>
<?
session_start();

include("config.php");
$acao = addslashes(htmlentities($_GET['acao']));
$sacao = addslashes(htmlentities($_GET['sacao']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Doa&ccedil;&atilde;o</title>
<style type="text/css">
<!--
.style1 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {
	font-size: 11px;
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
}
.style5 {color: #FFFFFF; font-weight: bold; }
body {
	background-color: #EBEBEB;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onLoad="MM_preloadImages('../imagens/2.png')">
<div align="center">
  <p><a href="" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" alt="Doa&ccedil;&otilde;es" name="Image1" width="282" height="101" border="0" id="Image1" /></a><br>
  
</div>
<form id="form1" name="form1" method="get">
<input type="hidden" name="acao" value="buscar" />
<?
if($_GET['t'] == "weapon") {
$w = " selected";
}elseif($_GET['t'] == "armor") {
$a = " selected";
}else{
$i = " selected";
}
?>

  <table width="100%" border="0" class="style1">
    <tr>
      <td width="40%">Tipo de doa&ccedil;&atilde;o:</td>
      <td width="60%">
	    <select name="t" class="style1" id="t">
          <option value="etcitem"<?php echo $i; ?>>&Iacute;tem</option>
          <option value="weapon"<?php echo $w; ?>>Armas</option>
          <option value="armor"<?php echo $a; ?>>Roupas</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Nome do &Iacute;tem: </td>
      <td><input name="item" type="text" class="style1" id="item" value="<?php echo $_GET['item']; ?>" size="30" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" class="style1" value="Buscar" /></td>
    </tr>
  </table>
</form>
<a href="../index.php"><strong>Voltar</strong></a></p>
<p>
<hr />
</p>
<?


//BUSCANDO ITEM

if($acao == "buscar") {

$tabela = addslashes(htmlentities($_GET['t']));
$item   = addslashes(htmlentities($_GET['item']));

$sql    = mysql_query("SELECT * FROM ".$tabela." WHERE name LIKE '%".$item."' ORDER BY name") or die(mysql_error());
$contar = mysql_num_rows($sql);
$cor    = 0;


if($contar < 1) {
?>
<table width="100%" border="0" class="style1">
  <tr>
    <td align="center">Nenhum &iacute;tem encontrado com o nome de: <strong><?php echo $item; ?></strong></td>
  </tr>
</table>

<?
}else{
?>
<table width="100%" border="0">
  <tr bgcolor="#666666" class="style2">
    <td>&nbsp;</td>
    <td width="7%" align="center"><strong>ID &Iacute;tem</strong></td>
    <td width="53%" align="center"><strong>Nome &Iacute;tem: </strong></td>
    <td width="6%" align="center"><strong>Grade # :</strong></td>
    <td width="15%" align="center"><strong>Parte do Corpo: </strong></td>
    <td width="19%" align="center"><strong>A&ccedil;&atilde;o:</strong></td>
  </tr>
<?
while($c = mysql_fetch_array($sql)) {
$cor = $cor + 1;
if ($cor % 2 == 0) { 
$bg = '#F7F7F7'; 
} else { 
$bg = '#E7E7E7';
} 

$c['name'] = str_replace("_", "&nbsp;", $c['name']);


if(file_exists("items/5-".$c['item_id'].".gif")) {
   $img = "<img src=\"items/5-".$c['item_id'].".gif\" alt=\"".$c['name']."\">";
   }else{
   $img = "<img src=\"items/sem_img.gif\" alt=\"Sem imagem para este ítem.\">";
}


?>

  <tr class="style1" bgcolor="<?php echo $bg; ?>">
    <td><?php echo $img; ?></td>
    <td align="center"><?php echo $c['item_id']; ?></td>
    <td><?php echo ucwords(strtolower($c['name'])); ?></td>
    <td align="center"><?php echo ucwords($c['crystal_type']); ?></td>
    <td><?php echo $c['bodypart']; ?></td>
    <td><a href="?acao=doar&amp;t=<?php echo $tabela; ?>&amp;id=<?php echo $c['item_id']; ?>">Doar este &iacute;tem</a> </td>
  </tr>
<?
}
}
?>
</table>
<?
}

if($acao == "doar") {

$t  = addslashes(htmlentities($_GET['t']));
$id = intval($_GET['id']);

?>
<form method="get">
<input type="hidden" name="sacao" value="conta" />
<input type="hidden" name="acao" value="doar" />
<input type="hidden" name="t" value="<?php echo $t; ?>" />
<input type="hidden" name="id_item" value="<?php echo $id; ?>" />
<table width="100%" border="0" class="style1">
  <tr>
    <td width="32%" align="right">Nome do Char: </td>
    <td width="68%"><input name="conta" type="text" class="style1" id="conta" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="style1" value="Buscar" /></td>
  </tr>
</table>
</form>
<?
if($sacao == 'conta') {
	$t = addslashes(htmlentities($_GET['t']));
	$id_item = intval($_GET['id_item']);

	$conta = addslashes(htmlentities($_GET['conta']));
	$co = mysql_query("SELECT * FROM characters WHERE char_name = '".$conta."'") or die(mysql_error());
	$contar = mysql_num_rows($co);
	
	if($contar < 1) {
		echo "Nenhum char encontrado!";
		}else{
?>
<table width="100%" border="0" class="style1">
  <tr>
    <td colspan="3" align="center" bgcolor="#FFFFFF" class="style1"><hr /></td>
  </tr>
  <tr>
    <td colspan="3" align="center" bgcolor="#FFFFFF" class="style1">Listando char: <strong><?php echo $conta; ?></strong></td>
  </tr>
  <tr bgcolor="#666666">
    <td width="35%" class="style2"><span class="style5">Nome do char:</span></td>
    <td width="45%" class="style2"><span class="style5">Level do char:</span></td>
    <td width="20%" class="style2"><strong>A&ccedil;&atilde;o:</strong></td>
  </tr>
  <?
  $cor = 0;
  while($c = mysql_fetch_object($co)) {
  $cor = $cor + 1;
  $bg = $cor % 2 == 0 ? '#F7F7F7' : '#E7E7E7';

  ?>
  <tr bgcolor="<?php echo $bg; ?>">
    <td><?php echo $c->char_name; ?></td>
    <td><?php echo $c->level; ?></td>
    <td>
	  <a href="?acao=add&id_char=<?php echo $c->obj_Id; ?>&t=<?php echo $t; ?>&id_item=<?php echo $id_item; ?>">
	  Adicionar &Iacute;tem 
	  </a>
	</td>
  </tr>
  <?
  }
  ?>
</table>
<?
}
}
}

if($acao == 'add') {
	$id_char = intval($_GET['id_char']);
	$id_item = intval($_GET['id_item']);
	$t       = addslashes(htmlentities($_GET['t']));
?>
<form method="get">
<input type="hidden" name="sacao" value="addi" />
<input type="hidden" name="acao" value="add" />
<input type="hidden" name="id_char" value="<?php echo $id_char; ?>" />
<input type="hidden" name="id_item" value="<?php echo $id_item; ?>" />
<input type="hidden" name="t" value="<?php echo $t; ?>" />

<table width="100%" border="0" class="style1">
  <tr>
    <td width="36%">Valor do enchant do &iacute;tem: </td>
    <td width="64%"><input name="enchant" type="text" class="style1" id="enchant" /></td>
  </tr>
  <tr>
    <td>Quantidade (ate 9 itens por vez):</td>
    <td><input name="qtd" type="text" class="style1" id="qtd" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="style1" value="Doar" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<?

if($sacao == 'addi') {
	$id_char    = intval($_GET['id_char']);
	$id_item    = intval($_GET['id_item']);
	$t          = addslashes(htmlentities($_GET['t']));
	$enchant    = intval($_GET['enchant']);
	$qtd        = intval($_GET['qtd']);
	$caracteres = '0123456789';
	$numch      = 8;
	$oid   = '';
	for($i=0;$i<$numch;$i++) {
		$oid.=$caracteres[rand(0,strlen($caracteres)-1)];
	}
	
	
	for($i = 1; $i <= $qtd; $i++) {
	
	$qt = $qtd > 1 ? '1' : $qtd;

		mysql_query("INSERT INTO items (owner_id, object_id, item_id, count, enchant_level, loc)
					VALUES
					('".$id_char."', '".$oid.$i."', '".$id_item."', '".$qt."', '".$enchant."', 'INVENTORY')") or die(mysql_error());
	}
	
	echo "Item doado com sucesso!";
	
}	
}
?>
</body>


</html>
