<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doadores</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p id="texto">DOADORES</p>
<p><a href="add_doador.php">Adicionar Doador</a> / <a href="index.php">Atualizar a Página</a> / <a href="../index.php">Voltar</a></p>
<table width="713" border="0" cellspacing="1" cellpadding="1" align="left">
  <tr>
    <td width="200"><img src="../imagens/logo.jpg" alt="" /></td>
    <td width="240" align="center" valign="top"><p>Doação Entregue
    <?php
    	include "../config.php";
		$sql_entregue = mysql_query("SELECT * FROM doacao WHERE status = 2");
		while($linha1 = mysql_fetch_array($sql_entregue)){
	?>
    </p>
    <p><hr /></p>
     <p><a href="maisinfo.php?id=<?=$linha1['id'];?>"><?=$linha1['nome_char'];?></a> / <a href="add.php?id=<?=$linha1['id'];?>"><font color="#009900">+</font></a> / <a href="del.php?id=<?=$linha1['id'];?>">Deletar</a><br /></p>
      <?php } ?>
    </td>
    <td width="240" align="center" valign="top"><p>Doação Pendente
      <?php
    	
		$sql_pen = mysql_query("SELECT * FROM doacao WHERE status = 1");
		while($linha2 = mysql_fetch_array($sql_pen)){
		
	 ?>
    </p>
    <p><hr /></p>
      <p><a href="maisinfo.php?id=<?=$linha2['id'];?>"><?=$linha2['nome_char'];?></a> / <a href="add.php?id=<?=$linha2['id'];?>"><font color="#009900">+</font></a> / <a href="entregue.php?id=<?=$linha2['id'];?>"><font color="#009900">Entregue</font></a><br /></p>
      <?php
	  }
	  ?>
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
