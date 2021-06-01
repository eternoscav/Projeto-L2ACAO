<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHAR</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
<script Language="JavaScript">
<!--
function Inibe(){
      document.cadastro.x.disabled = true;
   }
   function Exibe() {
      document.cadastro.x.disabled = false;
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
//-->
</script>
<style type="text/css">
<!--
a:link {
	color: #00F;
}
a:visited {
	color: #00F;
}
a:hover {
	color: #F00;
}
a:active {
	color: #0F0;
}
-->
</style>

</head>

<body link="#0000FF" vlink="#0000FF" alink="#00FF00" onload="MM_preloadImages('../imagens/2.png')">
<p><a href="www.l2haze.com" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" alt="Deletar Chars Abaixo do lvl 40" name="Image1" width="282" height="101" border="0" id="Image1" /></a></p>
<?php 
	include "config.php";
//Chars total
	$sql1        = mysql_query("SELECT * FROM characters")or die(mysql_error());
	$conta_todos = mysql_num_rows($sql1);

//Chars Banidos
	$sql2       = mysql_query("SELECT * FROM characters WHERE accesslevel < 0")or die(mysql_error());
	$conta_ban  = mysql_num_rows($sql2);

//Conexao total de char on
	$sql4       = mysql_query("SELECT * FROM characters WHERE online = 1")or die(mysql_error());
	$conta_on   = mysql_num_rows($sql4);

//Chars na jail
	$sql3       = mysql_query("SELECT * FROM characters WHERE in_jail = 1")or die(mysql_error());
	$conta_jail = mysql_num_rows($sql3);	

// Contagem level meno igual a 40
	$sql = "SELECT * FROM characters WHERE level <= 40";
	$qr  = mysql_query($sql) or die(mysql_error());
	$conta_menos = mysql_num_rows($qr);
?>
<ul>
	<li>Total: <b><?php echo $conta_todos; ?></b><li>
	<li>Chars ON: <a href="../players/players.php"><b><?php echo $conta_on; ?></b></a></li>
	<li>Chars ban: <font color="#FF0000"><b><?php echo $conta_ban; ?></font></b></li>
	<li>Chars jail: <font color="#FF0000"><b><?php echo $conta_jail; ?></font></b></li>
	<li>Level 40 Menos: <b><?php echo $conta_menos; ?></b></li>
</ul>
<form method="post" action="?acao=del" name="cadastro">
<input type="radio" name="a" onClick="Exibe()" value="">
       <span class="style4">Sim, estou certo.</span><br>
      <input name="a" type="radio" onClick="Inibe()" value="" checked />
       <span class="style3">Nao estou certo.</span><br>
    <br>
<input type="submit" value = "Deletar -40" name="x" size="20" onload="Inibe()">
<body onLoad="Inibe()">
</form>
<p><br>
  <?php 
			if($_GET['acao'] == 'del'){
			$sql = "DELETE FROM characters WHERE level <= 40";
			$qr  = mysql_query($sql) or die(mysql_error());
			echo "Char deletados.";
			
		}


?>
  <a href="index.php">Atualizar</a><br>
  <a href="../index.php">Voltar</a></p>
</body>
</html>