<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Painel de Conta</title>
<link rel="stylesheet" type="text/css" href="../estilo.css"/>
</head>

<body>
<?php
	include "../config.php";
	$id = $_GET['id'];
	$sql = mysql_query("SELECT * FROM accounts WHERE login = '$id'");
	while($linha = mysql_fetch_array($sql)){
?>
Painel de Conta do <font color="#009900"><?=$linha['login'];?></font>
<p>
<table width="700" border="0" cellspacing="1" cellpadding="1" bgcolor="#000000">
  <tr>
    <td width="85" align="left" valign="middle" bgcolor="#E8E8E8">Login</td>
    <td width="608" align="left" valign="middle" bgcolor="#E8E8E8"><?=$linha['login'];?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#F1F1F1">LastActive</td>
    <td align="left" valign="middle" bgcolor="#F1F1F1">
	<?php
	$tempo = $linha['lastactive']/1000;
    $datahora  = gmstrftime("%d.%m.%Y | %H:%M:%S", $tempo);
	echo '<font color="#006600">'.$datahora.'</font>';
	?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#E8E8E8">Acess Level</td>
    <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form1" name="form1" method="post" action="ban_acc.php?id=<?=$linha['login'];?>&voltar=<?=$linha['login'];?>">
    <?=$linha['access_level'];?>
     / 
    
     <input type="submit" name="button" id="button" value="Banir" />
    </form></td>
  </tr>
    <tr>
    <td align="left" valign="middle" bgcolor="#E8E8E8">Desbanir</td>
    <td align="left" valign="middle" bgcolor="#E8E8E8"><form id="form1" name="form3" method="post" action="desban_conta.php?id=<?=$linha['login'];?>&voltar=<?=$linha['login'];?>">
    <?=$linha['access_level'];?>
     / 
    
     <input type="submit" name="button" id="button" value="Desbanir" />
    </form></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#F1F1F1">Ultimo IP</td>
    <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form2" name="form2" method="post" action="ban_acc_ip.php?id=<?=$linha['lastIP'];?>&voltar=<?=$linha['login'];?>">
    <?=$linha['lastIP'];?>
    / 
    
    <input type="submit" name="button2" id="button2" value="Banir IP" />
    (Bani todas as contas que tem esse mesmo IP!)
    </form></td>
  </tr>
    <tr>
    <td align="left" valign="middle" bgcolor="#F1F1F1">Desban IP</td>
    <td align="left" valign="middle" bgcolor="#F1F1F1"><form id="form4" name="form2" method="post" action="desban_acc_ip.php?id=<?=$linha['lastIP'];?>&voltar=<?=$linha['login'];?>">
    <?=$linha['lastIP'];?>
    / 
    
    <input type="submit" name="button2" id="button2" value="Desbanir IP" />
    (Desbanir todas as contas que tem esse mesmo IP!)
    </form></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#E8E8E8">Email</td>
    <td align="left" valign="middle" bgcolor="#E8E8E8"><?=$linha['email'];?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#F1F1F1"><font color="#009900">Pergunta#1</font></td>
    <td align="left" valign="middle" bgcolor="#F1F1F1"><font color="#009900"><?=$linha['pergunta1'];?></font></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#E8E8E8"><font color="#009900">Resposta#1</font></td>
    <td align="left" valign="middle" bgcolor="#E8E8E8"><font color="#009900"><?=$linha['resposta1'];?></font></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#F1F1F1"><font color="#003300">Pergunta#2</font></td>
    <td align="left" valign="middle" bgcolor="#F1F1F1"><font color="#003300"><?=$linha['pergunta2'];?></font></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#E8E8E8"><font color="#003300">Resposta#2</font></td>
    <td align="left" valign="middle" bgcolor="#E8E8E8"><font color="#003300"><?=$linha['resposta2'];?></font></td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#333333"><font color="#FFFFFF">Char's da Conta</font></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><table width="700" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td align="center" valign="top" bgcolor="#666666">Nome</td>
        <td align="center" valign="top" bgcolor="#666666">Level</td>
        <td align="center" valign="top" bgcolor="#666666">AcessLevel</td>
        <td align="center" valign="top" bgcolor="#666666">Detalhes</td>
        <td align="center" valign="top" bgcolor="#666666">Deletar</td>
      </tr>
      <?php
	  $sql_char = mysql_query("SELECT * FROM characters WHERE account_name = '".$linha['login']."'") or die(mysql_error());
	  while($linha_char = mysql_fetch_array($sql_char)){
	  	$cor = $cor + 1;
		$bg = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
	  ?>
      
      <tr bgcolor="<? echo $bg; ?>">
        <td align="center" valign="middle"><?=$linha_char['char_name'];?></td>
        <td align="center" valign="middle"><?=$linha_char['level'];?></td>
        <td align="center" valign="middle"><?=$linha_char['accesslevel'];?></td>
        <td align="center" valign="middle"><a href="index.php?pesquisar=<?=$linha_char['char_name'];?>&submit=Buscar">+</a></td>
        <td align="center" valign="middle"><form id="form5" name="form5" method="post" action="deletar_char?id=<?=$linha_char['obj_Id'];?>&voltar=<?=$linha['login'];?>">
          <input type="submit" name="button3" id="button3" value="Deletar" />
        </form></td>
      </tr>
      <?php
	  }
	  ?>
    </table></td>
  </tr>
</table>
<?php
	}
?>
</p>
</body>
</html>
<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
