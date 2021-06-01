<?php defined('BLOCK')or die("Este arquivo nao pode ser acessado diretamente!"); ?>
<style type="text/css">
<!--
.style4 {color: #FFFFFF}
.style5 {color: #FFFF00}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<body onLoad="MM_preloadImages('../images/register-over.png')">
<div class="inner">
										<div class="padding">		
											<div class="blog">
											
																						
											
														<div class="post-1 post hentry category-sem-categoria post-wrapper">				
															<div class="contentpaneopen home-post-1">
																<div class="module" style="padding: 0 !important;">
    <?php 
	if(isset($_SESSION['login_usuario']) and isset($_SESSION['senha_usuario'])){
		?>
		 <h3 align="center"><strong>Painel de Controle de Usu&aacute;rios!</strong></h3>
																</div>
<div class="post_content">

<table width="496" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="106" height="48" bgcolor="#3333CC"><h4><a href="?sec=altera">Trocar senha</a></h4></td>
    <?php if(isset($_SESSION['access_usuario']) and $_SESSION['access_usuario'] == $ACCESS["change"]){ ?>
    <td width="120" bgcolor="#3333CC"><a href="?sec=news">
      <h4>Escrever News</h4>
    </a></td>
	<?php }?>
	<td width="112" bgcolor="#3333CC"><h4><a href="?sec=destravar">Destravar Char</a></span></h4></td>
    <td width="93" bgcolor="#3333CC"><h4><a href="pags/logout.php"><strong>Deslogar</strong></a><strong></span></strong></h4></td>
  </tr>
</table>
<table>
<tr><img src="../images/Outros/divisoria_noticia_titulo.png">
</tr></table>
		<?php }else{ ?>
                                                                <h3 align="center">L O G I N</h3>
</div>
<div class="post_content">
<form name="form1" method="post" action="pags/logar.php">
  <table width="448" height="55" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td width="37%"><label><img src="../images/user.png" width="20" height="25">USUARIO
          
          <input type="text" name="usu" id="usu">
      </label></td>
      <td width="42%"><label>
          <img src="../images/key.png" width="18" height="16">SENHA
<input type="password" name="pass" id="pass">
      </label></td>
      <td width="21%"><input name="Submit" type="submit" id="button" value="Login"></td>
    </tr>
  </table>

  <p align="center"><a href="indexx.php?sec=nova_conta" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','images/register-over.png',1)"><img src="images/register-over.png" alt="Registro" name="Image3" width="341" height="69" border="0"></a></p>
  <p align="center"><img src="../images/Outros/divisoria_noticia_titulo.png" width="542" height="28"></p>
</form>
<?php }?>
</div>
																<div></div>
															</div>
														</div>
														
																												
										  </div>
									  </div>
</div>