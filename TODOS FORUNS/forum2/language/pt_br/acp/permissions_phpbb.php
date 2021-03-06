<?php
/**
* acp_permissions (phpBB Permission Set) [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.1
* @package language: Brazilian Portuguese
* @original version $Id: permissions_phpbb.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
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
/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'A????es',
		'content'		=> 'Conte??do',
		'forums'		=> 'F??runs ',
		'misc'			=> 'Variado',
		'permissions'	=> 'Permiss??es',
		'pm'			=> 'Mensagens Privadas',
		'polls'			=> 'Enquetes',
		'post'			=> 'Mensagem',
		'post_actions'	=> 'A????es em mensagem',
		'posting'		=> 'Postando',
		'profile'		=> 'Perfil',
		'settings'		=> 'Configura????es',
		'topic_actions'	=> 'A????es em t??picos',
		'user_group'	=> 'Usu??rios &amp; Grupos',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Permiss??es de Usu??rio',
		'a_'			=> 'Permiss??es de Administrador',
		'm_'			=> 'Permiss??es de Moderador',
		'f_'			=> 'Permiss??es de F??rum',
		'global'		=> array(
			'm_'			=> 'Permiss??es de Moderador Global',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Pode ver perfis, lista de membros e lista de usu??rios online', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Pode mudar o usu??rio', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Pode mudar a senha', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Pode mudar o endere??o de email', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Pode mudar o avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Pode mudar o grupo padr??o', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Pode anexar arquivos', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Pode fazer download de arquivos', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Pode salvar rascunhos', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Pode desabilitar censura de palavras', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Pode usar assinaturas', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Pode enviar mensagens privadas', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Pode enviar mensagens para m??ltiplos usu??rios', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Pode enviar mensagens para grupos', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Pode ler mensagens privadas', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Pode editar suas pr??prias mensagens privadas', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Pode remover mensagens privadas de sua pasta', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Pode encaminhar mensagens privadas', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Pode enviar mensagens privadas por e-mail', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Pode imprimir mensagens privadas', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Pode anexar arquivos em mensagens privadas', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Pode realizar downloads de arquivos em mensagens privadas', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Pode usar BBCode em mensagens particulares', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Pode usar smilies em mensagens particulares', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Pode usar [img] BBCode tag em mensagens particulares', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Pode usar [flash] BBCode tag em mensagens particulares', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Pode enviar e-mails', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Pode enviar mensagens instant&acirc;neas', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Pode ignorar o limite de Flood', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Pode ficar oculto', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Pode ver usu??rios invis??veis', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Pode fazer buscas pelo f??rum', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Pode ver o f??rum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Pode ler o f??rum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Pode criar t??picos', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Pode responder t??picos', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Pode usar ??cones em mensagens/t??picos', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Pode permitir an??ncios', 'cat' => 'post'),
      'acl_f_sticky'    => array('lang' => 'Pode enviar t??picos fixos', 'cat' => 'post'),
	'acl_f_poll'		=> array('lang' => 'Pode criar enquetes', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Pode votar em enquetes', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Pode mudar o voto', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Pode anexar arquivos', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Pode baixar arquivos', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Pode usar assinaturas', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Pode usar BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Pode usar smilies', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Pode usar [img] BBCode tag', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Pode usar [flash] BBCode tag', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Pode editar seus t??picos', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Pode excluir suas mensagens', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Pode bloquear seus t??picos', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Pode pular t??picos', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Pode notificar mensagens', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Pode observar t??picos', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Pode imprimir t??picos', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Pode enviar t??picos por email', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Pode pesquisar no f??rum', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Pode ignorar o limite de flood', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Aumentar o contador de mensagens <br /><em>Por favor, note que esta altera????o apenas afeta as novas mensagens</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Pode enviar uma mensagem sem aprova????o', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Pode editar mensagens', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Pode excluir mensagens', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Pode aprovar mensagens', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Pode fechar e excluir notifica????es de mensagens', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Pode mudar o autor da mensagem', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Pode mover t??picos', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Pode bloquear t??picos', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Pode dividir t??picos', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Pode unir t??picos', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Pode ver detalhes da mensagem', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Pode emitir advert??ncias<br /><em>Esta configura????o s?? ?? nomeada globalmente. N??o ?? baseada em f??rum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Pode administrar banimentos<br /><em>Esta configura????o s?? ?? nomeada globalmente. N??o ?? baseada em f??rum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Pode alterar configura????es do f??rum/checar atualiza????es', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Pode alterar configura????es de Servidor', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Pode alterar as configura????es do Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Pode ver as configura????es do php', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Pode gerenciar f??runs', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Pode adicionar f??runs', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Pode excluir f??runs', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Pode limpar f??runs', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Pode alterar ??cones em mensagens/t??picos e smilies', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Pode alterar censuras de palavras ', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Pode definir Tag\'s de BBCode ', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Pode alterar configura????es de anexo', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Pode gerenciar usu??rios<br /><em>Isto tamb??m inclui ver o agente de browser dos usu??rios dentro da lista de usu??rios online.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Pode excluir/remover usu??rios', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Pode gerenciar grupos', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Pode adicionar novos grupos', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Pode excluir grupos', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Pode gerenciar ranks', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Pode gerenciar campos do perfil', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Pode gerenciar nomes proibidos', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Pode gerenciar banimentos', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Pode ver permiss??es de m??scara', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Pode alterar permiss??es individuais de grupos', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Pode altera permiss??es individuais de usu??rios', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Pode alterar classe de permiss??o do f??rum', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Pode alterar permiss??o de classe do moderador', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Pode alterar permiss??o de classe do administrador', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Pode alterar permiss??o de classe do usu??rio', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Pode gerenciar regras', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Pode usar outras permiss??es', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Pode gerenciar estilos', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Pode visualizar logs', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Pode limpar logs', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Pode gerenciar m??dulos', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Pode gerenciar pacotes de idiomas', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Pode enviar email em massa', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Pode gerenciar rob??s', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Pode gerenciar raz??es de notifica????o/proibi????o', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Pode salvar/restaurar backup', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Pode gerenciar termina????es de busca e defini????es', 'cat' => 'misc'),
));

?>
