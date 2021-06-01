<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rank</title>
<script language="Javascript">
function abrir(url) {
	window.open(url,'url','resizable=no,menubar=no,scrollbars=no,width=900,height=900');    
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

<body>
<p align="center"><img src="../imagens/logo.png" border="0" alt="Logo Stronger"><br><a href="../index.php">Atras</a></p>
<p>
    <select class="style8" onChange="abrir(this.options[this.selectedIndex].value)">
      <option value selected>Selecciona una opcion</option>
      <option value="rank.php?o=<?php echo base64_encode("pvpkills"); ?>">Top 10 PvP</option>
      <option value="rank.php?o=<?php echo base64_encode("pkkills"); ?>">Top 10 PK</option>
      <option value="rank.php?o=<?php echo base64_encode("level"); ?>">Top 10 Level</option>
      <option value="rank.php?o=<?php echo base64_encode("karma"); ?>">Top 10 Karma</option>
          </select>
</p>
</body>
</html>
