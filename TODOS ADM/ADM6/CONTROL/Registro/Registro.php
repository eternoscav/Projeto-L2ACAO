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
<H4>Registrar</h4>
<img src="../imagens/logo.png" border="0" alt="Logo Stronger"><br><a href="../index.php">Atras</a>
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
    alert("Rellena todos los campos!");
    return false;
  }
  if (!isAlphaNumeric(f.account.value))
  {
    alert("Rellena todos los campos!");
    return false;
  }
  if (f.password.value=="")
  {
    alert("Pass ");
    return false;
  }
  if (!isAlphaNumeric(f.password.value))
  {
    alert("444444");
    return false;
  }
  if (f.password2.value=="")
  {
    alert("Repetir la Pass");
    return false;
  }
  if (f.password.value!=f.password2.value)
  {
    alert("Las pass no son iguales ");
    return false; 
  }
  return true;
}
//]]></script>
<form method="post" action="?ir=reg" onsubmit="return checkform(this)">
<table>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Cuenta</font></b></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="text" name="account" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Pass</font></b></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="password" name="password" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Repetir Pass</font></b></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="password" name="password2" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td colspan="2" style="text-align: center;">
  <font size="1" face="Trebuchet MS"><b><br />
  <input type="submit" name="submit" value="Registrar" /></b></font></td>
 </tr>
</table>
</form>
<p><a href="Trocarsenha.php">Cambiar Pass</a></p>
<?php
if(ereg("^([a-zA-Z0-9_-])*$", $_POST['account']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password2']))
{
	if ($page="index.php" && $_POST['account'] && strlen($_POST['account'])<16 && strlen($_POST['account'])>3 && $_POST['password'] && $_POST['password2'] && $_POST['password']==$_POST['password2'])
	{	
		$check=mysql_query("select * from accounts where login='".$_POST['account']."'");
		$check1=mysql_num_rows($check);
		if($check1>0)
		{
			echo "<p clss='error'><b>Fallo, la cuenta ya existe</b></p>";
		}
		else
		{
	  		mysql_query("INSERT INTO accounts (login, password, access_level) VALUES ('".$_POST['account']."', '".base64_encode(pack('H*', sha1($_POST['password'])))."', 0)", $link);
  			mysql_close($link);
	 		print '<p class="error"><b>Resgistro Completo... Cuenta creada </b></p>';
		}
	}
	else
	{
  	print '<p class="error"><b> </b></p>'.mysql_error();
	}
}
else
{
	echo "Si tu cuenta no funciona, porfavor consultalo con la administracion";
}
?>