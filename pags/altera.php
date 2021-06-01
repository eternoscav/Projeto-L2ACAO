<?php defined('BLOCK')or die("Este arquivo nao pode ser acessado diretamente!"); ?>
<?php if(!isset($_SESSION['login_usuario']) and !isset($_SESSION['senha_usuario'])){
	echo "Efetue o Login Antes de Trocar a Senha";
	}else{ ?>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<div id="maincol">
									<div class="inner">
										<div class="padding">		
											<div class="blog">
											
																						
											
														<div class="post-1 post hentry category-sem-categoria post-wrapper">				
															<div class="contentpaneopen home-post-1">
																<div class="module" style="padding: 0 !important;">
																			<h3>Trocar Senha</h3>
																</div>
																<blockquote>
                                                        
                                                                <font color="#ff0000">
                                                                <?php 
	if(isset($_POST['senha1'])){
		
		$senha1 = base64_encode(pack('H*', sha1($_POST['senha1'])));
		$senha2 = base64_encode(pack('H*', sha1($_POST['senha2'])));
		$login = $_SESSION['login_usuario'];
		
		$verifica = mysql_query("SELECT * FROM accounts WHERE login='$login'");
		while($row = mysql_fetch_array($verifica)){
			$senha_db = $row['password'];
			}
			if($senha_db != $senha1){
				echo "Senha incorreta";
				}else{
					$update = mysql_query("UPDATE accounts SET password='$senha2' WHERE login='$login'");
					echo "Senha trocada com sucesso!";
					}
		}
?></font>
  </blockquote>
																<div class="post_content">
																	<p>Preencha corretamente todos os campos abaixo.</p>
																  <p><form method="post" name="form1" action="">
                <table width="100%" align="center" cellpadding="5" cellspacing="5">
                  <tr valign="baseline">
                    <td width="113" align="right" nowrap><div align="right" class="style1">Antiga senha:</div></td>
                    <td width="354"><span id="sprytextfield1">
                      <label>
                        <input type="password" name="senha1" id="senha1" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr valign="baseline">
                    <td nowrap align="right"><div align="right" class="style1">Nova senha:</div></td>
                    <td><span id="spryconfirm1">
                      <label>
                        <input type="password" name="senha2" id="senha2" />
                      </label>
                    <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
                  </tr>
                  <tr valign="baseline">
                    <td nowrap align="right"><span class="style1">Repita a nova senha:</span></td>
                    <td><span id="spryconfirm2">
                      <label>
                        <input type="password" name="senha3" id="senha3" />
                      </label>
                    <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
                  </tr>
                  <tr valign="baseline">
                    <td nowrap align="right">&nbsp;</td>
                    <td><input type="submit" value="Trocar senha"></td>
                  </tr>
        </table>
<input type="hidden" name="MM_insert" value="form1">
              </form></p>
																	
																																		
														      </div>
																<div></div>
															</div>
														</div>
														
																												
										  </div>
									  </div>
								  </div>
										<div class="col-bottom"></div>
										<div class="col-bottom2"></div>
										<div class="col-bottom3"></div>
										
																				
									<!-- END MAIN PAGE POSTS -->
									
							  </div>
<?php }?>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "senha3");
var spryconfirm2 = new Spry.Widget.ValidationConfirm("spryconfirm2", "senha2");
//-->
</script>
