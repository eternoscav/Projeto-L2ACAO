<html>
 <?php include "configs/config.php"; ?>
 <head>
  <title>Avadon - <?php echo $nome_server; ?></title>
 </head>
 <body>
  <form action="login.php" method="POST">
    <div align="center">
      <p>&nbsp;</p>
      
    <strong>PAINEL L2 AÇÃO</strong></div>
    <div align="center">
      <table>
        <tr>
          <td>
            Usuário:
          </td>
       <td>
         <input type="text" name="usuario">
         </td>
      </tr>
        <tr>
          <td>
            Senha:
          </td>
       <td>
         <input type="password" name="senha">
         </td>
      </tr>
        <tr>
          <td></td>
       <td><input type="submit" value="Acessar">
        </td>

      </tr>
      </table>
    </div>
    <div align="center"><a href="../index.php"><strong>Voltar</strong></a></p></div>
  </form>
 </body>

</html>