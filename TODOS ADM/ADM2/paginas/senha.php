<?php include "verifica.php";?><div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
				  <div class="post">
					  <div class="title">
							<a href="#"><h2>TROCA/RECUPERA SENHA</h2></a>
						
					</div>
						<div class="entry">
						
                        <form id="form1" name="form1" method="post" action="?sec=senha&funcao=mostra">
  <table width="400" border="0" align="center" cellpadding="4" cellspacing="4">
    <tr>
      <td align="right">Login:</td>
      <td align="left"><label>
        <input type="text" name="login" id="login" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Nova Senha:</td>
      <td align="left"><label>
        <input type="text" name="senha" id="senha" />
      </label></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td align="left"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>
<?
$login = $_POST['login'];
$senha = $_POST['senha'];
$senha2 = base64_encode(pack('H*', sha1($_POST['senha'])));
if($_GET['funcao'] == "mostra"){
	
	$select = mysql_query("SELECT * FROM accounts WHERE login='$login'");
	$conta = mysql_num_rows($select);	
	
	if($conta == 0){
	echo '<font color="FF0000">Login n&atilde;o encontrado</font>';
	}if($conta == 1){
		
		$alterar = mysql_query("UPDATE accounts SET password='$senha2' WHERE login='$login'");
		echo "Senha do Login &quot; $login &quot; alterada para &quot; $senha &quot;.";
		
		}
	}
?><br />
                     
                        
                        		  </div>
						<div class="meta">
							<p class="credit">&nbsp;</p>
</div>
				  </div>
</div>
				<!-- end #content -->