<?php
include "verifica.php";

include "config/config.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doadores</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(../logo2.jpg);
}
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
</head><body onload="MM_preloadImages('../imagens/2.png')">
<td width="200"><div align="center"><a href="" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" alt="" name="Image1" width="282" height="101" border="0" id="Image1" /></a></div>  DOADORES</td>
<blockquote>
  <p><a href="add_doador.php">Adicionar Doador</a> / <a href="index.php">Atualizar a Página</a> / <a href="../index.php">Voltar</a>
  </p>
</blockquote>
<table width="713" border="0" cellspacing="1" cellpadding="1" align="left">
  <tr>
    
    <td width="240" align="center" valign="top"><p>Doação Entregue
    <?php
    	include "config.php";
		$sql_entregue = mysql_query("SELECT * FROM doacao WHERE status = 2");
		while($linha1 = mysql_fetch_array($sql_entregue)){
	?>
    </p>
    <p><hr /></p>
     <p><a href="maisinfo.php?id=<?=$linha1['id'];?>"><?=$linha1['nome_char'];?></a> / <a href="add.php?id=<?=$linha1['id'];?>"><font color="#009900">+</font></a> / <a href="del.php?id=<?=$linha1['id'];?>">Deletar</a><br /></p>
      <? } ?>
    </td>
    <td width="240" align="center" valign="top"><p>Doação Pendente
      <?php
    	include "config.php";
		$sql_pen = mysql_query("SELECT * FROM doacao WHERE status = 1");
		while($linha2 = mysql_fetch_array($sql_pen)){
		
	 ?>
    </p>
    <p><hr /></p>
      <p><a href="maisinfo.php?id=<?=$linha2['id'];?>"><?=$linha2['nome_char'];?></a> / <a href="add.php?id=<?=$linha2['id'];?>"><font color="#009900">+</font></a> / <a href="entregue.php?id=<?=$linha2['id'];?>"><font color="#009900">Entregue</font></a><br /></p>
      <?
	  }
	  ?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>