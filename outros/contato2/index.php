
<html>
<head>
<title>Formulario HTML</title>
<style type="text/css">
@import url("style.css");
body {
	background-color: #69C;
	background-image: url(bg.jpg);
}
body div p {
	color: #000000;
}
strong {
	color: #FFF;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
   <div align="center">
     <p>
       <?php
if (isset($_POST["nome"]) || isset($_POST["login"]) || isset($_POST["char"]) ||
isset($_POST["banco"]) || isset($_POST["numero"]) || isset($_POST["modo"]) ||
isset($_POST["valor"]) || isset($_POST["data"]) || isset($_POST["hora"]) ||
isset($_POST["tipo"]) || isset($_POST["email"]) || isset($_POST["comentarios"]))
{
   $nome = $_POST["nome"];
   $login = $_POST["login"];
   $char = $_POST["char"];
   $banco = $_POST["banco"];
   $numero = $_POST["numero"];
   $modo = $_POST["modo"];
   $valor = $_POST["valor"];
   $data = $_POST["data"];
   $hora = $_POST["hora"];
   $tipo = $_POST["tipo"];
   $email = $_POST["email"];
   $comentarios = $_POST["comentarios"];

$arq = fopen("data.php", "a");

     if($arq)
     {
       fputs($arq, "-----------------------------------------------------------------------------------------------
Nome = $nome
Login = $login
Char = $char
Banco = $banco
Numero do deposito = $numero
Modo de deposito = $modo
Valor da Doação = $valor
Data da Doação = $data
Hora exata da Doação = $hora
Tipo de Doação = $tipo
E-Mail de contato = $email
Comentario = $comentarios
-----------------------------------------------------------------------------------------------\r\n");

       fclose($arq);

echo "<hr></hr><table align='center'>
<tr>
<th>Seu contato foi enviado com Sucesso!!</th>
</tr>
</table>
<hr></hr>";
}
     else
     {
       echo "ERRO: Falha ao abrir o arquivo!";
     }
}
else
{
echo "";
}
?>
       <strong>CONTATO</strong></p>
     <table border="0">
       <form action="index.php" method="post">
         <tr>
           <th>Nome Completo:</th>
           <td><input type="text" name="nome" size="30" maxlength="40"></td>
         </tr>
         <tr>
           <th>Login:</th>
           <td><input type="text" name="login" size="30" maxlength="40"></td>
         </tr>
         <tr>
           <th>Char:</th>
           <td><input type="text" name="char" size="30" maxlength="40"></td>
         </tr>
         <tr>
           <th>Email ou Msn:</th>
           <td><input type="text" name="banco" size="30" maxlength="40"></td>
         </tr>
         <tr>
           <th>Data:</th>
           <td><input type="text" name="numero" size="30" maxlength="40"></td>
         </tr>
         <tr>
           <th>Horario:</th>
           <td><input type="text" name="modo" size="30" maxlength="40"></td>
         </tr>
         <tr>
           <th>Assunto:</th>
           <td><input type="text" name="valor" size="30" maxlength="40"></td>
         </tr>
         <tr>

         </tr>
         <tr>

         </tr>
         <tr>

         </tr>
         <tr>

         </tr>
         <tr>
           <th>Comentarios:</th>
           <td><textarea name="comentarios" cols="22" rows="7"></textarea></td>
         </tr>
         <tr>
           <td><center><input type="submit" value="Enviar"></center></td>
           <td><center><input type="reset" value="Resetar"></center></td>
         </tr>
       </form>
     </table>
</div>
</body>
</html>
