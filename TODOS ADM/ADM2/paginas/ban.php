<?php include "verifica.php";?><div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
				  <div class="post">
					  <div class="title">
							<a href="#"><h2>Ban</h2></a> <p>Obs: Esta op&ccedil;&atilde;o n&atilde;o deleta a account selecionada.</p>
						
					</div>
						<div class="entry">
						
                         <h3>Banir por char:</h3>
<form id="form1" name="form1" method="post" action="?sec=ban&funcao=mostrar">
              <table width="500" border="0">
                <tr>
                  <td width="26%" align="right">Nome do Char:</td>
                  <td width="55%">
                    <label>
                      <input name="nome" type="text" id="nome" size="40" />
                    </label>
</td>
                  <td width="19%"><input type="submit" name="button" id="button" value="Procurar" /></td>
                </tr>
      </table>
            </form><? if($_GET['funcao'] == "mostrar"){?>
   <table width="100%" border="0" cellpadding="4" cellspacing="4">
  <tr>
    <td width="166" align="center">Account encontrada:</td>
    </tr>
    <? 
	$nome = $_POST['nome'];
	$procurar = mysql_query("SELECT * FROM characters WHERE char_name LIKE '$nome' ORDER BY char_name");
	while($linha = mysql_fetch_array($procurar)){
		$login = $linha['account_name'];
		$seleciona = mysql_query("SELECT * FROM accounts WHERE login='$login'");
		while($linha3 = mysql_fetch_array($seleciona)){
			$access = $linha3['accessLevel']; 
			}
			if($access >= 0){ $link = '<a href="?sec=ban&funcao=ban&login='.$login.'">Banir</a>';
			}if($access <= -100){ $link = '<font color="#ff0000">Conta j&aacute; banida!</font>';}
						 ?>
  <tr>
    <td>"<? echo $nome ?>" registrado na account "<? echo $login ?>"<br /><? echo $link ?></td>
    </tr>
       <? }?>
 
</table><? }?>

<? if($_GET['funcao'] == "ban"){
   $login2 = $_GET['login'];
    $teleport = mysql_query("UPDATE accounts SET accessLevel=-100 WHERE login='$login2'");
echo "Account ' $login2 ' banida! <META HTTP-EQUIV=REFRESH CONTENT='3; URL=?sec=ban'> ";
	}?>
    
    <br />
    
    <h3>Banir por IP:</h3>
<form id="form1" name="form1" method="post" action="?sec=ban&funcao=mostrarip">
        <table width="500" border="0">
                <tr>
                  <td width="26%" align="right">IP:</td>
                  <td width="55%">
                    <label>
                      <input name="ip" type="text" id="ip" size="40" />
                    </label>
</td>
                  <td width="19%"><input type="submit" name="button" id="button" value="Procurar" /></td>
                </tr>
      </table>
        <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td align="center">[Descubra o &uacute;ltimo IP acessado por um char em <a href="index.php?sec=info">CharINFO</a>]</td>
        </tr>
      </table>
</form><? if($_GET['funcao'] == "mostrarip"){?>
   <table width="100%" border="0" cellpadding="4" cellspacing="4">
  <tr>
    <td width="166" align="center">Account(s) encontrada(s):</td>
    </tr>
   <? $nome = $_POST['ip']; ?>
    <? 
	$procurar = mysql_query("SELECT * FROM accounts WHERE lastIP='$nome' AND accessLevel >-100 ORDER BY login");
	$conta = mysql_num_rows($procurar);
	while($linha = mysql_fetch_array($procurar)){
		$login = $linha['login'];
						 ?>
    <tr>
    <td>
      <p>"<? echo $login ?>" Logado atrav&eacute;s do IP "<? echo $nome ?>"<br />
      <a href="?sec=ban&funcao=banip&login=<? echo $login ?>">Banir</a></p></td>
    </tr>
       <? }if($conta >=2){ ?>
	     <tr>
      <td><p><a href="?sec=ban&funcao=banall&ip=<? echo $nome ?>">Banir todas as <? echo $conta ?> accounts</a></p></td>
    </tr>	   <? }?>
 
</table><? }?>

<? if($_GET['funcao'] == "banip"){
   $login2 = $_GET['login'];
    $teleport = mysql_query("UPDATE accounts SET accessLevel=-100 WHERE login='$login2'");
echo "Account ' $login2 ' banida! <META HTTP-EQUIV=REFRESH CONTENT='3; URL=?sec=ban'> ";
	}if($_GET['funcao'] == "banall"){
		$banall = mysql_query("UPDATE accounts SET accessLevel=-100 WHERE lastIP='$ip'");
		echo "Accounts banidas! <META HTTP-EQUIV=REFRESH CONTENT='3; URL=?sec=ban'> ";

		}?>
                        <br />
<br />

                        
                        		  </div>
						<div class="meta">
							<p class="credit">&nbsp;</p>
</div>
				  </div>
</div>
				<!-- end #content -->