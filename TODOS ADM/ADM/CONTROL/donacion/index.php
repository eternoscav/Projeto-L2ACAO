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
<title>Sistema de Donacion</title>
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
</head>

<body>
<div align="center">
  <p><img src="../imagens/logo.png" border="0" alt="Logo Stronger"><br>
  <a href="../index.php">Atras</a></p>
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
      <td width="40%">Tipo de donacion</td>
      <td width="60%">
	    <select name="t" class="style1" id="t">
          <option value="etcitem"<?php echo $i; ?>>Item</option>
          <option value="weapon"<?php echo $w; ?>>Armas</option>
          <option value="armor"<?php echo $a; ?>>Armaduras</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Nombre del item: </td>
      <td><input name="item" type="text" class="style1" id="item" value="<?php echo $_GET['item']; ?>" size="30" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" class="style1" value="Buscar" /></td>
    </tr>
  </table>
</form>
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
    <td align="center">No se ha encontrado ningun item con el nombre de: <strong><?php echo $item; ?></strong></td>
  </tr>
</table>

<?
}else{
?>
<table width="100%" border="0">
  <tr bgcolor="#666666" class="style2">
    <td>&nbsp;</td>
    <td width="7%" align="center"><strong>ID &Iacute;tem</strong></td>
    <td width="53%" align="center"><strong>Nombre &Iacute;tem: </strong></td>
    <td width="6%" align="center"><strong>Grado # :</strong></td>
    <td width="15%" align="center"><strong>Parte del cuerpo: </strong></td>
    <td width="19%" align="center"><strong>Accion:</strong></td>
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
    <td><a href="?acao=doar&amp;t=<?php echo $tabela; ?>&amp;id=<?php echo $c['item_id']; ?>">Donar este item</a> </td>
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
    <td width="32%" align="right">Nombre del Player: </td>
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
		echo "Player no encontrado!";
		}else{
?>
<table width="100%" border="0" class="style1">
  <tr>
    <td colspan="3" align="center" bgcolor="#FFFFFF" class="style1"><hr /></td>
  </tr>
  <tr>
    <td colspan="3" align="center" bgcolor="#FFFFFF" class="style1">Listado de Players: <strong><?php echo $conta; ?></strong></td>
  </tr>
  <tr bgcolor="#666666">
    <td width="35%" class="style2"><span class="style5">Nombre del Player:</span></td>
    <td width="45%" class="style2"><span class="style5">Level del Player:</span></td>
    <td width="20%" class="style2"><strong>Accion:</strong></td>
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
	  Entregar &Iacute;tem 
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
    <td width="36%">Enchante del item: </td>
    <td width="64%"><input name="enchant" type="text" class="style1" id="enchant" /></td>
  </tr>
  <tr>
    <td>Cantidad (Maximo 9):</td>
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
	
	echo "Item donado correctamente!";
	
}	
}
?>
</body>
</html>
