<?php include "verifica.php";?><div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
				  <div class="post">
					  <div class="title">
							<p>Bem - vindo ao L2 Admin! Escolha uma op&ccedil;&atilde;o no menu acima! </p>
						
					</div>
						<div class="entry">
						
                        
                        <form id="form1" name="form1" method="post" action="index.php?sec=info&funcao=mostrar">
    <table width="100%" border="0" cellspacing="4" cellpadding="4">
      <tr>
        <td width="37%" align="right">Nome do char:</td>
        <td width="33%"><label>
          <input name="nome" type="text" id="nome" size="40" />
        </label></td>
        <td width="30%" align="left"><input type="submit" name="button" id="button" value="Procurar" /></td>
      </tr>
    </table>
  </form>
<?
if($_GET['funcao'] == "mostrar"){
	$char = $_POST['nome'];
	$select = mysql_query("SELECT * FROM characters WHERE char_name='$char'");
	$conta_char = mysql_num_rows($select);
	if($conta_char == 0){ echo '<font color="ff0000">Char n&atilde;o encontrado</font>';}else{
	while($linha = mysql_fetch_array($select)){
		$account_name = $linha['account_name'];
		$id = $linha['charId'];
		$char_name = $linha['char_name'];
		$level = $linha['level'];
		$hp = $linha['maxHp'];
		$cp = $linha['maxCp'];
		$mp = $linha['maxMp'];
		$karma = $linha['karma'];
		$pvp = $linha['pvpkills'];
		$pk = $linha['pkkills'];
		$clanid = $linha['clanid'];
		$classid = $linha['classid'];
		$base_class = $linha['base_class'];
		$title = $linha['title'];
		$accesslevel = $linha['accesslevel'];
		$online = $linha['online'];
		$onlinetime = $linha['onlinetime'];
		$lastAccess = $linha['lastAccess'];
		$last = date('r',($lastAccess / 1000));
		$in_jail = $linha['in_jail'];
		$banchat_timer = $linha['banchat_timer'];
		$nobless = $linha['nobless'];
		
		$select_ip = mysql_query("SELECT * FROM accounts WHERE login='$account_name'");
		while($linha4 = mysql_fetch_array($select_ip)){
			$lastip = $linha4['lastIP'];
			}
			
		$select_clan = mysql_query("SELECT * FROM clan_data WHERE clan_id='$clanid'");
		$conta_clan = mysql_num_rows($select_clan);
		while($linha2 = mysql_fetch_array($select_clan)){
			$clan = $linha2['clan_name'];
			}
			
		$select_class = mysql_query("SELECT * FROM class_list WHERE id='$classid'");
		while($linha3 = mysql_fetch_array($select_class)){
			$class = $linha3['class_name'];
			$class = str_replace("H_","Human ", $class);
		  $class = str_replace("DE_","Dark Elf ", $class);
		  $class = str_replace("E_","Elf ", $class);
		  $class = str_replace("O_","Orc ", $class);
		  $class = str_replace("D_","DWarf ", $class);
		  $class = str_replace("K_","Kamael ", $class);
			}
			
		$select_base = mysql_query("SELECT * FROM class_list WHERE id='$base_class'");
		while($linha4 = mysql_fetch_array($select_base)){
			$base = $linha4['class_name'];
			$base = str_replace("H_","Human ", $base);
		  $base = str_replace("DE_","Dark Elf ", $base);
		  $base = str_replace("E_","Elf ", $base);
		  $base = str_replace("O_","Orc ", $base);
		  $base = str_replace("D_","DWarf ", $base);
		  $base = str_replace("K_","Kamael ", $base);
			}
		?>
  <table width="100%" border="0" cellspacing="4" cellpadding="4">
  <tr>
    <td align="center">Char name:</td>
    <td align="center">Level:</td>
    <td align="center">HP:</td>
    <td align="center">CP:</td>
    </tr>
  <tr>
    <td align="center" bgcolor="#003300"><? echo $char_name ?></td>
    <td align="center" bgcolor="#003300"><? echo $level ?></td>
    <td align="center" bgcolor="#003300"><? echo $hp ?></td>
    <td align="center" bgcolor="#003300"><? echo $cp ?></td>
    </tr>
  <tr>
    <td align="center">MP:</td>
    <td align="center">Karma:</td>
    <td align="center">PvPs:</td>
    <td align="center">Pks:</td>
    </tr>
  <tr>
    <td align="center" bgcolor="#003300"><? echo $mp ?></td>
    <td align="center" bgcolor="#003300"><? echo $karma ?></td>
    <td align="center" bgcolor="#003300"><? echo $pvp ?></td>
    <td align="center" bgcolor="#003300"><? echo $pk ?></td>
    </tr>
  <tr>
    <td align="center">T&iacute;tulo:</td>
    <td align="center">AccessLevel:</td>
    <td align="center">Online:</td>
    <td align="center">Jail:</td>
    </tr>
  <tr>
    <td align="center" bgcolor="#003300"><? echo $title ?></td>
    <td align="center" bgcolor="#003300"><? echo $accesslevel ?></td>
    <td align="center" bgcolor="#003300"><? if($online == 0){echo 'N&Atilde;O';}else{echo 'SIM';}?></td>
    <td align="center" bgcolor="#003300"><? if($in_jail == 0){echo 'N&Atilde;O';}else{echo 'SIM';}?></td>
    </tr>
  <tr>
    <td align="center">Ban Chat:</td>
    <td align="center">Nobless:</td>
    <td align="center">Cl&atilde;:</td>
    <td align="center">Classe:</td>
    </tr>
  <tr>
    <td align="center" bgcolor="#003300"><? if($banchat_timer == 0){echo 'N&Atilde;O';}else{echo "$banchat_timer minuto(s)";}?></td>
    <td align="center" bgcolor="#003300"><? if($nobless == 0){echo 'N&Atilde;O';}else{echo 'SIM';}?></td>
    <td align="center" bgcolor="#003300"><? if($conta_clan == 0){echo 'Sem Cl&atilde;';}else{ echo $clan;}?></td>
    <td align="center" bgcolor="#003300"><? echo $class ?></td>
    </tr>
  <tr>
    <td align="center">Classe Base:</td>
    <td align="center">Login:</td>
    <td align="center">Char ID:</td>
    <td align="center">&Uacute;ltimo Acesso:</td>
    </tr>
  <tr>
    <td align="center" bgcolor="#003300"><? echo $base ?></td>
    <td align="center" bgcolor="#003300"><? echo $account_name  ?></td>
    <td align="center" bgcolor="#003300"><? echo $id  ?></td>
    <td align="center" bgcolor="#003300"><? echo $last ?></td>
    </tr>
  <tr>
    <td align="center">&Uacute;ltimo IP:</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    </tr>
  <tr>
    <td height="27" align="center" bgcolor="#003300"><? echo $lastip ?></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    </tr>
</table>

		<? }
	}}

?>
                        
                        		  </div>
						<div class="meta">
							<p class="credit">&nbsp;</p>
</div>
				  </div>
</div>
				<!-- end #content -->