<?php defined('BLOCK')or die("Este arquivo nao pode ser acessado diretamente!"); ?>
<?php 
$login_user = $_SESSION['login_usuario'];
$verifica_access = mysql_query("SELECT * FROM accounts WHERE login='$login_user'");
while($row_access = mysql_fetch_array($verifica_access)){
	$access = $row_access[$TABLE["access"]];
	}
	if($access != $ACCESS["change"]){
		echo "Nem tente trapacear por aqui!";
		}else{
?>
<div id="maincol">
									<div class="inner">
										<div class="padding">		
											<div class="blog">
											
																						
											
														<div class="post-1 post hentry category-sem-categoria post-wrapper">				
														  <div class="contentpaneopen home-post-1">
																<div class="module" style="padding: 0 !important;">
																			<h3>News</h3>
                                                                            <?php 
		if(isset($_POST['titulo'])){
		if($_POST['titulo'] == "" or $_POST['new'] == "" or $_POST['autor'] == ""){ echo "<blockquote>Preencha todos os campos!";
		}else{
		$titulo = $_POST['titulo'];
		$autor = $_POST['autor'];
		$texto = $_POST['new'];
		$data = date("d/m/Y H:i");
		$insert = mysql_query("INSERT INTO news (titulo, texto, autor, data) VALUE ('$titulo', '$texto', '$autor', '$data')");
		echo "<blockquote>Not&iacute;cia inserida com sucesso.";
		}
		
		?>
        </blockquote>
		<?php }
		if(isset($_GET['funcao'])){
			$id = $_GET['id'];
			$delete = mysql_query("DELETE FROM news WHERE id='$id'");
			echo "<blockquote>Not&iacute;cia apagada com sucesso.</blockquote>";
			}
			?>
																			  <br />
																			
																</div><form id="form1" name="form1" method="post" action="?sec=news">
																<div class="post_meta_data">
																  <h3>Titulo: 
																    <label>
																      <input name="titulo" type="text" id="titulo" size="45" />
															        </label>  </h3>
																    <br />
                                                                  <h3>Autor: 
                                                                    <label>
                                                                      <input name="autor" type="text" id="autor" size="45" />
                                                                    </label>
                                                                  </h3>
																</div>
																<div class="post_content">
																	
																	  <label>
																	    <h3>Texto:</h3>
																	    <br />
																	    <textarea name="new" id="new" cols="50" rows="15"></textarea>
															      </label>
														          <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
															            <tr align="center">
															              <td><input type="submit" name="button" id="button" value="Enviar" /></td>
													                </tr>
													              </table>
																</form>
																  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
																	  <tr>
																	    <td width="198" align="center">Título</td>
																	    <td width="167" align="center">Excluir</td>
																    </tr>
                                                                    <?php 
	$mostra = mysql_query("SELECT * FROM news ORDER BY id");
	while($row_new = mysql_fetch_array($mostra)){															
																	?>
																	  <tr>
																	    <td align="center"><?php echo $row_new['titulo']; ?></td>
																	    <td align="center"><a href="?sec=news&funcao=excluir&id=<?php echo $row_new['id']; ?>">Excluir</a></td>
																    </tr><?php }?>
														    </table>
																  <p>&nbsp;</p>
																	
																																		
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
									
							  </div><?php } ?>