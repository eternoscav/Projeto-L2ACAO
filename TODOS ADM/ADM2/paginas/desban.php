<?php include "verifica.php";?><div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
				  <div class="post">
					  <div class="title">
							<a href="#"><h2>Desban</h2></a>
						
					</div>
						<div class="entry">
						
                         <table width="300" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="2" align="center">Conta(s) banida(s):</td>
    </tr>
    <? 
	$banidas = mysql_query("SELECT * FROM accounts WHERE accessLevel=-100");
	$cont = mysql_num_rows($banidas);
	while($linha = mysql_fetch_array($banidas)){
		$login = $linha['login'];
		
	?>
  <tr>
    <td align="center"><? echo $login ?></td>
    <td align="center"><a href="?sec=desban&funcao=desban&conta=<? echo $login ?>">Desbanir Conta</a></td>
  </tr>
  <? }?>
</table>
<? 
if($_GET['funcao'] == "desban"){
	
	$desbanir = mysql_query("UPDATE accounts SET accessLevel=0 WHERE login='$conta'");
	echo "Account ' $conta ' desbanida!
	
<META HTTP-EQUIV=REFRESH CONTENT='1; URL=?sec=desban'>
		";
	}?>
                        
                        
                        		  </div>
						<div class="meta">
							<p class="credit">&nbsp;</p>
</div>
				  </div>
</div>
				<!-- end #content -->