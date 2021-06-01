<?php defined('BLOCK')or die("Este arquivo nao pode ser acessado diretamente!"); ?><script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />


<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div id="maincol">
									<div class="inner">
										<div class="padding">		
											<div class="blog">
											
																						
											
														<div class="post-1 post hentry category-sem-categoria post-wrapper">				
															<div class="contentpaneopen home-post-1">
															  <div class="module" style="padding: 0 !important;">
																			<h3>Nova Conta</h3>
															  </div>
																<blockquote>
                                                        
                                                                <font color="#ff0000">
                                                                <?php 
if(isset($_POST["nome"])){
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$email = $_POST["email"];
	$senha = base64_encode(pack('H*', sha1($_POST["password1"])));
	$verifica = mysql_query("SELECT * FROM accounts WHERE login='$login'");
	$cont = mysql_num_rows($verifica);
	if($cont >= 1){
		echo "login j&aacute; existente! Escolha outro login.";
		}elseif($cont == 0){
			$insert = mysql_query("INSERT INTO ".$TABLE["accounts"]."(login, password, nome, email) VALUE ('$login', '$senha', '$nome', '$email')");
			echo "Conta criada com sucesso!";
			}else{
				echo "Um erro ocorreu durante o processo, tente novamente mais tarde.";
				}
	}
?></font>
  </blockquote>
																<div class="post_content">
																	<p align="left">Preencha corretamente todos os campos abaixo.</p>
																  <p align="left"><form method="post" name="form1" action="?sec=nova_conta">
                                                                    <div align="left">
                                                                      <table width="48%" align="left" cellpadding="5" cellspacing="5">
                                                                        <tr valign="baseline">
                                                                          <td width="125" align="right" nowrap><div align="right" class="style1"><span class="style1">Nome</span>:</div></td>
                      <td width="303"><span id="sprytextfield6">
                        <input type="text" id="a2" name="nome" value="" size="32" />
                        <span class="textfieldRequiredMsg">Por favor digite um Nome V&aacute;lido.</span></span></td>
                    </tr>
                                                                        <tr valign="baseline">
                                                                          <td width="125" align="right" nowrap><div align="right" class="style1">Email:</div></td>
                      <td><span id="sprytextfield1">
                        <input type="text" id="a3" name="email" value="" size="32" />
                        <span class="textfieldRequiredMsg">Por Favor Digite um Email V&aacute;lido.</span><span class="textfieldInvalidFormatMsg">Email inv&aacute;lido.</span></span></td>
                    </tr>
                                                                        <tr valign="baseline">
                                                                          <td width="125" align="right" nowrap><div align="right" class="style1">Login:</div></td>
                      <td><span id="sprytextfield2">
                        <input type="text" id="a4" name="login" value="" size="32" />
                        <span class="textfieldRequiredMsg">Nome de usu&aacute;rio Requerido.</span></span></td>
                    </tr>
                                                                        <tr valign="baseline">
                                                                          <td width="125" align="right" nowrap><div align="right" class="style1">Senha:</div></td>
                      <td><span id="spryconfirm1">
                        <input type="password" id="a5" name="password1" value="" size="20" />
                        <span class="confirmRequiredMsg">Por Favor digite uma Senha.</span><span class="confirmInvalidMsg">Senha ;n&atilde;o Corresponde.</span></span></td>
                    </tr>
                                                                        <tr valign="baseline">
                                                                          <td width="125" align="right" nowrap><div align="right" class="style1">
                                                                          <span class="style1">Repita a senha</span>:</span></td>
                      <td><span id="spryconfirm2">
                        <input type="password" id="a" name="password2" value="" size="20" />
                        <span class="confirmRequiredMsg">Por Favor Digite uma Senha.</span><span class="confirmInvalidMsg">A Senha ;n&atilde;o Corrsponde</span></span></td>
                    </tr>
                                                                        <tr valign="baseline">
                                                                          <td nowrap align="right">&nbsp;</td>
                      <td><input type="submit" value="Registrar"></td>
                    </tr>
                                                                      </table>
                                                                      <input type="hidden" name="MM_insert" value="form1">
                                                                                                                          </div>
																  </form>
																  <div align="left">
																    </p>
																    
																    
															          </div>
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
<script type="text/javascript">
<!--
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["blur"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {useCharacterMasking:true, validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "a");
var spryconfirm2 = new Spry.Widget.ValidationConfirm("spryconfirm2", "a5");
//-->
</script>
