<?php
include "verifica.php";

include "config/config.php";

?>
<html>
<head>
<title>Rank (www.l2jnet.com.br)</title>
<style type="text/css">
<!--
.style5 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style8 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; }
body {
	background-image: url(../logo2.jpg);
}

-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
  <p><a href="" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" name="Image1" width="282" height="101" border="0"></a></p>
  <p align="left">&nbsp;</p>
</div>
<?
/////////////////////////////////////////////////
//                        //
//                 //
//	         //
/////////////////////////////////////////////////



$servidor = "localhost";
$usuario  = "root";
$senha    = "3427821";
$banco    = "l2acaopvp";


$conexao = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($banco, $conexao) or die(mysql_error());


$ordem = empty($_GET['o']) ? 'pvpkills' : base64_decode($_GET['o']);
$sql = mysql_query("SELECT * FROM characters ORDER BY ".$ordem." DESC LIMIT 10") or die(mysql_error());



$array = array('pvpkills' => 'PVP Kills',
			   'pkkills'  => 'PK Kills',
			   'level'    => 'Level',
			   'karma'    => 'Karma'
			  );
?>
<table width="100%" border="1" bordercolor="#EBEBEB">
  <tr bordercolor="#CCCCCC" bgcolor="#CCCCCC">
    <td width="8%"><span class="style5">Posi&ccedil;&atilde;o:</span></td>
    <td width="35%"><span class="style5">Nome do Char: </span></td>
    <td width="21%"><span class="style5"><?php echo $array[$ordem]; ?> </span></td>
    <td width="36%"><span class="style5">Clan:</span></td>
  </tr>
<?
$i = 1;
$cor = 0;
while($a = mysql_fetch_object($sql)) {
$cor = $cor + 1;
$bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';

if($i == 1) {
$img = "<img src=\"top1.gif\" alt=\"1&ordm; Lugar\">";
}elseif($i == 2) {
$img = "<img src=\"top2.gif\" alt=\"2&ordm; Lugar\">";
}elseif($i == 3) {
$img = "<img src=\"top3.gif\" alt=\"3&ordm; Lugar\">";
}else{
$img = $i."&ordm; lugar";
}

$clan = mysql_query("SELECT * FROM clan_data WHERE clan_id = '".$a->clanid."'") or die(mysql_error());
$clans = mysql_fetch_object($clan);


$clans->clan_name = empty($clans->clan_name) ? 'Sem info.' : $clans->clan_name;
?>
  <tr bordercolor="<?php echo $bg; ?>" bgcolor="<?php echo $bg; ?>" class="style8">
    <td><?php echo $img; ?></td>
    <td><?php echo $a->char_name; ?></td>
    <td><?php echo $a->$ordem; ?></td>
    <td><?php echo $clans->clan_name; ?></td>
  </tr>
<?
$i++;
}
?>
</table>
</body>
</html>