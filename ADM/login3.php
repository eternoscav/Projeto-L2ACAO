<?php
include "./configs/config.php";
$login = $_POST['login'];
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');

mysql_select_db($server_db,$link) or die('Erro na base');
  	$result=mysql_query("SELECT login,password,accessLevel FROM accounts WHERE login='".@mysql_real_escape_string($_POST['usuario'])."' AND password='".base64_encode(pack('H*', sha1($_POST['senha'])))."'", $link)
	    or die ("Error: ".mysql_error());
		
  	if (mysql_num_rows($result))
  	{

 $dado= mysql_fetch_array($result);
 
 session_name('sistema');
 session_start();
 $_SESSION['login']      = $dado['login'];
 $_SESSION['access']     = $dado['accessLevel'];
  //7 - coloca o usuário na tela inicial do sistema
 header("Location:principal.php?t=server.php");
  	}
  	else
	{
	    print "<script type=\"text/javascript\">
alert('Login incorreto!');
javascript:history.back();
</script>";
	}
?>