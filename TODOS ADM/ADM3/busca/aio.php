<?php
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
   $char = $_GET['id'];
   $voltar = $_GET['voltar'];

include "../config.php";

   $sql = mysql_query("SELECT * FROM character_skills WHERE char_obj_id = ".$char."");
   $contar = mysql_num_rows($sql);
   if($contar > 98){
	 echo "<script>
	         alert('Este Char ja Contem AIO!');location.href='index.php?pesquisar=$voltar'
	       </script>";
	 exit();
   }
   
$arquivo = file('aio.txt');
foreach($arquivo as $skills){
$skills = str_replace('".$char."', ''.$char.'', $skills);
$inserir = mysql_query($skills);
   	 echo "<script>
	         alert('AIO Inserido com Sucesso!');location.href='index.php?pesquisar=$voltar'
	       </script>";
}
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
?>
