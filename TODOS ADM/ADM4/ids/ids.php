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


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head>
<body>
<div align="center"><p><img src="../imagens/logo.jpg" /></p><br><a href="../index.php">Voltar</a>
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

