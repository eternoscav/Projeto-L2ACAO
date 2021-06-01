<?php
/**
*
* viewtopic [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.3
* @package language: Brazilian Portuguese
* @original version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 kellanved Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-19 - 14:11
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
$lang = array_merge($lang, array(
	'ATTACHMENT'						=> 'Anexo',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Anexos foram desativados',

	'BOOKMARK_ADDED'		=> 'Tópico adicionado aos Favoritos.',
	'BOOKMARK_ERR'			=> 'Falha ao adicionar o tópico aos Favoritos. Por favor, tente novamente.',
	'BOOKMARK_REMOVED'		=> 'Tópico removido dos Favoritos.',
	'BOOKMARK_TOPIC'		=> 'Adicionar aos Favoritos',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Remover Tópico dos Favoritos',
	'BUMPED_BY'				=> 'último pulo por%1$s no %2$s',
	'BUMP_TOPIC'			=> 'Pular Tópico',

	'CODE'					=> 'Código',

	'COLLAPSE_QR'			=> 'Ocultar Resposta Rápida',
	
	'DELETE_TOPIC'			=> 'Excluir tópico',
	'DOWNLOAD_NOTICE'		=> 'Você não tem permissões suficientes para ver os arquivos anexados nesta mensagem.',

	'EDITED_TIMES_TOTAL'	=> 'Editado pela última vez por %1$s em %2$s, no total de %3$d vez ',
	'EDITED_TIME_TOTAL'		=> 'Editado pela última vez por %1$s em %2$s, num total de %3$d vezes',
	'EMAIL_TOPIC'			=> 'Enviar a um amigo',
	'ERROR_NO_ATTACHMENT'	=> 'O anexo selecionado não existe mais',

	'FILE_NOT_FOUND_404'	=> 'O arquivo <strong>%s</strong> não existe.',
	'FORK_TOPIC'			=> 'Copiar Tópico',
	'FULL_EDITOR'			=> 'Editor Completo',

	'LINKAGE_FORBIDDEN'		=> 'Você não está autorizado a ver o link para este site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Você foi notificado sobre este tópico, por favor, logue-se para ver.',
	'LOGIN_VIEWTOPIC'		=> 'O Administrador do Fórum requer que você esteja registrado e logado para ver este tópico.',

	'MAKE_ANNOUNCE'				=> 'Mudar para “Anúncio”',
	'MAKE_GLOBAL'				=> 'Mudar para “Anúncio Global”',
	'MAKE_NORMAL'				=> 'Mudar para “Tópico Normal”',
	'MAKE_STICKY'				=> 'Mudar para “Fixo”',
	'MAX_OPTIONS_SELECT'		=> 'Você pode selecionar acima de <strong>%d</strong> opções',
	'MAX_OPTION_SELECT'			=> 'Você pode selecionar <strong>1</strong> opção',
	'MISSING_INLINE_ATTACHMENT'	=> 'O anexo <strong>%s</strong> não está disponível',
	'MOVE_TOPIC'				=> 'Mover Tópico',

	'NO_ATTACHMENT_SELECTED'=> 'Você não selecionou um anexo para download ou para visualização.',
	'NO_NEWER_TOPICS'		=> 'Não há novos tópicos neste fórum',
	'NO_OLDER_TOPICS'		=> 'Não há tópicos antigos neste fórum',
	'NO_UNREAD_POSTS'		=> 'Não há tópicos não lidos.',
	'NO_VOTE_OPTION'		=> 'Você deve selecionar uma opção para votar.',
	'NO_VOTES'				=> 'Nenhum voto',

	'POLL_ENDED_AT'			=> 'Enquete encerrada em %s',
	'POLL_RUN_TILL'			=> 'Enquete vai até %s',
	'POLL_VOTED_OPTION'		=> 'Você votou por essa opção',
	'PRINT_TOPIC'			=> 'Visualizar Impressão',

	'QUICK_MOD'				=> 'Ferramentas para Moderação Rápida',
	'QUICKREPLY'			=> 'Resposta Rápida',
	'QUOTE'					=> 'Citação',

	'REPLY_TO_TOPIC'		=> 'Responder Tópico',
	'RETURN_POST'			=> '%sRetornar para as Mensagens%s',
	'SHOW_QR'				=> 'Resposta Rápida',

	'SUBMIT_VOTE'			=> 'Confirmar Voto',

	'TOTAL_VOTES'			=> 'Total de Votos',

	'UNLOCK_TOPIC'			=> 'Destrancar tópico',

	'VIEW_INFO'				=> 'Detalhes da Mensagem',
	'VIEW_NEXT_TOPIC'		=> 'Exibir Próximo Tópico',
	'VIEW_PREVIOUS_TOPIC'	=> 'Exibir Tópico Anterior',
	'VIEW_RESULTS'			=> 'Exibir resultados',
	'VIEW_TOPIC_POST'		=> '1 Mensagem',
	'VIEW_TOPIC_POSTS'		=> '%d Mensagens',
	'VIEW_UNREAD_POST'		=> 'Primeira mensagem não lida',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Seu voto foi feito.',
	'VOTE_CONVERTED'		=> 'A mudança de votos não são permitidas para enquetes convertidas.',

));

?>
