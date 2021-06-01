<?php
error_reporting(0);
$servidor = 'localhost';	// MySQL HOST
$usuario = 'root';			// MySQL Login
$senha = '3427821';				// MySQL Senha
$db = 'l2acaopvp';				// L2JDB
$ip = 'l2acao.ddns.com.br';			// MySQL IP

$con = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());

include ("../configs/anti-inject-base64.php");
include ("../configs/anti_inject.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informa&ccedil;&otilde;es Raid Boss</title>
<link rel="shortcut icon" href="../imagens/favicon2.ico" type="image/x-icon" />
<style type="text/css" media="screen">
body {
	background:#333399 url(../images/dec_top.png) left top repeat-x;
	color:#fff;
	font-family:Arial, Helvetica, sans-serif
}
a:link, a:visited, a:hover {
	color:#f2f2f2;
	text-decoration:none;
}
a:active {
	color:#fff;
	text-decoration:underline;
}
.style1 { background-color:#3366CC }
.style2 {
	color:#900;
	font-weight:bold;
}
.style3 { background-color:#336699; }
.style10 { font-size:12px; }
.vivo { color:#0c0; }
.morto { color:#f00; }
.spawn { color:#09f }
.respawntime { color:#f90 }
#table_boss {
	border:none;
	color:#fff;
	width:100%;
}
#table_boss caption { padding:5px 0 }
#table_boss tr td {
	text-align:center;
	border:1px solid #66C;
}
#table_boss tr.t_corpo:hover td {
	background-color:#444;
	color:#ff0;
	font-weight:bold;
}
#table_boss tr.topo {
	color:#fff;
	font-weight:bold;
	font-size:16px;
}
#table_boss tr.topo td {
	background-color:#252525;
	background:#333399 url(../images/dec_to.png) left bottom repeat-x;
}
#table_boss tr.topo td.t1 { width:40% }
#table_boss tr.topo td.t2 { width:15% }
#table_boss tr.topo td.t3 { width:30% }
</style>
</head>
<body>
<a href="grandboss.php" title="Grande Boss">Grande  Boss</a>
<?php
$raidspawn = mysql_query("SELECT boss_id,respawn_time FROM raidboss_spawnlist ORDER BY respawn_time DESC");
$total = mysql_num_rows($raidspawn);
$max_pag = 25;

$paginas =  (($total % $max_pag) > 0) ? (int)($total / $max_pag) + 1 : ($total / $max_pag);

if (isset($_GET['pagina'])){
   $pagina = (int)$_GET['pagina'];
}else{
   $pagina = 1;
}

$pagina = max(min($paginas, $pagina), 1);
$inicio = ($pagina - 1) * $max_pag;

$sql = "SELECT boss_id,respawn_time FROM `raidboss_spawnlist` ORDER BY `respawn_time` DESC LIMIT ".$inicio.", ".$max_pag;
$query = mysql_query($sql);
echo '<table id="table_boss" cellpadding="1" cellspacing="0">';
echo "<caption>Resultados ".min($total, ($inicio + 1))." - ".min($total, ($inicio + $max_pag))." de ".$total." resultados encontrados</caption>";
echo '<tr class="topo">
		  <td class="t1">Nome do <span class="respawntime">Raid Boss</span></td>
		  <td class="t2">Estado</td>
		  <td class="t3">Respawn</td>
		  <td class="t2">Level</td>
		</tr>';

while(list($boss_id,$respawn_time) = mysql_fetch_row($query)){
	$raidnames = mysql_query("SELECT name,level FROM npc WHERE id = $boss_id");
    $text = '<span class="vivo">Vivo</span>';
	$respawn = '<span class="spawn">Spawn</span>';
    if($respawn_time > 0){
		$respawntime = date('d/m/Y \\s H:i:s',($respawn_time / 1000));
		$text = '<span class="morto">Morto</span>';
		$respawn = '<span class="respawntime">'.$respawntime.'</span>';
	}
	while(list($raidname,$levelup) = mysql_fetch_row($raidnames)){
		echo '<tr class="style10 t_corpo">
				<td class="style1">'.$raidname.'</td>
				<td class="style3">'.$text.'</td>
				<td class="style1">'.$respawn.'</td>
				<td class="style3">'.$levelup.'</td>
			  </tr>';
	}
}
echo '</table>';
?>
<div style="text-align:center">
  <?php
$prev = $pagina - 1;
$next = $pagina + 1;

/*  if ($pagina > 1) {
    $prev_link = "<a href=\"$PHP_SELF?pagina=$prev\">Anterior</a>";
  } else {
    $prev_link = "Anterior";
  }

  if ($paginas > $pagina) {
    $next_link = "<a href=\"$PHP_SELF?pagina=$next\">Prxima";
  } else {
    $next_link = "Prxima";
  }



  $painel = "";
          for ($x=1; $x<=$paginas; $x++) {
              if ($x==$pagina) {
              $painel .= " [$x] ";
              } else {
              $painel .= " <a href=\"$PHP_SELF?pagina=$x\">[$x]</a>";
              }
          }
*/
if ($pagina > 1) {
	$prev_link = "<input class=\"style4\" onclick=\"Javascript:window.location='$PHP_SELF?pagina=".$prev."'\" type=\"button\" value=\"Anterior\" name=\"btnAnterior1\" />";
	}else{
		$prev_link = "<input class=\"style4\" type=\"button\" value=\"Anterior\" disabled=\"disabled\" />";
	}
  	if ($paginas > $pagina) {
		$next_link = "<input class=\"style4\" onclick=\"JavaScript:window.location='$PHP_SELF?pagina=".$next."'\" type=\"button\" value=\"Pr&oacute;ximo\" name=\"btnAnterior1\" />";
	}else{
	  $next_link = "<input class=\"style4\" type=\"button\" value=\"Pr&oacute;ximo\" disabled=\"disabled\" />";
	}

  $painel = "";
for($x = 1; $x <= $paginas; $x++) {
	$di = $pagina == $x ? 'disabled="disabled"' : NULL;
	$painel .= "<input class=\"style4\" ".$di." onclick=\"JavaScript:window.location='$PHP_SELF?pagina=". $x ."';\" type=\"button\" value=\"".$x."\" />&nbsp;";
          }
	echo "<p style=\"text-align:center\">$prev_link  $painel $next_link</p>";

?>
</div>
</body>
</html>