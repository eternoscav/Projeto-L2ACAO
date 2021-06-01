<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Items dos Players</title>
<link rel="stylesheet" type="text/css" href="../estilo.css"/>
</head>

<body>
<?php
include "../config.php";
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM characters WHERE obj_Id = '$id'");
$mostrar = mysql_fetch_array($sql);
?>
Items do char: <font color="#006600"><?=$mostrar['char_name'];?></font>
/ <a href="index.php?pesquisar=<?=$mostrar['char_name'];?>">Voltar</a>
<table width="720" border="0" cellspacing="1" cellpadding="1" bgcolor="#000000">
  <tr>
    <td align="center" valign="middle" bgcolor="#999999">Item ID</td>
    <td align="center" valign="middle" bgcolor="#999999">Nome Item</td>
    <td align="center" valign="middle" bgcolor="#999999">Quantidade</td>
    <td align="center" valign="middle" bgcolor="#999999">Enchant</td>
    <td align="center" valign="middle" bgcolor="#999999">Localizado</td>
    <td align="center" valign="middle" bgcolor="#999999">Del</td>
  </tr>
 <?php
$sql_items = mysql_query("SELECT * FROM items WHERE owner_id = '".$id."'");
while($linha = mysql_fetch_array($sql_items)){
  if($linha['enchant_level'] > $enchant){
	$bg   = "#FF0000";
    $font = "#FFFFFF";
  }else{
   $cor = $cor + 1;
     if($cor % 2 == 0) {
	   $bg = '#E7E7E7';
	   $font = "#00CC00";
     }else {
       $bg = '#F7F7F7';
       $font = "#00CC00";
   }
 }

?>

  <tr bgcolor="<? echo $bg; ?>">
    <td height="16" align="center" valign="middle"><?=$linha['item_id'];?></td>
    <td height="16" align="center" valign="middle">
<?php
		
$sql_armor = mysql_query("SELECT * FROM armor WHERE item_id = '".$linha[item_id]."'") or die(mysql_error());
$sql_weapon = mysql_query("SELECT * FROM weapon WHERE item_id = '".$linha[item_id]."'") or die(mysql_error());
$sql_etcitem = mysql_query("SELECT * FROM etcitem WHERE item_id = '".$linha[item_id]."'") or die(mysql_error());
		$mostrar_armor = mysql_fetch_array($sql_armor);
		$mostrar_weapons = mysql_fetch_array($sql_weapon);
		$mostrar_etcitem = mysql_fetch_array($sql_etcitem);
		echo $mostrar_armor['name'];
		echo $mostrar_weapons['name'];
		echo $mostrar_etcitem['name'];
?>
</td>
    <td height="16" align="center" valign="middle"><?=$linha['count'];?></td>
    <td height="16" align="center" valign="middle"><font color="<? echo $font; ?>"><?=$linha['enchant_level'];?></font></td>
    <td height="16" align="center" valign="middle"><?=$linha['loc'];?></td>
    <td align="center" valign="middle"><form id="form1" name="form1" method="post" action="deletar_items.php?id=<?=$linha['item_id'];?>&id_char=<? echo $id; ?>">
      <input type="submit" name="button" id="button" value="Deletar" />
    </form></td>
  </tr>
<?php
}
?>

</table>
<p>&nbsp;</p>
<p>
</p>
</body>
</html>
<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
