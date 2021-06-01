<?php
include "verifica.php";

include "config/config.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="blocks/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Painel Admin L2 ACAO</title>
<script><!--
var tit = document.title;
var c = 0;

function writetitle()
{
document.title = tit.substring(0,c);
if(c==tit.length)
{
c = 0;
setTimeout("writetitle()", 3000)
}
else
{
c++;
setTimeout("writetitle()", 200)
}
}
writetitle()
// --></script>
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
	background-image: url(imagens/bnt.jpg);
	background-repeat: repeat-x;
	color:#000000;
	margin-top: 1px;
	padding-bottom: 7px;
}
#tabela:hover {
	background-image: url(imagens/bnt2.jpg);
	background-repeat: repeat-x;
	color:#FFFFFF;
	margin-top: 1px;
	padding-bottom: 7px;
}
a {
	font-weight: bold;
}
.style1 {color: #0033CC}
-->
</style>
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
</head>

<body link="#00000" vlink="#FFFFFF" alink="#00FF00" onload="MM_preloadImages('imagens/2.png')">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagens/3.png" width="282" height="101" />
 <table width="700" border="0" cellspacing="1" cellpadding="1">
  <tr>

    <td width="487" align="center" valign="middle"><table width="129" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="aio/index.php">AIO</a></td>
      </tr>
      <tr>
        <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="personagem/personagem.php">INF. PERSONAGEM</a></td>
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
            <tr>
       <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="servicos/index.php">SERVIÇOS</a></td>
      </tr>
            <tr>
       <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="castle/index.php">CASTELOS</a></td>
      </tr>
               <tr>
       <td width="129" height="37" align="center" valign="middle" id="tabela"><a href="sair.php">SAIR</a></td>
      </tr>
    </table></td>
    <td width="487" align="left" valign="top">
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
echo "<br>*-<font color='C8B560' size='2'><strong>Personagenss: </strong></font><font color='#008000'><font size='1'>$contagem2</font></font>";
echo "<br>*-<font color='FF0000' size='2'><strong>ADM's Online: </strong></font><font color='#008000'><font size='1'>$contagem4</font></font>";
echo "<br>*-<font color='C8B560' size='2'><strong>GM's Online: </strong></font><font color='#008000'><font size='1'>$contagem5</font></font>";
echo "<br>*-<font color='C8B560' size='2'><strong>Jogadores Onlines: </strong></font><font color='#008000'><font size='1'>$contagem3</font></font><br>";
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
        elseif ($status <= 999) $MessageStatus = "down";
        else $MessageStatus = "Disconnected";


$upmessage = "<font size='1' face='verdana' color='#0066FF' ><br>Ping: </font><font color='gray' face='verdana' 

size='1'>$MessageStatus</font><br>";
$downmessage = "<font size='1' face='verdana' color='#0066FF'><br>Ping: </font><font color='gray' face='verdana' 

size='1'>Desconectado</font><br>";
$tout = "5";
$server1 = @fsockopen ($server, $port, $errno, $errstr, $tout);
if(!$server1){ echo"<br><font color='C8B560' size='2' face='verdana'><strong>Login</strong></font><br><font 

size='1' face='verdana' color='#0066FF'>Status:</font><font color='red' size='1' face='verdana'> BAIXO</font>$downmessage"; }
else { echo"<br><font color='C8B560' size='2' face='verdana'><strong>Login</strong></font><br><font size='1' face='verdana' 

color='#0066FF'>Status:</font><font color='green' size='1' face='verdana'> ONLINE</font>$upmessage"; }


//Game Server
$server2 = "l2acao.ddns.com.br"; //ip local da maquina
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

size='1'>Desconectado</font><br>";
$tout = "5";
$server2 = @fsockopen ($server2, $port2, $errno, $errstr, $tout);
if(!$server2){ echo"<br><font color='C8B560' size='2' 

face='verdana'><strong>Gameserver</strong></font><br><font size='1' face='verdana' color='#0066FF'>Status:</font><font 

color='red' size='1' face='verdana'> BAIXO</font>$downmessage2"; }
else { echo"<br><font color='C8B560' size='2' face='verdana'><strong>Gameserver</strong></font><br><font 

size='1' face='verdana' color='#0066FF'>Status:</font><font color='green' size='1' face='verdana'> ONLINE</font>$upmessage2"; }


?>
</p></td>
  </tr>
</table>
</body>
</html>