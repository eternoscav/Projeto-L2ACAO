<?

/////////////////////////////////////////////////
//            www.eliteadmins.es               //
//         Script feito  por _Rayder           //
//			                       //
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
-->
</style>
</head>

<body>
<p align="center"><img src="../imagens/logo.png" border="0" alt="Logo Stronger"><br><a href="../index.php">Atras</a></p>
<table width="100%" border="0">
  <tr class="style1">
    <td align="center">Players ONLINE: <strong><?php echo $contar; ?></strong></td>
  </tr>
</table>

<?
if($contar > 0) {
?>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr class="style10">
    <td width="32%" align="center" bgcolor="#666666"><strong>Nombre:</strong></td>
    <td width="32%" align="center" bgcolor="#666666"><strong>Level:</strong></td>
    <td width="36%" align="center" bgcolor="#666666"><strong>Clase:</strong></td>
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
