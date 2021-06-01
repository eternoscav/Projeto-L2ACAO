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
//Script cirado por _Dudu_1533



$servidor = 'localhost';
$usuario  = 'root';
$senha    = '3427821';
$db       = 'l2acaopvp';

$con = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());
?>
<html>
<head>
<title>Listagem de player Heroes</title>
<style type="text/css">
<!--
.style5 {font-size: 15px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style8 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style4 {font-size: 17px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }

body {
	background-color: #EBEBEB;
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


<p align="center"><a href="www.l2haze.com" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" alt="Heroes" name="Image1" width="282" height="101" border="0"></a><br>
<a href="../index.php">Voltar</a></p>
<table width="100% border="0" class="style4">
  <tr>
    <td align="center">Lista de Candidatos a HEROES do servidor</td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0">
  <tr bgcolor="#CCCCCC" class="style5" align="center" height="30">
    <td>Nome char:</td>
    <td>Level:</td>
    <td>Classe:</td>
    <td>Clan:</td>
    <td>Lutas Geral:</td>
    <td>Conta:</td>
    <td>Lutas geral:</td>
    <td>Lutas ganhas:</td>
    <td>Hero(1 = sim):</td>
    <td>Lutas empatadas:</td>
  </tr>
<?

$sql = mysql_query("SELECT * FROM characters") or die(mysql_error());
$cor = 0;
while($c = mysql_fetch_array($sql)) {
      $cor = $cor + 1;
      $bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';

      $h = mysql_query("SELECT * FROM characters WHERE char_name = '".$c['char_name']."'") or die(mysql_error());
      $n = mysql_fetch_array($h);
      $l = mysql_query("SELECT * FROM class_list WHERE id = '".$n['base_class']."'") or die(mysql_error());
      $g = mysql_fetch_array($l);
      $i = mysql_query("SELECT * FROM clan_data WHERE clan_id = '".$n['clanid']."'") or die(mysql_error());
      $j = mysql_fetch_array($i);
      $k = mysql_query("SELECT * FROM olympiad_nobles WHERE olympiad_points = '".$c['competitions_done']."'") or             die(mysql_error()); $w = mysql_fetch_array($k);
      $g['class_name'] = explode("_", $g['class_name']);
      $j['clan_name'] = empty($n['clanid']) ? 'Sem Clan.' :      $j['clan_name'];
      $j['ally_name'] = empty($j['ally_id']) ? 'Sem Alliance.' : $j['ally_name'];
?>
  
  <tr id="sub" bgcolor="#ffffff" onMouseOver="MM_effectHighlight(this, 1000, '#FBF3DD', '#FEFBF3', '#ffffff', false)">
    <td><?php echo $n['char_name']; ?></td>
    <td><?php echo $n['level']; ?></td>
    <td><?php echo ucwords($g['class_name'][1]); ?></td>
    <td><?php echo $j['clan_name']; ?></td>
    <td><?php echo $c['olympiad_points']; ?></td>
    <td><?php echo $c['account_name']; ?></td>
    <td><?php echo $c['account_name']; ?></td>
    <td><?php echo $c['account_name']; ?></td>
    <td><?php echo $c['hero']; ?></td>
    <td><?php echo $c['competitions_drawn']; ?></td>
    <td><?php echo $c['hero']; ?></td>
    </tr>
<?
}
?>
</table>
</p>
</body>