<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add + doação</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>Adicionar Novo Item a doação | <a href="index.php">Voltar</a></p>

<table width="756" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="243" align="left" valign="top"><img src="../imagens/logo.jpg" alt="" /></td>
    <td width="506" align="center" valign="middle">
    <?php $id = $_GET['id']; ?>
    <form id="form1" name="form1" method="post" action="atualizar_doador.php?id=<? echo $id; ?>">
    <?php
		include "../config.php";
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
        <td><input type="submit" name="button" id="button" value="Alterar" /></td>
        <td><input type="reset" name="button2" id="button2" value="Refazer" /></td>
      </tr>
    </table>
    <?php } ?>
    </form>
    
    </td>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
