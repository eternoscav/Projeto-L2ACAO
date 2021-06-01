<?php defined('BLOCK')or die("Este arquivo nao pode ser acessado diretamente!"); ?>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-size: 24px;
}
.style2 {color: #0033FF}
-->
</style>

<h3 class="style1">Castle Sieges</h3>

<div id="maincol"><?php
	$select = mysql_query("SELECT * FROM castle ORDER BY id");
	while($row = mysql_fetch_array($select)){
		$castle_id = $row['id'];
		$pega_data = date('D\, j M Y H\:i',$row['siegeDate']/1000);		
		$select_dono = mysql_query("SELECT * FROM clan_data WHERE hasCastle='$castle_id'");
		while($row_dono = mysql_fetch_array($select_dono)){
			$pega_dono = $row_dono['clan_name'];

			}
		?>
									<div class="inner">
										<div class="padding">		
											<div class="blog">
											
														<img src="../images/Outros/back_siege.gif" width="386" height="286" />								
											
														<div class="post-1 post hentry category-sem-categoria post-wrapper">				
															<div class="contentpaneopen home-post-1">
																<div class="module" style="padding: 0 !important;">
													<h3 align="center"><img src="../images/Outros/divisoria_noticia_titulo.png" width="542" height="28" />
													  <span class="style2"><?php echo $row['name'];?></span></h3>				
															  </div>
																<div class="post_meta_data"></div>
																<div class="post_content">
																	<p>                                                                    </p>
                                                                    <h4>
                                                                      <table width="400" border="0" cellspacing="5" cellpadding="5">
                                                                        <tr>
                                                                          <td width="183" rowspan="3"><img src="images/castle/<?php echo $row['name']; ?>.png" /></td>
                                                                          <td width="182">Dono: <?php echo $pega_dono; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Proxima Siege:</td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td><?php echo $pega_data; ?></td>
                                                                        </tr>
                                                                      </table>
                                                                    </h4>
																	<p><img src="../images/Outros/divisoria_noticia_titulo.png" width="542" height="28" /></p>
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
										
																		<?php unset($pega_dono);
																			  unset($pega_data);
																			  }?>			
									<!-- END MAIN PAGE POSTS -->
</div>