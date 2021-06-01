<?php
/* IMAGENS DOS ITENS COPIADAS DO PROGRAMA "Multisell Editor" */

include "./configs/config.php";
include "./configs/vars.php";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

 
$invqry = "SELECT * FROM items WHERE owner_id = '".$_POST['charId']."' AND loc='INVENTORY' ORDER BY loc_data ASC";
		$resultIQR = mysql_query($invqry, $link);
		if (mysql_num_rows($resultIQR))
		{ 
		echo "
				<table border=\"1\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: ffffff;
                      font-family: arial;
                      font-size: 12px;
                    \">
					<tr>
					<td valign=\"center\">Item</td>
					<td valign=\"center\">Quantidade</td>
					<td valign=\"center\">Enchant</td>
					 </tr>  ";
 
 $cor= "c0c0c0";
 //pega os dados consultados
 while($inventory= mysql_fetch_array($resultIQR))
 {
       
       
       //fazendo a mesma coisa do if acima agora com op. ternario
       $cor= $cor == 'c0c0c0' ? 'f0f0f0' : 'c0c0c0';
	   		echo "<tr bgcolor=\"$cor\"><b>
               <td valign=\"center\">";
               $armorname= "SELECT name FROM armor WHERE item_id IN (SELECT item_id FROM items WHERE item_id='".$inventory['item_id']."')";
		$resultARN=mysql_query($armorname, $link);
		$fetchARN = mysql_fetch_row($resultARN);
		$armorname= $fetchARN['0'];
			   			   
			   $etcname= "SELECT name FROM etcitem WHERE item_id IN (SELECT item_id FROM items WHERE item_id='".$inventory['item_id']."')";
		$resultETC=mysql_query($etcname, $link);
		$fetchETC = mysql_fetch_row($resultETC);
		$etcname= $fetchETC['0'];
		
			   $weaponname= "SELECT name FROM weapon WHERE item_id IN (SELECT item_id FROM items WHERE item_id='".$inventory['item_id']."')";
		$resultWEP=mysql_query($weaponname, $link);
		$fetchWEP = mysql_fetch_row($resultWEP);
		$weaponname= $fetchWEP['0'];
			   
			   $arquivo = "./item_icons/{$inventory['item_id']}.png"; 
if (file_exists($arquivo)) 
{ 
echo "<img src=\"./item_icons/{$inventory['item_id']}.png\" title=\"{$weaponname}{$armorname}{$etcname}\" /> {$weaponname}{$armorname}{$etcname}";
} 
else
{ 
echo "<img src=\"./item_icons/noicon.png\" title=\"{$weaponname}{$armorname}{$etcname} - No Icon\"/> {$weaponname}{$armorname}{$etcname}";
} 
	   
             echo "</td>
               <td valign=\"center\">{$inventory['count']}
			     </td>
				 <td valign=\"center\">{$inventory['enchant_level']}
			     </td>
			   </b></tr>";
}

echo "</table>";
}
else
{
echo "<br><b>Char sem Itens no Inventario.</b><br>";
} 

?>
