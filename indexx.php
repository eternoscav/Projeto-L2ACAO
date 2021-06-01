<?php
ini_set("display_errors", "OFF");
session_start();
include('modules/config_sql.php');
include_once("modules/site-config.php");
include_once("modules/database-config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="lineage, lineage ii, lineage 2, aukmenom, servidor, server, gracia final, gracia" />
<meta name="description" content="lineage ii aukmenom pvp server gracia final - diverção em primeiro lugar" />
<meta name="robots" content="index,nofollow">
<meta name="googlebot" content="index, nofollow">
<meta name="author" content="Llairenm Ilai" />
<meta name="copyright" content="Llairenm Ilai" />

<title><?php echo $SITE["titulo"]." - ".$SITE['slogan']; ?></title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/blockppu.js"></script>
<script type="text/javascript" src="js/sliding_effect.js"></script>
<script type="text/javascript" src="js/rollover.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/bg.jpg);
	background-repeat: no-repeat;
	background-color: #FFF;
}
body,td,th {
	color: #FFF;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 11px;
}
.title {
	font-family:Tahoma, Geneva, sans-serif;
	font-size:11px;
	color:#0C0;
}
.sign{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:11px;
	font-style:normal;
	color:#C00;
}
.sign2{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:11px;
	font-style:normal;
	font-weight:bold;
	color:#C00;
}
#Layer1 {
	position:absolute;
	width:754px;
	height:84px;
	z-index:1;
	left: 221px;
	top: 800px;
}
#Layer2 {
	position:absolute;
	width:144px;
	height:83px;
	z-index:1;
	left: 178px;
	top: 15px;
}
#Layer3 {
	position:absolute;
	width:161px;
	height:79px;
	z-index:2;
	left: 400px;
	top: 12px;
}
#Layer4 {
	position:absolute;
	width:138px;
	height:80px;
	z-index:3;
	left: 606px;
}
#Layer5 {
	position:absolute;
	width:219px;
	height:348px;
	z-index:1;
	left: 239px;
	top: 11px;
}
#Layer6 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 232px;
	top: -115px;
}
#Layer7 {
	position:absolute;
	width:200px;
	height:73px;
	z-index:2;
	left: 197px;
	top: 34px;
}
#Layer8 {
	position:absolute;
	width:200px;
	height:1px;
	z-index:1;
	top: -2px;
	left: 213px;
}
#Layer9 {
	position:absolute;
	width:261px;
	height:64px;
	z-index:2;
	left: 725px;
	top: 336px;
}
#Layer10 {
	position:absolute;
	width:179px;
	height:73px;
	z-index:3;
	left: 771px;
	top: 1036px;
}
#Layer11 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 656px;
	top: 941px;
}
.style4 {color: #0033FF}
#Layer12 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 745px;
	top: 261px;
}
#Layer13 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
	left: 984px;
	top: 297px;
}
#Layer14 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: -748px;
	top: 128px;
}
#Layer15 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 363px;
	top: 475px;
}
#Layer16 {
	position:absolute;
	width:307px;
	height:48px;
	z-index:2;
	left: 498px;
	top: 316px;
}
-->
</style>
<script type="text/javascript" src="rokbox/rokbox.js"></script>
<script type="text/javascript" src="rokbox/themes/light/rokbox-config.js"></script>
<script type="text/javascript">
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
</head>
<body onload="MM_preloadImages('images/btn_vote_on.png','images/btn_equipe_on.png','images/btn_doacoes_on.png','images/btn_info_on.png','images/btn_regras_on.png','images/btn_forum_on.png','images/btn_downloads_on.png','images/btn_registro_on.png','images/btn_principal_on.png','images/Style Top/revo_ranking.png','images/Style Top/revo_boss.png','images/Style Top/revo_sieges.png','img/nav_main/pvp_o.gif','img/nav_main/pk_o.gif','img/nav_main/karma_o.png','img/nav_main/level_o.gif','img/nav_main/rec_o.gif','img/nav_main/heros_o.gif','img/nav_main/online_o.gif','images/firefox.png')">
<div id="Layer5">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="600" height="261">
  <param name="movie" value="Flash_Top.swf" />
        <param name="quality" value="high" />
        <embed src="star.swf" width="600" height="261" wmode="transparent" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
  </object></div>

<table width="100%" height="32" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th width="1" scope="col"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>          </tr>
    </table>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="203" valign="top" scope="col"><div align="center"><img src="images/dec_top.png" width="203" height="51" /></div>
      <table width="194" border="0" align="center" cellpadding="0" cellspacing="0" background="images/nav_bg.png">
        <tr>
          <td width="194"><div align="center"> <a href="indexx.php?sec=home" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image53','','images/btn_principal_on.png',1)"><img src="images/btn_principal.png" alt="Home" name="Image53" width="192" height="26" border="0" id="Image53" /></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
            <a href="indexx.php?sec=nova_conta" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image52','','images/btn_registro_on.png',1)"><img src="images/btn_registro.png" alt="Registro" name="Image52" width="192" height="26" border="0" id="Image52" /></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
            <a href="indexx.php?sec=downloads" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image51','','images/btn_downloads_on.png',1)"><img src="images/btn_downloads.png" alt="Downloads" name="Image51" width="192" height="26" border="0" id="Image51" /></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
            <a href="<?php echo $FORUM["link"]; ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image50','','images/btn_forum_on.png',1)"><img src="images/btn_forum.png" alt="Fórum" name="Image50" width="192" height="26" border="0" id="Image50" /></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
            <a href="indexx.php?sec=regras" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image49','','images/btn_regras_on.png',1)"><img src="images/btn_regras.png" alt="Regras" name="Image49" width="192" height="26" border="0" id="Image49" /></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
            <a href="indexx.php?sec=infos" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image48','','images/btn_info_on.png',1)"><img src="images/btn_info.png" alt="Informações" name="Image48" width="192" height="26" border="0" id="Image48" /></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
            <a href="indexx.php?sec=donate" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image47','','images/btn_doacoes_on.png',1)"><img src="images/btn_doacoes.png" alt="Doações" name="Image47" width="192" height="26" border="0" id="Image47" /></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
            <a href="indexx.php?sec=staff" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image46','','images/btn_equipe_on.png',1)"><img src="images/btn_equipe.png" alt="Eqipe" name="Image46" width="192" height="26" border="0" id="Image46" /></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
            <a href="contato/contato.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image41','','images/btn_vote_on.png',1)"><img src="images/btn_vote.png" alt="Vote" name="Image41" width="192" height="26" border="0" id="Image41" /></a> </div></td>
        </tr>
      </table>
      <div align="center">
       <img src="images/dec_bottom.png" width="203" height="50" /><br />
<br />
<div align="center"><img src="images/dec_top.png" width="203" height="51" /></div>
 <table width="194" border="0" align="center" cellpadding="0" cellspacing="0" background="images/nav_bg.png">
        <tr>
          <td width="194"><div align="center"> <a href="indexx.php?sec=stat" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image54','','images/Style Top/revo_ranking.png',1)"></a><br />
            <img src="images/clear.gif" width="10" height="10" /><br />
		  <a href="javascript:abrir('pags/bosses.php');" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image55','','images/Style Top/revo_boss.png',1)"><img src="images/Style Top/revo_boss.png" alt="Raid Boss" name="Image55" width="170" height="120" border="0" id="Image55" /></a><br />
		  <img src="images/clear.gif" width="10" height="10" /><br />
		  <a href="indexx.php?sec=sieges" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image56','','images/Style Top/revo_sieges.png',1)"><img src="images/Style Top/revo_sieges.png" alt="Sieges" name="Image56" width="170" height="120" border="0" id="Image56" /></a>        </tr>
      </table>
      <div align="center">
       <img src="images/dec_bottom.png" width="203" height="50" /><br />
	   
    <th align="left" valign="top" scope="col"><table width="789" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="col"><img name="title_regras" src="images/title.png" width="789" height="62" border="0" id="title_regras" /></th>
        </tr>
        <tr>
          <td valign="top" background="images/bg_content_2.png"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th width="18" scope="col"><img src="images/clear.gif" width="18" height="18" /></th>
			  
              <td valign="top" scope="col"><table width="100%" border="0" cellspacing="5" cellpadding="5">
                 <tr>
                  <th valign="top" scope="col"><div align="center"><?php 
								include_once("pags/login.php"); ?>
                  </div></th>
				  
                </tr>
                <tr>
                  <th valign="top" scope="col">								<?php 
								include_once("paginas.php"); ?></th>
                </tr>
              </table>
                  </em></a></li></td>
				  
              <th width="4" scope="col"><img src="images/clear.gif" width="4" height="4" /></th>
              <th width="170" align="center" valign="top" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <th width="50%" height="75" align="center" valign="middle" scope="col"><a href="<?php echo $DOWN["link_game_download"]; ?>" target="_blank"><img src="images/rb_gamedownload.jpg" alt="Cliente Hellbound Download" width="159" height="63" border="0" /></a><br /></th>
                </tr>
                <tr>
                  <th height="30" scope="col"><a href="<?php echo $DOWN["link_patch_download"]; ?>" target="_blank"><img src="images/rb_testdownload.jpg" width="159" height="67" border="0" /></a><br /></th>
                  </tr>
				                  <tr>
                  <th height="30" scope="col"><a href="galery/indexx.php" target="_blank"></a><br />
				  <span>Login Server:</span> <em>
                  <?php 
$fp = @fsockopen("$ip", 2106, $errno, $errstr, 1);
if($fp >= 1){
	echo '<span class="confirm"><img src="img/tick.png" alt="(Online)" /></span>'; 
	}else{ echo '<span class="error"><img src="img/cross.png" alt="(Offline)" /></span>'; } 
?>
                  </em></a></li>
                <p><span>Game Server:</span> <em>
                  <?php 
$fp = @fsockopen("$ip", 7777, $errno, $errstr, 1);
if($fp >= 1){
	echo '<span class="confirm"><img src="img/tick.png" alt="(Online)" /></span>';
	}else{ echo '<span class="error"><img src="img/cross.png" alt="(Offline)" /></span>'; } 
?>
                  </em></a></li></th>
                  </tr>
                <tr>
                  <th height="30" scope="col"><img src="img/nav_main/top_server.png" width="129" height="22" border="0" /></a></th>
                  </tr>
                <tr>
                  <th height="30" scope="col"><a href="indexx.php?sec=top_pvp" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image57','','img/nav_main/pvp_o.png',1)"><img src="img/nav_main/pvp.png" alt="Top Pvp" name="Image57" width="129" height="22" border="0" id="Image57" /></a></th>
                  </tr>                <tr>
                  <th height="30" scope="col"><a href="indexx.php?sec=top_pk" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image58','','img/nav_main/pk_o.png',1)"><img src="img/nav_main/pk.png" alt="Top Pk" name="Image58" width="129" height="21" border="0" id="Image58" /></a></th>
                  </tr>                <tr>
                  <th height="30" scope="col"><a href="indexx.php?sec=top_karma" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image59','','img/nav_main/karma_o.png',1)"><img src="img/nav_main/karma.png" alt="Top Karma" name="Image59" width="129" height="21" border="0" id="Image59" /></a></th>
                  </tr>                <tr>
                  <th height="30" scope="col"><a href="indexx.php?sec=top_level" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image60','','img/nav_main/level_o.png',1)"><img src="img/nav_main/level.png" alt="Top Level" name="Image60" width="129" height="21" border="0" id="Image60" /></a></th>
                  </tr>
				  <th height="30" scope="col"><a href="indexx.php?sec=top_rec" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image61','','img/nav_main/rec_o.png',1)"><img src="img/nav_main/rec.png" alt="Top Rec" name="Image61" width="129" height="21" border="0" id="Image61" /></a></th>
                  </tr>
				  <th height="30" scope="col"><a href="indexx.php?sec=top_heroes" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image601','','img/nav_main/heros_o.png',1)"><img src="img/nav_main/heros.png" alt="Top Level" name="Image601" width="129" height="21" border="0" id="Image601" /></a></th>
                  </tr>
				  <th height="30" scope="col"><a href="indexx.php?sec=tempo_online" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image602','','img/nav_main/online_o.png',1)"><img src="img/nav_main/online.png" alt="Top Level" name="Image602" width="129" height="21" border="0" id="Image602" /></a></th>
                  </tr>
				 <th height="30" scope="col"><span class="style4">Melhor Performance</a></span></th>
                  </tr>
				  <th height="30" scope="col"><a href="http://br.mozdev.org/" target="_blank" onmouseover="MM_swapImage('Image54','','images/firefox.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/firefox.png" alt="Firefox" name="Image54" width="80" height="15" border="0" id="Image54" /></a></th>
                  </tr>
				  
                    <th height="30" scope="col"><span class="style4">Resolução 1280x1024</span>
                  </table></th>
			 
              <th width="16" scope="col"><img src="images/clear.gif" width="16" height="16" /></th>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><img src="images/bg_content_footer_2.png" width="789" height="35" /></td>
        </tr>
      </table>
    <img src="images/footer.png" width="778" height="160"/></th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col"><div align="center">
      <div id="Layer5">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="600" height="294" align="top">
          <param name="movie" value="Flash_Top.swf" />
          <param name="quality" value="high" />
          <embed src="Flash_Top.swf" width="600" height="294" align="top" wmode="transparent" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
        </object>
      </div>
 Copyright © 2010 - Lineage II Server - Todos os direitos reservados para RevoltadO.</div></th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
</body>

</html>