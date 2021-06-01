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
-->
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

<body link="#0000FF" vlink="#0000FF" alink="#00FF00">
<p><img src="../imagens/logo.png" /></p>
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
	<li>Players ON: <a href="../players/players.php"><b><?php echo $conta_on; ?></b></a></li>
	<li>Players ban: <font color="#FF0000"><b><?php echo $conta_ban; ?></font></b></li>
	<li>Players jail: <font color="#FF0000"><b><?php echo $conta_jail; ?></font></b></li>
	<li>Menores de lvl 40: <b><?php echo $conta_menos; ?></b></li>
</ul>
<form method="post" action="?acao=del" name="cadastro">
<input type="radio" name="a" onClick="Exibe()" value="">
       <span class="style4">Borrar players menores de lvl 40 (ATENCION).</span><br>
      <input name="a" type="radio" onClick="Inibe()" value="" checked />
       <span class="style3">No borrar nada</span><br>
    <br>
<input type="submit" value = "Deletar -40" name="x" size="20" onload="Inibe()">
<body onLoad="Inibe()">
</form>
<p><br>
  <?php 
			if($_GET['acao'] == 'del'){
			$sql = "DELETE FROM characters WHERE level <= 40";
			$qr  = mysql_query($sql) or die(mysql_error());
			echo "Players Borrados.";
			
		}


?>
  <a href="index.php">Actualizar</a><br>
  <a href="../index.php">Atras</a></p>
</body>
</html>