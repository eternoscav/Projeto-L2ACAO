<html>
 <?php include "configs/config.php"; ?>
 <head>
  <title>Avadon - <?php echo $nome_server; ?></title>
 </head>
 <body>
  <form action="login.php" method="POST">
    <div align="center">
      <p>&nbsp;</p>
      <p align="center"><img src="./imagens/logo_avadon.png" width="190" height="60"></p>
      <p align="center"><img src="./imagens/logo.JPG" width="150" height="105"></p>
      <p align="center">Avadon - <?php echo $nome_server; ?>  </p>
    </div>
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
    <div align="center"></div>
  </form>
 </body>
</html>