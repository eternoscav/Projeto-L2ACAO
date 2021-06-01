<div align="left"><?php
include "../configs/config.php";
include "../configs/vars.php";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');


?><form action="./modules.php?m=detalheschar.php" method="POST" target="charprop" onsubmit="window.open('','charprop','width=200,height=100'); window.close();">
  PVP: 
    <input type="text" value="<?PHP echo $_POST['pvp'];  ?>" name="pvp"/>
    <input type="hidden" value="<?PHP echo $_POST['charId'];  ?>" name="charId"/>
    <input type="submit" value="Salvar PVP" />
  </form>
<form action="./modules.php?m=detalheschar.php" method="POST" target="charprop" onsubmit="window.open('','charprop','width=200,height=100'); window.close();">
  <div align="left">PK: 
    <input type="text" value="<?PHP echo $_POST['pk'];  ?>" name="pk"/>
    <input type="hidden" value="<?PHP echo $_POST['charId'];  ?>" name="charId"/>
    <input type="submit" value="Salvar PK" />

</form>
</div>
