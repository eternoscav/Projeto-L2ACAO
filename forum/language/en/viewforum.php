<?php
/**
*
* viewforum [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: viewforum.php,v 1.18 2007/10/04 15:07:24 acydburn Exp $
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
	'ACTIVE_TOPICS'			=> 'Tópicos Ativos',
	'ANNOUNCEMENTS'			=> 'Anúncios',
	
	'FORUM_PERMISSIONS'		=> 'Permissões do Fórum',

	'ICON_ANNOUNCEMENT'		=> 'Anúncio',
	'ICON_STICKY'			=> 'Fixo',

	'LOGIN_NOTIFY_FORUM'	=> 'Você foi notificado sobre este fórum, por favor, logue-se para poder ver.',

	'MARK_TOPICS_READ'		=> 'Marcar tópicos como lidos',

	'NEW_POSTS_HOT'			=> 'Novas Mensagens [ Popular ]',
	'NEW_POSTS_LOCKED'		=> 'Novas Mensagens [ Fechado ]',
	'NO_NEW_POSTS_HOT'		=> 'Sem Novas Mensagens [ Popular ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Sem Novas Mensagens  [ Fechado ]',
	'NO_READ_ACCESS'		=> 'Você não tem permissão para ler tópicos neste fórum.',

	'POST_FORUM_LOCKED'		=> 'O fórum está fechado',

	'TOPICS_MARKED'			=> 'Os tópicos deste fórum foram marcados como lidos',

	'VIEW_FORUM'			=> 'Ver Fórum',
	'VIEW_FORUM_TOPIC'		=> '1 tópico',
	'VIEW_FORUM_TOPICS'		=> '%d tópicos',
));

?>
