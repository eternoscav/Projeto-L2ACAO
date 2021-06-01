<?

///////////////////////////////////////////////////////////////////////////////
// www.l2jbrasil.com //
// Script Modificado/feito por Leonan-Grundor Web Arts&Systems //
// //
///////////////////////////////////////////////////////////////////////////////

$servidor = "localhost";
$usuario = "root";
$senha = "3427821";
$banco = "l2acaopvp";

$conexao = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($banco, $conexao) or die(mysql_error());

//Selecionando os nobres participantes das oly.
$sql = mysql_query("SELECT * FROM olympiad_nobles ORDER BY class_id") or die(mysql_error());
//Contar o numero de participantes(conta o numero de linhas)
$contar = mysql_num_rows($sql);

$sql = mysql_query("SELECT c.char_name, c.charId, c.classid, c.level, cl.id, cl.class_name, o.*, SUBSTRING_INDEX(cl.class_name, '_', -1) AS class_name FROM characters AS c, class_list AS cl, olympiad_nobles AS o WHERE c.charId = o.charId AND cl.id = c.classid ORDER BY c.classid, o.olympiad_points DESC") or die(mysql_error());


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Participantes das oly</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(../logo2.jpg);
}
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
</head><body onload="MM_preloadImages('../imagens/2.png')">
<td width="200"><div align="center"><a href="" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" alt="" name="Image1" width="282" height="101" border="0" id="Image1" /><BR><BR>
<a href="index.php">Atualizar a Página</a> / <a href="../index.php">Voltar</a>

</head>

<body>
<table width="80%" border="0">
  <tr class="style10">
    <td width="100%" align="center" bgcolor="#4682B4"><h1>Número de Participantes: <strong><?php echo $contar; ?></strong></h1></td>
  </tr>
</table>

<?
if($contar > 0) {
?>
<p> </p>
<table width="80%" border="0">
  <tr class="style10">
    <td width="25%" align="center" bgcolor="#1E90FF"><strong>Nome:</strong></td>
    <td width="10%" align="center" bgcolor="#1E90FF"><strong>Pontos:</strong></td>
        <td width="10%" align="center" bgcolor="#1E90FF"><strong>Competições:</strong></td>
    <td width="25%" align="center" bgcolor="#1E90FF"><strong>Classe:</strong></td>
  </tr>
<?
$cor = 0;
while($l = mysql_fetch_object($sql)) {
        $cor = $cor + 1;
        $bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';
//Selecionando as classes de acordo com o id da tabela olympiad_nobles
        $c = mysql_query("SELECT * FROM class_list WHERE id = '" . $l->class_id . "'") or die(mysql_error());
//Criando um Vetor para a tabela.
        $cs = mysql_fetch_object($c);
//Separando o vetor apartir do "_" 
        
        $cs->class_name = explode("_", $cs->class_name);
?>
  <tr class="style15" bgcolor="<?php echo $bg; ?>">
    <td align="center"><?php echo $l->char_name; ?></td>
    <td align="center"><?php echo $l->olympiad_points; ?></td>
        <td align="center"><?php echo $l->competitions_done; ?></td>
    <td align="center"><?php echo $cs->class_name[1]; ?></td>
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