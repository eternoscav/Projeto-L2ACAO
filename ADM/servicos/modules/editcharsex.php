<?php
include "../configs/config.php";
include "../configs/vars.php";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');


?>
Sexo: <b><?php if ($_POST['sex'] != '1')
{
echo "MASCULINO";
}
else
{
echo "FEMININO";
}
?></b>
<form action="../modules.php?m=detalheschar.php" method="POST" target="charprop" onsubmit="window.open('','charprop','width=200,height=100'); window.close();">
<select name="editcharsex">
<option value="0">MASCULINO</option>
<option value="1">FEMININO</option>
</select>
<input type="hidden" value="<?PHP echo $_POST['charId'];  ?>" name="charId"/>
<input type="submit" value="Salvar" /></form>