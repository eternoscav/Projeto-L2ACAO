<?
include("config.php");

function gerar($t) {

	$caracteres = '0123456789';
	$codigo_a   = '';
	for($i=0; $i<$t; $i++) {
		$codigo_a .= $caracteres[rand(0,strlen($caracteres)-1)];
	}
	
	return $codigo_a;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Seu servidor de Lineage II</title>
<script>
function mudar(string) {
	var t = document.getElementById(string).value='';
}


function div(div) {
	var ob = document.getElementById(div);
	if(ob.style.display == 'none') {
		ob.style.display = 'block';
		}else{
		ob.style.display = 'none';
	}
}
</script>
<style type="text/css">
<!--
.style1 {
	font-size: 13px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #333333;
}
.style2 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #999999;
}
a:link {
	text-decoration: none;
	color: #666666;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: underline;
	color: #666666;
}
a:active {
	text-decoration: none;
	color: #666666;
}
-->
</style>
</head>

<body>
<table width="100%" border="0">
  <tr bgcolor="#CCCCCC" class="style1">
    <td align="center">Sistema de AIOx L2 RecT ~> React Teste! <~</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?
$act = $_GET['act']; 

if($act == 'abx'){
$sql = mysql_query("SELECT * FROM characters ORDER BY  char_name") or die(mysql_error());
?>


<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" class="style2">
    <tr>
      <td width="21%">Selecione o char:</td>
      <td colspan="3"><select name="char" class="style2">
          <?
	while($c = mysql_fetch_array($sql)) {
	?>
          <option value="<?php echo $c['charId']; ?>"><?php echo $c['char_name']; ?></option>
          <?
	}
	?>
        </select>      </td>
    </tr>
    <tr>
    </tr>
    <tr>
        </div>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input name="inserir" type="submit" class="style2" id="inserir" value="Inserir AIO" /></td>
    </tr>
  </table>
</form>
<?
}

if(@$_POST['inserir']) {

$char    = $_POST['char'];
$level   = intval($_POST['level']);
$dual    = $_POST['dual'];
$enchant = intval($_POST['enchant']);

$chars = mysql_query("SELECT * FROM characters WHERE charId = '".$char."'") or die(mysql_error());
$ch = mysql_fetch_array($chars);

if($dual == 'sim') {

$fi = file('aio.txt');
foreach($fi as $f) {

$f = str_replace('".$char."', ''.$char.'', $f);
$f = str_replace('".$level."', ''.$level.'', $f);
mysql_query($f) or die(mysql_error());
}

$query = mysql_query("INSERT INTO items (charId, owner_id, item_id, count, enchant_level, loc, loc_data, price_sell, price_buy, custom_type1, custom_type2) VALUES ('".gerar(9)."', ".$char.", 6580, 1, '".$enchant."', 'INVENTORY', 0, 0, 0, 0, 0)") or die(mysql_error());

}else{

$fi = file('aio.txt');
foreach($fi as $f) {

$f = str_replace('".$char."', ''.$_POST['char'].'', $f);
$f = str_replace('".$level."', ''.$level.'', $f);
$query = mysql_query($f) or die(mysql_error());
}

}

if($query) { 

echo "<script> alert('AIO adicionado com sucesso para o char ".$ch['char_name']."'); </script>";
echo "<script> window.location='index.php'; </script>";

}else{
echo "<script> alert('N�o foi poss�vel adicionar AIO para o char ".$ch['char_name']."'); </script>";
echo "<script> window.location='index.php'; </script>";

}

}

if(empty($act)) {
?>
<table width="100%" border="0">
  <tr>
    <td><a href="?act=abx">Inserir AIO para um char.</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?
}
?>
</body>
</html>
