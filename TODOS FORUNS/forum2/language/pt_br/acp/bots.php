<?php
/**
*
* acp_bots [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: bots.php,v 1.12 2007/10/04 15:07:24 acydburn Exp $
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
// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Gerenciar robôs',
	'BOTS_EXPLAIN'		=> 'â€œRobôâ€, â€œespiõesâ€ ou â€œcrawlersâ€ são agentes automáticos normalmente utilizados por sistemas de busca para atualizarem os bancos de dados de busca. Desde que eles raramente façam utilização de sessões, não irão alterar a contagem de usuários online. Nesta parte, você poderá definir os atributos de um robô em sua comunidade.',	'BOT_ACTIVATE'		=> 'Ativar',
	'BOT_ACTIVATE'		=> 'Ativar',
	'BOT_ACTIVE'		=> 'Robô ativo',
	'BOT_ADD'			=> 'Adicionar robô',
	'BOT_ADDED'			=> 'Novo robô adicionado com sucesso.',
	'BOT_AGENT'			=> 'Agente encontrado',
	'BOT_AGENT_EXPLAIN'	=> 'Uma frase definindo sobre o robô, pequenas partes são permitidas.',
	'BOT_DEACTIVATE'	=> 'Desativar',
	'BOT_DELETED'		=> 'Robô deletado com sucesso.',
	'BOT_EDIT'			=> 'Editar robôs',
	'BOT_EDIT_EXPLAIN'	=> 'Aqui você pode adicionar ou editar um robô existente. Você pode definir uma frase ao agente e/ou mais de um endereço IP (ou vários endereços) para coincidir. Esteja seguro quando definir endereços IP´s e frases para os agentes. Você pode também definir um idioma e um estilo para o robô quando o mesmo estiver visitando. Esta ação irá reduzir o uso de banda de seu servidor, também poderá determinar permissões ao grupo do robô.',
	'BOT_LANG'			=> 'Idioma do robô',
	'BOT_LANG_EXPLAIN'	=> 'O idioma apresentado aos robôs.',
	'BOT_LAST_VISIT'	=> 'última visita',
	'BOT_IP'			=> 'Endereço IP',
	'BOT_IP_EXPLAIN'	=> 'Palavras parciais são permitidas, separe-as com uma crase.',
	'BOT_NAME'			=> 'Nome do robô',
	'BOT_NAME_EXPLAIN'	=> 'Usado somente para sua própria informação.',
	'BOT_NAME_TAKEN'	=> 'O nome já está em uso em seu fórum e não pode ser usado por um Robô.',
	'BOT_NEVER'			=> 'Nunca',
	'BOT_STYLE'			=> 'Estilo para o robô',
	'BOT_STYLE_EXPLAIN'	=> 'O estilo utilizado pelo robô na comunidade.',
	'BOT_UPDATED'		=> 'Robô existente atualizado com sucesso.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'O agente robô que você especificou é similar ao atual. Favor ajustar o agente para este robô.',
	'ERR_BOT_NO_IP'				=> 'O endereço IP que você especificou está inválido ou o servidor não está disponível.',
	'ERR_BOT_NO_MATCHES'		=> 'Você deve entrar no mínimo um agente ou IP para este robô.',

	'NO_BOT'		=> 'Não encontrou nenhum robô com este ID.',
	'NO_BOT_GROUP'	=> 'Não foi possível encontrar o grupo especial de robô.',
));

?>
