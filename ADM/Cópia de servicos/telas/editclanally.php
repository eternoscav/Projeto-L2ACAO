<form action="./index.php?t=allydetails.php" method="POST">
Nome atual da Ally: <b>
<?php 
$clanally = $_POST['clanAlly'];
if ($clanally == '')
{
echo "Clan sem Ally<br>";
}
else
{
echo $_POST['clanAlly'];
echo "<input type=\"hidden\" name=\"ally_id\" value=\"{$_POST['clanAllyId']}\">
<input type=\"submit\" value=\"Detalhar Ally\">";
}
?></form></b>


<form action="./index.php?t=editclanallyance.php" method="POST">
Ally atual: <b><?php 
$clanally = $_POST['clanAlly'];
if ($clanally == '')
{
echo "Clan sem Ally<br>";
echo "
<input type=\"hidden\" name=\"clanId\" value=\"{$_POST['clanId']}\">
<input type=\"hidden\" name=\"clanName\" value=\"{$_POST['clanName']}\">
<input type=\"hidden\" name=\"clanAllyCheck\" value=\"0\"><br>
<input type=\"submit\" value=\"Colocar Clan em Ally\">";
}
else
{
echo $_POST['clanAlly'];
echo "
<input type=\"hidden\" name=\"clanId\" value=\"{$_POST['clanId']}\">
<input type=\"hidden\" name=\"clanAllyCheck\" value=\"1\"><br>
<input type=\"hidden\" name=\"clanName\" value=\"{$_POST['clanName']}\">
<input type=\"hidden\" name=\"clanAlly\" value=\"{$_POST['clanAlly']}\">
<input type=\"submit\" value=\"Trocar de Ally\">";
}
?>
</b></form>


<br />
<a href="./index.php?t=clans.php">Voltar ao Menu de Clans</a>
