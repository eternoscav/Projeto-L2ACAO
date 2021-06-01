<?php include "verifica.php";?><div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
				  <div class="post">
					  <div class="title">
						<a href="#"><h2>Debug</h2></a>	<p>Obs: Esta op&ccedil;&atilde;o teleporta o char selecionado para Giran.</p>
						
					</div>
						<div class="entry">
						
                         <form id="form1" name="form1" method="post" action="?sec=gk&funcao=mostrar">
              <table width="500" border="0">
                <tr>
                  <td width="26%">Nome do Char:</td>
                  <td width="55%">
                    <label>
                      <input name="nome" type="text" id="nome" size="40" />
                    </label>
</td>
                  <td width="19%"><input type="submit" name="button" id="button" value="Procurar" /></td>
                </tr>
              </table>
            </form><? if($_GET['funcao'] == "mostrar"){   
	$nome = $_POST['nome'];
	$procurar = mysql_query("SELECT * FROM characters WHERE char_name LIKE '$nome' ORDER BY char_name");
	$conta = mysql_num_rows($procurar);
	if($conta == 0){echo '<font color="ff0000">Char n&atilde;o encontrado</font>';}else{
	?>
   <table width="300" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td width="166" align="center">Char encontrado:</td>
    </tr>
 <?
	while($linha = mysql_fetch_array($procurar)){
		$char_name = $linha['char_name'];
		
	?>
  <tr>
    <td><a href="?sec=gk&funcao=teleport&char_name=<? echo $char_name?>"><? echo $char_name ?></a></td>
    </tr>
       <? }?>
 
</table><? }}?>

<? if($_GET['funcao'] == "teleport"){
   $char = $_GET['char_name'];
    $teleport = mysql_query("UPDATE characters SET x=83400, y=147943, z=-3404 WHERE char_name='$char'");
echo "Char ' $char ' teleportado pra Giran";
	}?>

                        
                        
                        		  </div>
						<div class="meta">
							<p class="credit">&nbsp;</p>
</div>
				  </div>
</div>
				<!-- end #content -->