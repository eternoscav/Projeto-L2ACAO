<?php
/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
//Conexao
	  $conexao = "localhost";
	  $usuario = "root";
	  $senha   = "3427821";
	  $banco   = "l2acaopvp";
	  $conectar = @mysql_connect($conexao,$usuario,$senha) or die(mysql_error());
				  @mysql_select_db($banco,$conectar) or die(mysql_error());


// Configurações do Servidor!!!
  //Acess Levels
  $adm = 200;
  $gm  = 100;
  
  // Limite de enchant!
  // Com essa config vc ira olhar em vermelho os items que tem enchant maior do que vc ira definir!
  $enchant = 80;
  
  // Limite de players que irão aparecer no TOP!
  $top_pvp    = 10;
  $top_pk     = 10;
  $top_clan   = 10;
  $top_karma  = 10;
  $top_herois = 10;

/*
     CREDTIOS: William Silveira aka: WilliamArcher
     ESTE SCRIPT É SOMENTE PARA O www.l2jbrasil.com!
	 CASO PEGOU EM OUTRO FORUM DENUNCIE NO FORUM L2JBRASIL!
*/
?>
