<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mais Info</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>
  <?php
 include "../config.php";
 $id = $_GET['id'];
 $sql = mysql_query("SELECT *, date_format(data, '%d/%m/%Y') as data FROM doacao WHERE id = '$id'");
 while($linha = mysql_fetch_array($sql)){
	$nome      = $linha['nome'];
	$sobrenome = $linha['sobrenome'];
	$nome_char = $linha['nome_char'];
	$valor     = $linha['valor'];
	$items     = $linha['items'];
	$data      = $linha['data']; 
	$hora      = $linha['hora'];
	$status    = $linha['status'];
	 
 }
?> +
  
INFORMAÇÕES </p>
<p><img src="../imagens/logo.jpg" alt="" /></p>
<p><a href="index.php">Voltar</a></p>
<p>
Doação do char: <font color="#006600"><? echo $nome_char; ?></font><br /><hr />
Nome do Dono: <font color="#006600"><? echo $nome; ?> <? echo $sobrenome; ?></font><br />
Char: <font color="#006600"><? echo $nome_char; ?></font><br />
Valor: <font color="#006600"><? echo $valor; ?></font><br /> 
Items: <font color="#006600"><? echo $items; ?></font><br />
Data: <font color="#006600"><? echo $data; ?></font><br />
Hora: <font color="#006600"><? echo $hora; ?></font><br />
Status: <?php
if($status == 2){
	echo "<font color='#0000FF'>Entregue</font>";	
}else{
	echo "<font color='#FF0000'>Pendente</font>";
}	
?>
</p>

</body>
</html>
<!--
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
-->
