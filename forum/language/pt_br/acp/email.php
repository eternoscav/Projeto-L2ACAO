<?php
/**
*
* acp_email [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.4
* @package language: Brazilian Portuguese
* @original version $Id: email.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-01-02 - 23:27
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
// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Aqui você pode enviar uma mensagem via e-mail para todos os seus usuários ou a todos os usuários de um grupo específico, <strong>que tenham a opção de receber e-mails de massa habilitada</strong>. Para fazer isto, um e-mail será enviado para o endereço de e-mail administrativo fornecido, com uma cópia de todos os e-mails enviados a todos os usuários. A configuração padrão inclui apenas 50 usuários em um e-mail, para mais usuários, mais e-mails serão enviados. Se você está enviando um e-mail para um grande grupo de pessoas, por favor, espere após o envio e não pare a página durante o processo. é normal que um envio de e-mail em massa leve um bom tempo, você será avisado quando este processo for concluído.',
	'ALL_USERS'						=> 'Todos os usuários',

	'COMPOSE'				=> 'Criar E-mail',

	'EMAIL_SEND_ERROR'		=> 'Ocorreu um ou mais erros enquanto o e-mail estava sendo enviado. Por favor, veja o %sLog de erros%s para maiores detalhes da mensagem de erro.',
	'EMAIL_SENT'			=> 'Este e-mail foi enviado.',
	'EMAIL_SENT_QUEUE'		=> 'Este e-mail está esperando para ser enviado.',

	'LOG_SESSION'			=> 'Sessão de log de e-mail para erros críticos',

	'SEND_IMMEDIATELY'		=> 'Enviar imediatamente',
	'SEND_TO_GROUP'			=> 'Enviar para o grupo',
	'SEND_TO_USERS'			=> 'Enviar para os usuários',
	'SEND_TO_USERS_EXPLAIN'	=> 'Ao adicionar nomes aqui, isto anulará qualquer grupo selecionado acima. Adicione cada nome em uma nova linha.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Alta',
	'MAIL_LOW_PRIORITY'		=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioridade do e-mail',
	'MASS_MESSAGE'			=> 'Sua mensagem',
	'MASS_MESSAGE_EXPLAIN'	=> 'Por favor, note que você deve adicionar somente texto. Todo código ou caractere será removido antes do envio.',
	
	'NO_EMAIL_MESSAGE'		=> 'Você deve escrever uma mensagem.',
	'NO_EMAIL_SUBJECT'		=> 'Você deve especificar um assunto para o seu e-mail.',
));

?>
