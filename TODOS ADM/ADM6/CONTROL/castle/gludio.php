<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informações sobre Gludio</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<?
include("cfg/acao.php");
?>
</head>
<body>
<table width="100%" border="0" align="center" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
  <tr>
        <td bgcolor="#CCCCCC"><strong><font color="#333333" face="Geneva, Arial, Helvetica, sans-serif">Dia de asedio</font></strong></td>
    <td bgcolor="#CCCCCC"><strong><font color="#333333" face="Geneva, Arial, Helvetica, sans-serif">Rey del castillo</font></strong></td>
    <td bgcolor="#CCCCCC"><strong><font color="#333333" face="Geneva, Arial, Helvetica, sans-serif">Tasa</font></strong></td>
    <td bgcolor="#CCCCCC"><strong><font color="#333333" face="Geneva, Arial, Helvetica, sans-serif">Atacantes</font></strong></td>
    <td bgcolor="#CCCCCC"><strong><font color="#333333" face="Geneva, Arial, Helvetica, sans-serif">Defensores</font></strong></td>
  </tr>
  <tr>
    <td><span><?print $gludioSiegeDate;?></span></td>
    <td><span><?print$gludioOwner;?></span></td>
    <td><span><?print$gludioTax;?></span></td>
    <td><span>
      <?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='1' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
    </span> </td>
    <td><span class="style3">
      <?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='1' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></td></tr>';


/*********************************************************************************/?>
    </span></td>
  </tr>
</table>
</body>
</html>
