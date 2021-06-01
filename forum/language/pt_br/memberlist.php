<?php
/**
*
* memberlist [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: memberlist.php,v 1.35 2007/10/04 15:07:24 acydburn Exp $
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
	'ABOUT_USER'			=> 'Perfil',
	'ACTIVE_IN_FORUM'		=> 'Fórum mais ativo',
	'ACTIVE_IN_TOPIC'		=> 'Tópico mais ativo',
	'ADD_FOE'				=> 'Adicionar Ignorado',
	'ADD_FRIEND'			=> 'Adicionar Amigo',
	'AFTER'					=> 'Depois',

	'ALL'					=> 'Todos',

	'BEFORE'				=> 'Antes',

	'CC_EMAIL'				=> 'Enviar uma cópia deste e-mail para meu e-mail.',
	'CONTACT_USER'			=> 'Contato',

	'DEST_LANG'				=> 'Linguagem',
	'DEST_LANG_EXPLAIN'		=> 'Selecione uma linguagem apropriada (se disponível) para o receptor desta mensagem.',

	'EMAIL_BODY_EXPLAIN'	=> 'Esta mensagem será envidada como um texto plano, não será incluído nenhum HTML ou BBCode. O endereço de retorno será o seu e-mail.',
	'EMAIL_DISABLED'		=> 'Desculpe, mas todas as ações referentes a e-mail estão desativadas.',
	'EMAIL_SENT'			=> 'O e-mail foi enviado.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Esta mensagem será enviada em texto plano, não inclui nem HTML nem BBCode. Por favor, perceba que a informação do tópico já está incluso na mensagem. O endereço de retorno para esta mensagem será o seu endereço de e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Você deve inserir um e-mail válido para esta mensagem.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Você deve inserir uma mensagem para enviar o e-mail.',
	'EMPTY_MESSAGE_IM'		=> 'Você deve inserir uma mensagem para poder enviar.',
	'EMPTY_NAME_EMAIL'		=> 'Você deve inserir o nome verdadeiro do receptor da mensagem.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Você deve inserir um assunto para este e-mail.',
	'EQUAL_TO'				=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'	=> 'Use este formulário para encontrar usuários específicos. Você não precisa preencher todos os campos. Para buscas parciais, use o * (asterisco) como chave substituta. Use o formato <kbd>aaaa-mm-dd</kbd> para efetuar buscas por data, por exemplo: <samp>2004-02-29</samp>. Use a caixa de checagem para selecionar mais de um usuário (vários nomes de usuários poderão ser selecionados, dependendo do campo do formulário solicitado) e clique em Selecionar Marcados para retornar ao formulário anterior.',
	'FLOOD_EMAIL_LIMIT'		=> 'Você não pode enviar um novo e-mail agora. Por favor, aguarde alguns minutos e tente novamente mais tarde.',

	'GROUP_LEADER'			=> 'Líder do Grupo',

	'HIDE_MEMBER_SEARCH'	=> 'Ocultar busca de membros',

	'IM_ADD_CONTACT'		=> 'Adicionar contato',
	'IM_AIM'				=> 'Você necessita do AIM instalado para usar esta ferramenta.',
	'IM_AIM_EXPRESS'		=> 'AIM',
	'IM_DOWNLOAD_APP'		=> 'Baixar aplicativo',
	'IM_ICQ'				=> 'Por favor, note que os usuários selecionados podem não receber mensagens não solicitadas.',
	'IM_JABBER'				=> 'Por favor, note que os usuários selecionados não recebem mensagens não solicitadas',
	'IM_JABBER_SUBJECT'		=> 'Esta é uma mensagem automática, por favor, não responda. Mensagem do usuário %1$s em %2$s',
	'IM_MESSAGE'			=> 'Sua mensagem',
	'IM_MSNM'				=> 'Você precisa do MSN/WLM instalado para usar esta ferramenta.',
	'IM_MSNM_BROWSER'		=> 'Seu navegador não suporta este recurso.',
	'IM_MSNM_CONNECT'		=> 'MSNM não está conectado.\nVocê precisa conectar ao MSN para continuar.',
	'IM_NAME'				=> 'Seu nome',
	'IM_NO_DATA'			=> 'Não há nenhuma informação de contato satisfatória para este usuário.',
	'IM_NO_JABBER'			=> 'Você precisa do Jabber instalado para usar esta ferramenta.',
	'IM_RECIPIENT'			=> 'Destinatário',
	'IM_SEND'				=> 'Enviar mensagem',
	'IM_SEND_MESSAGE'		=> 'Enviar mensagem',
	'IM_SENT_JABBER'		=> 'Sua mensagem para %1$s foi enviada com sucesso.',
	'IM_USER'				=> 'Enviar uma mensagem instantânea',

	'LAST_ACTIVE'				=> 'última Atividade',
	'LESS_THAN'					=> 'Menos que',
	'LIST_USER'					=> '1 usuário',
	'LIST_USERS'				=> '%d usuários',
	'LOGIN_EXPLAIN_LEADERS'		=> 'O administrador do fórum requer que você seja registrado e logado para ver a Equipe Administrativa.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'O administrador do fórum requer que você seja registrado e logado para ver a Lista de Membros.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'O administrador do fórum requer que você seja registrado e logado para buscar usuários.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'O administrador do fórum requer que você seja registrado e logado para ver Perfis.',

	'MORE_THAN'				=> 'Mais que',

	'NO_EMAIL'				=> 'Você não tem permissão para enviar e-mail para este usuário.',
	'NO_VIEW_USERS'			=> 'Você não tem permissão para ver a lista de membros ou perfis.',

	'ORDER'					=> 'Ordenar',
	'OTHER'					=> 'Outro',

	'POST_IP'				=> 'Enviado por IP/Domínio',

	'RANK'					=> 'Rank',
	'REAL_NAME'				=> 'Nome do Destinatário',
	'RECIPIENT'				=> 'Destinatário',
	'REMOVE_FOE'            => 'Remover Ignorado',
	'REMOVE_FRIEND'         => 'Remover Amigo',

	'SEARCH_USER_POSTS'		=> 'Procurar Mensagens do Usuário',
	'SELECT_MARKED'			=> 'Selecionar marcados',
	'SELECT_SORT_METHOD'	=> 'Selecionar método de seleção',
	'SEND_AIM_MESSAGE'      => 'Enviar mensagem AIM',
	'SEND_ICQ_MESSAGE'      => 'Enviar mensagem ICQ',
	'SEND_IM'				=> 'Mensagens Instantâneas',
	'SEND_JABBER_MESSAGE'   => 'Enviar mensagem JABBER',
	'SEND_MESSAGE'			=> 'Mensagem',
	'SEND_MSNM_MESSAGE'     => 'Enviar mensagem MSN',
	'SEND_YIM_MESSAGE'      => 'Enviar mensagem YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'última Atividade',
	'SORT_POST_COUNT'		=> 'Número de Mensagens',

	'USERNAME_BEGINS_WITH'	=> 'Usuários que começam com',
	'USER_ADMIN'			=> 'Administrar Usuário',
	'USER_BAN'            => 'Banir',
	'USER_FORUM'			=> 'Estatísticas do Usuário',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Nenhum lembrete enviado no momento',
		1		=> '%1$d lembretes enviados<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Presença no fórum',

	'VIEWING_PROFILE'		=> 'Vendo Perfil - %s',
	'VISITED'				=> 'última visita',

	'WWW'					=> 'Website',
));

?>