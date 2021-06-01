<?php
/**
*
* posting [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.2
* @package language: Brazilian Portuguese
* @original version $Id: posting.php,v 1.74 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-02-27 - 15:48
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
	'ADD_ATTACHMENT'			=> 'Anexar arquivo',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Se você desejar anexar mais de um arquivo, entre com os detalhes abaixo',
	'ADD_FILE'					=> 'Adicionar um arquivo',
	'ADD_POLL'					=> 'Criar uma Enquete',
	'ADD_POLL_EXPLAIN'			=> 'Se você não deseja criar uma enquete para esta mensagem deixe estes campos em branco',
	'ALREADY_DELETED'			=> 'Desculpe, mas essa mensagem já foi deletada.',
	'ATTACH_QUOTA_REACHED'		=> 'Desculpe, mais o limite de uploads do fórum já chegou ao máximo.',
	'ATTACH_SIG'				=> 'Anexar assinatura (assinaturas podem ser modificadas no Painel de Controle do Usuário)',

	'BBCODE_A_HELP'				=> 'Fechar todas as TAGs de BBCode abertas',
	'BBCODE_B_HELP'				=> 'Texto em negrito: [b]texto[/b]',
	'BBCODE_C_HELP'				=> 'Mostrar Código: [code]código[/code]',
	'BBCODE_E_HELP'				=> 'Lista: Adicionar uma lista de elementos',
	'BBCODE_F_HELP'				=> 'Tamanho da Fonte: [size=85]Texto pequeno[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s está <em>desligado</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s está <em>ligado</em>',
	'BBCODE_I_HELP'				=> 'Texto em Itálico: [i]texto em itálico[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list]texto[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listar item: [*]texto[/*]',
	'BBCODE_O_HELP'				=> 'Lista Ordenada: [list=]texto[/list]',
	'BBCODE_P_HELP'				=> 'Inserir imagem: [img]http://url_da_imagem[/img]',
	'BBCODE_Q_HELP'				=> 'Citar texto: [quote]texto[/quote]',
	'BBCODE_S_HELP'				=> 'Cor da Fonte: [color=red]texto em cor vermelha[/color]  Dica: Você também pode usar color=#FF0000',
	'BBCODE_U_HELP'				=> 'Texto Sublinhado: [u]texto[/u]',
	'BBCODE_W_HELP'				=> 'Inserir URL: [url]http://url[/url] ou [url=http://url]Texto da URL[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=altura,largura]http://www.exemplo.com.br/exemplo.swf[/flash]',
	'BUMP_ERROR'				=> 'Você não pode enviar mensagens neste tópico tão cedo depois da última mensagem.',

	'CANNOT_DELETE_REPLIED'		=> 'Desculpe, você pode apenas excluir mensagens que não foram respondidas.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'A mensagem foi trancada. Você não pode mais editar aquela mensagem.',
	'CANNOT_EDIT_TIME'			=> 'Você não pode mais editar ou excluir esta mensagem',
	'CANNOT_POST_ANNOUNCE'		=> 'Desculpe, mas você não pode enviar anúncios.',
	'CANNOT_POST_STICKY'		=> 'Desculpe, mas você não pode enviar tópicos como Fixo.',
	'CHANGE_TOPIC_TO'			=> 'Mudar tipo do tópico para',
	'CLOSE_TAGS'				=> 'Fechar Tags',
	'CURRENT_TOPIC'				=> 'Tópico Atual',

	'DELETE_FILE'				=> 'Excluir arquivo',
	'DELETE_MESSAGE'			=> 'Excluir mensagem',
	'DELETE_MESSAGE_CONFIRM'	=> 'Tem certeza que deseja excluir esta mensagem?',
	'DELETE_OWN_POSTS'			=> 'Desculpe, mas você pode apenas excluir suas próprias mensagens.',
	'DELETE_POST_CONFIRM'		=> 'Você tem certeza que deseja excluir esta mensagem?',
	'DELETE_POST_WARN'			=> 'Uma vez deletada a mensagem não pode ser mais recuperada',
	'DISABLE_BBCODE'			=> 'Desativar BBCode',
	'DISABLE_MAGIC_URL'			=> 'Não converter URL\'s em links automaticamente.',
	'DISABLE_SMILIES'			=> 'Desativar Smilies',
	'DISALLOWED_CONTENT'      => 'O upload foi rejeitado pois o arquivo enviado foi identificado como um possível vetor de ataque.',
	'DISALLOWED_EXTENSION'		=> 'A extensão %s não é permitida',
	'DRAFT_LOADED'				=> 'Rascunho carregado em sua área de postagem. Você pode querer terminar sua mensagem agora.<br />Seu rascunho será deletado após o envio de sua mensagem.',
	'DRAFT_LOADED_PM'			=> 'Rascunho carregado dentro da sua área particular, você deve querer terminar sua mensagem privada agora.<br />Seu rascunho será deletado após você ter enviado ele como uma mensagem privada a outro usuário.',
	'DRAFT_SAVED'				=> 'Rascunho salvo com sucesso.',
	'DRAFT_TITLE'				=> 'Título do rascunho',

	'EDIT_REASON'				=> 'Razão para editar esta mensagem',
	'EMPTY_FILEUPLOAD'			=> 'O arquivo carregado está vazio',
	'EMPTY_MESSAGE'				=> 'VocÃª tem que digitar uma mensagem para enviar.', // Utilizei o caractere Ãª pois ele não aceitou o código ê no IE
	'EMPTY_REMOTE_DATA'			=> 'O arquivo não pôde ser carregado, por favor, faça isso manualmente.',

	'FLASH_IS_OFF'				=> '[flash] está <em>desligado</em>',
	'FLASH_IS_ON'				=> '[flash] está <em>ligado</em>',
	'FLOOD_ERROR'				=> 'Você não pode enviar mensagens tão cedo depois da última mensagem.',
	'FONT_COLOR'				=> 'Cor da Fonte',
	'FONT_COLOR_HIDE'			=> 'Ocultar cor de fonte',
	'FONT_HUGE'					=> 'Enorme',
	'FONT_LARGE'				=> 'Grande',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Tamanho da Fonte',
	'FONT_SMALL'				=> 'Pequena',
	'FONT_TINY'					=> 'Minúscula',

	'GENERAL_UPLOAD_ERROR'		=> 'Não foi possível carregar o arquivo para %s',

	'IMAGES_ARE_OFF'			=> '[img] está <em>desligado</em>',
	'IMAGES_ARE_ON'				=> '[img] está <em>ligado</em>',
	'INVALID_FILENAME'			=> '%s é um nome de arquivo inválido',

	'LOAD'						=> 'Carregar',
	'LOAD_DRAFT'				=> 'Carregar Rascunho',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aqui você pode escolher os rascunhos que deseja continuar escrevendo. Sua mensagem atual será cancelada, e todo o conteúdo da mesma será deletada. Veja, edite e delete rascunhos por meio do seu Painel de Controle do Usuário.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Você precisa entrar para poder pular seu tópico para outra colocação.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Você precisa estar logado para poder remover mensagens neste fórum.',
	'LOGIN_EXPLAIN_POST'		=> 'Você precisa entrar para enviar mensagens neste fórum',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Você precisa estar logado para poder citar neste fórum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Você precisa entrar para responder tópicos neste fórum',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Você pode apenas usar tamanhos de fonte abaixo de %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Seus filmes de flash pode no máximo ter %1$d pixels de altura.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Seus filmes de flash pode no máximo ter %1$d pixels de largura.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Suas imagens pode ter no máximo %1$d pixels de altura.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Suas imagens pode ter no máximo %1$d pixels de largura.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Escreva sua mensagem aqui, ela não pode conter mais do que <strong>%d</strong> caracteres.',
	'MESSAGE_DELETED'			=> 'Sua mensagem foi deletada',
	'MORE_SMILIES'				=> 'Ver mais smilies',

	'NOTIFY_REPLY'				=> 'Envie-me um e-mail quando minha mensagem for respondida',
	'NOT_UPLOADED'				=> 'Arquivo não pôde ser carregado.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Você não pode excluir opções de enquetes existentes',
	'NO_PM_ICON'                => 'Nenhum',
	'NO_POLL_TITLE'				=> 'Você tem que entrar com o nome da enquete',
	'NO_POST'					=> 'O post desejado não existe.',
	'NO_POST_MODE'				=> 'Nenhum modo do post especificado',

	'PARTIAL_UPLOAD'			=> 'O arquivo foi carregado parcialmente',
	'PHP_SIZE_NA'				=> 'O tamanho do anexo é muito grande.<br />Não pôde definir o tamanho máximo no php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'O tamanho do anexo é muito grande, o tamanho máximo é de %1$d %2$s MB.<br />Note que isto é definido em php.ini.',
	'PLACE_INLINE'				=> 'Colocar na linha',
	'POLL_DELETE'				=> 'Excluir enquete',
	'POLL_FOR'					=> 'Permitir votos na enquete até',
	'POLL_FOR_EXPLAIN'			=> 'Digite 0 ou deixe em branco para que a enquete não tenha um fim.',
	'POLL_MAX_OPTIONS'			=> 'Opções por usuário',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Este é o número de opções que o usuário deve selecionar.',
	'POLL_OPTIONS'				=> 'Opções da enquete',
	'POLL_OPTIONS_EXPLAIN'		=> 'Coloque cada opção em uma nova linha. Você deve adicionar até <strong>%d</strong> opções.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Coloque cada opção em uma nova linha. Você deve adicionar até <strong>%d</strong> opções. Se você remover ou adicionar opções todos os votos anteriores serão resetados.',
	'POLL_QUESTION'				=> 'Pergunta da enquete',
	'POLL_TITLE_TOO_LONG'		=> 'O título da enquete deve conter menos de 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'O tamanho do título de sua enquete é muito grande, remove bbcodes ou smilies para tentar diminuir o tamanho.',
	'POLL_VOTE_CHANGE'			=> 'Permitir votar de novo',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Se ativado, permitirá que os usuários mudem seus votos.',
	'POSTED_ATTACHMENTS'		=> 'Anexos enviados',
	'POST_APPROVAL_NOTIFY'		=> 'Você será notificado quando sua mensagem for aprovada.',
	'POST_CONFIRMATION'			=> 'Confirmação da Postagem',
	'POST_CONFIRM_EXPLAIN'		=> 'Para não criar posts automatizados o Administrador requer que você digite um código de confirmação. O código é mostrado na imagem abaixo. Se você tem problemas de visão ou por qualquer outro motivo você não consegue ler o código, entre em contato com o %sAdministrador do Fórum%s.',
	'POST_DELETED'				=> 'Esta mensagem foi deletada com sucesso',
	'POST_EDITED'				=> 'Esta mensagem foi editada com sucesso',
	'POST_EDITED_MOD'			=> 'Esta mensagem foi editada com sucesso, mas precisará ser aprovada por um moderador antes de ser visualizada publicamente.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'ícone de Mensagem',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revisar mensagem',
	'POST_REVIEW_EDIT'			=> 'Revisar Mensagem',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Esta mensagem foi alterada por outro usuário enquanto voce estava editando o mesmo. Voce deve querer rever as alterações feitas para alterar sua mensagem.',
	'POST_REVIEW_EXPLAIN'		=> 'Pelo menos uma mensagem nova foi feita neste tópico. Você pode desejar revisar sua mensagem levando em isto conta.',
	'POST_STORED'				=> 'Sua mensagem foi enviada com sucesso',
	'POST_STORED_MOD'			=> 'Esta mensagem foi enviada com sucesso, mas precisará ser aprovada por um moderador antes de ser visualizada publicamente.',
	'POST_TOPIC_AS'				=> 'Postar o tópico como',
	'PROGRESS_BAR'				=> 'Barra de Progresso',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Você pode colocar citações dentro de outras apenas %1$d vezes.',

	'SAVE'						=> 'Salvar',
	'SAVE_DATE'					=> 'Salvo em',
	'SAVE_DRAFT'				=> 'Salvar Rascunho',
	'SAVE_DRAFT_CONFIRM'		=> 'Por favor, note que o rascunho salvará apenas o Assunto e a mensagem do tópico, qualquer outro elemento será removido. Você quer salvar seu rascunho agora?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies estão <em>desligados</em>',
	'SMILIES_ARE_ON'			=> 'Smilies estão <em>ligados</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tempo limite para o tópico Fixo/Anúncio',
	'STICK_TOPIC_FOR'			=> 'Fixar este tópico para',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Entre 0 ou deixe em branco para nunca remover o tópico Fixo/Anúncio. Note que este número é relativo a data da mensagem',
	'STYLES_TIP'				=> 'Dica: Estilos podem ser aplicados rapidamente nos textos',

	'TOO_FEW_CHARS'				=> 'Sua mensagem tem poucos caracteres.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Sua mensagem contém %1$d caracteres. O número mínimo de caracteres a ser inserido é %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Você tem que entrar com pelo menos duas opções para a enquete',
	'TOO_MANY_ATTACHMENTS'		=> 'Você não pode adicionar outro anexo, %d é o máximo permitido.',
	'TOO_MANY_CHARS'			=> 'Sua mensagem contém muitos caracteres.',
	'TOO_MANY_CHARS_POST'		=> 'Sua mensagem contém %1$d caracteres. O número máximo de caracteres permitidos é %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Sua assinatura contém %1$d caracteres. O número máximo de caracteres permitidos é %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Você tentou adicionar muitas opções na enquete',
	'TOO_MANY_SMILIES'			=> 'Sua mensagem contém muitos Smilies. Um máximo de smilies permitidos é de %d.',
	'TOO_MANY_URLS'				=> 'Sua mensagem contém muitas URL\'s. Um máximo de URL permitidas é de %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Você não pode especificar tantas opções na enquete',
	'TOPIC_BUMPED'				=> 'O tópico subiu com sucesso.',

	'UNAUTHORISED_BBCODE'		=> 'Você não pode usar os seguintes BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Para voltar este tópico como normal, você precisa selecionar o fórum em que você deseja exibir este tópico.',
	'UPDATE_COMMENT'			=> 'Atualizar comentário',
	'URL_INVALID'				=> 'A URL especificada é invalida.',
	'URL_NOT_FOUND'				=> 'O arquivo especificado não pôde ser encontrado.',
	'URL_IS_OFF'				=> '[url] está <em>desligada</em>',
	'URL_IS_ON'					=> '[url] está <em>ligada</em>',
	'USER_CANNOT_BUMP'			=> 'Você não pode mesclar tópicos neste fórum.',
	'USER_CANNOT_DELETE'		=> 'Você não pode excluir tópicos neste fórum.',
	'USER_CANNOT_EDIT'			=> 'Você não pode editar tópicos neste fórum.',
	'USER_CANNOT_REPLY'			=> 'Você não pode responder tópicos neste fórum.',
	'USER_CANNOT_FORUM_POST'	=> 'Você não pode enviar mensagens neste fórum pois este tipo de fórum não suporta isto.',

	'VIEW_MESSAGE'				=> '%sVer sua mensagem enviada%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVer sua mensagem privada enviada%s',

	'WRONG_FILESIZE'			=> 'Este arquivo é muito grande, o tamanho máximo permitido é de %1d %2s.',
	'WRONG_SIZE'				=> 'A imagem precisa ter pelo menos %1$d pixels de largura e %2$d pixels de altura, e no máximo %3$d pixels de largura e %4$d pixels de altura. A imagem especificada tem %5$d pixels de largura e %6$d pixels de altura.',
));

?>
