<?php
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
  $char    = $_GET['id'];
  $item    = $_GET['id_item'];
  $enchant = $_POST['enchant'];
  $qnt     = $_POST['quantidade'];

	$caracteres = '0123456789';
	$numch      = 8;
	$oid        = '';
	for($i = 0; $i < $numch; $i++) {
		$oid.=$caracteres[rand(0,strlen($caracteres)-1)];
    }
 include "../config.php";
 $sql = mysql_query("INSERT INTO items (owner_id, object_id, item_id, count, enchant_level, loc) VALUES ('".$char."', '".$oid.$i."', '".$item."', '".$qnt."', '".$enchant."', 'INVENTORY')") or die(mysql_error());
 echo "<script>alert('Doação Entregue com sucesso!');location.href='index.php'</script>";
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
?>
