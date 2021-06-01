<?
$id = $_GET['id'];
$status = 3;
include "config.php";
$atualizar = mysql_query("UPDATE doacao SET status='$status' WHERE id = '$id'");

echo "Deletado com sucesso.<br>
<a href='index.php'>Voltar</a>";
?>	