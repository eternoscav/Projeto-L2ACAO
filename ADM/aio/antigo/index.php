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
<title>L2jnet Servidores</title>
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

<body onload="MM_preloadImages('../../imagens/2.png')">
<table width="100%" border="0">
  <tr bgcolor="#CCCCCC" class="style1">
    <td align="center"><a href="" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../../imagens/2.png',1)"><img src="../../imagens/1.png" alt="Aio" name="Image1" width="282" height="101" border="0" id="Image1" /></a></td>
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
          <option value="<?php echo $c['obj_Id']; ?>"><?php echo $c['char_name']; ?></option>
          <?
	}
	?>
        </select>      </td>
    </tr>
    <tr>
      <td>Alterar level do char para: </td>
      <td colspan="3"><input name="level" type="text" class="style2" id="level" value="78" /></td>
    </tr>
    <tr>
      <td height="23">Inserir Dual para o char? </td>
      <td width="11%" height="23">
      <input name="dual" id="dual" type="radio" class="style2" value="sim" checked="checked" onclick="javascript:div('enchant');">
      Sim</td>
      <td width="10%" height="23"><input name="dual" id="dual" type="radio" class="style2" value="nao" onclick="javascript:div('enchant');">
      N&atilde;o</td>
      <td width="58%" height="23">
      <div id="enchant" style="display:block">
      <input name="enchant" type="text" class="style2" id="enchant" onmouseup="javascript:mudar('enchant');" value="Escreva aqui o enchant da arma." size="40"/> 
        EX: <strong>10</strong>
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

$chars = mysql_query("SELECT * FROM characters WHERE obj_Id = '".$char."'") or die(mysql_error());
$ch = mysql_fetch_array($chars);

if($dual == 'sim') {

$fi = file('aio.txt');
foreach($fi as $f) {

$f = str_replace('".$char."', ''.$char.'', $f);
$f = str_replace('".$level."', ''.$level.'', $f);
mysql_query($f) or die(mysql_error());
}

$query = mysql_query("INSERT INTO items (object_id, owner_id, item_id, count, enchant_level, loc, loc_data, price_sell, price_buy, custom_type1, custom_type2) VALUES ('".gerar(9)."', ".$char.", 6580, 1, '".$enchant."', 'INVENTORY', 0, 0, 0, 0, 0)") or die(mysql_error());

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
echo "<script> window.location='indexx.php'; </script>";

}else{
echo "<script> alert('Não foi possível adicionar AIO para o char ".$ch['char_name']."'); </script>";
echo "<script> window.location='indexx.php'; </script>";

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
