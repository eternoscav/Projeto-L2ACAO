<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Doador</title>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>Adicionar Novo Doador | Voltar</p>

<table width="756" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="243" align="left" valign="top"><a href="www.l2haze.com" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../imagens/2.png',1)"><img src="../imagens/1.png" name="Image1" width="282" height="101" border="0" id="Image1" /></a></td>
    <td width="506" align="center" valign="middle">
    <form id="form1" name="form1" method="post" action="enviar_doador.php">
    <table width="500" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td align="left" valign="top">Nome</td>
        <td>
          <input type="text" name="nome" id="nome" />
        </td>
      </tr>
      <tr>
        <td align="left" valign="top">Sobrenome</td>
        <td><input type="text" name="sobrenome" id="sobrenome" /></td>
      </tr>
      <tr>
        <td align="left" valign="top">Nome Char</td>
        <td><input type="text" name="nome_char" id="nome_char" /></td>
      </tr>
      <tr>
        <td align="left" valign="top">Valor</td>
        <td><input type="text" name="valor" id="valor" /></td>
      </tr>
      <tr>
        <td align="left" valign="top">Items</td>
        <td><textarea name="items" id="items" cols="25" rows="5"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="button" id="button" value="Enviar" /></td>
        <td><input type="reset" name="button2" id="button2" value="Refazer" /></td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>