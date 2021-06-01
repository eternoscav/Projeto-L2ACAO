<form action="./principal.php?t=accounts.php" method="POST">
Localizar Account:
				<input type="text" name="loginAcc" >
				<input type="submit" value="Localizar"></form>

  <?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

if ($_POST['loginDEL'])
{
	
$queryDELacc= "DELETE FROM accounts WHERE login='".$_POST['loginDEL']."'";
		$resultCSK = mysql_query($queryDELacc, $link);
		echo "<i>Account</i> <b>{$_POST['loginDEL']}</b> <i>Deletada.</i><br>";
}
else
{
echo "";
}



if ($_POST['loginUB'])
{
	
$queryUNBANacc= "UPDATE accounts SET accessLevel='0' WHERE login='".$_POST['loginUB']."'";
		$resultCSK = mysql_query($queryUNBANacc, $link);
		echo "<i>Account</i> <b>{$_POST['loginUB']}</b> <i>Desbanida.</i><br>";
}
else
{
echo "";
}

if ($_POST['loginADM'])
{
	
$queryADMacc= "UPDATE accounts SET accessLevel='".$accesslevel_admin."' WHERE login='".$_POST['loginADM']."'";
		$resultCSK = mysql_query($queryADMacc, $link);
		echo "<i>Account</i> <b>{$_POST['loginADM']}</b> <i>Promovida a ADMIN.</i><br>";
}
else
{
echo "";
}

if ($_POST['loginADMdsp'])
{
	
$queryADMacc= "UPDATE accounts SET accessLevel='0' WHERE login='".$_POST['loginADMdsp']."'";
		$resultCSK = mysql_query($queryADMacc, $link);
		echo "<i>Account</i> <b>{$_POST['loginADMdsp']}</b> <i>rebaixada para NORMAL.</i><br>";
}
else
{
echo "";
}

if ($_POST['loginBN'])
{
	
$queryBANacc= "UPDATE accounts SET accessLevel='".$bannedACC."' WHERE login='".$_POST['loginBN']."'";
		$resultCSK = mysql_query($queryBANacc, $link);
		echo "<i>Account</i> <b>{$_POST['loginBN']}</b> <i>Banida.</i><br>";
}
else
{
echo "";
}



$totaccs=("SELECT * FROM accounts");
$result=mysql_query($totaccs, $link) or die(mysql_error());
$contarALL = mysql_num_rows($result);

if ($contarALL > 0)
  	{
echo "<table width=\"100%\" border=\"0\">
  <tr class=\"style2\">
  <td align=\"center\"><a href=\"./principal.php?t=accounts.php\">Total de Accounts no Servidor: <strong>{$contarALL} <br></a></strong>
		</td></tr>
</table>";
}
else
{
echo "";
}

$querycheckconsulta = "SELECT * FROM accounts WHERE login LIKE '%".$_POST['loginAcc']."%'";
		$resulttt = mysql_query($querycheckconsulta, $link);
		
		
		if (mysql_num_rows($resulttt))
		{

if ($contarALL > 0)
  	{

$query = "SELECT * FROM accounts WHERE login LIKE '%".$_POST['loginAcc']."%'";
		$result = mysql_query($query, $link);
		
		echo "
<table border=\"0\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: 000000;
                      font-family: arial;
                      font-size: 12px;
                    \">
        <tr style=\"background-color: 009966;color: ffffff; align: center;\">
         <td>
          Login
         </td>
         <td>
          Access Level
         </td>
		 <td>IP</td>
		 <td>Ban Menu</td><td>Acc Menu</td><td>Options</td>
        </tr>
 ";
 
 $cor= "c0c0c0";
 //pega os dados consultados
 while($dato= mysql_fetch_array($result))
 {
       /*if($cor == 'c0c0c0'){
          $cor= 'f0f0f0';
       }else
{
             $cor= 'c0c0c0';
       }*/
       
       //fazendo a mesma coisa do if acima agora com op. ternario
       $cor= $cor == 'c0c0c0' ? 'f0f0f0' : 'c0c0c0';
	   		echo "
             <tr bgcolor=\"$cor\">
              <td>
               {$dato['login']}
              </td>
              <td>
               {$dato['accessLevel']}
			   </td>
			   <td>{$dato['lastIP']}</td>";
			   if ($dato['accessLevel'] < 0)
			   {			   
		 echo "<td><form action=\"./principal.php?t=accounts.php\" method=\"POST\">
				<input type=\"hidden\" name=\"loginUB\" value=\"{$dato['login']}\">
				<input type=\"submit\" value=\"UnBan\"></form></td>";
				}
				else
				{
				echo "<td><form action=\"./principal.php?t=accounts.php\" method=\"POST\">
				<input type=\"hidden\" name=\"loginBN\" value=\"{$dato['login']}\">
				<input type=\"submit\" value=\"Ban\"></form></td>";
				}
				
				if ($dato['accessLevel'] < $accesslevel_admin)
			   {				
				echo "<td><form action=\"./principal.php?t=accounts.php\" method=\"POST\">
				<input type=\"hidden\" name=\"loginADM\" value=\"{$dato['login']}\">
				<input type=\"submit\" value=\"Acc ADMIN\"></form></td>";
				}
				else
				{
				echo "<td><form action=\"./principal.php?t=accounts.php\" method=\"POST\">
				<input type=\"hidden\" name=\"loginADMdsp\" value=\"{$dato['login']}\">
				<input type=\"submit\" value=\"Acc Normal\"></form></td>";				
				}
				echo "<td><form action=\"./principal.php?t=accounts.php\" method=\"POST\">
				<input type=\"hidden\" name=\"loginDEL\" value=\"{$dato['login']}\">
				<input type=\"submit\" value=\"DELETAR ACC\"></form></td></tr>";
}
 echo "</table>";

}
 
else //se nao tem contagem de clans no servidor
{
echo "Nao ha Clans no Servidor!";
}

}
else
{
echo "<br><b>Nenhum Char localizado!<br><br><a href=\"./principal.php?t=chars.php\">Voltar</a></b>";
}

?>

