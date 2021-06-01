<?php
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
	include "../config.php";
	$id       = $_GET['id'];
	$itemId   = $_POST['itemId'];
	$min      = $_POST['min'];
	$max      = $_POST['max'];
	$category = $_POST['category'];
	$chance   = $_POST['chance'];
	
	$sql = mysql_query("INSERT INTO droplist (mobId, itemId, min, max, category, chance) VALUES ('$id','$itemId','$min','$max','$category','$chance')");
	echo "<script>alert('Item adicionado com sucesso.');location.href='index.php'</script>";

/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
?>
