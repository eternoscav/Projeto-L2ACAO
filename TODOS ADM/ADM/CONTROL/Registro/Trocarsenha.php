<?php
$L2JBS_config["mysql_host"]="localhost";	// MySQL IP
$L2JBS_config["mysql_port"]=3306;		// MySQP port
$L2JBS_config["mysql_db"]="l2acaopvp";		// l2jdb or your lineage 2 server database name
$L2JBS_config["mysql_login"]="root";		// MySQL Login name	
$L2JBS_config["mysql_password"]="3427821";		// MySQL Password

error_reporting(0);
?>
<?php
$L2JBS_config["javascript_sort_method"]="bubble";
  $link = mysql_connect($L2JBS_config['mysql_host'].":".$L2JBS_config['mysql_port'], $L2JBS_config['mysql_login'], $L2JBS_config['mysql_password']);
  if (!$link)
    die("Couldn't connect to MySQL");
  @mysql_select_db($L2JBS_config['mysql_db'], $link)
    or die ('Error '.mysql_errno().': '.mysql_error());

?>
<H4>Mudar Senha</h4>
<img src="../imagens/logo.jpg" border="0" alt="Logo Stronger"><br><a href="../index.php">Voltar</a>
<script type="text/javascript">//<![CDATA[
function isAlphaNumeric(value)
{
  if (value.match(/^[a-zA-Z0-9]+$/))
    return true;
  else
    return false;
}
function checkform(f)
{
  if (f.account.value=="")
  {
    alert("Rellena todos los campos del formulario");
    return false;
  }
  if (!isAlphaNumeric(f.account.value))
  {
    alert("Rellena todos los campos del formulario");
    return false;
  }
  if (f.oldpassword.value=="")
  {
    alert("Coloca tu Pass antigua");
    return false;
  }
  if (f.newpassword.value=="")
  {
    alert("Pass erronea");
    return false;
  }
  if (!isAlphaNumeric(f.newpassword.value))
  {
    alert("44444");
    return false;
  }
  if (f.newpassword2.value=="")
  {
    alert("Repite la Pass");
    return false;
  }
  if (f.newpassword.value!=f.newpassword2.value)
  {
    alert(" La pass no es igual!  ");
    return false; 
  }
return true;
}
//]]></script>
</head>
<body>
<form method="post" action="./?ir=changepassword" onsubmit="return checkform(this)">
<table>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Cuenta</font></b></td>
  <td>
  <font size="1"><b>
  <input maxlength="15" name="account" type="text" size="20" style="font-family: Trebuchet MS; " /></b></font></td>
 </tr>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Pass Actual</font></b></td>
  <td><font size="1"><b>
  <input maxlength="15" name="oldpassword" type="password" size="20" style="font-family: Trebuchet MS; "  /></b></font></td>
 </tr>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Nueva Pass</font></b></td>
  <td><font size="1"><b>
  <input maxlength="15" name="newpassword" type="password" size="20" style="font-family: Trebuchet MS; "  /></b></font></td>
 </tr>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Repetir Pass </font></b> </td>
  <td><font size="1"><b>
  <input maxlength="15" name="newpassword2" type="password" size="20" style="font-family: Trebuchet MS; "  /></b></font></td>
 </tr>
 <tr>
  <td colspan="2" style="text-align: center;"><b>
  <font face="Trebuchet MS" size="1"><br /></font></b><font size="1"><b>
  <input type="submit" name="submit" value="Modificar" style="font-family: Trebuchet MS" /></b></font></td>
 </tr>
</table>
</form>
<center>
<?php
if(ereg("^([a-zA-Z0-9_-])*$", $_POST['account']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['oldpassword']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['newpassword']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['newpassword2']))
{
	if ($page='index.php' && $_POST['account'] && strlen($_POST['account'])<16 && $_POST['oldpassword'] && $_POST['newpassword'] && $_POST['newpassword']==$_POST['newpassword2'])
	{
  	$result=mysql_query("SELECT login,password FROM accounts WHERE login='".@mysql_real_escape_string($_POST['account'])."' AND password='".base64_encode(pack('H*', sha1($_POST['oldpassword'])))."'", $link)
	    or die ("Error: ".mysql_error());
  	if (mysql_num_rows($result))
  	{
    	mysql_query("UPDATE accounts SET password='".base64_encode(pack('H*', sha1($_POST['newpassword'])))."' WHERE login='".mysql_real_escape_string($_POST['account'])."'", $link)
      	or die ("Error: ".mysql_error());
	    print "<p style=\"font-weight: bold;\">Pass modificada. </p>";
  	}
  	else
	    print "<p class=\"error\"><font size=1 color=ffffff>Ha avido algun error, prueba de nuevo</font> </p>";
  	mysql_close($link);
	}
}
else
{
	echo "<font size=1 color=ffffff>Si se detecta algun problema contactar con la administracion</font>";
}
?>
</center>
           
