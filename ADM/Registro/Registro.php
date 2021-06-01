<?php
include "verifica.php";

include "config/config.php";

?>
<style type="text/css">
body {
	background-image: url(../logo2.jpg);
}
</style>
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
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
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

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<body onload="MM_preloadImages('../imagens/2.png')">
<H4>Registrar</h4>
<a href="" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" name="Image1" width="282" height="101" border="0" id="Image1" /></a><br>
<a href="../index.php">Voltar</a>
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
  if (f.password2.value=="")
  {
    alert("Você não repetiu a senha");
    return false;
  }
  if (f.password.value!=f.password2.value)
  {
    alert("Senhas não são iguais ");
    return false; 
  }
  return true;
}
//]]></script>
<form method="post" action="?ir=reg" onsubmit="return checkform(this)">
<table>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Login</font></b></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="text" name="account" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Senha</font></b></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="password" name="password" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td><b><font face="Trebuchet MS" size="1">Repetir Senha</font></b></td>
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
<p><a href="Trocarsenha.php">Trocar Senha</a></p>
<?php
if(ereg("^([a-zA-Z0-9_-])*$", $_POST['account']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password2']))
{
	if ($page="index.php" && $_POST['account'] && strlen($_POST['account'])<16 && strlen($_POST['account'])>3 && $_POST['password'] && $_POST['password2'] && $_POST['password']==$_POST['password2'])
	{	
		$check=mysql_query("select * from accounts where login='".$_POST['account']."'");
		$check1=mysql_num_rows($check);
		if($check1>0)
		{
			echo "<p clss='error'><b>Falha no Registro, Conta já Existe .</b></p>";
		}
		else
		{
	  		mysql_query("INSERT INTO accounts (login, password, access_level) VALUES ('".$_POST['account']."', '".base64_encode(pack('H*', sha1($_POST['password'])))."', 0)", $link);
  			mysql_close($link);
	 		print '<p class="error"><b>Resgistro Completo... Conta Criada </b></p>';
		}
	}
	else
	{
  	print '<p class="error"><b> </b></p>'.mysql_error();
	}
}
else
{
	echo "As limitações não foram testadas para a segurança. Se você for confiável que tido a informação correta, consultar por favor à administração. ";
}
?>