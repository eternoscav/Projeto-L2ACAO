EDITAR PENALIDADES DO CLAN<BR />
<?php


echo "<form action=\"./index.php?t=editclanallypenal.php\" method=\"POST\">
<input type=\"text\" name=\"ally_penalty_expiry_time\" value=\"{$_POST['ally_penalty_expiry_time']}\">
<input type=\"hidden\" name=\"clanId\" value=\"{$_POST['clanId']}\">
<input type=\"submit\" value=\"Editar Penalidade de Ally\"></form>"; 

echo "<form action=\"./index.php?t=editclancharpenal.php\" method=\"POST\">
<input type=\"text\" name=\"char_penalty_expiry_time\" value=\"{$_POST['char_penalty_expiry_time']}\">
<input type=\"hidden\" name=\"clanId\" value=\"{$_POST['clanId']}\">
<input type=\"submit\" value=\"Editar Penalidade por Char\"></form>"; 

echo "<form action=\"./index.php?t=editclandisspenal.php\" method=\"POST\">
<input type=\"text\" name=\"dissolving_expiry_time\" value=\"{$_POST['dissolving_expiry_time']}\">
<input type=\"hidden\" name=\"clanId\" value=\"{$_POST['clanId']}\">
<input type=\"submit\" value=\"Editar Penalidade por Dissolver\"></form>"; 

echo "<form action=\"./index.php?t=editclanallyzeropenal.php\" method=\"POST\">
<input type=\"hidden\" name=\"ally_penalty_expiry_time\" value=\"{$_POST['ally_penalty_expiry_time']}\">
<input type=\"hidden\" name=\"char_penalty_expiry_time\" value=\"{$_POST['char_penalty_expiry_time']}\">
<input type=\"hidden\" name=\"dissolving_expiry_time\" value=\"{$_POST['dissolving_expiry_time']}\">
<input type=\"hidden\" name=\"clanId\" value=\"{$_POST['clanId']}\">
<input type=\"submit\" value=\"ZERAR TODAS de uma vez\"></form>"; 


?>
<a href="./index.php?t=clans.php">Voltar ao Menu de Clans</a>