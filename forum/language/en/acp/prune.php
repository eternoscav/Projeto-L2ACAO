<?php
/**
*
* acp_prune [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: prune.php,v 1.14 2007/10/04 15:07:24 acydburn Exp $
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
// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Aqui você pode excluir (ou desativar) usuários de sua comunidade. Isto pode ser feito com uma variedade de opções: por número de mensagens, última atividade, etc. Cada um destes critérios pode ser combinado, ex. você pode punir usuários que estiveram ativos apenas antes de 01-01-2002 com menos de 10 mensagens. Alternativamente você pode entrar uma lista de usuários diretamente no campo abaixo, qualquer critério entrado será ignorado. Tome cuidado com esta facilidade! Uma vez que um usuário é deletado, não tem como voltar atrás.',

	'DEACTIVATE_DELETE'			=> 'Desativar ou remover',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Escolha entre desativar os usuários ou removê-los completamente, note que não é possível reverter esta ação!',
	'DELETE_USERS'				=> 'Remover',
	'DELETE_USER_POSTS'			=> 'Remover mensagens de usuários punidos',
	'DELETE_USER_POSTS_EXPLAIN' => 'Remover mensagens feitas por usuários removidos, não terá efeito caso usuário esteja desativado.',

	'JOINED_EXPLAIN'			=> 'Entre uma data entre formato <kbd>AAAA-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Entre uma data entre formato <kbd>AAAA-MM-DD</kbd>. Entre <kbd>0000-00-00</kbd> para deletar usuários que nunca logaram, <em>Antes</em> e <em>Depois</em> as condiç&oatilde;es serão ignoradas.',

    'PRUNE_USERS_LIST'				=> 'Usuários para serem punidos',
	'PRUNE_USERS_LIST_DELETE'		=> 'Com o critério selecionado para punir usuários as seguintes contas serão removidas.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Com o critério selecionado para punir usuários, as seguintes contas serão desativas.',

    'SELECT_USERS_EXPLAIN'		=> 'Entre um nome de usuário específico aqui, eles serão usados em preferência para ser critério acima. Administradores não podem ser removidos.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Os usuários selecionados foram desativados com sucesso!',
	'USER_DELETE_SUCCESS'		=> 'Os usuários selecionados foram removidos com sucesso!',
	'USER_PRUNE_FAILURE'		=> 'Nenhum usuário preencheu os critérios.',
	
    'WRONG_ACTIVE_JOINED_DATE'	=> 'A data entrada está errada, o formato esperado é <kbd>AAAA-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Nesta página, você poderá excluir qualquer tópico que não tenha recebido novas mensagens ou visualizações dentro de um número de dias que você poderá determinar. Se você não entrar com um número, todos os tópicos serão deletados. Por padrão, isto não irá remover tópicos no qual enquetes ainda estejam ativas e também não irá remover tópicos fixos e anúncios.',

	'FORUM_PRUNE'		=> 'Limpar Fórum',

	'NO_PRUNE'			=> 'Nenhum fórum limpo',

	'SELECTED_FORUM'	=> 'Fórum selecionado',
	'SELECTED_FORUMS'	=> 'Fóruns selecionados',

	'POSTS_PRUNED'					=> 'Mensagens removidas',
	'PRUNE_ANNOUNCEMENTS'			=> 'Anúncios removidos',
	'PRUNE_FINISHED_POLLS'			=> 'Remover enquetes fechadas',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Remover tópicos com enquetes finalizadas.',
	'PRUNE_FORUM_CONFIRM'			=> 'Você tem certeza que deseja punir os fóruns selecionados com as definições especificadas? Uma vez realizada esta ação, não terá mais retorno.',
	'PRUNE_NOT_POSTED'				=> 'Dias deste sua última mensagem',
	'PRUNE_NOT_VIEWED'				=> 'Dias deste sua última visita',
	'PRUNE_OLD_POLLS'				=> 'Punir antigas enquetes',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Remover tópicos com enquetes sem votação e antigas.',
	'PRUNE_STICKY'					=> 'Remover fóruns fixos',
	'PRUNE_SUCCESS'					=> 'Limpeza de fóruns aplicadas com sucesso!',

	'TOPICS_PRUNED'		=> 'Tópicos removidos',
));

?>
