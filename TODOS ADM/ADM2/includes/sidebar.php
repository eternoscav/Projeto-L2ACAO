<?php

$account = mysql_query("SELECT * FROM accounts");
$account_num = mysql_num_rows($account);
$char = mysql_query("SELECT * FROM characters");
$char_num = mysql_num_rows($char);
$clan = mysql_query("SELECT * FROM clan_data");
$clan_num = mysql_num_rows($clan);
$on = mysql_query("SELECT * FROM characters WHERE online=1");
$online_num = mysql_num_rows($on);
$armor = mysql_query("SELECT * FROM armor");
$armor_num = mysql_num_rows($armor);
$weapon = mysql_query("SELECT * FROM weapon");
$weapon_num = mysql_num_rows($weapon);
$etc = mysql_query("SELECT * FROM etcitem");
$etc_num = mysql_num_rows($etc);
$ban = mysql_query("SELECT * FROM accounts WHERE accesslevel=-100");
$ban_num = mysql_num_rows($ban);

?>
				<div id="sidebar">
					<ul>
					 
						<li>
							<h2>Server INFO:</h2>
							<ul>
								<li> Login Server: <b> <?php
				$fp = @fsockopen("127.0.0.1", 2106, $errno, $errstr, 1);
if($fp >= 1){ 
echo '<font color="#00FF00">ONLine</font>';}
else{ echo '<font color="#FF0000">OFFLine</font>'; } 
			?></b> <br />
 Game Server: <b><?php
				$fp = @fsockopen("127.0.0.1", 7777, $errno, $errstr, 1);
if($fp >= 1){ 
echo '<font color="#00FF00">ONLine</font>';}
else{ echo '<font color="#FF0000">OFFLine</font>'; } 
			?></li>
            
            <li>Players online: <? echo $online_num ?></li>
            <li>Contas criadas: <? echo $account_num ?></li>
            <li>Contas banidas: <? echo $ban_num ?></li>
            <li>Characters criados: <? echo $char_num ?></li>
            <li>Cl&atilde;s criados: <? echo $clan_num ?></li>
							</ul>
						</li>
					</ul>
               	  <ul>
					 
					<li>
				  <h2>Itens INFO:</h2>
							<ul>
							  <li>Armors: <? echo $armor_num ?></li>
                               <li>Weapons: <? echo $weapon_num ?></li>
                               <li>Etc Itens: <? echo $etc_num ?></li>
							</ul>
						</li>
					</ul>
                  
				</div>
				<!-- end #sidebar -->