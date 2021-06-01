<?php
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
	$nome      = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$nome_char = $_POST['nome_char'];
	$valor     = $_POST['valor'];
	$items     = $_POST['items'];
	
	if(empty($nome)){
		echo "Por favor complete todo o Formulário";
		exit();
	}
	if(empty($sobrenome)){
		echo "Por favor complete todo o Formulário";
		exit();
	}
	if(empty($nome_char)){
		echo "Por favor complete todo o Formulário";
		exit();
	}
	if(empty($valor)){
		echo "Por favor complete todo o Formulário";
		exit();
	}
	if(empty($items)){
		echo "Por favor complete todo o Formulário";
		exit();
	}
	include "../config.php";
	$id = $_GET['id'];
	$sql = mysql_query("UPDATE doacao SET nome='$nome', sobrenome='$sobrenome', nome_char='$nome_char', valor='$valor', items='$items' WHERE id = '$id'");
	echo "<script>
  			alert('Alterado com sucesso.');
  			location.href='add.php?id=$id'
  			</script>";
			
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT � SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
?>
