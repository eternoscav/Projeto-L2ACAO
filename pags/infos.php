<?php defined('BLOCK')or die("Este arquivo nao pode ser acessado diretamente!"); ?>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
<body onLoad="MM_preloadImages('../images/Outros/fotos.jpg')">
<div id="maincol">
									<div class="inner">
										<div class="padding">		
											<div class="blog">
											
																						
											
														<div class="post-1 post hentry category-sem-categoria post-wrapper">				
															<div class="contentpaneopen home-post-1">
																<div class="module" style="padding: 0 !important;">
																			<h3>Informa&ccedil;&otilde;es e Requisitos M&iacute;nimos </h3>
																</div>
															  <div class="post_meta_data">
																  <table border="0" width="100%">
																    <tbody>
																      <tr>
																	  																                                                                        <td width="6%"><img src="images/outros/computador.png" border="0"></td>
																        <td width="32%"><strong>Sistema Operacional</strong></td>
																        <td width="62%">Windows&reg; XP ou Windos&reg; Vista</td>
															          </tr>
																      <tr>
																        <td><img src="images/outros/computador.png" border="0"></td>
																        <td><strong>Processador</strong></td>
																        <td>Intel&reg; Pentium&reg; 4 2.0 GHz ou equivalente</td>
															          </tr>
																      <tr>
																        <td><img src="images/outros/computador.png" border="0"></td>
																        <td><strong>Mem&oacute;ria RAM</strong></td>
																        <td>512 MB ou mais</td>
															          </tr>
																      <tr>
																        <td><img src="images/outros/computador.png" border="0"></td>
																        <td><strong>Placa de V&iacute;deo</strong></td>
																        <td>NVIDIA&reg; FX 5700 ou ATI&trade; Radeon&reg; 9600</td>
															          </tr>
																      <tr>
																        <td><img src="images/outros/computador.png" border="0"></td>
																        <td><strong>Espa&ccedil;o no HD</strong></td>
																        <td>10 GB ou mais</td>
															          </tr>
																      <tr>
																        <td><img src="images/outros/computador.png" border="0"></td>
																        <td><strong>Audio</strong></td>
																        <td>Placa comp&aacute;tivel com DirectX&reg; 9.0c</td>
															          </tr>
																      <tr>
																        <td><img src="images/outros/computador.png" border="0"></td>
																        <td><strong>Conex&atilde;o com Internet</strong></td>
																        <td>56k (conex&atilde;o discada)</td>
															          </tr>
																	  
															        </tbody>
															      </table>
<img src="../images/Outros/divisoria_noticia_titulo.png" width="450">																</div>
														  </div>
														</div>
														
																												
										  </div>
									  </div>
								  </div>
                                  
                                  
                                  <div class="inner">
										<div class="padding">		
											<div class="blog">
											
																						
											
														<div class="post-1 post hentry category-sem-categoria post-wrapper">				
														  <div class="contentpaneopen home-post-1">
								<table border="0" cellpadding="0" cellspacing="0">
								  <tr>
								    <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group1','fotos','../images/Outros/fotos.jpg',1)" onMouseOver="MM_nbGroup('over','fotos','../images/Outros/fotos.jpg','../images/Outros/fotos.jpg',1)" onMouseOut="MM_nbGroup('out')"></a></td>
							      </tr>
								  </table>
								<h3>Other Infos</h3>
                                <table border="0">
                                  <tbody>
                                    <tr>
                                      <th colspan="2">Informa&ccedil;&otilde;es do Servidor:</th>
                                      <th colspan="2">Rates:</th>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/computador.png" border="0"></td>
                                      <td width="59%"><strong>Dedicado - 24/7</strong></td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["xp"]; ?><br></td>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/computador.png" border="0"></td>
                                      <td width="59%"><strong>2x&nbsp;</strong><strong>Intel Xeon Quad-Core 5504 (8x2.0ghz)</strong></td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["sp"]; ?><br></td>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/computador.png" border="0"></td>
                                      <td width="59%"><strong>16GB de Mem&oacute;ria RAM DDR3<br>
                                      </strong></td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["adena"]; ?></td>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/computador.png" border="0"></td>
                                      <td width="59%"><strong>1TB de HD 7200 RPM<br>
                                      </strong></td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["pt"]; ?><br></td>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/computador.png" border="0"></td>
                                      <td width="59%"><strong>Uplink 100Mbps</strong></td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["drop"]; ?><br></td>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/computador.png" border="0"></td>
                                      <td width="59%"><strong>Backups Semanais</strong></td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["spoil"]; ?></td>
                                    </tr>
                                    <tr>
                                      <th colspan="4"></th>
                                    </tr>
                                    <tr>
                                      <th colspan="2">Outras Informa&ccedil;&otilde;es:</th>
                                      <th colspan="2">Enchant Rates:</th>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/add.png" border="0"></td>
                                      <td width="59%">Evento TVT</td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["safe"]; ?><br></td>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/add.png" border="0"></td>
                                      <td width="59%">Evento CTF<br></td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["max"]; ?><br></td>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/add.png" border="0"></td>
                                      <td width="59%">Evento Arena PvP</td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["ratenormal"]; ?><br></td>
                                    </tr>
                                    <tr>
                                      <td width="1%"><img src="/images/outros/add.png" border="0"></td>
                                      <td width="59%">Tattoos Customizadas</td>
                                      <td width="1%"><img src="/images/outros/check.png" border="0" width="16" height="16"></td>
                                      <td width="39%"><?php echo $RATE["ratebless"]; ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <br>
														  </div>
															<br/>

											  </div>
																<div class="post_meta_data"></div>
</div>
									</div>
														
																												
  </div>
</div>
								  </div>
								  <!-- END MAIN PAGE POSTS -->
                                  </div>
