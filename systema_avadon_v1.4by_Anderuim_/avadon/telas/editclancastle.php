<?
$server = 'localhost';
$user   = 'root';
$senha  = '3427821';
$db     = 'l2acaopvp';

$con = mysql_connect($server, $user, $senha) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());
?>