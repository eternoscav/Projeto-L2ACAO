
<html>
<head>
</head>
<?php
 session_name('sistema');
 session_start();
 
 session_destroy();//mata a sessao
 
 session_unset();//elimina a variavel $_SESSION
 
 header("Location:index.php");
?>
</html>