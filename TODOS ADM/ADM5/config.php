<?php
session_start();
include("funcoes.php");


$servidor       = "localhost"; 	//IP do servidor
$usuario        = "root";  	         	//Usuário do Sql
$senha          = "3427821";  		//Senha do Banco de Dados
$banco          = "l2acaopvp";  		//Nome do Banco de Dados
$access_account = 'accessLevel';        //Nome do campo de acesso na tabela accounts
$min_level      = '1';                  //AccessLevel mínimo para acessar o sistema


$conexao = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
mysql_select_db($banco, $conexao) or die(mysql_error());


$login_s = $_SESSION['login_donator'];
$senha_s = $_SESSION['senha_donator'];

$confirma = mysql_query("SELECT * FROM accounts WHERE login = '".$login_s."' AND password = '".$senha_s."' AND ".$access_account." >= ".$min_level."") or die(mysql_error());

$contagem = mysql_num_rows($confirma);
$row = mysql_fetch_array($confirma);
?>