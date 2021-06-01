<div align="left"><?php
include "../configs/config.php";
include "../configs/vars.php";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');


?>
Atualmente o Char e <b><?php echo $_POST['charraces']; ?></b>
<form action="../modules.php?m=editcharclass.php" method="POST" target="charclass" onsubmit="window.open('','charclass','width=600,height=160'); window.close();">
 Race: 
   <select name="race">
<option value="0">Human</option>
<option value="1">Elf</option>
<option value="2">Nigth Elf</option>
<option value="3">Orc</option>
<option value="4">Dwarf</option>
<option value="5">Kamael</option>
</select>
<br />Level: <?PHP echo $_POST['level'];  ?><br />

    <input type="hidden" value="<?PHP echo $_POST['charId'];  ?>" name="charId"/>
	 <input type="hidden" value="<?PHP echo $_POST['level'];  ?>" name="level"/>
    <input type="submit" value="Proximo" />
  </form>
</div>
