<?php
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
	include "../config.php";
	$id = $_GET['id'];
	$voltar = $_GET['voltar'];
	$ban = 0;
	$sql = mysql_query("UPDATE accounts SET access_level='$ban' WHERE login = '$id'");
	echo "<script>alert('Acc desbanida com sucesso.');location.href='conta.php?id=$voltar'</script>";
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
?>
