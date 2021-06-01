<?
$login = $_POST['usu'];
$senha = base64_encode(pack('H*', sha1($_POST['pass'])));

include_once("../modules/database-config.php");

defined('BLOCK')or die("Este arquivo nao pode ser acessado diretamente!");

$sql = mysql_query("SELECT * FROM accounts WHERE login = '$login'");
$cont = mysql_num_rows($sql);
while ($linha = mysql_fetch_array($sql)){
	$senha_db = $linha['password'];
	$access = $linha[$TABLE["access"]];
}
if($cont == 0){

	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=../indexx.php'>
	<script type=\"text/javascript\">
	alert(\"O nome de usuario e/ou senha nao corresponde.\");
	</script>";
}
else{

	if($senha_db != $senha){//confere senha
	
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT='0; URL=../indexx.php'>
	<script type=\"text/javascript\">
	alert(\"O nome de usuario e/ou senha nao corresponde.\");
	</script>";
	
}else{
	session_start();
	$_SESSION['login_usuario'] = $login;
	$_SESSION['senha_usuario'] = $senha;
	$_SESSION['access_usuario'] = $access;
	
	header('Location: ../indexx.php');
	}
}
mysql_close($db);
?>