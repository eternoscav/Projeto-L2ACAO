<?php
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT … SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
	include "../config.php";
	$id_char = $_GET['id_char'];
	$id      = $_GET['id'];
	$augment = $_POST['augment'];
	
	// Pesquisa o Item no Banco
	$sql_items       = mysql_query("SELECT * FROM items WHERE item_id = '".$id."'") or die(mysql_error());
	$mostrar_items   = mysql_fetch_array($sql_items);
	
	// Pesquisa o Item na Tabela Weapons	
	$sql_weapon      = mysql_query("SELECT * FROM weapon WHERE item_id = '".$mostrar_items[item_id]."'") or die(mysql_error());
	$mostrar_weapons = mysql_fetch_array($sql_weapon);
	
	//Pega o Nome da Arma
	$nome = $mostrar_weapons['name'];
	
	//Verifica se o Item √© realmente uma Arma
	if($nome == ''){
		echo "<script>alert('Esse item n√£o pode ser augmentado.');location.href='augments.php?id=$id_char'</script>";
	}else{
		$sql_pesq     = mysql_query("SELECT * FROM augmentations"); 
		$mostrar_pesq = mysql_fetch_array($sql_pesq);
		if($mostrar_pesq['item_id'] == $id){
			echo "<script>alert('Esse item ja est√° augmentado.');location.href='augments.php?id=$id_char'</script>";
			exit();
		}
		//Ve qual o augment selecionado e poem o atributo dele!
		//1 - Active: Increases P. Def
		if($augment == 3135){
			$atributo = 957222377;	
		}
		//2 - Active: Battle Roar Increases the maximum HP temporarily
		if($augment == 3125){
			$atributo = 956567019;	
		}
		//3 - Active: Increases the chance of a critical attack temporarily
		if($augment == 3141){
			$atributo = 962596330;	
		}
		//4 - Active: Increases PVP P. Atk. temporarilyActive: Increases PVP P. Atk. temporarily
		if($augment == 3134){
			$atributo = 957418984;	
		}
		//5 - Active: Increases M. Atk. temporarily
		if($augment == 3133){
			$atributo = 956436001;	
		}
		//6 - Active: Regenerates CP
		if($augment == 3130){
			$atributo = 955583974;	
		}
		//7 - Active: Increases Accuracy temporarily
		if($augment == 3140){
			$atributo = 962137602;	
		}
		//8 - Active: Increases P. Atk. temporarily
		if($augment == 3132){
			$atributo = 957091343;	
		}
		//9 - Active: Increases Dodge temporarily
		if($augment == 3139){
			$atributo = 955452943;	
		}
		//10 - Active: Increases M. Def. temporarily
		if($augment == 3136){
			$atributo = 956763681;
		}
		//11 - Active: Increases the maximum HP temporarily
		if($augment == 3128){
			$atributo = 956698155;
		}
		//12 - Active: Increases the critical attack rate of magic attacks temporarily
		if($augment == 3142){
			$atributo = 963055134;
		}
		//Se esta tudo OK, Inseri o argument
		$sql_inserir = mysql_query("INSERT INTO augmentations (item_id, attributes, skill, level) VALUES ('$id','$atributo','$augment','10')") or die(mysql_error());
		echo "<script>alert('Augment Adicionado com sucesso.');location.href='augments.php?id=$id_char'</script>";
	}

/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT … SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
?>
