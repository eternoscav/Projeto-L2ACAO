<?

/////////////////////////////////////////////////
//            www.portal1533.com.br            //
//         Script feito  por _Dudu_1533        //
//			  dudu1533_php@hotmail.com         //
/////////////////////////////////////////////////

$servidor = "localhost";
$usuario  = "root";
$senha    = "3427821";
$banco    = "l2acaopvp";

$conexao = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($banco, $conexao) or die(mysql_error());

$sql = mysql_query("SELECT * FROM characters WHERE online = 1 ORDER BY char_name") or die(mysql_error());
$contar = mysql_num_rows($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Players Online</title>
<style type="text/css">
<!--
.style1 {
	font-size: 13px;
	font-family: Arial, Helvetica, sans-serif;
}
.style10 {
	font-size: 14px; 
	font-family: Arial, Helvetica, sans-serif; 
	color: #FFFFFF;
}
.style15 {
	font-size: 12px; 
	font-family: Arial, Helvetica, sans-serif; 
}
.style16 {
	color: #FF0000;
	font-weight: bold;
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

<body onload="MM_preloadImages('../imagens/2.png')">
<p align="center"><a href="www.l2haze.com" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" alt="Players Online" name="Image1" width="282" height="101" border="0" id="Image1" /></a><br>
<a href="../index.php"><strong>Voltar</strong></a></p>
<table width="100%" border="0">
  <tr class="style1">
    <td align="center"><span class="style16">Players ONLINE:</span> <strong><?php echo $contar; ?></strong></td>
  </tr>
</table>

<?
if($contar > 0) {
?>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr class="style10">
    <td width="32%" align="center" bgcolor="#666666"><strong>Nome:</strong></td>
    <td width="32%" align="center" bgcolor="#666666"><strong>Level:</strong></td>
    <td width="36%" align="center" bgcolor="#666666"><strong>Classe:</strong></td>
  </tr>
<?
$cor = 0;
while($l = mysql_fetch_object($sql)) {
	$cor = $cor + 1;
	$bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
	$c = mysql_query("SELECT * FROM class_list WHERE id = '" . $l->classid . "'") or die(mysql_error());
	$cs = mysql_fetch_object($c);
	
	$cs->class_name = explode("_", $cs->class_name);
?>
  <tr class="style15" bgcolor="<?php echo $bg; ?>">
    <td align="center"><?php echo $l->char_name; ?></td>
    <td align="center"><?php echo $l->level; ?></td>
    <td align="center"><?php echo $cs->class_name[1]; ?></td>
  </tr>
<?
}
?>
</table>
<?
}
?>
</body>
</html>
