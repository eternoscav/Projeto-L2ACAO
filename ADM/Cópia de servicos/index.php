<html>
<head>
<?php
include "verifica.php";

include "config/config.php";

?>
<style type="text/css">
body {
	background-image: url(../logo2.jpg);
}
</style>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<style type="text/css">
<!--
.style1 {
	font-size: 10px;
	font-style: italic;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-decoration: none;
	color: #000000;
}
-->
</style>
</head><body>
  <?php
include "./configs/config.php"; 
include "conecta.php";

echo "<title>L2 AÇÃO "; echo $revision; echo " | "; echo $nome_server; echo "</title>";

 session_name('sistema');
 session_start();
 if($_SESSION['access'] < $accesslevel_admin)
 {
    echo "Acesso negado. Você não tem privilégios para acessar esta área do site.";
    exit();
 }
 else
 {


echo "<table width=\"954\ border=\"0\">
    <tr>
      <td width=\"352\"><img src=\"imagens/1.png\" width=\"200\" height=\"97\"></td>
      <td width=\"590\" rowspan=\"3\"><div align=\"center\" style=\"width:620px; height: 160px; overflow: auto;\">";
	  include "./configs/cr.php"; 
	  echo " 
	  </div></td>
    </tr>
    <tr>
      <td>Ol&aacute; <strong>{$_SESSION['login']}</strong>.</td>
    </tr>
    <tr>
      <td>Seu &uacute;ltimo click foi em "; echo date('d/m/Y'); echo " &agrave;s "; echo date('H:i:s'); echo ".</td>
    </tr>
    <tr>
      <td><center>
      </center></td><td></td>
    </tr>
 </table>  
  <hr>
  <table width=\"954\" border=\"0\">
    <tr>
      <td width=\"111\" align=\"left\" valign=\"top\">
        <a href=\"./index.php?t=accounts.php\" class=\"style\">CONTAS</a>
        <BR>  
        <a href=\"./index.php?t=chars.php\" class=\"style\">CHARS</a>
        <BR>
              <a href=\"./index.php?t=clans.php\" class=\"style\">CLANS</a>
			  <BR>
			  <a href=\"./index.php?t=ally.php\" class=\"style\">ALIANÇAS</a>
        <BR> 
              <a href=\"./index.php?t=noble.php\" class=\"style\">NOBLESS</a>
			  <BR>
              <a href=\"./index.php?t=olly.php\" class=\"style\">HEROES | OLY</a>
        <BR> <hr>
				
		<a href=\"./index.php?t=clanhall.php\" class=\"style\">CLAN HALL</a>
        <BR> 
		<a href=\"./index.php?t=castle.php\" class=\"style\">CASTELOS</a>
         <hr>
              
              <a href=\"./index.php?t=server.php\" class=\"style\">SERVIDOR</a>
			  <hr>
			        <a href=\"logoff.php\" class=\"style\">SAIR</a>
      </td>
      <td width=\"2\" align=\"center\" valign=\"top\" bgcolor=\"#CCCCCC\">&nbsp;</td>
      <td align=\"center\" valign=\"top\"><div align=\"center\" style=\"width:830px; height:310px; overflow: auto;\">";

	  
   if(isset($_GET['t']))
   {
      include("telas/{$_GET['t']}");
   }

     echo " </div></td>
    </tr>
  </table>"; 
  }
  ?>
 
 

</body>
</html>
