<?php

$TABLE["access"] = "accessLevel";     ## nome do campo de access na tabela accounts
$TABLE["accounts"] = "accounts";      ## nome da tabela de accounts

$DATABASE["host"] = "localhost";      ## host do database do server
$DATABASE["usuario"] = "root";        ## nome do usuario
$DATABASE["senha"] = "3427821";          ## senha
$DATABASE["nome"] = "l2acaopvp";    ## nome do database

####################################################
######## Não altere desta linha para baixo #########
####################################################

$db = mysql_connect($DATABASE["host"],$DATABASE["usuario"],$DATABASE["senha"]) or die ("Database nao conectada!");
$dados = mysql_select_db($DATABASE["nome"],$db) or die ("Nome do database incorreto!");

define('BLOCK','BLOCK');
?>