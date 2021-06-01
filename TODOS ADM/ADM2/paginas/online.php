<?php include "verifica.php";?><?
$select = mysql_query("SELECT * FROM characters WHERE online=1");
$conta = mysql_num_rows($select); 
?>
<div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
				  <div class="post">
					  <div class="title">
							<p><? echo "&quot; $conta &quot; User(s) online.";?></p>
						
					</div>
						<div class="entry">
						
                  
<table width="100%" border="0" cellspacing="3" cellpadding="3">
      <tr>
    <td align="center" bgcolor="#003300">Char:</td>
    <td align="center" bgcolor="#003300">Classe:</td>
    <td align="center" bgcolor="#003300">Level:</td>
  </tr>
    <?
while($linha = mysql_fetch_array($select)){
	$name = $linha['char_name'];
	$classid = $linha['classid'];
	$level = $linha['level'];
	
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
?>
  <tr>
    <td align="center" bgcolor="#000000"><? echo $name ?></td>
    <td align="center" bgcolor="#000000"><? echo $class ?></td>
    <td align="center" bgcolor="#000000"><? echo $level ?></td>
  </tr>
  <? }?>
</table>


<br />
                     
                        
	    </div>
						<div class="meta">
							<p class="credit">&nbsp;</p>
</div>
				  </div>
</div>
				<!-- end #content -->