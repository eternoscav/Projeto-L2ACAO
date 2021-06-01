<form action="./principal.php?t=ally.php" method="POST">
Localizar Ally:
				<input type="text" name="allyName" >
				<input type="submit" value="Localizar"></form>
				<br />
				<a href="./principal.php?t=allyCreate.php">Criar Ally</a><br />

  <?php
$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

if ($_POST['ally_idDel'])
{
	
$queryDELally= "UPDATE clan_data SET ally_id='0', ally_name='', ally_crest_id='0' WHERE ally_id='".$_POST['ally_idDel']."'";
		$resultCSK = mysql_query($queryDELally, $link);
		echo "<i>Allyance</i> <b>{$_POST['ally_nome']}</b> <i>deletada.</i><br>";
}
else
{
echo "";
}

$totaccs=("select distinct ally_name,ally_id from clan_data where ally_id <>'0' group by ally_name order by ally_name");
$result=mysql_query($totaccs, $link) or die(mysql_error());
$contarALL = mysql_num_rows($result);

if ($contarALL > 0)
  	{
echo "<table width=\"100%\" border=\"0\">
  <tr class=\"style2\">
  <td align=\"center\"><a href=\"./principal.php?t=ally.php\">Total de Allyes no Servidor: <strong>{$contarALL} <br></a></strong>
		</td></tr>
</table>";
}
else
{
echo "";
}

$querycheckconsulta = "select distinct ally_name,ally_id from clan_data WHERE ally_id<>'0' AND ally_name LIKE '%".$_POST['allyName']."%' group by ally_name order by ally_name ";
		$resulttt = mysql_query($querycheckconsulta, $link);
		
		
		if (mysql_num_rows($resulttt))
		{

if ($contarALL > 0)
  	{

$query = "select distinct ally_name,ally_id from clan_data WHERE ally_id<>'0' AND ally_name LIKE '%".$_POST['allyName']."%' group by ally_name order by ally_name ";
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
          Ally Name
         </td>
         <td>
          Num Clans
         </td>
		 <td>Options</td>
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
               {$dato['ally_name']}
              </td>
              <td>";
			  $totalclansally=("select * from clan_data where ally_id ='".$dato['ally_id']."'");
$resultadoooo=mysql_query($totalclansally, $link) or die(mysql_error());
$contarALLclansally = mysql_num_rows($resultadoooo);
echo $contarALLclansally;			  
		echo "<td><form action=\"./principal.php?t=allydetails.php\" method=\"POST\">
				<input type=\"hidden\" name=\"ally_id\" value=\"{$dato['ally_id']}\">
				<input type=\"submit\" value=\"Detalhes\"></form>&nbsp;
				<form action=\"./principal.php?t=ally.php\" method=\"POST\">
				<input type=\"hidden\" name=\"ally_idDel\" value=\"{$dato['ally_id']}\">
				<input type=\"hidden\" name=\"ally_nome\" value=\"{$dato['ally_name']}\">
				<input type=\"submit\" value=\"Deletar Ally\"></form></td>";
				
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

