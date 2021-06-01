<?
$login = $_POST['login'];
$senha = base64_encode(pack('H*', sha1($_POST['senha'])));

include "config/config.php";

$sql = mysql_query("SELECT * FROM accounts WHERE login = '$login'");
$cont = mysql_num_rows($sql);
while ($linha = mysql_fetch_array($sql)){
	$senha_db = $linha['password'];
	$acess = $linha['accessLevel'];
}
if($cont == 0){

	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
	<script type=\"text/javascript\">
	alert(\"O nome de usuario nao corresponde.\");
	</script>";
	break;
}
if($acess != 1){

	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
	<script type=\"text/javascript\">
	alert(\"Voce nao e um administrador.\");
	</script>";
	break;
}
else{

	if($senha_db != $senha){//confere senha
	
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
	<script type=\"text/javascript\">
	alert(\"A senha nao corresponde.\");
	</script>";
	break;
	
}else{
	session_start();
	$_SESSION['login_usuario'] = $login;
	$_SESSION['senha_usuario'] = $senha;
	
	header('Location: index.php');
	}
}
mysql_close($db);
?>