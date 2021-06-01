<?php
/**
*
* acp_ban [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: ban.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-13 - 15:00
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// phpBBrasil.com.br
// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 hora',
	'30_MINS'		=> '30 minutos',
	'6_HOURS'		=> '6 horas',

	'ACP_BAN_EXPLAIN'	=> 'Aqui você pode controlar o banimento de usuários por nome, por IP ou endereço de email. Estes métodos previnem que um usuário entre em qualquer parte da comunidade. Você pode fazer um pequeno texto (máximo de 3000 caracteres) com as razões pelo qual você baniu. Isto será mostrado no log de admin. A duração de um banimento também pode ser especificado. Se você quiser o termino de um banimento em uma data específica ao invés de depois de um período de tempo determinado, selecione <span style="text-decoration: underline;">Até -&gt;</span> para o tempo de banimento e entre com uma data dentro do formato <kbd>DD-MM-AAAA</kbd>.',

	'BAN_EXCLUDE'			=> 'Excluir do banimento',
	'BAN_LENGTH'			=> 'Período de banimento',
	'BAN_REASON'			=> 'Razão para banir',
	'BAN_GIVE_REASON'		=> 'Razão de banimento que será mostrada ao usuário',
	'BAN_UPDATE_SUCCESSFUL'	=> 'A lista de banimento foi atualizada com sucesso.',
	'BANNED_UNTIL_DATE'		=> 'até %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (até %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"
	
	'EMAIL_BAN'					=> 'Banir um ou mais endereços de e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Habilite esta opção para excluir os endereços de email adicionados de todos os banidos atualmente.',
	'EMAIL_BAN_EXPLAIN'			=> 'Para especificar mais que um endereço de e-mail, adicione cada um em uma nova linha. Para busca de endereços parciais, use o * como chave substituta, ex: <samp>*@hotmail.com</samp>, <samp>*@*.domínio.extensão</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Nenhum endereço de e-mail banido',
	'EMAIL_UNBAN'				=> 'Desbanir ou retirar a exclusão de e-mails',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Você pode desbanir (ou retirar a exclusão) múltiplos endereços de email de uma só vez usando uma combinação de teclado e mouse apropriada do seu computador e de seu navegador. Os endereços de e-mail excluídos estão destacados.',

	'IP_BAN'					=> 'Banir um ou mais IPs',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Habilite esta opção para excluir os IPs adicionados de todos os banidos atualmente.',
	'IP_BAN_EXPLAIN'			=> 'Para especificar vários IPs ou servidores diferentes, adicione cada um em uma nova linha. Para especificar uma série de endereços de IP, separe o começo e o termino com um hífen (-), para especificar uma chave substituta use “*”.',
	'IP_HOSTNAME'				=> 'Endereços de IP ou servidores',
	'IP_NO_BANNED'				=> 'Nenhum endereço de IP banido',
	'IP_UNBAN'					=> 'Desbanir ou retirar a exclusão de IPs',
	'IP_UNBAN_EXPLAIN'			=> 'Você pode desbanir (ou retirar a exclusão) múltiplos endereços de IP de uma só vez usando uma combinação de teclado e mouse apropriada do seu computador e de seu navegador. Os endereços de IPs excluídos estão destacados.',

    'LENGTH_BAN_INVALID'		=> 'A data deve estar no formato <kbd>AAAA-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanente',
	
	'UNTIL'						=> 'Até',
	'USER_BAN'					=> 'Banir um ou mais usuários',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Habilite esta opção para excluir os usuários adicionados de todos os banidos atualmente.',
	'USER_BAN_EXPLAIN'			=> 'Você pode banir múltiplos usuários de uma vez, adicione cada nome em uma nova linha. Use o <span style="text-decoration: underline;">Procurar um Membro</span> para buscar e adicionar um ou mais nomes de usuários automaticamente.',
	'USER_NO_BANNED'			=> 'Nenhum nome de usuário banido',
	'USER_UNBAN'				=> 'Desbanir ou retirar a exclusão de nomes de usuários',
	'USER_UNBAN_EXPLAIN'		=> 'Você pode desbanir (ou retirar a exclusão) múltiplos nomes de usuários de uma só vez usando uma combinação de teclado e mouse apropriada do seu computador e de seu navegador. Os usuários excluídos estão destacados.',


));

?>
