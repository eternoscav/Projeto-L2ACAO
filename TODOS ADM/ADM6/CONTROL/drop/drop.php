<?
$servidor = "localhost";
$usuario  = "root";
$senha    = "3427821";
$banco    = "l2acaopvp";

$conexao = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($banco, $conexao) or die(mysql_error());

//Coloque aqui o rate de drop do seu server.
$rate = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Calculadora de Drops</title>
<script>
function valida() {
	var objeto = document.getElementById('item');
	if(objeto.value == "") {
		alert('Digite o nome do Item!!!\nWrite the item\'s name!!!');
		objeto.focus();
		return false;
	}
}
</script>
<style type="text/css">
<!--
.style1 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	background-color: #EBEBEB;
}
-->
</style>
</head>

<body>
<div align="center"><img src="../imagens/logo.png" border="0" alt="Logo Strogner"><br>
<a href="../index.php">Atras</a>
</div>
<p>
  <?
if($_GET['tipo'] == 'weapon') {
$sel1 = ' selected';
}elseif($_GET['tipo'] == 'armor') {
$sel2 = ' selected';
}else{
$sel3 = ' selected';
}
?>
</p>
<form action="" method="get" onsubmit="return valida()">
<input type="hidden" name="act" value="buscar" />
  <table width="100%" border="1" bordercolor="#000000" class="style1">
    <tr>
      <td width="47%" align="right" bordercolor="#FFFFFF"><strong>Nombre del item:</strong></td>
      <td width="53%" bordercolor="#FFFFFF"><input name="item" type="text" class="style1" id="item" value="<?php echo $_GET['item']; ?>" /></td>
    </tr>
    <tr>
      <td align="right" bordercolor="#FFFFFF"><strong>Tipo de item: </strong></td>
      <td bordercolor="#FFFFFF"><select name="tipo" class="style1" id="tipo">
        <option value="weapon"<?php echo $sel1; ?>>Armas</option>
        <option value="armor"<?php echo $sel2; ?>>Armadura</option>
        <option value="etcitem"<?php echo $sel3; ?>>Items</option>
      </select>
      </td>
    </tr>
    <tr>
      <td align="right" bordercolor="#FFFFFF">&nbsp;</td>
      <td bordercolor="#FFFFFF"><input type="submit" class="style1" value="Buscar" /></td>
    </tr>
  </table>
</form>

<?

if($_GET['act'] == 'buscar') {

$item = $_GET['item'];
$tipo = $_GET['tipo'];
?>

<?
$busca = mysql_query("SELECT * FROM ".$tipo." WHERE name LIKE '%".$item."%' ORDER BY crystal_type DESC") or die(mysql_error());
$contar = mysql_num_rows($busca);

if($contar == 0) {
?>


<table width="100%" class="style1" style="border:1px solid #FF0000;padding:10px;">
  <tr>
    <td align="center" bordercolor="#FF0000" bgcolor="#FFF4F4"><strong>No se ha encontrado ningun item con ese nombre en esta categoria.</strong></td>
  </tr>
</table>


<?
}else{
?>
<table width="100%" border="1" bordercolor="#FFFFFF" class="style1">
<?
while($b2 = mysql_fetch_array($busca)) {

if(file_exists("imagens/items/5-".$b2['item_id'].".gif") == TRUE) {
   $img = "imagens/items/5-".$b2['item_id'].".gif";
   }else{
   $img = "imagens/sem_img.gif";
}


?>
  <tr bordercolor="#CCCCCC" bgcolor="#CCCCCC">
    <td width="39%" height="28" bgcolor="#CCCCCC">Nombre del item: <strong><?php echo ucwords($b2['name']); ?></strong></td>
    <td height="28">Grado: <strong><?php echo ucwords($b2['crystal_type']); ?></strong></td>
    <td height="28">Parte del cuerpo: <strong><?php echo ucwords($b2['bodypart']); ?></strong></td>
    <td height="28" colspan="4">ID del item: <strong><?php echo $b2['item_id']; ?></strong></td>
  </tr>
<?
$drop = mysql_query("SELECT * FROM droplist WHERE itemId = '".$b2['item_id']."' ORDER BY chance DESC") or die(mysql_error());
$contar = mysql_num_rows($drop);

if($contar < 1) {
?>
  <tr bordercolor="#FF0000" bgcolor="#FFFFFF">
    <td colspan="7" bordercolor="#FF0000" bgcolor="#FFF4F4"><strong>Este item no se dropea.&nbsp;&nbsp;&nbsp;(This item do not drop.) </strong></td>
  </tr>
<?
}else{
$cor = 0;
while($drops = mysql_fetch_array($drop)) {
$cor = $cor + 1;

$bg = $cor % 2 == 0 ? '#F5F5F5' : '#E9E9E9';

$npc = mysql_query("SELECT * FROM npc WHERE id = '".$drops['mobId']."'") or die(mysql_error());
$np = mysql_fetch_array($npc);

$np['hp'] = number_format($np['hp']);
$np['hp'] = str_replace(",", ".", $np['hp']);

$drops['chance'] = number_format($drops['chance'] * $rate / 100);
$drops['category'] = $drops['category'] == '-1' ? 'Spoill' : $drops['category'];
?>
  <tr bordercolor="#FFFFFF" bgcolor="<?php echo $bg; ?>">
    <td height="20">Nome NPC: <strong><?php echo $np['name']; ?></strong></td>
    <td width="10%" height="20">Level: <strong><?php echo $np['level']; ?></strong></td>
    <td width="16%" height="20">Chance: <strong><?php echo round($drops['chance']); ?> %</strong></td>
    <td width="12%" height="20">HP: <strong><?php echo $np['hp']; ?></strong></td>
    <td width="10%" height="20">ID: <strong><?php echo $np['id']; ?></strong></td>
    <td width="13%">Categoria: <strong><?php echo $drops['category']; ?></strong></td>
  </tr>
<?
}
}
?>
  <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <td colspan="7">
	  <hr />	</td>
  </tr>
<?
} 
?>
</table>
<?
}
}
?>
<table width="100%" border="0">
  <tr>
    <td><a href="#top" class="style1"><strong>TArriva</strong></a></td>
  </tr>
</table>

</body>
</html>