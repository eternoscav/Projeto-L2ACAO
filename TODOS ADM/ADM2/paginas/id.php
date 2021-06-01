<? include "verifica.php"; ?><script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
				  <div class="post">
					  <div class="title">
							<p>Bem - vindo ao L2 Admin! Escolha uma op&ccedil;&atilde;o no menu acima! </p>
						
					</div>
						<div class="entry">
						
                        <br />
<br />

                        <form id="form1" name="form1" method="post" action="?sec=id&funcao=procurar">
              <table width="100%" border="0">
                <tr>
                  <td align="center">Nome:
                    <span id="sprytextfield1">
                    <label>
                      <input name="nome" type="text" id="nome" size="40" />
                    </label>
                  <span class="textfieldRequiredMsg">Insira um nome.</span></span></td>
                </tr>
                <tr>
                  <td align="center"><p><span id="spryradio1">
                    <label>
                      <input type="radio" name="categoria" value="armors" id="categoria_0" />
                      Armors</label>
      
                    <label>
                      <input type="radio" name="categoria" value="weapons" id="categoria_1" />
                      Weapons</label>
             
                <label>
                      <input type="radio" name="categoria" value="npcs" id="categoria_2" />
                      Npcs</label>
  
                <label>
                      <input type="radio" name="categoria" value="etc" id="categoria_3" />
                      Etc Items</label>
                      
                      <label>
                      <input type="radio" name="categoria" value="chars" id="categoria_3" />
                      Chars</label>
                      

                  <span class="radioRequiredMsg">Favor marcar uma op&ccedil;&atilde;o.</span></span></p></td>
                </tr>
                <tr>
                  <td align="center"><input type="submit" name="button" id="button" value="Procurar" /></td>
                </tr>
              </table>
            </form>
            <?
			$nome = $_POST['nome'];
			$categoria = $_POST['categoria'];
            if($categoria == "armors"){
				$select_armor = mysql_query("SELECT * FROM armor WHERE name LIKE '%$nome%' ORDER BY name");
				while($linha = mysql_fetch_array($select_armor)){
					$pega_nome = $linha['name'];
					$pega_id = $linha['item_id'];
					?>
			<table width="370" border="1" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td align="center"> <? echo $pega_nome ?></td>
    <td align="center"> <? echo $pega_id ?></td>
  </tr>
  <? } ?>
</table>
			<? }if($categoria == "weapons"){
				$select_weapons = mysql_query("SELECT * FROM weapon WHERE name LIKE '%$nome%' ORDER BY name");
				while($linha = mysql_fetch_array($select_weapons)){
					$pega_nome = $linha['name'];
					$pega_id = $linha['item_id'];
					?>
					<table width="370" border="1" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td align="center"> <? echo $pega_nome ?></td>
    <td align="center"> <? echo $pega_id ?></td>
  </tr>
  <? } ?>
</table>
			<? } if($categoria == "npcs"){
				$select_armor = mysql_query("SELECT * FROM npc WHERE name LIKE '%$nome%' ORDER BY name");
				while($linha = mysql_fetch_array($select_armor)){
					$pega_nome = $linha['name'];
					$pega_id = $linha['id'];
					?>
			<table width="370" border="1" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td align="center"> <? echo $pega_nome ?></td>
    <td align="center"> <? echo $pega_id ?></td>
  </tr>
  <? } ?>
</table>
			<? } if($categoria == "etc"){
				$select_armor = mysql_query("SELECT * FROM etcitem WHERE name LIKE '%$nome%' ORDER BY name");
				while($linha = mysql_fetch_array($select_armor)){
					$pega_nome = $linha['name'];
					$pega_id = $linha['item_id'];
					?>
			<table width="370" border="1" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td align="center"> <? echo $pega_nome ?></td>
    <td align="center"> <? echo $pega_id ?></td>
  </tr>
  <? } ?>
</table>
			<? }if($categoria == "chars"){
				$select_armor = mysql_query("SELECT * FROM characters WHERE char_name LIKE '%$nome%' ORDER BY char_name");
				while($linha = mysql_fetch_array($select_armor)){
					$pega_nome = $linha['char_name'];
					$pega_id = $linha['charId'];
					?>
			<table width="370" border="1" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td align="center"> <? echo $pega_nome ?></td>
    <td align="center"> <? echo $pega_id ?></td>
  </tr>
  <? } ?>
</table>
			
			<? }?>
                        <br />
<br />

                        		  </div>
						<div class="meta">
							<p class="credit">&nbsp;</p>
</div>
				  </div>
</div>
<script type="text/javascript">
<!--
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
				<!-- end #content -->