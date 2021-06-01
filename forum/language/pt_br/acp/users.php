<?php
/**
*
* acp_users [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.1
* @package language: Brazilian Portuguese
* @original version $Id: users.php,v 1.32 2007/10/08 14:38:26 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-02-27 - 15:30
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
	'ADMIN_SIG_PREVIEW'		=> 'Prever assinatura',
	'AT_LEAST_ONE_FOUNDER'	=> 'Você não está autorizado a mudar este fundador a um usuário normal. Precisará ser pelo menos um fundador habilitado para esta ação. Se você quer mudar o status do fundador, promova outro usuário a fundador primeiramente.',

    'BAN_ALREADY_ENTERED'	=> 'O banimento entrado foi realizado com sucesso. A lista de ban ainda não foi atualizada.',
	'BAN_SUCCESSFUL'		=> 'Banimento entrada com sucesso.',

	'CANNOT_BAN_FOUNDER'			=> 'Você não tem permissão para banir fundadores.',
	'CANNOT_BAN_YOURSELF'			=> 'Você não tem permissão para banir sua própria conta.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Você não tem permissão para desativar contas de robôs. Desative o robô ao invés de excluir.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Você não tem permissão para desativar contas de fundadores.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Você não tem permissão para desativar sua própria conta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Você não tem permissão para forçar a re-ativação de robôs. Desative o robô apenas.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Você não tem permissão para re-ativar a conta de um fundador.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Você não tem permissão para re-ativar sua própria conta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Você não está apto de remover a conta de convidado',
	'CANNOT_REMOVE_YOURSELF'		=> 'Você não tem permissão para remover sua própria conta de usuário.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Você não está apto de promover usuários ignorados para serem fundadores.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Você precisa ativar usuários antes de promover eles a fundadores, somente usuários ativados podem ser promovidos.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Você só precisa especificar isto se você está mudando o endereço de email do usuário.',

	'DELETE_POSTS'			=> 'Excluir mensagens',
	'DELETE_USER'			=> 'Excluir usuário',
	'DELETE_USER_EXPLAIN'	=> 'Favor considerar que, deletando um usuário será permanente, ele não poderá ser recuperado',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Re-ativação forçada realizada com sucesso.',
	'FOUNDER'						=> 'Fundador',
	'FOUNDER_EXPLAIN'				=> 'Fundadores tem todas permissões de administradores e nunca poderão ser banidos, deletados ou terem suas contas alteradas por não fundadores.',

	'GROUP_APPROVE'					=> 'Membro aprovado',
	'GROUP_DEFAULT'					=> 'Fazer grupo padrão para membro',
	'GROUP_DELETE'					=> 'Remover membro de um grupo',
	'GROUP_DEMOTE'					=> 'Retirar moderador de grupo',
	'GROUP_PROMOTE'					=> 'Promover a moderador de grupo',

	'IP_WHOIS_FOR'			=> 'IP whois para %s',

	'LAST_ACTIVE'			=> 'último login',

	'MOVE_POSTS_EXPLAIN'	=> 'Favor selecionar o fórum para qual você deseja mover todas mensagens que este usuário realizou.',

	'NO_SPECIAL_RANK'		=> 'Nenhum rank especial determinado',
	'NO_WARNINGS'			=> 'Sem avisos.',
	'NOT_MANAGE_FOUNDER'	=> 'Você tentou gerenciar um usuário com status de fundador. Somente fundadores estão permitidos para gerenciar outros fundadores.',

	'QUICK_TOOLS'			=> 'Ferramentas rápidas',

	'REGISTERED'			=> 'Registrado',
	'REGISTERED_IP'			=> 'Registrado IP de',
	'RETAIN_POSTS'			=> 'Reter mensagens',

	'SELECT_FORM'			=> 'Selecionar formulário',
	'SELECT_USER'			=> 'Selecionar usuário',

	'USER_ADMIN'					=> 'Administração de Usuário',
	'USER_ADMIN_ACTIVATE'			=> 'Ativar conta',
	'USER_ADMIN_ACTIVATED'			=> 'Usuário ativado com sucesso.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Removido com sucesso o avatar do usuário.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Banir por email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Email banido via Gerência de Usuário',
	'USER_ADMIN_BAN_IP'				=> 'Banir por IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Ip banido via Gerência de Usuário',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Usuário banido via Gerência de Usuário',
	'USER_ADMIN_BAN_USER'			=> 'Banir por nome de usuário',
	'USER_ADMIN_DEACTIVATE'			=> 'Desativar conta',
	'USER_ADMIN_DEACTIVED'			=> 'Usuário desativado com sucesso.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Remover todos anexos',
	'USER_ADMIN_DEL_AVATAR'			=> 'Remover avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Esvaziar caixa de saída das MP',
	'USER_ADMIN_DEL_POSTS'			=> 'Remover todas mensagens',
	'USER_ADMIN_DEL_SIG'			=> 'Remover assinatura',
	'USER_ADMIN_EXPLAIN'			=> 'Aqui você será capaz de modificar suas informações de usuário e certas opções específicas.',
	'USER_ADMIN_FORCE'				=> 'Forçar re-ativação',
	'USER_ADMIN_LEAVE_NR'			=> 'Remover de recém registrados',
	'USER_ADMIN_MOVE_POSTS'			=> 'Mover todas mensagens',
	'USER_ADMIN_SIG_REMOVED'		=> 'Assinatura removida com sucesso.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Removido todos anexos deste usuário.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'O avatar não pode ser mostrado porque os avatares estão desabilitados.',
	'USER_AVATAR_UPDATED'			=> 'Detalhes do avatar atualizados com sucesso.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'O avatar atual não pode ser mostrado porque o mesmo foi desabilitado.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil personalizados',
	'USER_DELETED'					=> 'Usuário removido com sucesso.',
	'USER_GROUP_ADD'				=> 'Adicionar usuário ao grupo',
	'USER_GROUP_NORMAL'				=> 'O usuário definido nos grupos de usuário são um membro de',
	'USER_GROUP_PENDING'			=> 'Entrada de usuário em grupo está pendente',
	'USER_GROUP_SPECIAL'			=> 'Os grupos de usuário pré-definidos são um membro de',
	'USER_LIFTED_NR'				=> 'Removido com sucesso o rank de usuário recém registrado.',
	'USER_NO_ATTACHMENTS'			=> 'Não há nenhum arquivo anexado para exibir.',
	'USER_OUTBOX_EMPTIED'			=> 'Esvaziada com sucesso a caixa de saída do usuário.',
	'USER_OUTBOX_EMPTY'				=> 'A caixa de saída do usuário já estava limpa.',
	'USER_OVERVIEW_UPDATED'			=> 'Detalhes do usuário atualizado.',
	'USER_POSTS_DELETED'			=> 'Removido com sucesso todas as mensagens deste usuário.',
	'USER_POSTS_MOVED'				=> 'Movido com sucesso todas as mensagens deste usuário ao fórum alvo.',
	'USER_PREFS_UPDATED'			=> 'Preferências de usuário atualizadas.',
	'USER_PROFILE'					=> 'Perfil do usuário',
	'USER_PROFILE_UPDATED'			=> 'Perfil do usuário atualizado.',
	'USER_RANK'						=> 'Rank',
	'USER_RANK_UPDATED'				=> 'Rank atualizado com sucesso.',
	'USER_SIG_UPDATED'				=> 'Assinatura atualizada com sucesso.',
	'USER_WARNING_LOG_DELETED'		=> 'Nenhuma informação disponível. Possívelmente o log foi deletado.',
	'USER_TOOLS'					=> 'Ferramentas Básicas',
));

?>
