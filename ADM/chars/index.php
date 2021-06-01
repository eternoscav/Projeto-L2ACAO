<?php
include "verifica.php";

include "config/config.php";

?>
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

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
body {
	background-image: url(../logo.jpg);
}
-->
</style>

</head>

<body link="#0000FF" vlink="#0000FF" alink="#00FF00">
<p><img src="../imagens/1.png" alt="Deletar Chars Abaixo do lvl 40" name="Image1" width="282" height="101" border="0" id="Image1" /></p>
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
	$sql3       = mysql_query("SELECT * FROM characters WHERE punish_level = 1")or die(mysql_error());
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