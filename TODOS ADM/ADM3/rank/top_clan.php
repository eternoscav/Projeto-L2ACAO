<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clan</title>
<link rel="stylesheet" type="text/css" href="../estilo.css"/>
</head>
<body>
<?php
	include "../config.php";
	$sql = mysql_query("SELECT * FROM clan_data ORDER BY clan_level DESC LIMIT ".$top_clan."")or die(mysql_error());
	$contar = mysql_num_rows($sql);
?>
<p>CLAN!! / Total: <? echo $contar; ?> / <a href="index.php">Voltar</a></p>
<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#000000">
  <tr>
    <td width="12%" align="center" valign="middle" bgcolor="#999999">Clan Name</td>
    <td width="8%" align="center" valign="middle" bgcolor="#999999">Clan Level</td>
    <td width="11%" align="center" valign="middle" bgcolor="#999999">Reputação</td>
    <td width="9%" align="center" valign="middle" bgcolor="#999999">Castelo</td>
    <td width="17%" align="center" valign="middle" bgcolor="#999999">Ally</td>
    <td width="10%" align="center" valign="middle" bgcolor="#999999">Lider</td>
  </tr>
  <?php
 	while($linha = mysql_fetch_array($sql)){
	$cor = $cor + 1;
	$bg = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
  ?>
  <tr bgcolor="<? echo $bg; ?>">
    <td align="center" valign="middle"><?=$linha['clan_name'];?></td>
    <td align="center" valign="middle"><?=$linha['clan_level'];?></td>
    <td align="center" valign="middle"><?=$linha['reputation_score'];?></td>
    <td align="center" valign="middle">
	<?php
    if($linha['hasCastle'] >= 1){
		$sql_castle = mysql_query("SELECT * FROM castle WHERE id = ".$linha['hasCastle']."");
		while($mostrar = mysql_fetch_array($sql_castle)){
		$nome = $mostrar['name'];
		echo "<font color='#009900'>$nome</font>";
	 }
	}else{
		echo "Não tem.";
	}
	?>
    </td>
    <td align="center" valign="middle">
	<?php
	if($linha['ally_name'] == ''){
		echo 'Não tem.';
	}else{
		echo '<font color="#009900">'.$linha['ally_name'].'</font>';
	}
	?>
    </td>
    <td align="center" valign="middle">
   <?php
    if($linha['leader_id'] >= 1){
		$sql_char = mysql_query("SELECT * FROM characters WHERE obj_Id = ".$linha['leader_id']."");
		while($mostrar2 = mysql_fetch_array($sql_char)){
		$nome2 = $mostrar2['char_name'];
		echo $nome2;
	 }
	}else{
		echo "Não tem.";
	}
   ?>
    </td>
  </tr>
  <?php
	}
  ?>
</table>
<p>&nbsp;</p>
</body>
</html>
<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
