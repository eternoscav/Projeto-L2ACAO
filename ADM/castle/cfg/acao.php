<?
#######################
#    Configuration    #
#######################
$noneed=1;
include("config.php");
if (Isset($_GET['server']))
{
include("config/config_".$serb[$_GET['server']].".php");}
else
{ include("config_".$serb[1].".php");}
$serverName=$htitle;
$databaseHost=$L2JBS_config["mysql_host"];
$databaseName=$L2JBS_config["mysql_db"];
$databaseLogin=$L2JBS_config["mysql_login"];
$databasePassword=$L2JBS_config["mysql_password"];

// Print top of page

/********  GIRAN  *************/
$giranOwner = "No Owner";
$giranSiegeDate = " ... ";
$giranTax ="";
/*********  OREN  **************/
$orenOwner = "No Owner";
$orenSiegeDate = " ... ";
$orenTax ="";
/**********  ADEN  **************/
$adenOwner = "No Owner";
$adenSiegeDate = " ... ";
$adenTax ="";
/********  Gludio  **************/
$gludioOwner = "No Owner";
$gludioSiegeDate = "...";
$gludioTax ="";

/**********  DION  ***************/
$dionOwner = "No Owner";
$dionSiegeDate = " ... ";
$dionTax ="";
/********  INNADRIL  *************/
$innadrilOwner = "No Owner";
$innadrilSiegeDate = " ... ";
$innadrilTax ="";
/********  GODDARD  *************/
$goddardOwner = "No Owner";
$goddardSiegeDate = " ... ";
$goddardTax ="";
/*********************************/
/********  RUNE  *************/
$runeOwner = "No Owner";
$runeSiegeDate = " ... ";
$runeTax ="";
/*********************************/
/********  SCHUTTGART  *************/
$schuttgartOwner = "No Owner";
$schuttgartSiegeDate = " ... ";
$schuttgartTax ="";
/*********************************/
$result = mysql_query("SELECT castle.name, clan_data.clan_name FROM castle,clan_data WHERE clan_data.hasCastle=castle.id");
while($row= mysql_fetch_array($result,MYSQL_ASSOC)){
switch($row['name']){
case 'Giran':$giranOwner=$row['clan_name'];break;
case 'Oren':$orenOwner=$row['clan_name'];break;	
case 'Aden':$adenOwner=$row['clan_name'];break;
case 'Gludio':$gludioOwner=$row['clan_name'];break;
case 'Dion':$dionOwner=$row['clan_name'];break;
case 'Innadril':$innadrilOwner=$row['clan_name'];break;
case 'Goddard':$goddardOwner=$row['clan_name'];break;
case 'Rune':$runeOwner=$row['clan_name'];break;
case 'Schuttgart':$schuttgartOwner=$row['clan_name'];break;
}
}
$result = mysql_query("SELECT name,taxPercent,siegeDate FROM castle");
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
switch($row['name']){
case 'Giran':$giranTax=$row['taxPercent'].'%';
$giranSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
case 'Oren':$orenTax=$row['taxPercent'].'%';
$orenSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
case 'Aden':$adenTax=$row['taxPercent'].'%';
$adenSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
case 'Gludio':$gludioTax=$row['taxPercent'].'%';
$gludioSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
case 'Dion':$dionTax=$row['taxPercent'].'%';
$dionSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
case 'Innadril':$innadrilTax=$row['taxPercent'].'%';
$innadrilSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
case 'Goddard':$goddardTax=$row['taxPercent'].'%';
$goddardSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;	
case 'Rune':$runeTax=$row['taxPercent'].'%';
$runeSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;	
case 'Schuttgart':$SchuttgartTax=$row['taxPercent'].'%';
$SchuttgartSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;	
}
}
?>