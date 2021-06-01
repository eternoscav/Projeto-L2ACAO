
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
    alert("Preencha todos os campos!");
    return false;
  }
  if (!isAlphaNumeric(f.account.value))
  {
    alert("Preencha todos os campos!");
    return false;
  }
  if (f.password.value=="")
  {
    alert("Sem Senha ");
    return false;
  }
  if (!isAlphaNumeric(f.password.value))
  {
    alert("444444");
    return false;
  }
  if (f.char.value=="")
  {
    alert("Indique o nome do Char");
    return false;
  }
  if (!isAlphaNumeric(f.char.value))
  {
    alert("444444");
    return false;
  }
  return true;
}
//]]></script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<center>
<form method="post" action="indexx.php?sec=destravar" onsubmit="return checkform(this)">
  <p align="left" class="style1">Destravar Char </p>
  <table align="left">
 <tr>
  <td><b class="style5"><font face="Trebuchet MS">Login : </font></b></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="text" name="account" id="account" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td><b class="style5"><font face="Trebuchet MS">Senha : </font></b></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="password" name="password" id="password" maxlength="150" size="20" /></b></font></td>
 </tr>
  <tr>
  <td><b class="style5"><font face="Trebuchet MS">Char : </font></b></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="text" name="char" maxlength="150" id"char" size="20" /></b></font></td>
 </tr>
 <tr>
  <td colspan="2" style="text-align: center;">
  <font size="1" face="Trebuchet MS"><b><br />
  <input type="submit" name="submit" value="Destravar" /></b></font></td>
 </tr>
</table>
<p align="left">&nbsp;</p>
</form></center>
<?php
if(ereg("^([a-zA-Z0-9_-])*$", $_POST['account']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password']))
{
	if ($page='indexx.php?sec=destravar' && $_POST['account'] && strlen($_POST['account'])<16 && $_POST['password'])
	{
  	$result=mysql_query("SELECT login,password FROM accounts WHERE login='".@mysql_real_escape_string($_POST['account'])."' AND password='".base64_encode(pack('H*', sha1($_POST['password'])))."'", $link) or die ("Error: ".mysql_error());
	$result1=mysql_num_rows($result);
	$result2=mysql_query("SELECT * FROM characters WHERE account_name='".$_POST['account']."' AND char_name='".$_POST['char']."'") or die ("Erro");
	$result3=mysql_num_rows($result2);
	if ($result1<1)
	{
		echo "<p><b>Conta incorreta.</b></p>";
	}
  	elseif ($result3<1)
	{
		echo "<p><b>Char n&atilde;o encontrado.</b></p>";
	}
	else
  	{
    	mysql_query("UPDATE characters SET x=82551,y=147943,z=-3404 WHERE account_name='".$_POST['account']."' AND char_name='".$_POST['char']."'", $link) or die ("Erro");
	    print "<p style=\"font-weight: bold;\">Char Destravado</p>";
  	}
	}
}
?>