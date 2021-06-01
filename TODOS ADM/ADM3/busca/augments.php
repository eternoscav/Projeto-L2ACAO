<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Armas para Augment</title>
<link rel="stylesheet" type="text/css" href="../estilo.css"/>
</head>

<body>
<?php
include "../config.php";
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM characters WHERE obj_Id = '$id'");
$mostrar = mysql_fetch_array($sql);
?>
Armas do char: <font color="#006600"><?=$mostrar['char_name'];?></font>
/ <a href="index.php?pesquisar=<?=$mostrar['char_name'];?>">Voltar</a>
<table width="720" border="0" cellspacing="1" cellpadding="1" bgcolor="#000000">
  <tr>
    <td align="center" valign="middle" bgcolor="#999999">Item ID</td>
    <td align="center" valign="middle" bgcolor="#999999">Arma</td>
    <td align="center" valign="middle" bgcolor="#999999">Quantidade</td>
    <td align="center" valign="middle" bgcolor="#999999">Enchant</td>
    <td align="center" valign="middle" bgcolor="#999999">Localizado</td>
    <td align="center" valign="middle" bgcolor="#999999">Add Augment</td>
  </tr>
<?php
$sql_items = mysql_query("SELECT * FROM items WHERE owner_id = '".$id."' ORDER BY item_id");
while($linha = mysql_fetch_array($sql_items)){
$cor = $cor + 1;
$bg = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
 ?>
  <tr bgcolor="<? echo $bg; ?>">
    <td height="16" align="center" valign="middle"><?=$linha['item_id'];?></td>
    <td height="16" align="center" valign="middle">
    <?php
		
$sql_weapon = mysql_query("SELECT * FROM weapon WHERE item_id = '".$linha[item_id]."'") or die(mysql_error());
	$mostrar_weapons = mysql_fetch_array($sql_weapon);
	$nome = $mostrar_weapons['name'];
	if($nome == ''){
		$msg = "NÃ£o Pode ser Augmentado";
		echo '<font color="#FF0000">'.$msg.'</font>';
	}else{
		echo '<font color="#006600">'.$nome.'</font>';
	}
		
?>

    </td>
    <td height="16" align="center" valign="middle"><?=$linha['count'];?></td>
    <td height="16" align="center" valign="middle">
	<?php
		if($linha['enchant_level'] > 80){
			echo '<font color="#FF0000">'.$linha['enchant_level'].'</font>';	
		}else{
			echo '<font color="#006600">'.$linha['enchant_level'].'</font>';	
		}
	?>
    </td>
    <td height="16" align="center" valign="middle"><?=$linha['loc'];?></td>
    <td align="center" valign="middle">
    <?php
	if($nome == ''){
		$msg = "NÃ£o Pode ser Augmentado";
		echo '<font color="#FF0000">'.$msg.'</font>';
	}else{
	?>
    <form id="form1" name="form1" method="post" action="add_augment.php?id=<?=$linha['item_id'];?>&id_char=<? echo $id; ?>">
      <label>
        <select name="augment" id="augment">
          <option value="3135">Shield(P.Def)</option>
          <option value="3125">Battle Roar(HP)</option>
          <option value="3141">Focus(Critical)</option>
          <option value="3134">Duel Might(P.Atk)</option>
          <option value="3133">Empower(M.Atk)</option>
          <option value="3130">CP</option>
          <option value="3140">Accuracy(Accyracy)</option>
          <option value="3132" selected="selected">Might(P.Atk)</option>
          <option value="3139">Dodge(Evasion)</option>
          <option value="3136">(M.Def)</option>
          <option value="3128">Bless Blody(HP)</option>
          <option value="3142">(Ctr. Mage)</option>
        </select>
      </label>
      <input type="submit" name="button" id="button" value="Add" />
    </form>
    <?php
	}
	?>
    </td>
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
