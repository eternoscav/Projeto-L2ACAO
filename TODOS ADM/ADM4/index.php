<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Painel - ADM</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #FFF;
	text-decoration: none;
}
#tabela {
	background-image: url(imagens/btn.jpg);
	background-repeat: repeat-x;
	color:#000000;
	margin-top: 1px;
	padding-bottom: 7px;
}
#tabela:hover {
	background-image: url(imagens/btn2.jpg);
	background-repeat: repeat-x;
	color:#FFFFFF;
	margin-top: 1px;
	padding-bottom: 7px;
}
a {
	font-weight: bold;
}
-->
</style></head>

<body link="#00000" vlink="#00000" alink="#00FF00">
<strong><h2>PAINEL L][ STRONGER</h2></strong>
<table width="700" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="200" align="center" valign="top"><img src="imagens/logo.jpg" width="200" height="200" alt="Logo" /></td>
    <td width="487" align="center" valign="middle"><table width="129" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="aio/index.php">AIO</a></td>
      </tr>
      <tr>
        <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="doacao/index.php">DOACAO</a></td>
      </tr>
      <tr>
        <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="drop/drop.php">DROP</a></td>
      </tr>
      <tr>
        <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="heroes/heroes.php">HEROS</a></td>
      </tr>
      <tr>
        <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="players/players.php">PLAYERS</a></td>
      </tr>
      <tr>
       <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="rank/select.php">RANK</a></td>
      </tr>
      <tr>
       <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="ids/ids.php">IDS</a></td>
      </tr>
      <tr>
        <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="Registro/Registro.php">REGISTRO</a></td>
      </tr>
      <tr>
       <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="chars/index.php">CHARS</a></td>
      </tr>
            <tr>
       <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="doadores/index.php">DOADORES</a></td>
      </tr>
    </table></td>
    <td width="487" align="left" valign="top"><p>
<?php
include "config.php"; 

//Consultas no Banco
$sql1 = mysql_query("SELECT login FROM accounts");
$contagem1 = mysql_num_rows($sql1);

$sql2 = mysql_query("SELECT char_name FROM characters");
$contagem2 = mysql_num_rows($sql2);

$sql3 = mysql_query("SELECT online FROM characters WHERE online = 1");
$contagem3 = mysql_num_rows($sql3);

$sql4 = mysql_query("SELECT online FROM characters WHERE online = 1 AND accesslevel = 200");
$contagem4 = mysql_num_rows($sql4);

$sql5 = mysql_query("SELECT online FROM characters WHERE online = 1 AND accesslevel = 100");
$contagem5 = mysql_num_rows($sql5);

echo "<br>*-<font color='C8B560' size='2'><strong>Contas: </strong></font><font color='#008000'><font size='1'>$contagem1</font></font>";
echo "<br>*-<font color='C8B560' size='2'><strong>Characters: </strong></font><font color='#008000'><font size='1'>$contagem2</font></font>";
echo "<br>†-<font color='FF0000' size='2'><strong>ADM's Online: </strong></font><font color='#008000'><font size='1'>$contagem4</font></font>";
echo "<br>*-<font color='C8B560' size='2'><strong>GM's Online: </strong></font><font color='#008000'><font size='1'>$contagem5</font></font>";
echo "<br>*-<font color='C8B560' size='2'><strong>Player's Online: </strong></font><font color='#008000'><font size='1'>$contagem3</font></font><br>";
// Login Server
$server = "127.0.0.1"; // Ip local da rede
$port   = "2106";  //porta

function pingDomain($server){
    $starttime = microtime(true);//Server 1 Port
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file)
      $status = -1;
    else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
    }
    return $status;
}      

        $status = pingDomain($serverbase);
        if ($status <= 50) $MessageStatus = "Great";
        elseif ($status <= 80) $MessageStatus = "Good";
        elseif ($status <= 100) $MessageStatus = "Ok";
        elseif ($status <= 150) $MessageStatus = "Bad";
        elseif ($status <= 999) $MessageStatus = "Down";
        else $MessageStatus = "Disconnected";


$upmessage = "<font size='1' face='verdana' color='#0066FF' ><br>Ping: </font><font color='gray' face='verdana' 

size='1'>$MessageStatus</font><br>";
$downmessage = "<font size='1' face='verdana' color='#0066FF'><br>Ping: </font><font color='gray' face='verdana' 

size='1'>Disconnected</font><br>";
$tout = "5";
$server1 = @fsockopen ($server, $port, $errno, $errstr, $tout);
if(!$server1){ echo"<br><font color='C8B560' size='2' face='verdana'><strong>Login</strong></font><br><font 

size='1' face='verdana' color='#0066FF'>Status:</font><font color='red' size='1' face='verdana'> Down</font>$downmessage"; }
else { echo"<br><font color='C8B560' size='2' face='verdana'><strong>Login</strong></font><br><font size='1' face='verdana' 

color='#0066FF'>Status:</font><font color='green' size='1' face='verdana'> Online</font>$upmessage"; }


//Game Server
$server2 = "localhost"; //ip local da maquina
$port2 = "7777";   // porta pro gameserver

function pingDomain2($server2){
    $starttime2 = microtime(true);//Server 2 Port
    $stoptime2  = microtime(true);
    $status2    = 0;

    if (!$file2) $status2 = -1;
    else {
        fclose($file2);
        $status2 = ($stoptime2 - $starttime2) * 1000;
        $status2 = floor($status2);
    }
}      

        $status2 = pingDomain2($serverbase2);
        if ($status2 <= 50) $MessageStatus2 = "Great";
        elseif ($status2 <= 80) $MessageStatus2 = "Good";
        elseif ($status2 <= 100) $MessageStatus2 = "Ok";
        elseif ($status2 <= 150) $MessageStatus2 = "Bad";
        elseif ($status2 <= 999) $MessageStatus2 = "Down";
        else $MessageStatus2 = "Disconnected";


$upmessage2 = "<font size='1' face='verdana' color='#0066FF'><br>Ping: </font><font color='gray' face='verdana' 

size='1'>$MessageStatus2</font><br>";
$downmessage2 = "<font size='1' face='Verdana' color='#0066FF'><br>Ping: </font><font color='gray' face='verdana' 

size='1'>Disconnected</font><br>";
$tout = "5";
$server2 = @fsockopen ($server2, $port2, $errno, $errstr, $tout);
if(!$server2){ echo"<br><font color='C8B560' size='2' 

face='verdana'><strong>Gameserver</strong></font><br><font size='1' face='verdana' color='#0066FF'>Status:</font><font 

color='red' size='1' face='verdana'> Down</font>$downmessage2"; }
else { echo"<br><font color='C8B560' size='2' face='verdana'><strong>Gameserver</strong></font><br><font 

size='1' face='verdana' color='#0066FF'>Status:</font><font color='green' size='1' face='verdana'> Online</font>$upmessage2"; }


?>
</p></td>
  </tr>
</table>
</body>
</html>