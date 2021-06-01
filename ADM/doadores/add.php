<?php
include "verifica.php";

include "config/config.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add + doação</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
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
<p>Adicionar Novo Item a doação | <a href="index.php">Voltar</a></p>

<table width="756" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="243" align="left" valign="top"><a href="" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" name="Image1" width="282" height="101" border="0" id="Image1" /></a></td>
    <td width="506" align="center" valign="middle">
    <? $id = $_GET['id']; ?>
    <form id="form1" name="form1" method="post" action="atualizar_doador.php?id=<? echo $id; ?>">
    <?
		include "config.php";
		$sql = mysql_query("SELECT * FROM doacao WHERE id = '$id'");
		while($linha = mysql_fetch_array($sql)){
				
		
	?>
    <table width="500" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td align="left" valign="top">Nome</td>
        <td>
          <input name="nome" type="text" id="nome" value="<?=$linha['nome'];?>" />
        </td>
      </tr>
      <tr>
        <td align="left" valign="top">Sobrenome</td>
        <td><input name="sobrenome" type="text" id="sobrenome" value="<?=$linha['sobrenome'];?>" /></td>
      </tr>
      <tr>
        <td align="left" valign="top">Nome Char</td>
        <td><input name="nome_char" type="text" id="nome_char" value="<?=$linha['nome_char'];?>" /></td>
      </tr>
      <tr>
        <td align="left" valign="top">Valor</td>
        <td><input name="valor" type="text" id="valor" value="<?=$linha['valor'];?>" /></td>
      </tr>
      <tr>
        <td align="left" valign="top">Items</td>
        <td><textarea name="items" id="items" cols="25" rows="5"><?=$linha['items'];?></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="button" id="button" value="Enviar" /></td>
        <td><input type="reset" name="button2" id="button2" value="Refazer" /></td>
      </tr>
    </table>
    <? } ?>
    </form>
    
    </td>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>