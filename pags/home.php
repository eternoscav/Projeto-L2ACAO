<?php defined('BLOCK')or die("Este arquivo nao pode ser acessado diretamente!"); ?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style3 {color: #0000FF}
-->
</style>
<div id="maincol">
                                    <div align="left">
                                      <?php 
$select_new = mysql_query("SELECT * FROM news ORDER BY id DESC");
while($row_new = mysql_fetch_array($select_new)){
?>
                                    </div>
                                    <div class="inner">
										<div class="padding">		
											<div class="blog">
											
																						
											
														<div class="post-1 post hentry category-sem-categoria post-wrapper">				
															<div class="contentpaneopen home-post-1">
																<div class="module" style="padding: 0 !important;">
																			<h3 align="left" class="style1"><?php echo $row_new['titulo']; ?></h3>
																</div>
																<div class="post_meta_data">
																	<div align="left"><span class="small">Escrita por:  <span class="style3"><?php echo $row_new['autor']; ?></span></span><br />
																        </div>
															  </div>
																<div class="post_content">
																	<p align="left">
                                                                    <?php echo $row_new['texto']; ?>                                                                    </p>
																</div>
																<div>
																	<div align="left">
																	  <p class="modifydate small">Última modificação em  <span class="style3"><?php echo $row_new['data']; ?></span></p>
																	  <p class="modifydate small"><img src="../images/Outros/divisoria_noticia_titulo.png" width="542" height="28" /> </p>
																	</div>
																</div>
															</div>
														</div>
										  </div>
									  </div>
								  </div>
										<div class="col-bottom"></div>
										<div class="col-bottom2"></div>
										<div class="col-bottom3"></div>
											<div align="left">
											  <?php }
?>
											  
											  <!-- END MAIN PAGE POSTS -->
											  
                </div>
</div>