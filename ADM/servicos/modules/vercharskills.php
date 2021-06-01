<div align="left">
<?php

include "../configs/config.php";
include "../configs/vars.php";

$link= mysql_connect($db_loc_ip,$server_log,$server_psw) or die('Erro ao conectar no MySQL');
mysql_select_db($server_db,$link) or die('Erro na base');

$query = "SELECT * FROM character_skills WHERE charId='".$_POST['charId']."'";
		$resultCSK = mysql_query($query, $link);
		if (mysql_num_rows($resultCSK))
		{
		echo "
				<table border=\"0\"
              cellspacing=\"1\"
              cellpadding=\"2\"
              style=\"background-color: ffffff;
                      font-family: arial;
                      font-size: 12px;
                    \">
         <tr class=\"style10\">
         <td>
          Skill
         </td>
		 <td>
		 Level
		 </td>
        </tr>
 ";
 
 $cor= "c0c0c0";
 //pega os dados consultados
 while($data= mysql_fetch_array($resultCSK))
 {
       /*if($cor == 'c0c0c0'){
          $cor= 'f0f0f0';
       }else
{
             $cor= 'c0c0c0';
       }*/
       
       //fazendo a mesma coisa do if acima agora com op. ternario
       $cor= $cor == 'c0c0c0' ? 'f0f0f0' : 'c0c0c0';
	   		echo "<tr bgcolor=\"$cor\">
              <td>
               {$data['skill_name']}
              </td>
              <td>
               {$data['skill_level']}
			   </td>
			   </tr>";
}

echo "</table>";
}
else
{
echo "<br><b>Char nao tem Skills.</b><br>";
}
?>
</div>