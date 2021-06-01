<?php
/**
*
* groups [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: groups.php,v 1.22 2007/10/04 15:07:24 acydburn Exp $
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
$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'	    => 'O grupo selecionado já é seu grupo padrão.',
	'ALREADY_IN_GROUP'	        => 'Você já é um membro do grupo selecionado.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Você já solicitou a sua entrada no grupo selecionado.',

	'CANNOT_JOIN_GROUP'			=> 'Você não está autorizado a fazer parte deste grupo. Você pode apenas se inscrever em grupos abertos e de livre acesso.',
	'CANNOT_RESIGN_GROUP'		=> 'Você não está habilitado para se reinscrever neste grupo. Você pode apenas se reinscrever em grupos abertos e de livre acesso.',
	'CHANGED_DEFAULT_GROUP'		=> 'O grupo padrão foi modificado com sucesso.',

	'GROUP_AVATAR'	                    => 'Avatar do Grupo',
    'GROUP_CHANGE_DEFAULT'	            => 'Você está certo de que deseja alterar seu grupo padrão para o grupo “%s”?',
	'GROUP_CLOSED'	                    => 'Fechado',
	'GROUP_DESC'	                    => 'Descrição do Grupo',
	'GROUP_HIDDEN'	                    => 'Oculto',
	'GROUP_INFORMATION'	                => 'Informação do Grupo',
    'GROUP_IS_CLOSED'	                => 'Este é um grupo fechado, novos membros só poderão entrar através de um convite do Líder do Grupo.',
	'GROUP_IS_FREE'	                    => 'Este é um grupo livremente aberto, todos os novos membros são bem vindos.',
    'GROUP_IS_HIDDEN'	                => 'Este é um grupo oculto, apenas membros do grupo podem ver seus sócios.',
	'GROUP_IS_OPEN'	                    => 'Este é um grupo aberto, novos usuários podem se unir ao grupo.',
	'GROUP_IS_SPECIAL'	                => 'Este é um grupo especial, grupos especiais são administrados pelos Administradores do Fórum.',
    'GROUP_JOIN'	                    => 'Entrar no Grupo',
	'GROUP_JOIN_CONFIRM'	            => 'Você está certo de que deseja entrar no grupo selecionado?',
	'GROUP_JOIN_PENDING'	            => 'Solicitar a sua entrada no grupo',
	'GROUP_JOIN_PENDING_CONFIRM'	    => 'Você está certo de que deseja solicitar a sua entrada no grupo selecionado?',
	'GROUP_JOINED'	                    => 'Você foi adicionado ao grupo selecionado com sucesso.',
	'GROUP_JOINED_PENDING'	            => 'Você solicitou com sucesso a sua entrada no grupo. Por favor, espere até que o Líder do Grupo aprove você como membro.',
	'GROUP_LIST'	                    => 'Gerenciar membros',
	'GROUP_MEMBERS'	                    => 'Membros do grupo',
	'GROUP_NAME'	                    => 'Nome do grupo',
	'GROUP_OPEN'	                    => 'Aberto',
	'GROUP_RANK'	                    => 'Rank do grupo',
    'GROUP_RESIGN_MEMBERSHIP'	        => 'Cancelar sua participação no grupo',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Você tem certeza que deseja cancelar a sua participação no grupo selecionado?',
	'GROUP_RESIGN_PENDING'	            => 'Cancelar sua inscrição pendente no grupo',
	'GROUP_RESIGN_PENDING_CONFIRM'	    => 'Você tem certeza que deseja cancelar sua inscrição pendente no grupo selecionado?',
	'GROUP_RESIGNED_MEMBERSHIP'	        => 'Você foi removido com sucesso do grupo selecionado.',
	'GROUP_RESIGNED_PENDING'	        => 'Sua inscrição pendente foi removida com sucesso do grupo selecionado.',
	'GROUP_TYPE'	                    => 'Tipo do Grupo',
	'GROUP_UNDISCLOSED'	                => 'Grupo Oculto',
	'FORUM_UNDISCLOSED'	                => 'Moderando fórum(ns) oculto(s)',
	
	'LOGIN_EXPLAIN_GROUP'	=> 'Você precisa entrar para ver os detalhes deste grupo.',

	'NO_LEADERS'	                => 'Você não é moderador de nenhum grupo.',
	'NOT_LEADER_OF_GROUP'	        => 'A operação desejada não pode ser executada porque você não é moderador do grupo selecionado.',
	'NOT_MEMBER_OF_GROUP'	        => 'A operação desejada não pode ser executada porque você não é membro do grupo selecionado ou a sua participação ainda não foi aprovada.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Você não tem permissão de sair do seu grupo padrão.',

	'PRIMARY_GROUP'	    => 'Grupo Primário',

	'REMOVE_SELECTED'	    => 'Remover Selecionado',

	'USER_GROUP_CHANGE'	        => 'Do grupo “%1$s” para “%2$s”',
	'USER_GROUP_DEMOTE'	        => 'Retirar-se da Moderação do Grupo',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Você tem certeza que deseja retirar-se da moderação do grupo selecionado?',
	'USER_GROUP_DEMOTED'	    => 'Você foi retirado da moderação com sucesso.',
));

?>
