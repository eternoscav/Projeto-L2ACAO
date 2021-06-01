<?php
include "verifica.php";

include "config/config.php";

?>
<style type="text/css">
body {
	background-image: url(../logo2.jpg);
}
</style>
<?
//Script cirado por _Dudu_1533
//www.portal1533.com.br
//www.virtualmu.com.br


$servidor = 'localhost';
$usuario  = 'root';
$senha    = '3427821';
$db       = 'l2acaopvp';

$con = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());
?>
<html>
<head>
<title>Sistema de busca de itens pelo nome</title>
<style type="text/css">
<!--
.style5 {font-size: 15px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style8 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style4 {font-size: 17px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
body {
	background-color: #EBEBEB;
}

-->
</style>

<?

$tabelas = array("NPC"    => "npc",
		 "Ítems"  => "etcitem",
		 "Armas"  => "weapon",
		 "Roupas" => "armor"
		);

?>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<body onLoad="MM_preloadImages('../imagens/2.png')">
<div align="center"><p><a href="www.l2haze.com" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" alt="Ids Itens" name="Image1" width="282" height="101" border="0"></a></p>
<br><a href="../index.php">Voltar</a>
</div>
<form method="get">
  <table class="style8" align="center">
    <tr>
      <td>Nome:</td>
      <td><input type="text" name="nome" ></td>
    </tr>

    <tr>
      <td>Procurar Por:</td>
      <td>
      <select name="t">
      <?
      foreach($tabelas as $tables => $valor) {
      $sel = base64_decode($_GET['t']) == $valor ? 'selected' : NULL;
      ?>
      <option value="<?php echo base64_encode($valor); ?>" <?php echo $sel; ?>><?php echo $tables; ?></option>
      <?
      }
      ?>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="Buscar">
    </tr>
  </table>
</form>

<?

if($_GET) {

	$nome   = trim(addslashes(htmlentities($_GET['nome'])));
	$tabela = trim(base64_decode(addslashes(htmlentities($_GET['t']))));
	$id = $tabela == 'npc' ? 'id' : 'item_id';

	$campo[1] = $tabela == 'npc' ? 'level' : 'crystal_type';
	$campo[2] = $tabela == 'npc' ? 'hp'    : 'material';
?>
<table width="100%" border="0">
  <tr bgcolor="#CCCCCC" class="style5" align="center" height="30">
    <td>Nome:</td>
    <td>ID:</td>
    <td><?php echo ucwords($campo[1]); ?>:</td>
    <td><?php echo ucwords($campo[2]); ?>:</td>
  </tr>

<?
$sql    = mysql_query("SELECT * FROM ".$tabela." WHERE name LIKE  '".$nome."'");
	
$cor = 0;
while($c = mysql_fetch_array($sql)) {
      $cor          = $cor + 1;
      $bg           = $cor % 2 == 0 ? '#C0C0C0' : '#979797';
      $c['name']    = str_replace("_", "&nbsp;", $c['name']);
      $c[$campo[2]] = $campo[2] == 'hp' ? number_format($c[$campo[2]], 0, '.', ',') : ucwords($c[$campo[2]]);


?>
  <tr bgcolor="<?php echo $bg; ?>" class="style8" align="center" height="23">
    <td><?php echo ucwords($c['name']); ?></td>
    <td><?php echo $c[$id]; ?></td>
    <td><?php echo ucwords($c[$campo[1]]); ?></td>
    <td><?php echo ucwords($c[$campo[2]]); ?></td>
  </tr>
<?
}
?>
</table>
<?
}
?>
</body>
</html>

