<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rank</title>
<script language="Javascript">
function abrir(url) {
	window.open(url,'url','resizable=no,menubar=no,scrollbars=no,width=600,height=430');    
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
.style8 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; }
body {
	background-color: #EBEBEB;
}
-->
</style>
</head>

<body onload="MM_preloadImages('../imagens/2.png')">
<p align="center"><a href="www.l2haze.com" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" name="Image1" width="282" height="101" border="0" id="Image1" /></a><br>
<a href="../index.php">Voltar</a></p>
<p>
    <select class="style8" onChange="abrir(this.options[this.selectedIndex].value)">
      <option value selected>Selecione uma opção</option>
      <option value="rank.php?o=<?php echo base64_encode("pvpkills"); ?>">Top 10 PvP</option>
      <option value="rank.php?o=<?php echo base64_encode("pkkills"); ?>">Top 10 PK</option>
      <option value="rank.php?o=<?php echo base64_encode("level"); ?>">Top 10 Level</option>
      <option value="rank.php?o=<?php echo base64_encode("karma"); ?>">Top 10 Karma</option>
          </select>
</p>
</body>
</html>
