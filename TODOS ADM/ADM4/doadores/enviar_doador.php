<?php
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
	// Status = 1 quer dizer que eh PENDENTE = Não Entregue
	// Status = 2 quer dizer que eh OK = Entregue
	$status = 1;
	include "config.php";
	$sql = mysql_query("INSERT INTO doacao (nome, sobrenome, nome_char, valor, items, status, data, hora) VALUES ('$nome','$sobrenome','$nome_char','$valor','$items','$status', now(), now())");
	echo "<script>alert('Doador enviado com sucesso');location.href='index.php'</script>";
	
	
?>