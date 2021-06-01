<html>
<head>
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

echo "<title>Avadon L2 Rev "; echo $revision; echo " | "; echo $nome_server; echo "</title>";

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
      <td width=\"352\"><img src=\"imagens/logo_big.jpg\" width=\"334\" height=\"97\"></td>
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
        <a href=\"./principal.php?t=accounts.php\" class=\"style2\">Accounts</a>
        <BR>  
        <a href=\"./principal.php?t=chars.php\" class=\"style2\">Chars</a>
        <BR>
              <a href=\"./principal.php?t=clans.php\" class=\"style2\">Clans</a>
			  <BR>
			  <a href=\"./principal.php?t=ally.php\" class=\"style2\">Ally</a>
        <BR> 
              <a href=\"./principal.php?t=noble.php\" class=\"style2\">Nobless</a>
			  <BR>
              <a href=\"./principal.php?t=olly.php\" class=\"style2\">Heroes | Olly</a>
        <BR> <hr>
				
		<a href=\"./principal.php?t=clanhall.php\" class=\"style2\">ClanHall</a>
        <BR> 
		<a href=\"./principal.php?t=castle.php\" class=\"style2\">Castle</a>
         <hr>
              
              <a href=\"./principal.php?t=server.php\" class=\"style2\">Servidor</a>
			  <hr>
			        <a href=\"logoff.php\" class=\"style2\">Sair</a>
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
 
 
  <div align="right">
  <img src="imagens/logo_avadon.png" width="90" height="20">powered by Anderuimm 
</div>
</body>
</html>
